<?php
namespace QbaBit\CoreBundle\Validators\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class OnlyLetter extends Constraint
{
    public $message = 'Solo se permite introducir letras';
}