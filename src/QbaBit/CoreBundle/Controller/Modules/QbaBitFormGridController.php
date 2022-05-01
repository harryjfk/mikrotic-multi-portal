<?php

namespace QbaBit\CoreBundle\Controller\Modules;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\ORM\EntityRepository;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\StoreBundle\Methods\Payment\Entities\RefundPayment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QbaBitFormGridController extends Controller
{

    public function dataAction(Request $request)
    {

        $class = $request->get('class');
        $columns = $request->get('columns');
        $class = str_replace('//', '\\', $class);
        $pref = $this->getTransPrefix($class);
        $columns = $this->getColumns($class, $columns);
        $repo = $this->getDoctrine()->getRepository($class);
        $filter = $this->getFilter($request->get('filter'),$columns);
        $query = $this->getData($repo, $filter);
        $actions = array('new' => $request->get('new')!="", 'delete' => $request->get('delete')!="", 'edit' => $request->get('edit')!="");
        $id = $request->get('id');
        $entities = $this->get('qba_bit_core.paginator.utils')->execute($query);


        return $this->render('QbaBitCoreBundle:Form/Collections/includes:_grid_view_render.html.twig', array('actions'=>$actions,'id' => $id, 'class'=>$class,'pref' => $pref, 'columns' => $columns, 'entities' => $entities, 'filter' => $filter));
    }

    private function getTransPrefix($class)
    {
        $t = $this->get("qba_bit_core.class.utils")->getSeparatedNames($class,"_");
        $t = str_replace('\_', '.', $t);
        $t = str_replace('.entity', '', $t);
        $t = str_replace('_bundle', '', $t);
      /*  $t = str_replace('qbabit','qba_bit',$t);
        $t = str_replace('bundle','',$t);
       /* $t = str_replace('\\', '.', $t);
        $t = str_replace('bundle', '', $t);
        $t = str_replace('.qbabit','qba_bit',$t);*/
        return $t ;
    }

    private function getColumns($class, $columns)
    {
        $result = array();
        $c = json_decode($columns);
        $t = new $class;
        $r = new Reflection($t);
        $props = $r->getProperties();
        foreach ($props as $p)
            if (count($c) == 0 || (count($c) > 0 && array_search($p->getName(), $c) !== false))
                $result[] = $p->getName();
        return $result;
    }

    private function getFilter($filter,$cols)
    {
        $searchobj = array();
        $filter = str_replace('[', '', $filter);
        $filter = str_replace(']', '', $filter);
        $filter = str_replace('"', '', $filter);
        parse_str($filter, $searchobj);
        foreach($cols as $c)
            if(array_key_exists($c,$searchobj)===false)
                $searchobj[$c]="";
        return $searchobj;
    }
    private function getData(EntityRepository $repository, $filter)
    {
        $query = $repository->createQueryBuilder('t');

        if (count($filter )>0) {


            foreach ($filter as $k => $v)
                if (trim($v) != '')
                    $query = $query->andWhere("t." . $k . " LIKE :" . $k)->setParameter($k, '%' . $v . '%');
        }
        return $query;
    }
    public function removeAction()
    {

    }

}
