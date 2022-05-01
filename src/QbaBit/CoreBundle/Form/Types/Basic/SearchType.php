<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 10:35
 */

namespace QbaBit\CoreBundle\Form\Types\Basic;


use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use Symfony\Component\Finder\Iterator\FileTypeFilterIterator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\BooleanToStringTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Tests\Extension\Core\Type\CollectionTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Tests\Normalizer\ObjectConstructorArgsWithDefaultValueDummy;

class SearchType extends AccessBaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('compound', true);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("submit",ButtonType::class,array("label"=>false,"required"=>false,"buttonType"=>"primary","iconClass"=>"fa fa-search"));

      /*  $t = new \QbaBit\CoreBundle\Transformers\Forms\BooleanToStringTransformer();
        $t->form = $builder;
        $builder->addModelTransformer($t);*/
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
       /* $data = $view->vars['data'];
        if ($data == null)
            $view->vars['data'] = $this->getRealData($view, $form);*/
    }



    public function getBlockPrefix()
    {
        return 'qba_bit_search_form';
    }


}