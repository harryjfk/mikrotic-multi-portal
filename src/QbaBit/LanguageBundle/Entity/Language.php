<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 19/01/18
 * Time: 22:19
 */

namespace QbaBit\LanguageBundle\Entity;


use QbaBit\CoreBundle\Traits\Enableable;
use QbaBit\CoreBundle\Traits\FileUploadable;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\Imageneable;
use QbaBit\CoreBundle\Traits\Nameable;

class Language
{

    use Identificable, Nameable, Imageneable, Enableable, FileUploadable;


    /**
     * @var string
     */
    private $shortcode;

    /**
     * @var string
     */
    private $longcode;

    /**
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param bool $primary
     * @return Language
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
        return $this;
    }
    /**
     * @var boolean
     */
    private $primary;

    /**
     * Set shortcode
     *
     * @param string $shortcode
     *
     * @return Language
     */
    public function setShortcode($shortcode)
    {
        $this->shortcode = $shortcode;

        return $this;
    }

    /**
     * Get shortcode
     *
     * @return string
     */
    public function getShortcode()
    {
        return $this->shortcode;
    }

    /**
     * Set longcode
     *
     * @param string $longcode
     *
     * @return Language
     */
    public function setLongcode($longcode)
    {
        $this->longcode = $longcode;

        return $this;
    }

    /**
     * Get longcode
     *
     * @return string
     */
    public function getLongcode()
    {
        return $this->longcode;
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
