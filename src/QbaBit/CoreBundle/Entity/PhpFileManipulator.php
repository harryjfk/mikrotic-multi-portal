<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 25/08/2017
 * Time: 15:49
 */

namespace QbaBit\CoreBundle\Entity;


use Sensio\Bundle\GeneratorBundle\Manipulator\Manipulator;

class PhpFileManipulator extends Manipulator
{
    private $filename = "";
    private $file_data;

    private function setFileName($filename)
    {
        if ($this->filename != $filename && $filename != null) {
            $this->filename = $filename;
            $this->file_data = file($filename);
        }
    }

    private function findVarsLine($field)
    {
        $w = array("start" => 0, "end" => 0);
        for ($i = 0; $i < count($this->file_data); $i++) {
            $t = $this->file_data[$i];
            if (strpos($t, '/**') !== false)
                $w["start"] = $i;

            if (strpos($t, '$' . $field) !== false) {
                $w["end"] = $i + 1;
                break;

            }
        }

        return $w;
    }

    private function findMethodLine($method, $post_amount)
    {
        $w = array("start" => 0, "end" => 0);
        for ($i = 0; $i < count($this->file_data); $i++) {
            $t = $this->file_data[$i];
            if (strpos($t, '/**') !== false)
                $w["start"] = $i;

            if (strpos($t, "public function") !== false && strpos($t, $method) !== false) {
                $w["end"] = $i + $post_amount;
                break;

            }
        }

        return $w;
    }

    public function replaceTrait($class, $trait_filename, $trait_list, $entity_orm)
    {

        $reflection = new Reflection($class);
        $filename = $reflection->getFileName();
        $this->setFileName($filename);
        $trait = new PhpFileManipulator();
        $trait->setFileName($trait_filename);
        $generated = false;
        $decrp = "";
        foreach ($trait->file_data as $t)
            if (strpos($t, ' * @generate') !== false) {
                $generated = true;
                break;
            } else
                if (strpos($t, ' * @fields') !== false) {
                    $decrp = $t;
                    break;
                }
        if ($decrp != "") {
            $fields = trim(str_replace(" * @fields{", "", str_replace("}", "", $decrp)));
            $field_array = explode(",", $fields);
            if ($this->replaceTraitFields($class, $trait->getClassName($trait_filename), $field_array))
                $this->addUse($filename, $trait->getNameSpace($trait_filename) . '\\' . $trait->getClassName($trait_filename));
            file_put_contents($filename, $this->file_data);
        } else
            if ($generated) {
                $trait_reft = new Reflection($trait->getNameSpace($trait_filename) . '\\' . $trait->getClassName($trait_filename));
                $method = $trait_reft->getMethod("generate");
                $this->addUse($filename, $trait->getNameSpace($trait_filename) . '\\' . $trait->getClassName($trait_filename));
                $method->invoke(null, $entity_orm, $this);
            }

    }

    public function hasLine($line)
    {
        foreach ($this->file_data as $l)
            if (strpos($l, $line) !== false)
                return true;
        return false;
    }

    public function setExtend($class, $extend)
    {

        $reflection = new Reflection($class);
        $filename = $reflection->getFileName();
        $this->setFileName($filename);
        $extend = new Reflection($extend);
        $this->addUse($filename, $extend->getName());
        $c = $this->getClassNamePos($filename);
        $class_name = $this->getClassName($filename);

        $this->file_data[$c] = str_replace($class_name, $class_name . " extends " . $extend->getShortName(), $this->file_data[$c]);
        file_put_contents($filename, $this->file_data);


    }


    public function addUse($filename, $namespace)
    {

        $uses = $this->getUses($filename);
        if (array_search($namespace, $uses) == false) {

            $t = $this->getNameSpacePos($filename);
            $w = array();
            for ($i = 0; $i < count($this->file_data); $i++) {
                $w[] = $this->file_data[$i];
                if ($i == $t) {
                    $w[] = "use " . $namespace . ";";
                }
            }
            $this->file_data = $w;

        }

    }

    public function getUses($filename = null)
    {
        $this->setFileName($filename);
        $namepsace = $this->getNameSpacePos($filename);
        $class = $this->getClassNamePos($filename);
        $array = array();
        for ($i = $namepsace; $i < $class; $i++)
            if (strpos($this->file_data[$i], "use") !== false)
                $array[] = trim(str_replace("use", "", str_replace(";", "", $this->file_data[$i])));

        return $array;
    }


    public function replaceTraitFields($class, $trait, $trait_fields)
    {
        $result = false;
        $reflection = new Reflection($class);
        $filename = $reflection->getFileName();
        // $this->setFileName($filename);
        $avoid = array();
        foreach ($trait_fields as $field) {

            if ($reflection->hasProperty($field)) {
                $avoid[] = $this->findVarsLine($field);
                $result = true;
            } else {

                return false;
            }


            if ($reflection->hasMethod('get' . ucwords($field))) {
                $avoid[] = $this->findMethodLine('get' . ucwords($field), 3);
                $result = true;

            }
            if ($reflection->hasMethod('set' . ucwords($field))) {
                $avoid[] = $this->findMethodLine('set' . ucwords($field), 5);
                $result = true;


            }


        }

        $this->file_data = $this->filterLines($avoid, $trait);

        return $result;

    }

    private function isRange($i, $avoid)
    {
        foreach ($avoid as $t)

            if ($i >= $t["start"] && $i <= $t["end"])
                return true;
        return false;
    }

    private function filterLines($avoid, $trait)
    {
        $added = false;
        $t = array();
        for ($i = 0; $i < count($this->file_data); $i++)
            if ($this->isRange($i, $avoid) === false)
                $t[] = $this->file_data[$i];
            else
                if ($added == false) {
                    $t[] = 'use ' . $trait . ';';
                    $added = true;
                }


        return $t;
    }

    public function getFullClassName($entity_filename)
    {
        $c = $this->getClassName($entity_filename);
        $n = $this->getNameSpace($entity_filename);
        return $n . '\\' . $c;


    }

    public function getNameSpace($entity_filename = null)
    {
        $this->setFileName($entity_filename);

        return trim(str_replace("namespace", "", str_replace(";", "", $this->file_data[$this->getNameSpacePos($entity_filename)])));
    }

    public function getNameSpacePos($entity_filename)
    {
        $this->setFileName($entity_filename);

        for ($i = 0; $i < count($this->file_data); $i++) {
            $t = $this->file_data[$i];
            if (strpos($t, "namespace") !== false)
                return $i;
        }

        return -1;
    }

    public function getFinalLine()
    {
        for ($i = count($this->file_data) - 1; $i > 0; $i--)
            if (trim($this->file_data[$i]) == "}")
                return $i;
        return -1;
    }

    public function getClassNamePos($entity_filename = null)
    {
        $this->setFileName($entity_filename);

        for ($i = 0; $i < count($this->file_data); $i++) {
            $t = $this->file_data[$i];
            if (strpos($t, "class") !== false || strpos($t, "trait") !== false)
                return $i;
        }

        return -1;
    }

    public function getClassName($entity_filename)
    {
        $this->setFileName($entity_filename);
        $c = $this->file_data[$this->getClassNamePos($entity_filename)];
        if (strpos($c, "extends") !== false)
            $c = substr($c, 0, strpos($c, "extends"));
        return trim(str_replace("trait", "", str_replace("class", "", str_replace(";", "", str_replace("{", "", $c)))));

    }
    public function getExtendedClass($entity_filename)
    {
        $this->setFileName($entity_filename);
        $c = $this->file_data[$this->getClassNamePos($entity_filename)];
        if (strpos($c, "extends") !== false)
            $c = substr($c, strpos($c, "extends")+8 );
        return trim(str_replace("trait", "", str_replace("class", "", str_replace(";", "", str_replace("{", "", $c)))));

    }
    public function addCodeByPos($class, $code, $pos)
    {
        if ($class != null) {
            $reflection = new Reflection($class);
            $this->setFileName($reflection->getFileName());

        }


        $newfile = array();
        for ($i = 0; $i <= $pos; $i++)
            $newfile[] = $this->file_data[$i];
        $newfile[] = $code;

        for ($i = $pos + 1; $i < count($this->file_data); $i++)
            $newfile[] = $this->file_data[$i];

        $this->file_data = $newfile;
        file_put_contents($this->filename, implode('', $newfile));

    }

    public function getMethods($entity_filename)
    {
        $result = array();
        $this->setFileName($entity_filename);
        foreach ($this->file_data as $data)
            if (strpos($data, "function") !== false) {
                $p1 = strpos($data, "(");
                $p2 = strpos($data, ")");

                $params = substr($data, $p1 + 1, ($p2 - $p1) - 1);
                $parm = explode(",", $params);
                $f = strpos($data, "function");
                $name = substr($data, $f + 8, $p1 - ($f + 8));
                $type = substr($data, 0, $f);
                $result[trim($name)] = array('params' => $parm, "type" => trim($type));

            }
        return $result;

    }
    /*
     *  $method = $reflection->getMethod($method);
        $lines = array_slice($file, $method->getStartLine() - 1, $method->getEndLine() - $method->getStartLine() + 1);
     *   $this->setCode(token_get_all('<?php '.implode('', $lines)), $method->getStartLine());
       while ($token = $this->next()) {
           
           // $bundles
           if (T_VARIABLE !== $token[0] || '$bundles' !== $token[1]) {
               continue;
           }

           // =
           $this->next();

           // array start with traditional or short syntax
          $token = $this->next();
           if (T_ARRAY !== $token[0] && '[' !== $this->value($token)) {
               return false;
           }
         
           // add the bundle at the end of the array
           while ($token = $this->next()) {
               // look for ); or ];
               var_dump($token);
              if (')' !== $this->value($token) && ']' !== $this->value($token)) {
                   continue;
               }

               if (';' !== $this->value($this->peek())) {
                   continue;
               }

               $this->next();

               $leadingContent = implode('', array_slice($file, 0, $this->line));

               // trim semicolon
               $leadingContent = rtrim(rtrim($leadingContent), ';');

               // We want to match ) & ]
               $closingSymbolRegex = '#(\)|])$#';

               // get closing symbol used
               preg_match($closingSymbolRegex, $leadingContent, $matches);
               $closingSymbol = $matches[0];

               // remove last close parentheses
               $leadingContent = rtrim(preg_replace($closingSymbolRegex, '', rtrim($leadingContent)));

               if (substr($leadingContent, -1) !== '(' && substr($leadingContent, -1) !== '[' ) {
                   // end of leading content is not open parentheses or bracket, then assume that array contains at least one element
                   $leadingContent = rtrim($leadingContent, ',').',';
               }

               $lines = array_merge(
                   array($leadingContent, "\n"),
                   array(str_repeat(' ', 12), sprintf('new %s(),', $bundle), "\n"),
                   array(str_repeat(' ', 8), $closingSymbol.';', "\n"),
                   array_slice($file, $this->line)
               );

               file_put_contents($filename, implode('', $lines));

               return true;
           }
       }*/
}