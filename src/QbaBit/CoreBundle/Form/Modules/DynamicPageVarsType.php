<?php

namespace QbaBit\CoreBundle\Form\Modules;

use QbaBit\CoreBundle\Form\Base\AccessBaseType;
use QbaBit\CoreBundle\FormType\GeneralCollectionType;
use QbaBit\CoreBundle\FormType\HtmlControlType;
use QbaBit\OptionsBundle\FormType\CustomOptionType;
use QbaBit\OptionsBundle\Transformer\OptionToArrayTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Collection;

class DynamicPageVarsType extends AccessBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $t = $this->getGlobalTrans();
        $builder->add('name',TextType::class,array('label'=>"qba_bit.$t.fields.vars.name",'attr'=>array('class'=>'form-control'),'required'=>true))
        ->add('description',TextType::class,array('label'=>"qba_bit.$t.fields.vars.description",'attr'=>array('class'=>'form-control'),'required'=>true))
            ->add('definition',TextType::class,array('label'=>"qba_bit.$t.fields.vars.definition",'attr'=>array('class'=>'form-control'),'required'=>true))
        ;

    }
    protected function getGlobalTrans()
    {
        return "";
    }
    /**
     * {@inheritdoc}
     */
  /*  public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QbaBit\MailBundle\Entity\EmailTemplateVars'
        ));
    }
*/
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qba_bit_dynamic_page_vars';
    }

    public static function getRenderTwig()
    {
        return null;
    }

}
