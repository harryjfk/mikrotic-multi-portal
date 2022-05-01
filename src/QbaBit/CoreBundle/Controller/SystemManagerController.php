<?php

namespace QbaBit\CoreBundle\Controller;

use QbaBit\CoreBundle\Controller\Base\QbaBitBaseController;
use QbaBit\CoreBundle\Form\Types\Basic\GeneralDateTimeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class SystemManagerController extends QbaBitBaseController
{
    protected function additionalParams()
    {
        $p = parent::additionalParams();
        $p["base_title"] = $this->get("translator")->trans("qba_bit.systemRestore.text");
        $p["url"] = array("view" => "qba_bit_core_system_manager", "show" => "qba_bit_core_system_manager_show", "make" => "qba_bit_core_system_manager_make");
        $p["role"] = array("show" => "ROLE_QBA_BIT_CORE_SYSTEM_RESTORE_VIEW", "restore" => "ROLE_QBA_BIT_CORE_SYSTEM_RESTORE_RESTORE", "make" => "ROLE_QBA_BIT_CORE_SYSTEM_RESTORE_MAKE");
        $p["isNew"] = false;
        return $p;
    }

    protected function getSearchForm()
    {
        $search = parent::getSearchForm();
        $search->add('rangeStart', GeneralDateTimeType::class, array('format' => 'd/M/y', 'range_end' => 'rangeEnd', 'label' => "qba_bit.systemRestore.fields.rangeStart", 'attr' => array('class' => 'form-control')))
            ->add('rangeEnd', GeneralDateTimeType::class, array('format' => 'd/M/y', 'range_start' => 'rangeStart', 'label' => "qba_bit.systemRestore.fields.rangeEnd", 'attr' => array('class' => 'form-control')));

        return $search;
    }

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $searchForm = $this->getSearchForm();
        $searchForm->handleRequest($request);

        $list = $this->get("qba_bit_core.manager.system")->getRestorePoints($searchForm->getData());

        $global = $this->createForm("QbaBit\CoreBundle\Form\Modules\SystemRestoreModuleType", null);
        $trans = $this->get("translator");
        $point = $this->createForm("QbaBit\CoreBundle\Form\Types\Basic\ModalType", null, array("caption" => $trans->trans('qba_bit.systemRestore.action.make'), "height" => 200, "template" => "<label for='point_desc'>" . $trans->trans("qba_bit.systemRestore.fields.description") . "</label><input class='form-control' id='point_desc'>", "onOk" => "
        if(point_desc.value=='')
        {toastr['error']('" . $trans->trans("qba_bit.systemRestore.action.make_description_error") . "');
        return false;}
        else
        {
        $('#qba_bit_modal_system_restore_module_form_all_button').click();
                     $('.ui-dialog-title').html('" . $trans->trans('qba_bit.systemRestore.action.doBackuping') . "');

        }
        "));


        $t = $this->get("qba_bit_core.paginator.utils")->execute($list);
        foreach ($t as $w) {
            $list[$w["id"]] = $this->createForm("QbaBit\CoreBundle\Form\Modules\SystemRestoreModuleType", $w, array("restore" => true))->createView();


        }
        return $this->render('@QbaCoreBundle/Admin/SystemRestore/index.html.twig', array("form_list" => $list, "point" => $point->createView(), "global_form" => $global->createView(), "searchForm" => $searchForm->createView(), "entities" => $t,));

    }


    public function viewAction($id)
    {
        $restorePoint = $this->get("qba_bit_core.manager.system")->getRestorePoints(array("id" => $id), true);
        $form = $this->createForm("QbaBit\CoreBundle\Form\Modules\SystemRestoreModuleType", $restorePoint, array("restore" => true));
        return $this->render('@QbaCoreBundle/Admin/SystemRestore/show.html.twig', array("form" => $form->createView(), "module" => $restorePoint,));

    }

    public function makeAction(Request $request)
    {

        $ajax = $request->get("ajax") != null;

        $description = $request->get("description");

        $t = $this->get("qba_bit_core.manager.system");
        $logger = $this->get("qba_bit_core.modal.logger");
        $logger->init($ajax);
        $t->init($logger);
        $this->get("qba_bit_core.manager.system")->restorePoint($description);
        return new Response("<html><head></head><body></body></html>");
    }

    public function restoreAction(Request $request, $id)
    {
        $ajax = $request->get("ajax") != null;
        $t = $this->get("qba_bit_core.manager.system");
        $logger = $this->get("qba_bit_core.modal.logger");
        $logger->init($ajax);
        $t->init($logger);
        $this->get("qba_bit_core.manager.system")->restore(array("id"=>$id));
        return new Response("<html><head></head><body></body></html>");
    }


}
