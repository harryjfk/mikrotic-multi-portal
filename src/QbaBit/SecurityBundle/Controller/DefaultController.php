<?php

namespace QbaBit\SecurityBundle\Controller;

use QbaBit\CoreBundle\Controller\Base\QbaBitBaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends QbaBitBaseController
{
    public function getRepository()
    {
        return $this->get("doctrine.orm.default_entity_manager")->getRepository("QbaBitSecurityBundle:SecurityUser");
    }
    public function rememberAction(Request $request)
    {

        try {
            $email = $request->get('email');
            $type = $request->get('type');
            $object = $this->getRepository()->findOneBy(array('email' => $email));
            $rememb = $type == 1 ? $this->generateUrl('qba_bit_security_admin_recovery_confirm', array('hash' => base64_encode($email))) : $this->generateUrl('qba_bit_security_confirm', array('hash' => base64_encode($email)));

            if($rememb[0]=="/")
                $rememb= substr($rememb,1);
            $this->get('qba_bit_mail.sender')->System('password_remember', array('remember_url' => $rememb, 'customer_fullname' => $object->getFullName()), $email);

            $result["error"] = 0;
            $result['msg'] = $this->get('translator')->trans('qba_bit.security.login.recovery.sent');


        } catch (\Exception $e) {
            $result["error"] = 1;
            $result['msg'] = $e->getMessage();

        }
        return new JsonResponse($result);
    }

    public function navAction(Request $request)
    {
//        return $this->render('QbaBitSecurityBundle:Default:nav.html.twig', array());
    }

    public function registerAction(Request $request)
    {
//        $user = new SecurityUser();
//        $form = $this->createForm('QbaBit\SecurityBundle\Form\FrontEnd\UserType', $user, array('csrf_protection' => false));
//        if ($form->handleRequest($request) && $form->isValid()) {
//            $user->setEnabled(false);
//
//            $url = $this->generateUrl('qbabit_security_activate', array('hash' => base64_encode($user->getEmail())));
//
//            $this->get('qbabit.mail.sender')->System('system_registration', array('activate_url' => $url, 'object' => $user, 'password' => $user->getPassword()), $user->getEmail());
//            $this->saveUser($user);
//            //  $this->get('qbabit.mail.sender')->System('system_registration', array('customer_fullname' => $user->getFullName(), 'customer_user' => $user->getEmail(), 'customer_password' => $user->getPassword()), $user->getEmail());
//            $config = $this->get('qbabit_core.global.config')->getUsableConfig();
//            $r = ($config['core']['frontend']['routes']['default']);
//            return $this->redirectToRoute($r['url'], $r['params']);
//        }
//
//        return $this->render('QbaBitSecurityBundle:Default:register.html.twig', array(
//            'form' => $form->createView()
//        ));
    }

    public function profileEditAction(Request $request, $id)
    {
//        $user = $this
//            ->get('qbabit.repository.security.user')->find($id);
//        $passOriginalDb = $user->getPassword();
//        $form = $this->createForm('QbaBit\SecurityBundle\Form\FrontEnd\UserType', $user, array('csrf_protection' => false));
//        $result = array('return' => 0, 'msg' => $this->get('translator')->trans('qbabit.common.error.success'));
//        $form->handleRequest($request);
//        $password = $user->getPassword() != null;
//        if ($user->getPassword() == null)
//
//            $user->setPassword($passOriginalDb);
//        if ($form->isValid()) {
//            $this->saveUser($user, $password);
//        } else {
//            $result['return'] = 1;
//            $result['msg'] = $this->get('translator')->trans('qbabit.common.error.error');
//        }
//
//
//        return new JsonResponse($result);

    }

    private function saveUser($user, $password = true)
    {
//        $web = $this->get('qbabit_core.global.config')->getConfigValue('qba_bit_security.uploads.web');
//        $dir = $this->get('qbabit_core.global.config')->getConfigValue('qba_bit_security.uploads.dir');
//
//        $user->doUpload($dir, $web);
//
//        if ($password)
//            $this->get('qbabit.manager.user')->setUserPassword($user, $user->getPassword());
//        $em = $this->get('doctrine.orm.default_entity_manager');
//        $em->persist($user);
//        $em->flush();

    }

    public function loginAction(Request $request)
    {

       // $useGuest = $this->container->get('qbabit.manager.store')->getUseGuest();
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();

        if ($error != null) {
            $c = get_class($error);
            $t = explode('\\', $c);
            $c = str_replace('exception', '', strtolower($t[count($t) - 1]));
            $error = $this->get('translator')->trans('qba_bit.security.login.alert.error.' . $c);
        }


        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('QbaBitSecurityBundle:Default:login.html.twig', array(
            'last_username' => $lastUsername,

            'error' => $error
        ));
    }

    public function recovery_confirmAction(Request $request)
    {
        $hash = $request->get('hash');
        $hash = base64_decode($hash);
        $entity = $this->get('qbabit.repository.security.user')->findOneBy(array('email' => $hash));
        $form = $this->createForm('QbaBit\SecurityBundle\Form\SecurityRecoveryType', $entity);

        if ($form->handleRequest($request) && $form->isValid()) {
            $passOriginal = $form->getData()->getPassword();
            $this->get('qbabit.manager.user')->setUserPassword($entity, $passOriginal);

            $em = $this->get('doctrine.orm.default_entity_manager');
            $em->persist($entity);
            $em->flush();
            $config = $this->get('qbabit_core.global.config')->getUsableConfig();
            $r = ($config['core']['frontend']['routes']['default']);

            return $this->render('QbaBitSecurityBundle:Default:recovery.html.twig', array('url' => $r, 'ok' => true));

        }
        return $this->render('QbaBitSecurityBundle:Default:recovery.html.twig', array('form' => $form->createView(), 'isNew' => false));


    }

    public function activateAction(Request $request)
    {
        $hash = $request->get('hash');
        $hash = base64_decode($hash);
        $entity = $this->getRepository()->findOneBy(array('email' => $hash));
        $config = $this->get('qba_bit_core.global.utils')->getUsableConfig();
        $r = ($config['core']['frontend']['routes']['default']);
        if ($entity != null) {

            $entity->setEnabled(true);

            $em = $this->get('doctrine.orm.default_entity_manager');
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', $this->get('translator')->trans('qbabit.security.login.activate.ok'));
            return $this->redirectToRoute($r['url'], $r['params']);

        }
        $this->addFlash('error', $this->get('translator')->trans('qbabit.security.login.activate.error'));
        return $this->redirectToRoute($r['url'], $r['params']);

    }

    public function viewAction(Request $request)
    {
        $config = $this->get('qbabit_core.global.config')->getUsableConfig();
        $tabs = $config['security']['options']['frontend']['profile_tabs'];
        $result = array();
        foreach ($tabs as $t)
            $result[] = $this->get($t);
        return $this->render('QbaBitSecurityBundle:Default:view.html.twig', array('tabs' => $result));
    }

}
