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

class DisableUnpayedCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:nauta:disable')
            ->setDescription('Deshabilita la interfaz del usuario que no ha realizado');

    }




    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $r = $this->getContainer()->get("qba_bit.nauta.mk_controller")->disableIfNotPayed($output);

    }
}
