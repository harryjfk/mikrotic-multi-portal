<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_admin_pay' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\AdminController::payAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta_billing/pay',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts/del_list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_options' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaOptionsController::newEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/options/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qbabit_nauta_nauta_accounts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBitNautaBundle:Front/NautaAccounts:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nauta/nauta_accounts/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_user_ip_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_user_ip/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_user_ip_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_user_ip/del_list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_user_ip_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_user_ip/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_user_ip_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_user_ip/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_user_ip_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_user_ip/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_tipo_cuenta_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/tipo_cuenta/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_tipo_cuenta_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/tipo_cuenta/del_list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_tipo_cuenta_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/tipo_cuenta/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_tipo_cuenta_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/tipo_cuenta/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_tipo_cuenta_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/tipo_cuenta/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qbabit_nauta_nauta_user_ip' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBitNautaBundle:Front/NautaUserIp:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nauta/nauta_user_ip/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_log_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts_log/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_log_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts_log/del_list/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_log_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts_log/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_log_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts_log/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_nauta_accounts_log_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/nauta/nauta_accounts_log/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qbabit_nauta_nauta_accounts_log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBitNautaBundle:Front/NautaAccountsLog:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nauta/nauta_accounts_log/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_nauta_index' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'QbaBit\\NautaBundle\\Controller\\Front\\FrontController::indexAction',    'type' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/delete_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_language_nav' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::navAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/nav',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_language_set' => array (  0 =>   array (    0 => 'lang',  ),  1 =>   array (    '_controller' => 'QbaBit\\LanguageBundle\\Controller\\DefaultController::setAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lang',    ),    1 =>     array (      0 => 'text',      1 => '/language/set',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qbabit_lavadoo_homepage' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lavadp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_grid_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\Modules\\QbaBitFormGridController::dataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/core/admin/grid/data/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_install_modules' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/modules',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_install_modules_view' => array (  0 =>   array (    0 => 'id',    1 => 'version',  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'version',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/modules/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_install_modules_install' => array (  0 =>   array (    0 => 'id',    1 => 'version',  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::installAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'version',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/modules/install',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_install_modules_install_selected' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::installSelectedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/modules/install_selected',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_install_modules_uninstall' => array (  0 =>   array (    0 => 'id',    1 => 'version',  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::uninstallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'version',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/modules/uninstall',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_system_manager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/systemManager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_system_manager_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/systemManager/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_system_manager_restore' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::restoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/systemManager/restore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_core_system_manager_make' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::makeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/systemManager/make',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter_runtime' => array (  0 =>   array (    0 => 'filter',    1 => 'hash',    2 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterRuntimeAction',  ),  2 =>   array (    'filter' => '[A-z0-9_-]*',    'path' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'hash',    ),    2 =>     array (      0 => 'text',      1 => '/rc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_-]*',      3 => 'filter',    ),    4 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter' => array (  0 =>   array (    0 => 'filter',    1 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterAction',  ),  2 =>   array (    'filter' => '[A-z0-9_-]*',    'path' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_-]*',      3 => 'filter',    ),    2 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_group_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/groups/admin/security/group/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_group_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/groups/admin/security/group/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_group_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/groups/admin/security/group',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_group_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user/groups/admin/security/group',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_group_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/groups/admin/security/group/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_admin_security_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_admin_security_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/security/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/security/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/security/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_admin_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_user_delete_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::deleteListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/security/user/delete_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_security_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/security/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_admin_security_nav' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::navAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/security/nav',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_admin_recovery_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::recovery_confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/security/recovery_confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_recovery_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::rememberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recovery_mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::recovery_confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recovery_confirm/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qba_bit_security_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
