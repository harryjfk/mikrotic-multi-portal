<?php

namespace QbaBit\SecurityBundle\Command;

use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\SecurityBundle\Entity\SecurityGroup;
use QbaBit\SecurityBundle\Entity\SecurityGroupRole;
use QbaBit\SecurityBundle\Entity\SecuritySections;
use QbaBit\SecurityBundle\Entity\SecuritySectionsRoles;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PopulateGroupsCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:security:populate-groups')
            ->setDescription('Carga los grupos de usuarios a partir de los cruds definidos en el sistema por modulos');
    }

    protected function getAutorizationRules()
    {
        $result = array();
        $controllers = $this->getContainer()->get("qba_bit_core.global.utils")->getCrudControllers();
        foreach ($controllers as $controller) {
            $r = new Reflection($controller);
            try
            {
                $c = $r->newInstanceWithoutConstructor();
                $c->setContainer($this->getContainer());

                $w = array();
                $src_auth = $c->getUrlRoles();;

                foreach ($src_auth as $k=>$v)
                {
                    $w[] = array("auth" => $v, "name" => $c->getBasicNameTranslated($k, true));


                }
               /*  $w[] = array("auth" =>$c->getObjectAsAutorizathion("list"), "name" => $c->getBasicNameTranslated("list", true));
                $w[] = array("auth" =>$c->getObjectAsAutorizathion("delete"), "name" => $c->getBasicNameTranslated("delete", true));
                $w[] = array("auth" =>$c->getObjectAsAutorizathion("new"), "name" => $c->getBasicNameTranslated("new", true));
                $w[] = array("auth" =>$c->getObjectAsAutorizathion("view"), "name" => $c->getBasicNameTranslated("edit", true));
               */ $result[] = array("name"=>$c->getBasicNameTranslated("list"),"rows"=>$w);
                ;
            }
            catch (\Exception $e)
            {

            }

        }

        return $result;

    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $auth = $this->getAutorizationRules();

        $trans = $this->getContainer()->get("translator");
        $em = $this->getContainer()->get("doctrine.orm.default_entity_manager");
        $roles = $em->getRepository("QbaBitSecurityBundle:SecuritySectionsRoles");
        $groups = $em->getRepository("QbaBitSecurityBundle:SecurityGroup");
        $groups_role = $em->getRepository("QbaBitSecurityBundle:SecurityGroupRole");
        $sections = $em->getRepository("QbaBitSecurityBundle:SecuritySections");
         foreach ($auth as $ath) {
             $s = $sections->findOneBy(array("name" => $trans->trans($ath["name"])));
             if ($s == null) {
                 $s = new SecuritySections();
                 $s->setName($trans->trans($ath["name"]));
                 $em->persist($s);
                 $em->flush();
             }
             $g = $groups->findOneBy(array("name" => $trans->trans($ath["name"])));
             if ($g == null) {
                 $g = new SecurityGroup();
                 $g->setName($trans->trans($ath["name"]));
                 $g->setIssystem(0);
                 $em->persist($g);
                 $em->flush();
             }

             foreach ($ath["rows"] as $row)
             {
                 $rw = $roles->findOneBy(array("name" => $row["name"]));
                 if($rw ==null)
                 {
                     $role = new SecuritySectionsRoles();
                     $role->setSection($s);
                     $role->setRole($row["auth"]);
                     $role->setName($row["name"]);
                     $em->persist($role);
                     $em->flush();
                 }
                 if($rw!=null)
                 {
                     $rwss = $groups_role->findOneBy(array("group" => $g, "role"=>$rw->getId()));
                     if($rwss==null)
                     {
                         $rwss = new SecurityGroupRole();

                         $rwss->setRole($rw->getId());
                         $rwss->setGroup($g);
                         $em->persist($rwss);
                         $em->flush();

                     }
                 }


             }
         }

        //       $output->writeln('Command result.');
    }

}
