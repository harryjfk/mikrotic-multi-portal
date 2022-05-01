<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 18/01/18
 * Time: 14:47
 */

namespace QbaBit\CoreBundle\Services;


use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class OrmUtils
{
    use ServiceContainer;

    public function getOrmFiles($bundle)
    {
        $dir = $this->container->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
        $dir = $dir . '/Resources/config/doctrine';
        $files = array();


        $this->container->get('qba_bit_core.file.utils')->getFiles($dir, $files, true);
        return $files;
    }

    public function getBasicTypes()
    {
        return array(TextType::class, ChoiceType::class,
            EntityType::class,
            CountryType::class,
            LanguageType::class,
            LocaleType::class,
            TimezoneType::class,
            CurrencyType::class,

            DateType::class,
            DateTimeType::class,
            TimeType::class,
            BirthdayType::class,

            CheckboxType::class,
            FileType::class,
            RadioType::class,

            CollectionType::class,
            RepeatedType::class,
            TextareaType::class,
            EmailType::class,
            IntegerType::class,
            MoneyType::class,
            NumberType::class,
            PasswordType::class,
            PercentType::class,
            SearchType::class,
            UrlType::class,
            RangeType::class);

    }

    public function getTypes()
    {
        $request = $this->container->get("request_stack")->getMasterRequest();
        $array = $request->getSession()->get("aviableTypes");
        if ($array == null) {
            $array = $this->getBasicTypes();
            foreach (get_declared_classes() as $class) {
                $t = new \ReflectionClass($class);

                if ($t->isSubclassOf('Symfony\Component\Form\AbstractType')
                    && $t->getName() != 'Symfony\Component\Form\Extension\Core\Type\BaseType'
                    && $t->getName() != 'Symfony\Component\Form\Extension\Core\Type\FormType'
                )
                    $array[] = $t->getName();
            }

            $dir = dirname($this->container->get('kernel')->getRootDir());

            $t = array();
            $types_files = array();
            $this->container->get('qba_bit_core.file.utils')->searchFile($dir, '*Type*', 'php', $t, true);
            $file = new PhpFileManipulator();
            foreach ($t as $w)

                if (strpos($w, "Test") === false && strpos($w, "Exception") === false && array_search($w, $array) == false) {// aqui falta ver si heredan de un Type de Form usando un parser de php

                    try {
                        $namespace = $file->getNameSpace($w);
                        $class = $file->getClassName($w);
                        $array[] = $namespace . "\\" . $class;

                    } catch (\Exception $e) {
                    }

                    /// $array[] = str_replace($dir,"",str_replace("\\src\\","",str_replace("\\vendor\\","",str_replace($w,)));
                }
            $array = $this->getChoiceArray($array);

            $request->getSession()->set("aviableTypes", $array);
        }

        return $array;
    }


    private function getChoiceArray($array)
    {
        $result = array();
        foreach ($array as $arr) {
            $t = explode('\\', $arr);
            $result[$t[count($t) - 1]] = $arr;
        }
        return $result;
    }


    public function getEditor($type)
    {
        $editors = $this->getEditors();

        foreach ($editors as $editor) {
            $descp = $this->container->get('qba_bit_core.class.utils')->getClassDescription($editor);
            $namespace = "use " . $descp['namespace'] . " ;";
            eval($namespace);
            $editor = $descp['namespace'] . "\\" . $descp['class_name'];
            $editor_obj = new $editor();
            $simple = strtolower($editor_obj->getSimpleType());
            if ($simple == $type)
                return $editor_obj;
        }
        return null;

    }

    private $editors = null;

    public function getEditors()
    {
        if ($this->editors == null) {
            $t = array();
            $dir = dirname($this->container->get('kernel')->getRootDir());
            $array = array();
            $this->container->get('qba_bit_core.file.utils')->searchFile($dir, '*Editor*', 'php', $t, true);


            foreach ($t as $w)

                if (strpos($w, '/QbaBit/CoreBundle/Form/Base/Editor.php') === false) {// aqui falta ver si heredan de un Type de Form usando un parser de php
                    $array[] = $w;
                }
            $this->editors = $array;
        }
        return $this->editors;
    }
    /*  public function getModulesOrm()
      {
          $result = array();

          $c = $this->getBasicConfiguration();
          foreach ($c as $t) {
              if (array_key_exists('options', $t))
                  if ($t['options'] != null)
                      if (array_key_exists('orm', $t['options']))
                          $result[] = $t['options']['orm'];
          }
          /*  if (array_key_exists('options', $t))
                if (array_key_exists('orm', $t['options']))
                    $result[] = $t['options']['orm'];*/

    /*      return $result;
      }
*/
      public function getEntityFiles($bundle)
      {
          $dir = $this->container->get('file_locator')->locate("@QbaBit" . $bundle . "Bundle");
          $dir = $dir . '/Entity';
          $files = array();
          $this->container->get('qba_bit_core.file.utils')->getFiles($dir, $files, true);
          return $files;
      }
}