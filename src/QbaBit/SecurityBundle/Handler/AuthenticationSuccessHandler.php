<?php

namespace QbaBit\SecurityBundle\Handler;

use QbaBit\CoreBundle\Traits\ServiceContainer;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{

    use ServiceContainer;
    protected $router;

    public function __construct(Router $router, Container $container)
    {
        $this->router = $router;
        $this->container = $container;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {

        /*$config = $this->container->get('qbabit_core.global.config')->getUsableConfig();
        if ($this->router->getContext()->getPathInfo() == '/login_check') {


            $url = "";
            if ($request->cookies->has('QbaBit_Pages')) {
                $t = json_decode($request->cookies->get('QbaBit_Pages'));
                $url = $t[count($t) - 1];
                $r_url = str_replace($request->getHttpHost(), '', str_replace('http://', '', $url));


                if ($this->router->generate('qbabit_security_register') == $r_url || $this->router->generate('qbabit_security_login') == $r_url)
                    $url = $t[count($t) - 2];
                $request->cookies->set('QbaBit_Pages', '');
            } else {
                if (array_search("ROLE_ADMINISTRATOR", $token->getUser()->getRoles()) == false) {

                $r = ($config['core']['frontend']['routes']['default']);
                $url = $this->router->generate($r['url'], $r['params']);
                    $response = new RedirectResponse($url);
            }  else
                    $response = new RedirectResponse($this->router->generate('qbabit_core_admin_homepage'));
            }


        } else {
            if (array_search("ROLE_ADMINISTRATOR", $token->getUser()->getRoles()) == false)
            {
                $r = ($config['core']['frontend']['routes']['default']);
                $url = $this->router->generate($r['url'], $r['params']);

                $response = new RedirectResponse($url."?_switch_user=".$token->getUser()->getId());


            }

               else
                $response = new RedirectResponse($this->router->generate('qbabit_core_admin_homepage'));
        }

        return $response;*/
    }
}
