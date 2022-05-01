<?php

namespace QbaBit\NautaBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use NautaAccountsLog;

class NautaAccountsType extends AccessBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // parent::buildForm($builder, $options);

        $builder->add('nameAccount', TextType::class, array('attr' => array("class" => "form-control"), 'label' => 'qba_bit.nauta.nauta_accounts.fields.nameAccount', 'required' => true));

        }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\NautaBundle\Entity\NautaAccounts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qbabit_nautabundle_nautaaccounts';
    }


}
