<?php

namespace QbaBit\CoreBundle\Entity\DynamicTemplate;
use QbaBit\CoreBundle\Entity\ArrayGetter;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\Nameable;

/**
 * EmailTemplateCategory
 */
class DynamicPageTemplateCategory extends  ArrayGetter
{
    use Identificable,Nameable;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $templates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->templates = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add template
     *
     * @param  $template
     *
     * @return 
     */
    public function addTemplate( $template)
    {
        $this->templates[] = $template;

        return $this;
    }

    /**
     * Remove template
     *
     * @param  $template
     */
    public function removeTemplate( $template)
    {
        $this->templates->removeElement($template);
    }

    /**
     * Get templates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemplates()
    {
        return $this->templates;
    }


}
