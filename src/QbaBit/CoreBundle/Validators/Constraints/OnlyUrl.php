<?php
namespace QbaBit\CoreBundle\Validators\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class OnlyUrl extends Constraint
{
    public $message = 'Introduzca una direccion URL válida';
}