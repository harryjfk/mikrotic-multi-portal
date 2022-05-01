<?php

namespace QbaBit\SecurityBundle\Controller\Admin;

use Doctrine\ORM\EntityManager;
use QbaBit\CoreBundle\Controller\Base\QbaBitCrudController;
use QbaBit\SecurityBundle\EventListener\UserEvent;
use QbaBit\SecurityBundle\EventListener\UserEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends QbaBitCrudController
{

    protected function getCurrentObject()
    {
        return "QbaBit\SecurityBundle\Entity\SecurityUser";
    }

    private $passOriginalDb;
    private $passOriginal;

    protected function preHandled($object)
    {
//       $this->get("qba_bit.nauta.mk_controller")->removeUserConfig($object);

        $this->passOriginalDb = $object->getPassword();

    }

    protected function getSearchForm()
    {
        $search = parent::getSearchForm();
        $search
            ->add('nombre', TextType::class, array("required" => false, 'label' => "qba_bit.security.security_user.fields.name", 'attr' => array('class' => 'form-control')))
            ->add('email', TextType::class, array("required" => false, 'label' => "qba_bit.security.security_user.fields.email", 'attr' => array('class' => 'form-control')))
            ->add('telMovil', TextType::class, array("required" => false, 'label' => "qba_bit.security.security_user.fields.movilPhone", 'attr' => array('class' => 'form-control')))
            ->add('telFijo', TextType::class, array("required" => false, 'label' => "qba_bit.security.security_user.fields.fixPhone", 'attr' => array('class' => 'form-control')));
        return $search;
    }

    protected function preValidated($object, $form)
    {
        $this->passOriginal = $form->getData()->getPassword();
    }

    private $isNew;

    protected function preFlush($object, EntityManager $em)

    {


        $this->isNew = $object->getId() == null ? array('customer_fullname' => $object->getFullName(), 'customer_user' => $object->getEmail(), 'customer_password' => $object->getPassword()) : null;

        if($this->isNew)
            $object->setDateCreated(new \DateTime());
        if ($this->passOriginal != "" || $this->isNew != null)
            $this->get('qba_bit_security.manager.user')->setUserPassword($object, $this->passOriginal);
        if ($object->getPassword() == null)
            $object->setPassword($this->passOriginalDb);

    }

    protected function postFlush($object)
    {
        if ($this->isNew != null)

            $this->get("event_dispatcher")->dispatch(UserEvents::USER_REGISTRED, new UserEvent($object));


        $this->get("qba_bit.nauta.mk_controller")->updateUserConfig($object);
    }

    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('QbaBitSecurityBundle:Admin/SecurityUser:login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error
        ));
    }

    public function navAction(Request $request)
    {


        return $this->render('QbaBitSecurityBundle:Admin/SecurityUser:nav.html.twig', $this->additionalParams());
    }


    public function recovery_confirmAction(Request $request)
    {
        $hash = $request->get('hash');
        $hash = base64_decode($hash);
        $entity = $this->getRepository()->findOneBy(array('email' => $hash));
        $form = $this->createForm('QbaBit\SecurityBundle\Form\SecurityRecoveryType', $entity, array('method' => $this->getMethod()));


        if ($form->handleRequest($request) && $form->isValid()) {
            $passOriginal = $form->getData()->getPassword();
            $this->get('qba_bit_security.manager.user')->setUserPassword($entity, $passOriginal);

            $em = $this->get('doctrine.orm.default_entity_manager');
            $em->persist($entity);
            $em->flush();
            return $this->render('QbaBitSecurityBundle:Admin/SecurityUser:recovery.html.twig', array('ok' => true, "redirect_url" => $this->generateUrl("qba_bit_admin_security_login")));

        }
        return $this->render('QbaBitSecurityBundle:Admin/SecurityUser:recovery.html.twig', array('form' => $form->createView(), 'isNew' => false));


    }
    protected function delete($object)
    {
        $t = $this->canBeDeleted($object);
        if (is_bool($t)) {

            $this->get("qba_bit.nauta.mk_controller")->removeUserConfig($object);
            return parent::delete($object);

        }
        return $t;
    }
}
