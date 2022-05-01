<?php
/**
 * Created by PhpStorm.
 * User: harry
 * Date: 1/02/18
 * Time: 17:42
 */

namespace QbaBit\CoreBundle\Entity\Installer;


use Symfony\Component\DependencyInjection\ContainerInterface;

interface QbInstallerInterface
{

    public function install($exampleData = true);

    public function uninstall($keepData);

    public function configure();

    public function setUp(ContainerInterface $container);
}