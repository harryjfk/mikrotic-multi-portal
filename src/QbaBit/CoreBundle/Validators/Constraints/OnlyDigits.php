<?php
namespace QbaBit\CoreBundle\Validators\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class OnlyDigits extends Constraint
{
    public $message = 'Solo se permiten numeros';
}