<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'qba_bit.repository.nauta.nauta_user_ip' shared service.

return $this->services['qba_bit.repository.nauta.nauta_user_ip'] = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}->getRepository('QbaBit\\NautaBundle\\Entity\\NautaUserIp');
