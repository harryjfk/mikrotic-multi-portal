<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.usuarios' shared service.

return $this->services['security.user.provider.concrete.usuarios'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, 'QbaBit\\SecurityBundle\\Entity\\SecurityUser', 'email', NULL);