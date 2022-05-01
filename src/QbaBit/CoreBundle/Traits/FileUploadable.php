<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 31/12/2016
 * Time: 2:33
 */

namespace QbaBit\CoreBundle\Traits;
use QbaBit\CoreBundle\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\FileUpload\FileUploadData;
use QbaBit\CoreBundle\Entity\PhpFileManipulator;

/**
 * Class Enableable
 * @package QbaBit\CoreBundle\Traits
 * @generate{}
 *

 */
trait FileUploadable
{

    // ALL
    protected $upload_dir = null;
    protected $upload_web = null;

    public function setUploadDir($value)
    {
        $this->upload_dir = $value;

    }

    public function setUploadWeb($value)
    {
        $this->upload_web = $value;

    }


    private $list_files = null;

    public function createVars()
    {
        $this->list_files = new ArrayCollection();
        $vars = $this->getFileVar();
        foreach ($vars as $k => $v)
            $this->list_files->add(new FileUploadData($k, $v, $this));
    }

    public function getFileVar()
    {

    }

    public function setFileVar($name, $value)
    {

    }

    public function findField($value, $asFile = 0)
    {
        if (strpos($value, 'file') !== false)
            $value = str_replace('_file', '', $value);

        foreach ($this->getList() as $file)
            if ($file->getName() == $value)
                if ($asFile == 0)
                    return $file->getFile();
                else
                    if ($asFile == 1) return $file->getValue();
                    else
                        return $file;

        //return $asFile==3?$file->getFile():$asFile==2? $file:$file->getValue();
        return null;
    }

    protected function getList()
    {
        if ($this->list_files == null)
            $this->createVars();

        return $this->list_files;
    }
    public function __get($value)
    {

        return $this->findField($value, 0);
    }

    public function __set($name, $value)
    {

        $file = $this->findField($name, 2);
        if ($file != null)
            $file->setFile($value);
    }

    public function doUpload($upload_dir, $upload_web)
    {
        $this->setUploadDir($upload_dir);
        $this->setUploadWeb($upload_web);
        foreach ($this->getList() as $files)
            $files->doUpload($this->upload_dir, $this->upload_web,$this->getCallableName());

    }
   public function getCallableName()
   {
       return null;
   }
    public function getServiceNames()
    {

    }

    public static function generate(array $entity_orm, PhpFileManipulator $manipulator)
    {
        $keys = array_keys($entity_orm);
        $f = $entity_orm[$keys[0]];
        $fields = array();

        if (array_key_exists("fields", $f) !== false) {
            $f = $f["fields"];
            foreach ($f as $k => $t)
                if (array_key_exists("qbabit", $t) !== false) {
                    $w = $t["qbabit"]["type"];
                    if (strpos($w, "file") !== false) {

                        $fields[] = $k;
                    }
                }
        }
        if (array_key_exists("manyToOne", $f) !== false) {
            $f = $f["manyToOne"];
            foreach ($f as $k => $t)
                if (array_key_exists("qbabit", $t) !== false) {
                    $w = $t["qbabit"]["type"];
                    if (strpos($w, "file") !== false) {

                        $fields[] = $k;
                    }
                }
        }
        if(count($fields)>0)
        {
            //$manipulator->addUse(null,'QbaBit\CoreBundle\Traits\\FileUploadable');
            $class = $manipulator->getFinalLine();
            $get="";
           if($manipulator->hasLine("use FileUploadable;")==false)
               $get.="use FileUploadable; ";
            $get .= "  public function getFileVar(){return array(";
            $set = ' public function setFileVar($name, $value){$this->$name = $value;}';
            foreach ($fields as $field)
                $get .= '"' . $field . '" => $this->get' . ucwords($field) . "(),";
            $get .= ");}";

            $manipulator->addCodeByPos(null, $get.$set, $class -1);
        }
      
        //$manipulator->addCodeByPos(null, $set, $class-1);

    }
}