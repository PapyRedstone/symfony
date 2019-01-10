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
    $date=date("Y");

    $number=$em->getRepository("WebServiceBundle:Ville")->nbUserperCity();
    $kilometers=$em->getRepository("WebServiceBundle:Societe")->nbKMperSociety();
    $users=$em->getRepository("WebServiceBundle:Societe")->nbUserPerSociety();
    $lasts=$em->getRepository("WebServiceBundle:Societe")->nbKmPerMonthAndPerUser($date);

    return $this->render('BackOfficeBundle:Stats:index.html.twig', array(
      'number'=>$number,
      'kilometers'=>$kilometers,
      'users'=>$users,
      'lasts' => $lasts,
    ));
  }

}
