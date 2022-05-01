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

class FileUploader
{

    private $upload_dir = null;
    private $upload_web = null;
    private $value;
    private $file =null;

    private $temp_file;
    private $file_name_callback;
    public function __construct($upload_dir, $upload_web, callable $file_name_callback, UploadedFile $file = null)
    {
        $this->file_name_callback =$file_name_callback;

        $this->setUploadDir($upload_dir);
        $this->setUploadWeb($upload_web);
        $this->setFile($file);
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        if($file==null)
            return ;
        $this->file = $file;


       if ($this->value != '') {
            // store the old name to delete after the update
            $this->temp_file = $this->value;
            $this->value = call_user_func($this->file_name_callback,$this->file);
        } else {
            $this->value =call_user_func($this->file_name_callback,$this->file);
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {

        return $this->file;
    }

    public function getAbsolutePath()
    {
        return null === $this->value
            ? null
            : $this->getUploadRootDirPath() . '/' . $this->value;
    }

    public function getWebPath()
    {
        return null === $this->value
            ? null
            : $this->getUploadDirPath() . '/' . $this->value;
    }

    public function setUploadDir($value)
    {

        $this->upload_dir = $value;

    }

    public function setUploadWeb($value)
    {
        $this->upload_web = $value;

    }

    protected function getUploadRootDirPath()
    {
        return $this->upload_dir;

    }

    protected function getUploadDirPath()
    {
        return $this->upload_web;
    }

    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }


        try
        {
            // do whatever you want to generate a unique name
            $filename = basename(call_user_func($this->file_name_callback,$this->file), '.' . $this->getFile()->getClientOriginalExtension());
            $this->value = ($filename . '.' . $this->getFile()->getClientOriginalExtension());

           /* if (file_exists($this->getUploadRootDirPath() . '/' . $this->value) == 1) {
                $date = date('-d_M_Y_H:i');
                $this->value = ($filename . $date . '.' . $this->getFile()->getClientOriginalExtension());
            }*/


            $this->getFile()->move($this->getUploadRootDirPath(), $this->value);

            if (isset($this->temp_file) && $this->temp_file != '') {
                // delete the old image

                if (file_exists($this->getUploadRootDirPath() . '/' . $this->temp_file))
                    unlink($this->getUploadRootDirPath() . '/' . $this->temp_file);
                // clear the temp image path
                $this->temp_file = null;
            }
        }
        catch (\Exception $e)
        {
            $filename = basename(call_user_func($this->file_name_callback,$this->file), '.' . $this->getFile()->getClientOriginalExtension());
            $this->value = ($filename . '.' . $this->getFile()->getClientOriginalExtension());

        }
            
        $this->file = null;
        return $this->value;
    }


    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }
}