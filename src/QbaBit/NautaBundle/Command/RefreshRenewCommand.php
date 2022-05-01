<?php

namespace QbaBit\NautaBundle\Command;

use QbaBit\CoreBundle\Command\Generator\Execute\Generator;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RefreshRenewCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:nauta:check')
            ->setDescription('Verifica el estado de las interfaces');

    }


    protected function setOutput(OutputInterface $output, array &$array, $text)
    {
        $output->writeln($text);
        $array[] = $text;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $data = array();
        $em = $this->getContainer()->get("doctrine.orm.entity_manager");
        $all = array();
        try {


            $this->setOutput($output, $data, "Iniciando el checkeo");
            $ip = $this->getContainer()->get("qba_bit.nauta.mk_controller")->getServerIp();
            $states = $this->getContainer()->get("qba_bit.nauta.mk_controller")->getAviableInternetInterfaces($ip, true);


            foreach ($states as $k => $v) {
                $all[$k]=false;
                $t = $em->getRepository("QbaBitSecurityBundle:SecurityUser")->findOneBy(array("interface" => $k));
                $c1 = $t->getCheckCount();
                $c2 = $t->getCheckCountInternet();
                if ($v->secure == false) {

                    if ($c1 == 2) {
                        $this->setOutput($output, $data, "Renovando dhcp " . $k);
                        $this->getContainer()->get("qba_bit.nauta.mk_controller")->setMacInterface($k);

                        $c1 = 0;
                    } else
                        $c1++;

                } else
                    $c1 = 0;
                if ($v->internet == false) {

                    if ($c2 >= 2) {
                      $all[$k]=true;

                    } else
                        $c2++;

                } else
                {
                    $all[$k]=false;
                    $c2 = 0;
                }


                $t->setCheckCount($c1);
                $t->setCheckCountInternet($c2);
                $em->persist($t);
                $em->flush();

                      // $this->getContainer()->get("qba_bit.nauta.mk_controller")->renewDHCP($k,true);

            }

            $renew_wlan1 = true;
            foreach ($all as $k=>$v)
                if($v==false)
                {
                    $renew_wlan1 = false;
                    break;
                }
            if($renew_wlan1 && count($all)>0)
            {
                $this->getContainer()->get("qba_bit.nauta.mk_controller")->setMacInterface("wlan1");

                foreach ($all as $k=>$v)
                {
                    $t = $em->getRepository("QbaBitSecurityBundle:SecurityUser")->findOneBy(array("interface" => $k));

                    $t->setCheckCountInternet(0);
                    $em->persist($t);
                    $em->flush();
                }

            }
            $this->setOutput($output, $data, "Checkeo terminado");
        } catch (\Exception $e) {

            $data[] = $e->getMessage() . " - " . $e->getFile() . "-" . $e->getLine() . "-" . $e->getTraceAsString();
        }



                file_put_contents("/var/www/html/info", json_encode($data));


    }
}
