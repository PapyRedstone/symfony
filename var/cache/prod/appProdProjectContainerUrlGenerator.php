<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'front_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_main_page' => array (  0 =>   array (    0 => 'idUser',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::profilAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUser',    ),    1 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_movement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_movement' => array (  0 =>   array (    0 => 'idMonth',  ),  1 =>   array (    '_controller' => 'FrontOfficeBundle\\Controller\\UserController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idMonth',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_service_a' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebServiceBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admindep/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
