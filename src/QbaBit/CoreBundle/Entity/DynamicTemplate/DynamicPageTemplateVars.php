<?php

namespace QbaBit\CoreBundle\Entity\DynamicTemplate;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\Nameable;
use QbaBit\CoreBundle\Entity\ArrayGetter;

/**
 * EmailTemplateVars
 */
class DynamicPageTemplateVars extends  ArrayGetter
{
  use Identificable,Nameable;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $definition;

    /**
     * @var 
     */
    protected $parent;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return 
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set definition
     *
     * @param string $definition
     *
     * @return EmailTemplateVars
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set email
     *
     * @param  $email
     *
     * @return 
     */
    public function setParent($parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get email
     *
     * @return 
     */
    public function getParent()
    {
        return $this->parent;
    }


}
