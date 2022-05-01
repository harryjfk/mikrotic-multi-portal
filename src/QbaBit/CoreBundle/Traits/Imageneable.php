<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 1:43
 */

namespace QbaBit\CoreBundle\Traits;

/**
 * Class Imageneable
 * @package QbaBit\CoreBundle\Traits
 * @fields{image}
 *
 */
trait Imageneable {
    /**
     * @var string
     */
    protected $image;
    /**
     * Set image
     *
     * @param string $image
     *
     * @return Imageneable
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}