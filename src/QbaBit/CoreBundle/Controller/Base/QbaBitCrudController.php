<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 19/01/18
 * Time: 13:09
 */

namespace QbaBit\CoreBundle\Controller\Base;


use Doctrine\ORM\EntityManager;
use QbaBit\CoreBundle\Entity\Reflection;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class QbaBitCrudController extends QbaBitBaseController
{

    //---------Direccionamiento
    protected function getObjectAsRouteURL()
    {
        $r = "";
        $t = explode("\\", $this->getCurrentObject());
        for ($i = 0; $i < count($t); $i++) {
            $s = $this->get("qba_bit_core.class.utils")->getSeparatedNames($t[$i], "_");

            $s = str_replace("_bundle", "", $s);
            if ($s != "entity") {
                $r .= $s;
                if ($i < count($t) - 1)
                    $r .= "_";
            }


        }
        return $r;
    }

    protected function getNewUrl()
    {
        return $this->getObjectAsRouteURL() . "_new";
    }


    protected function getDeleteUrl()
    {
        return $this->getObjectAsRouteURL() . "_delete";
    }
    protected function getDeleteListUrl()
    {
        return $this->getObjectAsRouteURL() . "_delete_list";
    }
    protected function getEditUrl()
    {
        return $this->getObjectAsRouteURL() . "_edit";
    }

    protected function getListUrl()
    {
        return $this->getObjectAsRouteURL() . "_list";
    }

    //---------Metodos para Pruebas

    public function doTest(Request $request, Form $form)
    {
           if ($this->get('kernel')->getEnvironment() == "test") {


               if ($request->get($form->getName()) != null) {
                   $reflection = new Reflection($form->getData());
                   $traits = $reflection->getTraitNames();
                   $t = $request->get($form->getName());
                   if (array_search('QbaBit\CoreBundle\Traits\FileUploadable', $traits) !== false) {
                       $files = $form->getData()->getFileVar();

                       foreach ($files as $k => $file)

                       {

                           if(array_key_exists($k."_file",$t)!==false)
                               $t[$k . '_file'] = $request->files->get($form->getName())[$k . '_file'];

                       }

                   }
                   $form->submit($t);
                 //  var_dump( $form->getErrors()[0]->getMessage());
               }
           }

    }

    //---------Declaracion de vistas

    protected function getObjectAsRouteTwig($type)
    {

        $t = explode("\\", $this->getCurrentObject());
        $r = $t[0] . $t[1] . ":Admin:" . $t[3] . "\\" . $type . ".html.twig";
        return $r;
    }

    protected function getIndexRender()
    {

        return $this->getObjectAsRouteTwig("index");
    }

    protected function getEditRender()
    {
        return $this->getObjectAsRouteTwig("edit");
    }

    protected function getShowRender()
    {
        return $this->getObjectAsRouteTwig("show");
    }

    //---------Metodos de gestion

    public function getBasicNameTranslated($crud_mode = "list",$literal=false)

    {
        $r = "";
        $t = explode("\\", $this->getCurrentObject());
        for ($i = 0; $i < count($t); $i++) {
            $s = $this->get("qba_bit_core.class.utils")->getSeparatedNames($t[$i], "_");

            $s = str_replace("_bundle", "", $s);
            if ($s != "entity") {
                if (strpos($r, $s) === false) {

                    $r .= $s;
                    if ($i < count($t) - 1)
                        $r .= ".";
                }
            }


        }

        if($r[strlen($r)-1]!=".")
            $r.='.';
        if($literal==false)
        {
            if ($crud_mode == "list")
                $r .= "text";
            else
                if ($crud_mode == "edit")
                    $r .= "single";
        }
        else
        {
            $r.="action.".$crud_mode;
            //qbabit.security.admin.groups.actions.edit
        }

        return $r;
    }

    protected function getBundleConfig($name=null)
    {

        $t = explode("\\", $this->getCurrentObject());
        if($name==null)
        $name = $this->container->get("qba_bit_core.class.utils")->getSeparatedNames(str_replace("Bundle", "", $t[1]),"_");
        $bundle = $this->get("qba_bit_core.global.utils")->getQbaBitModules(array($name));

        return array("name" => $name, "config" => $bundle->getConfig());
    }

    protected function additionalParams($crud_mode = "list")
    {

        $bundle = $this->getBundleConfig();

        return array_merge(parent::additionalParams(), array($bundle["name"] => $bundle["config"], "base_title" => $this->getBasicNameTranslated($crud_mode), "url" => $this->getUrlRoutes(),
            "role" => $this->getUrlRoles(),



        ));
    }
    public function getUrlRoutes()
    {
        return array('new' => $this->getNewUrl(), 'edit' => $this->getEditUrl(),'delete_list' => $this->getDeleteListUrl(),'delete' => $this->getDeleteUrl(), "view" => $this->getListUrl());
    }
    public function getUrlRoles()
    {
        return array("new" => $this->getObjectAsAutorizathion("new"), "edit" => $this->getObjectAsAutorizathion("edit"), "delete" => $this->getObjectAsAutorizathion("delete"), "view" => $this->getObjectAsAutorizathion("view"));
    }
    protected function additionalFilterParams()
    {
        return array();
    }

    protected function getCurrentObject()
    {
        throw new \Exception("Sin implementar");
    }

    public function getObjectAsAutorizathion($type)
    {
        $r = "";
        $t = explode("\\", $this->getCurrentObject());
        for ($i = 0; $i < count($t); $i++) {
            $s = $this->get("qba_bit_core.class.utils")->getSeparatedNames($t[$i], "_");

            $s = str_replace("_bundle", "", $s);
            if ($s != "entity") {
                $r .= $s;
                if ($i < count($t) - 1)
                    $r .= "_";
            }


        }
        $r = "ROLE_" . strtoupper($r) . "_" . strtoupper($type);
        return $r;
    }

    protected function getRepository()
    {

        return $this->get("doctrine.orm.default_entity_manager")->getRepository($this->getCurrentObject());
    }

    public function indexAction(Request $request)
    {
       $searchForm = $this->getSearchForm();
       $searchForm->handleRequest($request);

        /*  if(!$this->get('security.authorization_checker')->isGranted($this->getObjectAsAutorizathion("view"))){
              throw $this->createAccessDeniedException();
          }*/
        $filter_config = $this->getFilterConfigurations($searchForm);

        $query = $this->getRepository()->getListQuery($filter_config);
        $entities = $this->get('qba_bit_core.paginator.utils')->execute($query);
        $params = array_merge($this->additionalParams(), array(
            'entities' => $entities,"searchForm"=>$searchForm->createView()
        ));
        return $this->render($this->getIndexRender(), $params);
    }

    protected function getFilterConfigurations(FormInterface $form)
    {
        $filter = $form->getData();
        if ($filter == null)
            $filter = array();
        $filter = array_merge($filter, $this->additionalFilterParams());
        return $filter;
    }


    protected function delete($object)
    {
         $t = $this->canBeDeleted($object);
         if (is_bool($t)) {
             try {
                 $em = $this->get('doctrine.orm.default_entity_manager');
                 $em->remove($object);
                 $em->flush();
                 return true;
             } catch (\Exception $e) {
                 return false;
             }


         }
         return $t;
    }

    public function showAction($id)
    {
        /* $object = $this->get($this->getObjectRepository())->find($id);
         return $this->render($this->getShowRender(), array('entity' => $object));*/
    }

    public function deleteAction($id, $view_list = false)
    {
          $object = $this->getRepository()->find($id);
          $this->delete($object);
          return $this->redirectToRoute($this->getListUrl(), array('view' => $view_list));

    }

    public function newAction(Request $request)
    {
        $t = $this->getCurrentObject();
        $object = new $t();
        $editForm = $this->getForm($object) ;
        $result = $this->handleForm($request, $object, $editForm);
        if ($result == false) {
            $params = array_merge($this->additionalParams(), array(
                'entity' => $object,
                'form' => $editForm->createView(),
                'isNew' => true
            ));

            return $this->render($this->getEditRender(), $params);
        }

        return $result;
    }

    public function getMethod()
    {
        return "POST";
    }

    public function getFormType()
    {
        $t = explode("\\", $this->getCurrentObject());
        $t[2] = "Form";
        $t[4] = $t[3] . "Type";
        $t[3] = "Admin";
        $r = implode("\\", $t);
        return $r;

    }

    protected function getForm($entity)
    {
        $form_params = array('method' => $this->getMethod());
        if ($this->get('kernel')->getEnvironment() == "test")
            $form_params["csrf_protection"] = false;
        $bundle = $this->getBundleConfig();
        $form_params["bundle"] = $bundle["config"];
        $form = $this->createForm($this->getFormType(), $entity, $form_params);
        $form->add('submit', SubmitType::class, array('label' => 'qba_bit.core.actions.submit', 'attr' => ['class' => 'btn btn-primary']));
        if($this->isGranted($this->getObjectAsAutorizathion("edit")))
        $form->add('button', ButtonType::class, array('label' => 'qba_bit.core.actions.cancel', 'attr' => ['class' => 'btn ']));
        return $form;

    }

    public function editAction(Request $request, $id)
    {


        $entity = $this->getRepository()->find($id);
        $editForm = $this->getForm($entity);
        $result = $this->handleForm($request, $entity, $editForm);

        if ($result == false) {

            $this->preEditRender($entity);
            $params = array_merge($this->additionalParams("edit"), array(
                'entity' => $entity,
                'form' => $editForm->createView(),
                'isNew' => false
            ));
            return $this->render($this->getEditRender(), $params);
        }

        return $result;
    }
    protected function preEditRender($object)
    {

    }
    protected function preValidated($object,$form)
    {

    }

    protected function preFlush($object, EntityManager $em)
    {

    }

    protected function postFlush($object)
    {

    }
    protected function preHandled($object)
    {

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
            $em->persist($object);
            $em->flush();
            $this->postFlush($object, $em);
            $this->addFlash('alert alert-success    ', $this->get('translator')->trans('qba_bit.core.messages.ok'), true);
            return $this->redirect($this->generateUrl($this->getListUrl()));
        } else
            if ($form->isSubmitted())
                $this->addFlash('alert alert-danger', $this->get('translator')->trans('qba_bit.core.messages.error'), true);
        return false;
    }


    protected function canBeDeleted($object)
    {
        return true;
    }
    public function deleteListAction(Request $request)
    {

        $json = array('status' => 1);
        $trans = $this->get('translator');

        /*  if (!$this->isGranted($this->getObjectAsAutorizathion("delete"))) {
              $json['status'] = 2;
              return new JsonResponse(($json));
          }
  */
        $em = $this->get('doctrine.orm.default_entity_manager');

        $listIds = $request->get('idcheck', array());
        $json['ids'] = array();
        $haeliminado = false;
        foreach ($listIds as $id) {
            $entity = $this->getRepository()->find($id);


            if ($entity && $this->canBeDeleted($entity)) {
                try {
                    $t = $this->delete($entity);

                    if (is_bool($t)) {
                        $json['ids'][] = $id;

                        $haeliminado = true;
                    } else
                        $json['msg'] = $t;
                } catch (\Exception $e) {
                    $json['status'] = 0;
                }
            }
        }

        if (!$haeliminado) {


            $json['status'] = 0;

        } else {
            $this->addFlash('alert alert-success', $trans->trans('qba_bit.core.messages.deleted_success', array()));
        }

        return new JsonResponse($json);
    }

}