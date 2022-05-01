<?php

namespace QbaBit\CoreBundle\Entity\DynamicTemplate;
use QbaBit\CoreBundle\Entity\ArrayGetter;
use QbaBit\CoreBundle\Traits\Enableable;
use QbaBit\CoreBundle\Traits\FileUploadable;
use QbaBit\CoreBundle\Traits\Imageneable;
use QbaBit\CoreBundle\Traits\Nameable;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\DateRangeable;

/**
 * EmailTemplate
 */
class DynamicPageTemplate extends ArrayGetter
{
  use Nameable,Identificable,Imageneable, Enableable, FileUploadable;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $body;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $varChilds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->varChilds = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set code
     *
     * @param string $code
     *
     * @return DynamicPageTemplate
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }




    /**
     * Set body
     *
     * @param string $body
     *
     * @return DynamicPageTemplate
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Add varChild
     *
     * @param  DynamicPageTemplateVars $varChild
     *
     * @return DynamicPageTemplate
     */
    public function addVarChild( $varChild)
    {
        $this->varChilds[] = $varChild;

        return $this;
    }

    /**
     * Remove varChild
     *
     * @param  $varChild
     */
    public function removeVarChild( $varChild)
    {
        $this->varChilds->removeElement($varChild);
    }

    /**
     * Get varChilds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVarChilds()
    {
        return $this->varChilds;
    }
    /**
     * @var 
     */
    protected $category;


    /**
     * Set category
     *
     * @param  $category
     *
     * @return DynamicPageTemplate
     */
    public function setCategory($category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @var string
     */
    protected $metaData;


    /**
     * Set metaData
     *
     * @param string $metaData
     *
     * @return DynamicPageTemplate
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;

        return $this;
    }

    /**
     * Get metaData
     *
     * @return string
     */
    public function getMetaData()
    {
        return $this->metaData;
    }
    public function getFileVar()
    {


        return array('image' => $this->getImage());
    }
    public function setFileVar($name, $value)
    {
        $this->image = $value;
    }
}
