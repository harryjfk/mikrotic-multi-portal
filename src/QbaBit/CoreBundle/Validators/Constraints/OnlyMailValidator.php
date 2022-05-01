<?php
namespace QbaBit\CoreBundle\Validators\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class OnlyMailValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {

        $f = false;

        if(strpos($value,'@')===false)
            $f=true;
        else
        {
           $v=  explode('@',$value);
            if(count($v)==1)
                $f=true;
            else
            {
                if($v[0]=="")
                    $f=true;
                else
                    if(strpos($v[1],",")==false)
                        $f= true;
            }
        }

        if ($f) {
            $this->context->addViolation($constraint->message,['%string%'=> $value]);
        }
    }
}