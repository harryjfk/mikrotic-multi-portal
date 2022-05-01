<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 18/12/2016
 * Time: 22:36
 */

namespace QbaBit\CoreBundle\Entity\FileUpload;


use Doctrine\Common\Collections\ArrayCollection;
use QbaBit\CoreBundle\Entity\ArrayGetter;
use QbaBit\CoreBundle\Entity\FileUploadData;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class FileUpload extends  ArrayGetter
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

    public function __construct()
    {
        $this->createVars();
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

    private function  getList()
    {
        if($this->list_files==null)
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
            $files->doUpload($this->upload_dir, $this->upload_web);

    }

}