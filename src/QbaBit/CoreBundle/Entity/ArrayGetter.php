<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 18/12/2016
 * Time: 22:36
 */

namespace QbaBit\CoreBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\FileUploadData;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class ArrayGetter implements \ArrayAccess
{

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {

        $r =  new Reflection($this);


        foreach ($r->getProperties() as $prop)
            if ($prop->getName() == $offset)
                return true;
        //Para cuando coja la clase proxy
        $r=$r->getParentClass();
        foreach ($r->getProperties() as $prop)
            if ($prop->getName() == $offset)
                return true;
        return false;
        // TODO: Implement offsetExists() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {

        $r =  new Reflection($this);
        $mn = 'get'.ucwords($offset);
        $v= null;
        if($r->hasMethod($mn))
        {
            $m = $r->getMethod($mn);
            $v= $m->invoke($this);
        }
        else
            $v = $this->$offset;
      //  var_dump($v);

        return $v;
        // TODO: Implement offsetGet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
        // TODO: Implement offsetSet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset)
    {
        $this->$offset = null;
        // TODO: Implement offsetUnset() method.
    }

}