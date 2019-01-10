<?php

/**
 * C'est le contrôleur par défaut du FrontOffice.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }
}
