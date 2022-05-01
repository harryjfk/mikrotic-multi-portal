<?php

namespace QbaBit\NautaBundle\Controller\Admin;

use Proxies\__CG__\QbaBit\SecurityBundle\Entity\SecurityUser;
use QbaBit\CoreBundle\Entity\ChartColumn;
use QbaBit\NautaBundle\Entity\NautaBilling;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use QbaBit\CoreBundle\Controller\Base\QbaBitBaseController;
use Symfony\Component\HttpFoundation\JsonResponse;


class AdminController extends QbaBitBaseController
{
    public function indexAction()
    {
       $repo = $this->get("doctrine.orm.default_entity_manager")->getRepository("QbaBitNautaBundle:NautaBilling");
        $data = $repo->getGraphQuery(array("payments" => true));

        $payments = $this->get('qba_bit_core.graph.resolver')->getChartData($data, array(new ChartColumn("system_month", true, null, null), new ChartColumn('system_entities', "%name%")), "system_month");
        $missing = $repo->getGraphQuery(array("missing_month" => true));
        $admins = $repo->getGraphQuery(array("admins" => true));
        $admins = $this->get('qba_bit_core.graph.resolver')->getChartData($admins, array(new ChartColumn("system_month", true, null, null), new ChartColumn('system_entities', "%name%")), "system_month");

                $data = array("payments" => $payments, "missing" => $missing,"admins" => $admins);

                $form = $this->createForm('QbaBit\NautaBundle\Form\Admin\GraphType', $data);

                return $this->render('QbaBitNautaBundle:Admin:index.html.twig', array_merge(array("data" => $data, "graph" => $form->createView(),), $this->additionalParams()));
          }

    public function payAction($id)
    {
        $t = new NautaBilling();
        $em = $this->get("doctrine.orm.default_entity_manager");
        $user = $em->getRepository("QbaBitSecurityBundle:SecurityUser")->find($id);

        $repo = $this->get("doctrine.orm.default_entity_manager")->getRepository("QbaBitNautaBundle:NautaBilling");
        $missing = $repo->getGraphQuery(array("missing_month" => true));

      $w = null;
        foreach ($missing as $m)
            if($id == $m["id"])
            {
                $w=$m;
                break;
            }

//
//                $t->setUser($user);
//                $t->setDate(new \DateTime());
//                $t->setAmount($w["value"]);
//                $em->persist($t);
//                $em->flush();
                $this->get("qba_bit.nauta.mk_controller")->enableInterface($user->getInterface());
                return new JsonResponse(array());

    }
}
