<?php

namespace QbaBit\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InstallFormsCommand extends ContainerAwareCommand
{


    protected function configure()
    {
        $this
            ->setName('qbabit:install-forms')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('qbabit_core.forms.installer')->Install();
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

 //       $output->writeln('Command result.');
    }

}
