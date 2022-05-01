<?php

namespace QbaBit\CoreBundle\Controller;

use GuzzleHttp\Client;
use QbaBit\CoreBundle\Controller\Base\QbaBitBaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class InstallerController extends QbaBitBaseController
{
    protected function additionalParams()
    {
        $p = parent::additionalParams();
        $p["base_title"] = $this->get("translator")->trans("qba_bit.modules.text");
        $p["url"] = array("view" => "qba_bit_core_install_modules", "show" => "qba_bit_core_install_modules_view", "install" => "qba_bit_core_install_modules_install_selected", "uninstall" => "qba_bit_core_install_modules_install_selected", "upgrade" => "qba_bit_core_install_modules_install_selected");
        $p["role"] = array("show" => "ROLE_QBA_BIT_CORE_MODULE_VIEW", "install" => "ROLE_QBA_BIT_CORE_MODULE_INSTALL", "upgrade" => "ROLE_QBA_BIT_CORE_MODULE_UPGRADE", "uninstall" => "ROLE_QBA_BIT_CORE_MODULE_UNINSTALL");
        $p["isNew"] = false;
        return $p;
    }

    protected function getSearchForm()
    {
        $search = parent::getSearchForm();
        $search->add('name', TextType::class, array("required"=>false,'label' => "qba_bit.modules.fields.name", 'attr' => array('class' => 'form-control')));
        return $search;
    }

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $searchForm = $this->getSearchForm();
        $searchForm->handleRequest($request);
        $filter = $searchForm->getData();
        if ($filter != null) {
            $r = array();
            foreach ($filter as $k => $v)
                if ($k != "submit")
                    $r[$k] = $v;
            $filter = $r;

        }

        $list = $this->get("qba_bit_core.manager.module")->getList($filter);

        $t = $this->get("qba_bit_core.paginator.utils")->execute($list);

        $list = array();
        $hasUninstall = false;
        $hasUpgrade = false;
        $hasInstall = false;

        foreach ($t as $w) {
            $list[$w["id"]] = $this->getModuleForm($w);
            if ($w["state"] == "upgrade")
                $hasUpgrade = true;
            if ($w["state"] == "installed" && $w["required"] == "false")
                $hasUninstall = true;
            if ($w["state"] == "non-installed")
                $hasInstall = true;
        }
        $global = $this->createForm("QbaBit\CoreBundle\Form\Modules\ModalInstallModuleType", null);
        return $this->render('@QbaCoreBundle/Admin/Modules/index.html.twig', array("searchForm" => $searchForm->createView(), "entities" => $t, "global_form" => $global->createView(), "hasInstall" => $hasInstall, "hasUninstall" => $hasUninstall, "hasUpgrade" => $hasUpgrade, "form" => $list));

    }

    protected function getModuleForm($moduleObject)
    {
        $install = null;
        $uninstall = null;

        if ($moduleObject["state"] == "non-installed" || $moduleObject["state"] == "upgrade" || $moduleObject["state"] == "installed") {

            if ($moduleObject["state"] == "non-installed" || $moduleObject["state"] == "upgrade") {
                $install = $this->createForm("QbaBit\CoreBundle\Form\Modules\ModalInstallModuleType", $moduleObject, array("install" => true));
                $install = $install->createView();
            }

            if (($moduleObject["state"] == "installed" || $moduleObject["state"] == "upgrade") && ($moduleObject["required"] == "false")) {
                $uninstall = $this->createForm("QbaBit\CoreBundle\Form\Modules\ModalInstallModuleType", $moduleObject, array("install" => false));
                $uninstall = $uninstall->createView();
            }

        } else {
            $install = null;
            $uninstall = null;

        }
        return array("uninstall" => $uninstall, "install" => $install);
    }

    public function viewAction($id)
    {
        $t = $this->get("qba_bit_core.manager.module")->getModule($id);
        $form = $this->getModuleForm($t);


        return $this->render('@QbaCoreBundle/Admin/Modules/show.html.twig', array_merge($form, array("module" => $t,)));

    }

    public function installSelectedAction(Request $request)
    {
        $listIds = $request->get('idcheck', array());
        $trans = $this->get("translator");
        $type = $request->get("type");
        $json = array('status' => 1);
        $json['ids'] = array();
        $haeliminado = false;
        $backuped = false;
        $this->get("qba_bit_core.manager.module")->init(true);
        foreach ($listIds as $id) {

            $module = $this->get("qba_bit_core.manager.module")->getModule($id);
            if ($type == "install") {
                if ($module["state"] == "non-installed") {

                    $t = $this->get("qba_bit_core.manager.module")->install($module["id"], $module["version"], !$backuped);
                    if ($backuped == false)
                        $backuped = true;
                    if ($t) {
                        $json['ids'][] = $id;
                        $haeliminado = true;
                    } else
                        $json['msg'] = $t;
                } else {
                    $json['ids'][] = $id;
                    $haeliminado = true;
                }

            }

        }

        if (!$haeliminado) {


            $json['status'] = 0;

        } else {
            $this->addFlash('alert alert-success', $trans->trans('qba_bit.modules.fields.action.installed', array()));
        }

        return new JsonResponse($json);
    }

    public function installAction(Request $request, $id, $version)
    {

        $ajax = $request->get("ajax") != null;

        $t = $this->get("qba_bit_core.manager.module");
        $t->init($ajax);
        $this->get("qba_bit_core.manager.module")->install($id, $version);
        return new Response("<html><head></head><body></body></html>");
    }

    public function uninstallAction(Request $request, $id, $version)
    {
        //var_dump();
        $client = new Client();
       // $url = "https://secure.etecsa.net:8443";
        $url = "https://secure.etecsa.net:8443//LoginServlet";

        $request = $client->post(
            $url,
            array("form_params"=>$_REQUEST)
        );
     //   $response = $request->send();
        echo $request->getBody()->getContents();

        /* $ajax = $request->get("ajax") != null;

         $t = $this->get("qba_bit_core.manager.module");
         $t->init($ajax);
         $this->get("qba_bit_core.manager.module")->uninstall($id, $version);
         return new Response("<html><head></head><body></body></html>");*/
    }

    public function avaiblesAction()
    {
        //  return $this->render('@QbaBitTestTemplate/Default/index.html.twig');

    }


}
