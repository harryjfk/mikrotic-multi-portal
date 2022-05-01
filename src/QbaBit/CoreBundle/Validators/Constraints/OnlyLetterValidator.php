<?php
namespace QbaBit\CoreBundle\Validators\Constraints;


use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class OnlyLetterValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        
        /*if (!preg_match('/^[a-zA-Z]+$/', $value, $matches)) {
            $this->context->addViolation($constraint->message,['%string%'=> $value]);
        }*/
    }
}