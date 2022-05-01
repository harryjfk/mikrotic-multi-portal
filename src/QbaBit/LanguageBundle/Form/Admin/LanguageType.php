<?php

namespace QbaBit\LanguageBundle\Form\Admin;

use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\Form\Types\Basic\iCheckType;
use QbaBit\CoreBundle\Form\Types\Basic\SwitchCheckType;
use QbaBit\CoreBundle\Form\Types\Images\ImageFileType;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;


class LanguageType extends AccessBaseType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('name', null, array('label' => 'qba_bit.language.fields.name', 'attr' => array('class' => 'form-control')))
             ->add('enabled', SwitchCheckType::class, array('label' => 'qba_bit.language.fields.enabled', 'required' => false, 'attr' => array('class' => '')))
          ->add('image_file', ImageFileType::class, array( 'label' => 'qba_bit.language.fields.image', 'attr' => array('class' => 'form-control'), 'required' => false))
          ->add('shortcode', null, array( 'label' => 'qba_bit.language.fields.shortCode', 'attr' => array('class' => 'form-control'), 'required' => false))
          ->add('longcode', null, array( 'label' => 'qba_bit.language.fields.longCode', 'attr' => array('class' => 'form-control'), 'required' => false))
             ->add('primary', SwitchCheckType::class, array('label' => 'qba_bit.language.fields.primary', 'required' => false, 'attr' => array('class' => 'form-control')));
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\LanguageBundle\Entity\Language'
        ));
    }
}
