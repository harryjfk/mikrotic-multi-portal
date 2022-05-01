<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // qba_bit_nauta_admin_homepage
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'qba_bit_nauta_admin_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/nauta')) {
            // qba_bit_nauta_admin_pay
            if (0 === strpos($pathinfo, '/admin/nauta_billing/pay') && preg_match('#^/admin/nauta_billing/pay/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_admin_pay')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\AdminController::payAction',));
            }

            if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts')) {
                // qba_bit_nauta_nauta_accounts_list
                if ('/admin/nauta/nauta_accounts/list' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::indexAction',  '_route' => 'qba_bit_nauta_nauta_accounts_list',);
                }

                // qba_bit_nauta_nauta_accounts_delete_list
                if ('/admin/nauta/nauta_accounts/del_list' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::deleteListAction',  '_route' => 'qba_bit_nauta_nauta_accounts_delete_list',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_nauta_nauta_accounts_delete_list'));
                    }

                    return $ret;
                }

                // qba_bit_nauta_nauta_accounts_delete
                if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts/delete') && preg_match('#^/admin/nauta/nauta_accounts/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_accounts_delete')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::deleteAction',));
                }

                // qba_bit_nauta_nauta_accounts_new
                if ('/admin/nauta/nauta_accounts/new' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::newAction',  '_route' => 'qba_bit_nauta_nauta_accounts_new',);
                }

                // qba_bit_nauta_nauta_accounts_edit
                if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts/edit') && preg_match('#^/admin/nauta/nauta_accounts/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_accounts_edit')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsController::editAction',));
                }

                if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts_log')) {
                    // qba_bit_nauta_nauta_accounts_log_list
                    if ('/admin/nauta/nauta_accounts_log/list' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::indexAction',  '_route' => 'qba_bit_nauta_nauta_accounts_log_list',);
                    }

                    // qba_bit_nauta_nauta_accounts_log_delete_list
                    if ('/admin/nauta/nauta_accounts_log/del_list' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::deleteListAction',  '_route' => 'qba_bit_nauta_nauta_accounts_log_delete_list',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_nauta_nauta_accounts_log_delete_list'));
                        }

                        return $ret;
                    }

                    // qba_bit_nauta_nauta_accounts_log_delete
                    if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts_log/delete') && preg_match('#^/admin/nauta/nauta_accounts_log/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_accounts_log_delete')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::deleteAction',));
                    }

                    // qba_bit_nauta_nauta_accounts_log_new
                    if ('/admin/nauta/nauta_accounts_log/new' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::newAction',  '_route' => 'qba_bit_nauta_nauta_accounts_log_new',);
                    }

                    // qba_bit_nauta_nauta_accounts_log_edit
                    if (0 === strpos($pathinfo, '/admin/nauta/nauta_accounts_log/edit') && preg_match('#^/admin/nauta/nauta_accounts_log/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_accounts_log_edit')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaAccountsLogController::editAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/nauta/nauta_user_ip')) {
                // qba_bit_nauta_nauta_user_ip_list
                if ('/admin/nauta/nauta_user_ip/list' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::indexAction',  '_route' => 'qba_bit_nauta_nauta_user_ip_list',);
                }

                // qba_bit_nauta_nauta_user_ip_delete_list
                if ('/admin/nauta/nauta_user_ip/del_list' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::deleteListAction',  '_route' => 'qba_bit_nauta_nauta_user_ip_delete_list',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_nauta_nauta_user_ip_delete_list'));
                    }

                    return $ret;
                }

                // qba_bit_nauta_nauta_user_ip_delete
                if (0 === strpos($pathinfo, '/admin/nauta/nauta_user_ip/delete') && preg_match('#^/admin/nauta/nauta_user_ip/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_user_ip_delete')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::deleteAction',));
                }

                // qba_bit_nauta_nauta_user_ip_new
                if ('/admin/nauta/nauta_user_ip/new' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::newAction',  '_route' => 'qba_bit_nauta_nauta_user_ip_new',);
                }

                // qba_bit_nauta_nauta_user_ip_edit
                if (0 === strpos($pathinfo, '/admin/nauta/nauta_user_ip/edit') && preg_match('#^/admin/nauta/nauta_user_ip/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_user_ip_edit')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaUserIpController::editAction',));
                }

            }

            // qba_bit_nauta_nauta_options
            if ('/admin/nauta/options' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaOptionsController::newEditAction',  '_route' => 'qba_bit_nauta_nauta_options',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_nauta_nauta_options'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/admin/nauta/tipo_cuenta')) {
                // qba_bit_nauta_nauta_tipo_cuenta_list
                if ('/admin/nauta/tipo_cuenta/list' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::indexAction',  '_route' => 'qba_bit_nauta_nauta_tipo_cuenta_list',);
                }

                // qba_bit_nauta_nauta_tipo_cuenta_delete_list
                if ('/admin/nauta/tipo_cuenta/del_list' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::deleteListAction',  '_route' => 'qba_bit_nauta_nauta_tipo_cuenta_delete_list',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_nauta_nauta_tipo_cuenta_delete_list'));
                    }

                    return $ret;
                }

                // qba_bit_nauta_nauta_tipo_cuenta_delete
                if (0 === strpos($pathinfo, '/admin/nauta/tipo_cuenta/delete') && preg_match('#^/admin/nauta/tipo_cuenta/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_tipo_cuenta_delete')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::deleteAction',));
                }

                // qba_bit_nauta_nauta_tipo_cuenta_new
                if ('/admin/nauta/tipo_cuenta/new' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::newAction',  '_route' => 'qba_bit_nauta_nauta_tipo_cuenta_new',);
                }

                // qba_bit_nauta_nauta_tipo_cuenta_edit
                if (0 === strpos($pathinfo, '/admin/nauta/tipo_cuenta/edit') && preg_match('#^/admin/nauta/tipo_cuenta/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_nauta_tipo_cuenta_edit')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Admin\\NautaTipoCuentaController::editAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/nauta/nauta_accounts')) {
            // qbabit_nauta_nauta_accounts
            if ('/nauta/nauta_accounts' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'QbaBitNautaBundle:Front/NautaAccounts:index',  '_route' => 'qbabit_nauta_nauta_accounts',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qbabit_nauta_nauta_accounts'));
                }

                return $ret;
            }

            // qbabit_nauta_nauta_accounts_log
            if ('/nauta/nauta_accounts_log' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'QbaBitNautaBundle:Front/NautaAccountsLog:index',  '_route' => 'qbabit_nauta_nauta_accounts_log',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qbabit_nauta_nauta_accounts_log'));
                }

                return $ret;
            }

        }

        // qbabit_nauta_nauta_user_ip
        if ('/nauta/nauta_user_ip' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'QbaBitNautaBundle:Front/NautaUserIp:index',  '_route' => 'qbabit_nauta_nauta_user_ip',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qbabit_nauta_nauta_user_ip'));
            }

            return $ret;
        }

        // qba_bit_nauta_index
        if (preg_match('#^/(?P<type>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_nauta_index')), array (  '_controller' => 'QbaBit\\NautaBundle\\Controller\\Front\\FrontController::indexAction',  'type' => '',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/l')) {
                if (0 === strpos($pathinfo, '/admin/language')) {
                    // qba_bit_language_language_list
                    if ('/admin/language/list' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::indexAction',  '_route' => 'qba_bit_language_language_list',);
                    }

                    // qba_bit_language_language_edit
                    if (0 === strpos($pathinfo, '/admin/language/edit') && preg_match('#^/admin/language/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_language_language_edit')), array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::editAction',));
                    }

                    // qba_bit_language_language_new
                    if ('/admin/language/new' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::newAction',  '_route' => 'qba_bit_language_language_new',);
                    }

                    // qba_bit_language_language_nav
                    if ('/admin/language/nav' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::navAction',  '_route' => 'qba_bit_language_language_nav',);
                    }

                    if (0 === strpos($pathinfo, '/admin/language/delete')) {
                        // qba_bit_language_language_delete
                        if (preg_match('#^/admin/language/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_language_language_delete')), array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::deleteAction',));
                        }

                        // qba_bit_language_language_delete_list
                        if ('/admin/language/delete_list' === $pathinfo) {
                            return array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\Admin\\LanguageController::deleteListAction',  '_route' => 'qba_bit_language_language_delete_list',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // qba_bit_admin_security_login_check
                    if ('/admin/login_check' === $pathinfo) {
                        return array('_route' => 'qba_bit_admin_security_login_check');
                    }

                    // qba_bit_admin_security_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::loginAction',  '_route' => 'qba_bit_admin_security_login',);
                    }

                }

                // qba_bit_admin_security_logout
                if ('/admin/logout' === $pathinfo) {
                    return array('_route' => 'qba_bit_admin_security_logout');
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/modules')) {
                // qba_bit_core_install_modules
                if ('/admin/modules' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::indexAction',  '_route' => 'qba_bit_core_install_modules',);
                }

                // qba_bit_core_install_modules_view
                if (0 === strpos($pathinfo, '/admin/modules/view') && preg_match('#^/admin/modules/view/(?P<id>[^/]++)/(?P<version>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_core_install_modules_view')), array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/admin/modules/install')) {
                    // qba_bit_core_install_modules_install
                    if (preg_match('#^/admin/modules/install/(?P<id>[^/]++)/(?P<version>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_core_install_modules_install')), array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::installAction',));
                    }

                    // qba_bit_core_install_modules_install_selected
                    if ('/admin/modules/install_selected' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::installSelectedAction',  '_route' => 'qba_bit_core_install_modules_install_selected',);
                    }

                }

                // qba_bit_core_install_modules_uninstall
                if (0 === strpos($pathinfo, '/admin/modules/uninstall') && preg_match('#^/admin/modules/uninstall/(?P<id>[^/]++)/(?P<version>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_core_install_modules_uninstall')), array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\InstallerController::uninstallAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/systemManager')) {
                // qba_bit_core_system_manager
                if ('/admin/systemManager' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::indexAction',  '_route' => 'qba_bit_core_system_manager',);
                }

                // qba_bit_core_system_manager_show
                if (0 === strpos($pathinfo, '/admin/systemManager/view') && preg_match('#^/admin/systemManager/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_core_system_manager_show')), array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::viewAction',));
                }

                // qba_bit_core_system_manager_restore
                if (0 === strpos($pathinfo, '/admin/systemManager/restore') && preg_match('#^/admin/systemManager/restore/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_core_system_manager_restore')), array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::restoreAction',));
                }

                // qba_bit_core_system_manager_make
                if ('/admin/systemManager/make' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\SystemManagerController::makeAction',  '_route' => 'qba_bit_core_system_manager_make',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/security')) {
                if (0 === strpos($pathinfo, '/admin/security/user')) {
                    // qba_bit_security_security_user_list
                    if ('/admin/security/user/list' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::indexAction',  '_route' => 'qba_bit_security_security_user_list',);
                    }

                    // qba_bit_security_security_user_new
                    if ('/admin/security/user/new' === $pathinfo) {
                        return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::newAction',  '_route' => 'qba_bit_security_security_user_new',);
                    }

                    // qba_bit_security_security_user_edit
                    if (0 === strpos($pathinfo, '/admin/security/user/edit') && preg_match('#^/admin/security/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_security_security_user_edit')), array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::editAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/security/user/delete')) {
                        // qba_bit_security_security_user_delete_list
                        if ('/admin/security/user/delete_user' === $pathinfo) {
                            return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::deleteListAction',  '_route' => 'qba_bit_security_security_user_delete_list',);
                        }

                        // qba_bit_security_security_user_delete
                        if (preg_match('#^/admin/security/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_security_security_user_delete')), array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::deleteAction',));
                        }

                    }

                }

                // qba_bit_admin_security_nav
                if ('/admin/security/nav' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::navAction',  '_route' => 'qba_bit_admin_security_nav',);
                }

                // qba_bit_security_admin_recovery_confirm
                if ('/admin/security/recovery_confirm' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\UserController::recovery_confirmAction',  '_route' => 'qba_bit_security_admin_recovery_confirm',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/user/groups/admin/security/group')) {
                // qba_bit_security_security_group_list
                if ('/admin/user/groups/admin/security/group/list' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::indexAction',  '_route' => 'qba_bit_security_security_group_list',);
                }

                // qba_bit_security_security_group_new
                if ('/admin/user/groups/admin/security/group/new' === $pathinfo) {
                    return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::newAction',  '_route' => 'qba_bit_security_security_group_new',);
                }

                // qba_bit_security_security_group_edit
                if (preg_match('#^/admin/user/groups/admin/security/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_security_security_group_edit')), array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::editAction',));
                }

                // qba_bit_security_security_group_delete
                if (preg_match('#^/admin/user/groups/admin/security/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_security_security_group_delete')), array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::deleteAction',));
                }

                // qba_bit_security_security_group_delete_list
                if ('/admin/user/groups/admin/security/group/delete' === $pathinfo) {
                    if (!in_array($requestMethod, array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_qba_bit_security_security_group_delete_list;
                    }

                    return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\Admin\\GroupsController::deleteListAction',  '_route' => 'qba_bit_security_security_group_delete_list',);
                }
                not_qba_bit_security_security_group_delete_list:

            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            // qba_bit_language_set
            if (0 === strpos($pathinfo, '/language/set') && preg_match('#^/language/set/(?P<lang>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'qba_bit_language_set')), array (  '_controller' => 'QbaBit\\LanguageBundle\\Controller\\DefaultController::setAction',));
            }

            // qbabit_lavadoo_homepage
            if ('/lavadp' === $pathinfo) {
                return array('_route' => 'qbabit_lavadoo_homepage');
            }

            // qba_bit_security_login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'qba_bit_security_login_check');
            }

            // qba_bit_security_logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'qba_bit_security_logout');
            }

        }

        // qba_bit_core_grid_data
        if ('/core/admin/grid/data' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'QbaBit\\CoreBundle\\Controller\\Modules\\QbaBitFormGridController::dataAction',  '_route' => 'qba_bit_core_grid_data',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_core_grid_data'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // qba_bit_security_recovery_mail
        if ('/recovery_mail' === $pathinfo) {
            return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::rememberAction',  '_route' => 'qba_bit_security_recovery_mail',);
        }

        // qba_bit_security_confirm
        if ('/recovery_confirm' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::recovery_confirmAction',  '_route' => 'qba_bit_security_confirm',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'qba_bit_security_confirm'));
            }

            return $ret;
        }

        // qba_bit_security_login
        if ('/user/login' === $pathinfo) {
            return array (  '_controller' => 'QbaBit\\SecurityBundle\\Controller\\DefaultController::loginAction',  '_route' => 'qba_bit_security_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
