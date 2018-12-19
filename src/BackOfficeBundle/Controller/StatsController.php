<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Repository\StatsRepository;

/**
* Stats controller.
*
*/
class StatsController extends Controller
{
  public function indexAction(){
    $em=$this->get('doctrine')->getManager();

    $number=$em->getRepository("WebServiceBundle:Ville")->nbUserperCity();
    $kilometers=$em->getRepository("WebServiceBundle:Societe")->nbKMperSociety();

    return $this->render('BackOfficeBundle:Stats:index.html.twig', array(
      'number'=>$number,
      'kilometers'=>$kilometers,
    ));
  }

}
