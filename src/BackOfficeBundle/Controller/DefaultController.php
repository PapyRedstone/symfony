<?php

/**
 * C'est le contrôleur par défaut du BackOffice.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }
}
