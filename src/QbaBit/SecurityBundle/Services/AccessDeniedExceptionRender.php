<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 29/10/2016
 * Time: 17:40
 */

namespace QbaBit\SecurityBundle\Services;


use QbaBit\CoreBundle\Services\ExceptionRender;
use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class AccessDeniedExceptionRender extends ExceptionRender{

    protected function getAddress()
    {
        return 'QbaBitSecurityBundle:Exceptions:_access_denied.html.twig';
    }
}