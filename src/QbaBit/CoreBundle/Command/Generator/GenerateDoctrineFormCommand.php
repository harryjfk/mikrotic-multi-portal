<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace QbaBit\CoreBundle\Command\Generator;

use QbaBit\CoreBundle\Command\Generator\Execute\DoctrineFormGenerator;
use Sensio\Bundle\GeneratorBundle\Command\Validators;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;


/**
 * Generates a form type class for a given Doctrine entity.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Hugo Hamon <hugo.hamon@sensio.com>
 */
class GenerateDoctrineFormCommand extends \Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineFormCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('qbabit:generate:form');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $entity = Validators::validateEntityName($input->getArgument('entity'));
        list($bundle, $entity) = $this->parseShortcutNotation($entity);

       $metadata = $this->getEntityMetadata("QbaBit\\" . str_replace("QbaBit", "", $bundle) . "\\Entity\\" . $entity);

        $bundle = $this->getApplication()->getKernel()->getBundle($bundle);
        $generator = $this->getGenerator($bundle);

        $generator->generate($bundle, $entity, $metadata[0]);
          
           $output->writeln(sprintf(
               'The new %s.php class file has been created under %s.',
               $generator->getClassName(),
               $generator->getClassPath()
           ));
    }


    protected function createGenerator()
    {
        return new DoctrineFormGenerator($this->getContainer()->get('filesystem'),$this->getContainer());
    }
}
