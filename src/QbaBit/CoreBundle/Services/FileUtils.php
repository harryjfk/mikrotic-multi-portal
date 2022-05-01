<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 19/11/2016
 * Time: 21:05
 */

namespace QbaBit\CoreBundle\Services;


use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class FileUtils
{

    use ServiceContainer;

    public function getKernelFile()
    {
        return $this->container->getParameter('kernel.root_dir') . '/config/config.yml';

    }

    public function getParameterFile()
    {
        return $this->container->getParameter('kernel.root_dir') . '/config/parameters.yml';

    }

    public function setFile($function, $data)
    {
        $yaml = Yaml::dump($data, 4);
        file_put_contents($function, $yaml);
    }

    public function getFile($function)
    {


        $file = $function;
        try {
            return Yaml::parse(file_get_contents($file));
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }
        return null;
    }

    public function getVar($parent, $name)
    {
        if (!array_key_exists($name, $parent))
            return array();
        else
            if ($parent[$name] == null)
                return array();
            else
                return $parent[$name];
    }

    public function searchFile($dir, $filename, $ext = "*", &$result = array(), $subdirectories = false)
    {
        $d = dir($dir);
        if ($d !== false)
            while (false !== ($entry = $d->read()))
                if ($entry != '.' && $entry != "..") {

                    if (strpos($entry, '.') === false) {
                        if ($subdirectories == true)
                            try {
                                $this->searchFile($dir . '/' . $entry, $filename, $ext, $result, $subdirectories);
                            } catch (\Exception $e) {

                            }

                    } else {

                        $info = new \SplFileInfo($dir . '/' . $entry);
                        $added = true;

                        if ($ext != "*")
                            $added = $info->getExtension() == $ext;

                        if ($added) {

                            if (strpos($info->getFilename(), str_replace("*", "", $filename)) !== false) {
                                //  var_dump(strpos($info->getFilename(), str_replace("*", "", $filename)));
                                // var_dump($info->getFilename());
                                $result[] = $dir . '/' . $entry;
                            }


                        }


                    }
                }

    }

    function removeDir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir . "/" . $object))
                        $this->removeDir($dir . "/" . $object);
                    else
                        unlink($dir . "/" . $object);
                }
            }
            rmdir($dir);
        }
    }

    public function getFiles($dir, &$result, $subdirectories = false, $time = false)
    {
        try {
            $d = dir($dir);
        } catch (\Exception $e) {
            return false;
        }

        while (false !== ($entry = $d->read()))
            if ($entry != '.' && $entry != "..") {
                if (strpos($entry, '.') === false) {
                    if ($subdirectories == true) {
                        $r = $this->getFiles($dir . '/' . $entry, $result, $subdirectories, $time);
                        if ($r == false)
                            if ($time == true)
                                $result[$dir . '/' . $entry] = filemtime($dir . '/' . $entry);
                            else
                                $result[] = $dir . '/' . $entry;
                    }
                } else {
                    if ($time == true)
                        $result[$dir . '/' . $entry] = filemtime($dir . '/' . $entry);
                    else
                        $result[] = $dir . '/' . $entry;
                }

            }
        return true;
    }

    public function formatBytes($file, $type = null)
    {
        $size = 0;
        if (is_array($file))
            foreach ($file as $t) {
                if (file_exists($t))
                    $size += filesize($t);
            }
        else {
            if (file_exists($file))
                $size = filesize($file);
        }
        if ($type == null) {
            if ($size * .0009765625 < 1024)
                $type = "KB";
            else
                if (($size * .0009765625) * .0009765625 < 1024)
                    $type = "MB";
                else

                    if ((($size * .0009765625) * .0009765625) * .0009765625 < 1024)
                        $type = "GB";
                    else
                        $type = "KB";
        }
        switch ($type) {
            case "KB":
                $filesize = $size * .0009765625; // bytes to KB
                break;
            case "MB":
                $filesize = ($size * .0009765625) * .0009765625; // bytes to MB
                break;
            case "GB":
                $filesize = (($size * .0009765625) * .0009765625) * .0009765625; // bytes to GB
                break;
        }
        if ($filesize <= 0) {
            return $filesize = 'unknown file size';
        } else {
            return round($filesize, 2) . ' ' . $type;
        }
    }
    function copyDir( $source, $destination ) {
        if ( is_dir( $source ) ) {
            @mkdir( $destination );
            $directory = dir( $source );
            while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
                if ( $readdirectory == '.' || $readdirectory == '..' ) {
                    continue;
                }
                $PathDir = $source . '/' . $readdirectory;
                if ( is_dir( $PathDir ) ) {
                    $this->copyDir( $PathDir, $destination . '/' . $readdirectory );
                    continue;
                }
                copy( $PathDir, $destination . '/' . $readdirectory );
            }

            $directory->close();
        }else {
            copy( $source, $destination );
        }
    }
    /*public function getRouteFromPhysicalToTwig($dir,$path)
    {
      $parent=  dirname($dir);

      $path = str_replace($parent,"",$path);
      echo $path;
    }*/
}