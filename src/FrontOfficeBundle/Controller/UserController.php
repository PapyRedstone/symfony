<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\EntityManagerInterface;
use WebServiceBundle\Entity\UserFront;
use WebServiceBundle\Entity\Deplacement;
use WebServiceBundle\Repository\userRepository;
use FrontOfficeBundle\Form\UserFrontType;
use FrontOfficeBundle\Form\DeplacementType;

class UserController extends Controller
{
  public function profilAction($id){
    $em=$this->get('doctrine')->getManager();
    $user=$em->getRepository("WebServiceBundle:User")->findOneById($id);
    $months=$em->getRepository("WebServiceBundle:User")->findAllMonth($id);
    $i=0;
    foreach($months as $month){
      $nameMonths[$i]=date('F',mktime(0,0,0,$month["mois"]+1,0,0));
      $i++;
    }

    $society=$em->getRepository("WebServiceBundle:User")->findSociety($id);
    $city=$em->getRepository("WebServiceBundle:User")->findCity($id);
    return $this->render('FrontOfficeBundle:User:profil.html.twig',[
      'user' => $user,
      'societies' => $society,
      'months'=> $months,
      'cities'=> $city,
      'nameMonths' => $nameMonths,
    ]);
  }

  public function showAction($id,$month,$year){
    setlocale (LC_TIME, 'fr_FR','fra');
    date_default_timezone_set("Europe/Paris");
    mb_internal_encoding("UTF-8");
    $em=$this->get('doctrine')->getManager();
    $day=$em->getRepository("WebServiceBundle:User")->findAllDays($id,$month,$year);
    $addition=$em->getRepository("WebServiceBundle:User")->sumEuroAndKM($id,$month,$year);
    $nbdays=date('t',mktime(0, 0, 0, $month, 1, $year));
    for($i=0;$i<$nbdays;$i++){
      $monthdays[$i]=strftime("%A",mktime(0,0,0,$month,$i+1,$year));
    }
    return $this->render('FrontOfficeBundle:User:show.html.twig',[
      'addition' =>$addition,
      'days' => $day,
      'monthdays' => $monthdays,
      'nbdays' => $nbdays,
      'month' => $month,
      'year' => $year,
    ]);
  }

  public function addMonthAction(Request $request,$id){
    $em=$this->get('doctrine')->getManager();
    $date = new \DateTime(date('Y-m-d H:i:s'));
    $deplacement = new Deplacement();
    $user = new UserFront();
    $user=$em->getRepository('WebServiceBundle:User')->findOneById((int)$id);
    $form = $this->createForm('FrontOfficeBundle\Form\DeplacementType',$deplacement);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $deplacement->setUser($user);
      $deplacement->setCreated($date);
      $deplacement->setUpdated($date);

      $em->persist($deplacement);
      $em->flush($deplacement);

      return $this->redirectToRoute('user_main_page',array(
        'id'=>$id
      ));
    }

    return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
      'form' => $form->createView()
    ));
  }

  public function editProfilAction($id,Request $request){
    $em = $this->get('doctrine')->getManager();
    $user=$em->getRepository('WebServiceBundle:User')->find($id);
    $date = new \DateTime(date('Y-m-d H:i:s'));
    $user->setUpdated($date);
    $form = $this->createForm('FrontOfficeBundle\Form\UserFrontType',$user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $em=$this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush($user);

      return $this->redirectToRoute('user_main_page',array(
        'id'=>$user->getId()
      ));
    }

    return $this->render('FrontOfficeBundle:User:editProfil.html.twig', array(
      'form' => $form->createView(),
    ));
  }

}
