<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use WebServiceBundle\Entity\User;
use WebServiceBundle\Entity\DeplacementJour;
use WebServiceBundle\Repository\userRepository;
use WebServiceBundle\Form\DeplacementJourType;
use WebServiceBundle\Form\UserType;



class UserController extends Controller
{
  public function profilAction($id){
    $em=$this->get('doctrine')->getManager();
    $user=$em->getRepository("WebServiceBundle:User")->findOneById($id);
    $month=$em->getRepository("WebServiceBundle:User")->findAllMonth($id);
    $society=$em->getRepository("WebServiceBundle:User")->findSociety($id);
    $city=$em->getRepository("WebServiceBundle:User")->findCity($id);
    return $this->render('FrontOfficeBundle:User:profil.html.twig',[
      'user' => $user,
      'societies' => $society,
      'months'=> $month,
      'cities'=> $city,
    ]);
  }

  public function showAction($id,$month,$year){
    $em=$this->get('doctrine')->getManager();
    //$day=$em->getRepository("WebServiceBundle:User")->findAllDays($id);
    $nbdays=date('t',mktime(0, 0, 0, $month, 1, $year));
    return $this->render('FrontOfficeBundle:User:show.html.twig',[
      //'days' => $day,
      'nbdays' => $nbdays,
      'month' => $month,
      'year' => $year,
    ]);
  }


  /*public function createAction(Request $request, $id){
    $user = new User();
    $user=$this->get('doctrine')->getManager()->getRepository('WebServiceBundle:User')->findOneById($id);
    $movement->setUserId($user);
    $form = $this->createForm('WebServiceBundle\Form\DeplacementJourType',$movement);

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $em=$this->getDoctrine()->getManager();
      $em->persist($movement);
      $em->flush($movement);

      return $this->redirectToRoute('user_main_page',array('id'=>$id));
    }

    return $this->render('FrontOfficeBundle:User:create.html.twig', array(
      'form' => $form->createView(),
    ));
  }*/
}
