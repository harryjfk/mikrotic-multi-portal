<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 11/12/2016
 * Time: 18:22
 */

namespace QbaBit\CoreBundle\Transformers\Forms;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use QbaBit\CoreBundle\Entity\FileUploader;
use QbaBit\CoreBundle\Entity\Reflection;
use QbaBit\OptionsBundle\Entity\InnerColumn;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;

class CollectionToArrayTransformer implements DataTransformerInterface
{

    private $delete;

    /**
     * @var Form
     */
    private $form;

    /**
     * @var $EntityManager
     */
    private $em;

    /**
     * @var Container $container
     */
    private $container;



    public function __construct(Form $form, EntityManager $em, callable $delete,Container $container)
    {
        $this->form = $form;
        $this->delete = $delete;
        $this->em = $em;
        $this->container = $container;
    }

    public function setForm(Form $form)
    {
        $this->form = $form;
    }

    /**
     * Transforms a value from the original representation to a transformed representation.
     *
     * This method is called on two occasions inside a form field:
     *
     * 1. When the form field is initialized with the data attached from the datasource (object or array).
     * 2. When data from a request is submitted using {@link Form::submit()} to transform the new input data
     *    back into the renderable format. For example if you have a date field and submit '2009-10-10'
     *    you might accept this value because its easily parsed, but the transformer still writes back
     *    "2009/10/10" onto the form field (for further displaying or other purposes).
     *
     * This method must be able to deal with empty values. Usually this will
     * be NULL, but depending on your implementation other empty values are
     * possible as well (such as empty strings). The reasoning behind this is
     * that value transformers must be chainable. If the transform() method
     * of the first value transformer outputs NULL, the second value transformer
     * must be able to process that value.
     *
     * By convention, transform() should return an empty string if NULL is
     * passed.
     *
     * @param PersistentCollection $value The value in the original representation
     *
     * @return mixed The value in the transformed representation
     *
     * @throws TransformationFailedException When the transformation fails.
     */
    public function transform($value)
    {
        if (null === $value) {
            return array();
        }

        // For cases when the collection getter returns $collection->toArray()
        // in order to prevent modifications of the returned collection
        if (is_array($value)) {
            return $value;
        }

        if (!$value instanceof Collection) {
            throw new TransformationFailedException('Expected a Doctrine\Common\Collections\Collection object.');
        }

        return $value->toArray();
        /*
                $result = array();
                foreach ($value as $v) {
                    $file = (call_user_func($this->retrieve_file_name, $v));
                    $info = new \SplFileInfo($file);
                    $default = (call_user_func($this->default, $v,$this->em));
                    $t = array('name' => $file, 'type' => $info->getExtension(), 'default' => $default);
                    $result[] = $t;
                }

                return $result;*/
    }

    /**
     * Transforms a value from the transformed representation to its original
     * representation.
     *
     * This method is called when {@link Form::submit()} is called to transform the requests tainted data
     * into an acceptable format for your data processing/model layer.
     *
     * This method must be able to deal with empty values. Usually this will
     * be an empty string, but depending on your implementation other empty
     * values are possible as well (such as NULL). The reasoning behind
     * this is that value transformers must be chainable. If the
     * reverseTransform() method of the first value transformer outputs an
     * empty string, the second value transformer must be able to process that
     * value.
     *
     * By convention, reverseTransform() should return NULL if an empty string
     * is passed.
     *
     * @param mixed $value The value in the transformed representation
     *
     * @return mixed The value in the original representation
     *
     * @throws TransformationFailedException When the transformation fails.
     */


    public function reverseTransform($value)
    {

        $object = $this->form->getParent()->getData();

        $reflection = new Reflection($object);

        $get_name = 'get' . ucwords($this->form->getName());
        $get_name = $this->getReflectedType($get_name);
        $get_method = $reflection->getMethod($get_name);
        $original_vars =  $get_method->invoke($object);
        if($original_vars==null)
            $original_vars = new ArrayCollection();
        $set_name = ucwords($this->form->getName());
        $set_name = $this->getReflectedType($set_name);
        if($set_name[strlen($set_name) - 1]=="s")
        $set_name = substr($set_name, 0, strlen($set_name) - 1);
        $set_name = 'add' . $set_name;
        $set_method = $reflection->getMethod($set_name);

        $result = new ArrayCollection();


        

        foreach ($value as $k => $v) {
            $t  = $this->getJoinField($object,$v);
        //   $traits = $this->container->get('qbabit_core.global.config')->getTraitNames($v);
            $reflection1 = new Reflection($v);
            if (array_search('QbaBit\CoreBundle\Traits\FileUploadable',$reflection1->getTraitNames()) !== false)
            {

                $w= $v->getServiceNames();
                $web = $this->container->get('qbabit_core.global.config')->getConfigValue($w['web']);
                $dir = $this->container->get('qbabit_core.global.config')->getConfigValue($w['dir']);

                $v->doUpload($dir, $web);

            }
            $set_method->invoke($object, $t);
            // echo $k;
            /*  $set_parent = ucwords();
            $set_parent = substr($set_parent, 0, strlen($set_parent) - 1);
            $set_parent = 'set' . $set_parent;
            $set_parent_method = $set_method->getParameters()[0]->getClass()->getMethod($set_parent);
            $set_parent_method->invoke($v, $object);


            //   $exits = (call_user_func($this->search, $original_vars, $v));
            /* if ($exits != null)
           {
               $result->add($exits);
               call_user_func($this->new, $exits, $dat, null);
           }

           else {
               $file = $this->hasFile($dat->name);
               if ($file != null) {
                   $filename = call_user_func($this->upload_file_name, $file);
                   $set_parent = ucwords($this->form->getParent()->getName());
                   $set_parent = substr($set_parent, 0, strlen($set_parent) - 1);
                   $set_parent = 'set' . $set_parent;
                   $set_parent_method = $set_method->getParameters()[0]->getClass()->getMethod($set_parent);
                   $child_object = $set_method->getParameters()[0]->getClass()->newInstanceWithoutConstructor();
                   $set_parent_method->invoke($child_object, $object);
                   call_user_func($this->new, $child_object, $dat, $filename);
                   $result->add($child_object);
                   $uploader = new FileUploader($this->upload_dir, $this->upload_web, $this->upload_file_name, $file);
                   $uploader->upload();
               }
           }*/
        }
        foreach ($original_vars as $var)
        if($var!=null){
            $found = false;
            foreach ($value as $v)
                if ($v->getId() == $var->getId()) {
                    $found = true;
                    break;
                }
            if ($found == false) {
                call_user_func($this->delete, $var);
                $this->em->remove($var);

            }
        }

        return new ArrayCollection($value);
    }

    private function getReflectedType($str)
    {
        return strtolower(str_replace('_', '', $str));

    }

    private function getJoinField($object, $child)
    {
        $reflection = new Reflection($object);

        $reflection1 = new Reflection($child);
        foreach($reflection1->getProperties() as $t)
        {
         try
         {
             $w = str_replace(' @var','',$t->getDocComment());
             $w = str_replace('*','',$w);
             $w = str_replace('/','',$w);
             if(trim($w)=='\\'.trim($reflection->getName()))
             {
                 $t= 'set'.ucwords($t->getName());
                 $reflection1->getMethod($t)->invoke($child,$object);


                 return $child;
             }
         }
         catch(\Exception $e){

         }


        }return null;
    }
}