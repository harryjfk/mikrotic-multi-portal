<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 18/12/2016
 * Time: 22:36
 */

namespace QbaBit\CoreBundle\Entity\FileUpload;


use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class FileUploadData
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $value;
    /**
     * @var UploadedFile
     */
    private $file;

    /**
     * @var FileUpload
     */
    private $object;

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile($file)
    {

        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __construct($name, $value, $object)
    {

        $this->name = $name;
        $this->value = $value;
        $this->object = $object;

    }

    public function doUpload($upload_dir, $upload_web,callable $file_name_callback=null)
    {
        if ($this->getFile() == null)
            return;
        if($file_name_callback==null)
            $file_name_callback= function (UploadedFile $file) {
                return $file->getClientOriginalName();

            };
        $uploader = new FileUploader($upload_dir, $upload_web,$file_name_callback , $this->getFile());

        $result = $uploader->upload();
        $this->value = $this->getFile()->getClientOriginalName();
        $this->object->setFileVar($this->name, $this->value);
       
        
    }



}