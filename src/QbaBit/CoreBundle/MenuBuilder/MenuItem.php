<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 20/11/2016
 * Time: 0:17
 */

namespace QbaBit\CoreBundle\MenuBuilder;

use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\CoreBundle\Traits\Nameable;
use QbaBit\CoreBundle\Traits\Treeable;


/**
 * Class MenuItem
 * @package QbaBit\CoreBundle\MenuBuilder
 */
class MenuItem
{


    use Treeable;
    /**
     * @var
     */
    private $priority;
    /**
     * @var
     */
    private $text;
    /**
     * @var
     */
    private $innerHtml;
    /**
     * @var int
     */
    private $index;


    private $ref;

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }


    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }


    /**
     * @var string
     */
    private $img;

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getChilds()
    {
        return $this->childs;
    }
    protected function copyFromArray($array)
    {
       foreach ($array as $k=>$v)
           if($k!="childs" && $k!="parent")
           $this->$k = $v;
    }

    public function __construct(array $array)
    {
        $this->childs = new ArrayCollection();
        $this->parent = new ArrayCollection();
        $this->copyFromArray($array);
      /*  $this->getData();
        $this->img = $img;
        $this->text = $text;
        $this->type = $type;*/

    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getParent()
    {

        return $this->parent;

    }

    /**
     * @param MenuItem $parent
     */
    public function setParent(MenuItem $parent=null)
    {
        $this->parent = $parent;
        if($this->parent==null)
            $this->setIndex(0);
        else
        {
            $this->setIndex($parent->getIndex());
            $parent->addChild($this);
        }


        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInnerHtml()
    {
        return $this->innerHtml;
    }

    /**
     * @param mixed $innerHtml
     */
    public function setInnerHtml($innerHtml)
    {
        $this->innerHtml = $innerHtml;
        return $this;
    }

    public function addParentMenuItem(MenuItem $menuItem = null)
    {
        if ($menuItem == null)
            $menuItem = new MenuItem("");
        $this->parent->add($menuItem);
        $menuItem->controled = $this;
        return $menuItem;
    }

    public function addChildMenuItem(MenuItem $menuItem = null)
    {
        if ($menuItem == null) {
            $menuItem = new MenuItem();
            $menuItem->index = $this->index + 1;
        }

        $this->childs->add($menuItem);
        $menuItem->controled = $this;
        return $menuItem;
    }

    /**
     * @var
     */
    protected $controled;

    /**
     * @return MenuItem
     */
    public function end()
    {
        return $this->controled;
    }

    /**
     *
     */
    public function getData()
    {

    }

    public function getParentModule()
    {
        return null;
    }


    private $moveable;

    public function setMoveable($moveable)
    {
        $this->moveable = $moveable;
    }

    public function getMoveable()
    {
        return $this->moveable;
    }

    public function getLinkedMenu()
    {
        return $this->linkedMenu;
    }

    private $linkedMenu = false;

    public function setLinkedMenu($linkedMenu)
    {
        $this->linkedMenu = $linkedMenu;
    }

    public function getType()
    {
        return $this->type;
    }

    private $type;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function asTreeJson()
    {
        $result = array('id' => $this->getId(), 'name' => $this->getText(), 'type' => $this->getType(), 'href' => $this->getRef(), 'moveable' => $this->getMoveable(), 'linked' => $this->getLinkedMenu());
        $childs = array();
        foreach ($this->childs as $c)
            $childs[] = $c->asTreeJson();
        $result['children'] = $childs;
        return $result;
    }

    public function getName()
    {
        return $this->getText();
    }

    public function getId()
    {
        if ($this->id == null)
            return $this->getRef();
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}