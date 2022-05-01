<?php

namespace QbaBit\CoreBundle\Form\Modules;

use QbaBit\CoreBundle\Form\Base\AccessBaseType;

use QbaBit\CoreBundle\Form\Types\Basic\GeneralDateTimeType;
use QbaBit\CoreBundle\Form\Types\Basic\HtmlControlType;
use QbaBit\CoreBundle\Form\Types\Basic\SwitchCheckType;
use QbaBit\CoreBundle\Form\Types\Collections\FilteredEntityType;
use QbaBit\CoreBundle\Form\Types\Collections\GeneralCollectionType;
use QbaBit\CoreBundle\Form\Types\Collections\ModalTransferEntityType;
use QbaBit\CoreBundle\Form\Types\Images\ImageFileType;
use QbaBit\CoreBundle\Traits\ServiceContainer;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Collection;

class DynamicPageType extends AccessBaseType
{


    protected function getUploadDir()
    {
        throw  new \Exception("Sin Implementar");
    }

    /**
     * {@inheritdoc}
     */
    public static function getRenderTwig()
    {
        return null;
    }

    public function getQueryBuidler()
    {
       return null;

    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $w = $this->getGlobalTrans();
        $web = $this->getUploadDir();
        $builder->add('name', TextType::class, array('label' => "qba_bit.$w.fields.name", 'attr' => array('class' => 'form-control'), 'required' => true))
            ->add('category', FilteredEntityType::class, array('label' => "qba_bit.$w.fields.category","query_builder"=>$this->getQueryBuidler(), 'class' => $this->getCategoryVarsType(), 'attr' => array('class' => 'form-control'),"required"=>true))
            ->add('body', HtmlControlType::class, array('label' => "qba_bit.$w.fields.body", 'required' => true))
            ->add('image_file', ImageFileType::class, array('web_base' => $web["web"], "dir_base" => $web["dir"], 'required' => false, 'label' => "qba_bit.$w.fields.image", 'attr' => array('class' => 'form-control'),))
            ->add('code', TextType::class, array('label' => "qba_bit.$w.fields.code", 'attr' => array('class' => 'form-control'), 'required' => true));
        if ($this->getUser()->getIssuperadmin()) {
            $t = $this->container->get('translator')->trans("qba_bit.$w.fields.metaData");
            $builder->add('var_childs', GeneralCollectionType::class, array('label' => "qba_bit.$w.fields.vars.list", 'entry_type' => $this->getChildVarsType(), 'allow_add' => true, 'allow_delete' => true))
                ->add('metaData', ModalTransferEntityType::class, array('caption' => $t, 'buttonClass' => 'btn btn-primary', 'buttonText' => '<span class=" glyphicon fa fa-search">' . $t . '</span>', 'label' => false, 'required' => false, 'classes' => $this->getMetaDataClasses()));

        }

    }

    protected function getGlobalTrans()
    {
        return "";
    }

    protected function getChildVarsType()
    {
        return DynamicPageVarsType::class;
    }

    protected function getCategoryVarsType()
    {
        return null;
    }

    protected function getMetaDataClasses()
    {
        return array('QbaBit\SecurityBundle\Entity\SecurityUser');

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        /*$resolver->setDefaults(array(
            'data_class' => 'QbaBit\MailBundle\Entity\EmailTemplate', 'csrf_protection' => false
        ));*/
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'qba_bit_dynamic_pages_template';
    }


}
