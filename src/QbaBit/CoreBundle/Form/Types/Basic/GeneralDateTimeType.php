<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;


use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use Symfony\Component\EventDispatcher\Tests\Service;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Tests\Normalizer\ObjectConstructorArgsWithDefaultValueDummy;
use Symfony\Component\Validator\Constraints\DateTime;

class GeneralDateTimeType extends AccessBaseType
{
  

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('range_start', false);
        $resolver->setDefault('range_end', false);
        $resolver->setDefault('compound', 'true');

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /*$builder->addViewTransformer(new CallbackTransformer(
            function ($tagsAsArray) {
             return array('year' => 2017, 'month' => 1, 'day' => 21);
            },
            function ($tagsAsString) {

                // transform the string back to an array
                return new \DateTime();
            }
        ));*/
        /*  $builder->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) {
              //$event->getForm()->setData(new \DateTime() );
               $event->setData(array('year' => 2017, 'month' => 1, 'day' => 21));
                $event->stopPropagation();

          });*/
        // $builder->addModelTransformer(new DateTimeToStringTransformer());
    }

    /**
     * {@inheritdoc}
     */
    private function getFormatJS($format)
    {
        $t = explode('/', $format);
        $result = "";
        foreach ($t as $s) {
            if (strtoupper($s) == "D")
                $result .= "DD";
            else
                if (strtoupper($s) == "M")
                    $result .= "MM";
            if (strtoupper($s) == "Y")
                $result .= "YYYY";
            $result.='/';
        }

        return substr($result,0,strlen($result)-1);
        //  'DD/MM/YYYY'
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $language = $this->container->get('qba_bit_core.language.utils')->getPrimaryLanguage();
        $view->vars['locale'] = $language;
        $view->vars['format'] = $options['format'];
        $view->vars['format_new'] =str_replace('y','Y',  str_replace('M','m',$options['format']));
        $view->vars['format_js'] = $this->getFormatJS(strtoupper($options['format']));
        $view->vars['range_end'] = $this->updateRanges($form, $options['range_end']);
        $view->vars['range_start'] = $this->updateRanges($form, $options['range_start']);


    }

    private function updateRanges(FormInterface $form, $value)
    {
        if ($value == false)
            return false;
        return $form->getParent()->getName() . '_' . $value;
    }

    public function getBlockPrefix()
    {
        return 'qba_bit_date_time';
    }
    public static function getRenderTwig()
    {
        return "QbaBitCoreBundle:Form/Basic:date_time.html.twig";
    }

    public function getParent()
    {
        return DateType::class;
    }
}