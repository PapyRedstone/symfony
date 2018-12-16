<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
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
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_main_page' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::profilAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_profil' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::editProfilAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editProfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_month' => array (  0 =>   array (    0 => 'id',    1 => 'month',    2 => 'year',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::showAction',  ),  2 =>   array (    'id' => '\\d+',    'month' => '\\d+',    'year' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'year',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'month',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_month' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::addMonthAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/addMonth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_month' => array (  0 =>   array (    0 => 'idMonth',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::deleteMonthAction',  ),  2 =>   array (    'idMonth' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idMonth',    ),    1 =>     array (      0 => 'text',      1 => '/deleteMonth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'societe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/societe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'societe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'societe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/societe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'societe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'societe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_deplacements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\RESTController::listDeplacementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/deplacements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_deplacements_id' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\RESTController::listDeplacementIDAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/deplacements/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_deplacements_annee' => array (  0 =>   array (    0 => 'user',    1 => 'annee',    2 => 'mois',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\RESTController::listDeplacementUAMAction',  ),  2 =>   array (    'user' => '\\d+',    'annee' => '\\d+',    'mois' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'mois',    ),    1 =>     array (      0 => 'text',      1 => '/mois',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'annee',    ),    3 =>     array (      0 => 'text',      1 => '/annee',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'user',    ),    5 =>     array (      0 => 'text',      1 => '/api/deplacements/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_show_movement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::showMovementAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/movement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_societe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_societe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_societe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/societe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_societe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_societe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\SocieteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/societe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_service_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\ServiceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_service_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\ServiceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_service_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\ServiceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/service/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_service_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\ServiceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_service_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\ServiceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admindep/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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