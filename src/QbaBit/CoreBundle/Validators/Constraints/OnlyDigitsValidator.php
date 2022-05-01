<?php
namespace QbaBit\CoreBundle\Validators\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class OnlyDigitsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
       /* if (!preg_match('/^[0-9]+$/', $value, $matches)) {
           $this->context->addViolation($constraint->message,['%string%'=> $value]);
             
        }*/
    }
}