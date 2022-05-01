<?php
namespace QbaBit\CoreBundle\Validators\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class OnlyMail extends Constraint
{
    public $message = 'Introduzca una direccion de correo válida';
}