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

class PingCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:nauta:ping')
            ->setDescription('Verifica el estado de los equipos');

    }




    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $r = $this->getContainer()->get("qba_bit.nauta.mk_controller")->pingEquipment();
        if($r["result"]==true)
            system("play /var/www/nauta_portal/web/bundles/qbabitnauta/Tornado_Siren_II-Delilah-747233690.mp3");

    }
}
