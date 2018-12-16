<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_office_homepage');
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
        }

        // user_main_page
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_main_page')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\UserController::profilAction',));
        }

        // edit_profil
        if (0 === strpos($pathinfo, '/editProfil') && preg_match('#^/editProfil/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_profil')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\UserController::editProfilAction',));
        }

        // show_month
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>\\d+)/(?P<month>\\d+)/(?P<year>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_month')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\UserController::showAction',));
        }

        // add_month
        if (0 === strpos($pathinfo, '/addMonth') && preg_match('#^/addMonth/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_month')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\UserController::addMonthAction',));
        }

        // delete_month
        if (0 === strpos($pathinfo, '/deleteMonth') && preg_match('#^/deleteMonth/(?P<idMonth>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_month')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\UserController::deleteMonthAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/societe')) {
                    // societe_index
                    if (rtrim($pathinfo, '/') === '/api/societe') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_societe_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'societe_index');
                        }

                        return array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::indexAction',  '_route' => 'societe_index',);
                    }
                    not_societe_index:

                    // societe_show
                    if (preg_match('#^/api/societe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_societe_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_show')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::showAction',));
                    }
                    not_societe_show:

                    // societe_new
                    if ($pathinfo === '/api/societe/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_societe_new;
                        }

                        return array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::newAction',  '_route' => 'societe_new',);
                    }
                    not_societe_new:

                    // societe_edit
                    if (preg_match('#^/api/societe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_societe_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_edit')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::editAction',));
                    }
                    not_societe_edit:

                    // societe_delete
                    if (preg_match('#^/api/societe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_societe_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_delete')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::deleteAction',));
                    }
                    not_societe_delete:

                }

                // web_service_homepage
                if (rtrim($pathinfo, '/') === '/api') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'web_service_homepage');
                    }

                    return array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_service_homepage',);
                }

                // web_service_a
                if (rtrim($pathinfo, '/') === '/api') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'web_service_a');
                    }

                    return array (  '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_service_a',);
                }

            }

            if (0 === strpos($pathinfo, '/admindep')) {
                // back_office_homepage
                if (rtrim($pathinfo, '/') === '/admindep') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'back_office_homepage');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
                }

                if (0 === strpos($pathinfo, '/admindep/user')) {
                    // back_office_user_index
                    if ($pathinfo === '/admindep/user') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_back_office_user_index;
                        }

                        return array (  '_controller' => 'WebServiceBundle\\Controller\\UserController::indexAction',  '_route' => 'back_office_user_index',);
                    }
                    not_back_office_user_index:

                    // back_office_user_show
                    if (preg_match('#^/admindep/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_back_office_user_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_show')), array (  '_controller' => 'WebServiceBundle\\Controller\\UserController::showAction',));
                    }
                    not_back_office_user_show:

                    // back_office_user_show_movement
                    if (preg_match('#^/admindep/user/(?P<id>\\d+)/movement$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_back_office_user_show_movement;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_show_movement')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::showMovementAction',));
                    }
                    not_back_office_user_show_movement:

                    // back_office_user_new
                    if ($pathinfo === '/admindep/user/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_back_office_user_new;
                        }

                        return array (  '_controller' => 'WebServiceBundle\\Controller\\UserController::newAction',  '_route' => 'back_office_user_new',);
                    }
                    not_back_office_user_new:

                    // back_office_user_edit
                    if (preg_match('#^/admindep/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_back_office_user_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_edit')), array (  '_controller' => 'WebServiceBundle\\Controller\\UserController::editAction',));
                    }
                    not_back_office_user_edit:

                    // back_office_user_delete
                    if (preg_match('#^/admindep/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_back_office_user_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_user_delete')), array (  '_controller' => 'WebServiceBundle\\Controller\\UserController::deleteAction',));
                    }
                    not_back_office_user_delete:

                }

                if (0 === strpos($pathinfo, '/admindep/s')) {
                    if (0 === strpos($pathinfo, '/admindep/societe')) {
                        // back_office_societe_index
                        if ($pathinfo === '/admindep/societe') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_back_office_societe_index;
                            }

                            return array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::indexAction',  '_route' => 'back_office_societe_index',);
                        }
                        not_back_office_societe_index:

                        // back_office_societe_show
                        if (preg_match('#^/admindep/societe(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_back_office_societe_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_show')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::showAction',));
                        }
                        not_back_office_societe_show:

                        // back_office_societe_new
                        if ($pathinfo === '/admindep/societe/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_back_office_societe_new;
                            }

                            return array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::newAction',  '_route' => 'back_office_societe_new',);
                        }
                        not_back_office_societe_new:

                        // back_office_societe_edit
                        if (preg_match('#^/admindep/societe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_back_office_societe_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_edit')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::editAction',));
                        }
                        not_back_office_societe_edit:

                        // back_office_societe_delete
                        if (preg_match('#^/admindep/societe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_back_office_societe_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_societe_delete')), array (  '_controller' => 'WebServiceBundle\\Controller\\SocieteController::deleteAction',));
                        }
                        not_back_office_societe_delete:

                    }

                    if (0 === strpos($pathinfo, '/admindep/service')) {
                        // back_office_service_index
                        if ($pathinfo === '/admindep/service') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_back_office_service_index;
                            }

                            return array (  '_controller' => 'WebServiceBundle\\Controller\\ServiceController::indexAction',  '_route' => 'back_office_service_index',);
                        }
                        not_back_office_service_index:

                        // back_office_service_show
                        if (preg_match('#^/admindep/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_back_office_service_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_show')), array (  '_controller' => 'WebServiceBundle\\Controller\\ServiceController::showAction',));
                        }
                        not_back_office_service_show:

                        // back_office_service_new
                        if ($pathinfo === '/admindep/service/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_back_office_service_new;
                            }

                            return array (  '_controller' => 'WebServiceBundle\\Controller\\ServiceController::newAction',  '_route' => 'back_office_service_new',);
                        }
                        not_back_office_service_new:

                        // back_office_service_edit
                        if (preg_match('#^/admindep/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_back_office_service_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_edit')), array (  '_controller' => 'WebServiceBundle\\Controller\\ServiceController::editAction',));
                        }
                        not_back_office_service_edit:

                        // back_office_service_delete
                        if (preg_match('#^/admindep/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_back_office_service_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_office_service_delete')), array (  '_controller' => 'WebServiceBundle\\Controller\\ServiceController::deleteAction',));
                        }
                        not_back_office_service_delete:

                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
