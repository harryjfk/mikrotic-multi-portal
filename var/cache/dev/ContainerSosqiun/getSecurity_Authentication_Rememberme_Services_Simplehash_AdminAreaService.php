<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.admin_area' shared service.

return $this->services['security.authentication.rememberme.services.simplehash.admin_area'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => ${($_ = isset($this->services['security.user.provider.concrete.usuarios']) ? $this->services['security.user.provider.concrete.usuarios'] : $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_UsuariosService.php')) && false ?: '_'}), 'a911503a29d9b82bdb2ae4e4fedd222ac8b6562a', 'admin_area', array('lifetime' => 604800, 'path' => '/admin', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load(__DIR__.'/getMonolog_Logger_SecurityService.php')) && false ?: '_'});
