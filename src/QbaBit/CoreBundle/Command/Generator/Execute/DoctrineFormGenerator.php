<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace QbaBit\CoreBundle\Command\Generator\Execute;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

/**
 * Generates a form class based on a Doctrine entity.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Hugo Hamon <hugo.hamon@sensio.com>
 */
class DoctrineFormGenerator extends Generator
{

    private $className;
    private $classPath;


    public function getClassName()
    {
        return $this->className;
    }

    public function getClassPath()
    {
        return $this->classPath;
    }

    /**
     * Generates the entity form class.
     *
     * @param BundleInterface $bundle The bundle in which to create the class
     * @param string $entity The entity relative class name
     * @param ClassMetadataInfo $metadata The entity metadata class
     * @param bool $forceOverwrite If true, remove any existing form class before generating it again
     */
    public function generate(BundleInterface $bundle, $entity, ClassMetadataInfo $metadata, $forceOverwrite = false)
    {
        $forceOverwrite = true;
        $this->updateDirs();
        $parts = explode('\\', $entity);
        $entityClass = array_pop($parts);

        $this->className = $entityClass . 'Type';
        $dirPath = $bundle->getPath() . '/Form/Admin';
        $this->classPath = $dirPath . '/' . str_replace('\\', '/', $entity) . 'Type.php';

        if (!$forceOverwrite && file_exists($this->classPath)) {
            throw new \RuntimeException(sprintf('Unable to generate the %s form class as it already exists under the %s file', $this->className, $this->classPath));
        }

        if (count($metadata->identifier) > 1) {
            throw new \RuntimeException('The form generator does not support entity classes with multiple primary keys.');
        }



       $fields = $this->getFields($bundle->getName(),$entity);
         $uses = $this->getUses($fields);

        $use_container = false;
        foreach ($fields as $field)
            if ($field->useContainer()) {
                $use_container = true;
                break;
            }
        $parts = explode('\\', $entity);
        array_pop($parts);

          $this->renderFile('form/FormType.php.twig', $this->classPath, array(
              'fields' => $fields,
              'uses' => $uses,
              'container' => $this->getContainer(),
              "use_container" => $use_container,
              'namespace' => $bundle->getNamespace(),
              'entity_namespace' => implode('\\', $parts),
              'entity_class' => $entityClass,
              'bundle' => $bundle->getName(),
              'generator'=>$this,
              'bundle_name' => str_replace("QbaBit","",str_replace("Bundle","",$bundle->getName())),
              'form_class' => $this->className,
              'form_type_name' => strtolower(str_replace('\\', '_', $bundle->getNamespace()) . ($parts ? '_' : '') . implode('_', $parts) . '_' . substr($this->className, 0, -4)),
              // BC with Symfony 2.7
              'get_name_required' => !method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix'),
          ));
    }

    private function getUses($fields)
    {
        $result = array();
        foreach ($fields as $k => $v)
        {
            if (array_search($v->getType(), $result) === false)
                $result[] = $v->getType();
            foreach ($v->getUsesParams() as $k1=>$v1)
                if($k1!='from')
                    
            if (array_search($v1, $result) === false)
                $result[] = $v1;
        }
            

        return $result;
    }

 

    /**
     * Returns an array of fields. Fields can be both column fields and
     * association fields.
     *
     * @param ClassMetadataInfo $metadata
     *
     * @return array $fields
     */
    private function getFieldsFromMetadata(ClassMetadataInfo $metadata)
    {
        $fields = (array)$metadata->fieldNames;

        // Remove the primary key field if it's not managed manually
        if (!$metadata->isIdentifierNatural()) {
            $fields = array_diff($fields, $metadata->identifier);
        }

        foreach ($metadata->associationMappings as $fieldName => $relation) {
            if ($relation['type'] !== ClassMetadataInfo::ONE_TO_MANY) {
                $fields[] = $fieldName;
            }
        }

        return $fields;
    }
}
