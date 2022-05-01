<?php

namespace QbaBit\NautaBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QbaBit\CoreBundle\Controller\Base\QbaBitCrudController;

use QbaBit\NautaBundle\Entity\NautaAccounts;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class NautaOptionsController extends QbaBitCrudController
{
    protected function additionalParams($crud_mode = "list")
    {

        $bundle = $this->getBundleConfig();

        return array_merge(array($bundle["name"] => $bundle["config"], "base_title"=>"Opciones","role"=>array("edit"=>"aa")


        ));
    }
    protected function handleForm(Request $request, $object, Form $form)
    {
        $this->preHandled($object);
        $form->handleRequest($request);
        $this->doTest($request, $form);
        $this->preValidated($object,$form);
        if ($form->isSubmitted() && $form->isValid()) {


            //------------
            $em = $this->get('doctrine.orm.default_entity_manager');
            $this->preFlush($object, $em);
            $data = $request->get("qbabit_nautabundle_nautaoptions");

            $w = array();
            foreach($data as $k=>$v)
                if($k!="submit"&& $k!="_token")
                    $w[$k]=$v;

            $t = $this->getBundleConfig()["config"];
            $t["options"] = $w;
            $s = array("qba_bit_nauta"=>$t);
            $dir = $this->getParameter("kernel.project_dir")."/src/QbaBit/NautaBundle/Resources/config/config.yml";
            $this->get("qba_bit_core.file.utils")->setFile($dir,$s);
            $this->postFlush($object, $em);
            $this->addFlash('alert alert-success    ', $this->get('translator')->trans('qba_bit.core.messages.ok'), true);
//            return $this->redirect($this->generateUrl($this->getListUrl()));
        } else
            if ($form->isSubmitted())
                $this->addFlash('alert alert-danger', $this->get('translator')->trans('qba_bit.core.messages.error'), true);
        return false;
    }

    public function newEditAction(Request $request)
   {

       $entity = $this->get("qba_bit_core.global.utils")->getConfigValue("qba_bit_nauta.options");
       $editForm = $this->getForm($entity);

       $result = $this->handleForm($request, $entity, $editForm);

       if ($result == false) {

           $this->preEditRender($entity);
           $params = array_merge( array(
               'entity' => $entity,
               'form' => $editForm->createView(),
               'isNew' => false
           ));
           return $this->render("QbaBitTemplateAdminLTEBundle:Admin/NautaOptions:edit.html.twig", $params);
       }

       return $result;

   }
   public function getObjectAsAutorizathion($type)
   {
    return "ROLE_QBA_BIT_LANGUAGE_LA11NGUAGE_EDIT";
   }

    public function getBundleConfig($name = null)
   {
       $bundle = $this->get("qba_bit_core.global.utils")->getQbaBitModules(array("nauta"));

       return array("name" => $name, "config" => $bundle->getConfig());
   }

    public function getFormType()
   {
    return "QbaBit\NautaBundle\Form\Admin\NautaOptionsType";
   }
}
