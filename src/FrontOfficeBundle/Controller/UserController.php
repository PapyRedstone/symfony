<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\EntityManagerInterface;
use WebServiceBundle\Entity\UserFront;
use WebServiceBundle\Entity\Deplacement;
use WebServiceBundle\Entity\DeplacementJour;
use WebServiceBundle\Entity\TypeDeplacement;
use WebServiceBundle\Repository\userRepository;
use FrontOfficeBundle\Form\UserFrontType;
use FrontOfficeBundle\Form\DeplacementType;
use FrontOfficeBundle\Form\DeplacementJourType;

class UserController extends Controller
{
  public function profilAction($id){
    $em=$this->get('doctrine')->getManager();
    $user=$em->getRepository("WebServiceBundle:User")->findOneById($id);
    $months=$em->getRepository("WebServiceBundle:Deplacement")->findAllMonth($id);

    $society=$em->getRepository("WebServiceBundle:Societe")->findSociety($id);
    $city=$em->getRepository("WebServiceBundle:User")->findCity($id);
    return $this->render('FrontOfficeBundle:User:profil.html.twig',[
      'user' => $user,
      'societies' => $society,
      'months'=> $months,
      'cities'=> $city,
    ]);
  }

  public function showAction($idMonth,$month,$year,$idUser){
    $em=$this->get('doctrine')->getManager();
    $day=$em->getRepository("WebServiceBundle:User")->findAllDays($idMonth,$month,$year);
    $addition=$em->getRepository("WebServiceBundle:User")->sumEuroAndKM($idMonth);
    $nbdays=date('t',mktime(0, 0, 0, $month, 1, $year));
    for($i=0;$i<$nbdays;$i++){
      $monthdays[$i]=strftime("%A",mktime(0,0,0,$month,$i+1,$year));
    }
    return $this->render('FrontOfficeBundle:User:show.html.twig',[
      'month' => $month,
      'year' => $year,
      'addition' =>$addition[0],
      'days' => $day,
      'monthdays' => $monthdays,
      'nbdays' => $nbdays,
      'idMonth' =>  $idMonth,
      'idUser'=> $idUser,
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
      $verifMonth = $em->getRepository('WebServiceBundle:Deplacement')->verifyMonth($deplacement->getMois(),$deplacement->getAnnee(),$id);

      if($verifMonth[0]['nb_mois']==0){
        $deplacement->setUser($user);
        $deplacement->setCreated($date);
        $deplacement->setUpdated($date);

        $em->persist($deplacement);
        $em->flush($deplacement);

        return $this->redirectToRoute('user_main_page',array(
          'id'=>$id
        ));
      }
      else{
        return $this->redirectToRoute('user_main_page',array(
          'id'=>$id
        ));
      }
    }
    return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
      'form' => $form->createView(),
      'id'=>$id,
    ));
  }

  public function addDayAction(Request $request,$idMonth,$month,$year,$idUser){
    $em=$this->get('doctrine')->getManager();
    $date = new \DateTime(date('Y-m-d H:i:s'));
    $deplacement = new Deplacement();
    $day = new DeplacementJour();
    $typeDeplacement = new TypeDeplacement();
    $deplacement = $em->getRepository('WebServiceBundle:Deplacement')->findOneById((int)$idMonth);
    $typeDeplacement = $em->getRepository('WebServiceBundle:TypeDeplacement')->findOneById(1);
    $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType',$day);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $verifDay = $em->getRepository('WebServiceBundle:DeplacementJour')->verifyDay($day->getJour(),$idMonth);

      if(intval($verifDay[0]['nb_jour'])==0){
        $day->setDeplacement($deplacement);
        $day->setCreated($date);
        $day->setUpdated($date);
        $day->setTypeDeplacement($typeDeplacement);
        $day->setMontant($day->getNbKm()*$typeDeplacement->getMontant());

        $em->persist($day);
        $em->flush($day);

        return $this->redirectToRoute('show_month',array(
          'idMonth'=>$deplacement->getId(),
          'month'=>$deplacement->getMois(),
          'year'=>$deplacement->getAnnee(),
          'idUser'=>$idUser,
        ));
      }

      else{
        return $this->redirectToRoute('show_month',array(
          'idMonth'=>$deplacement->getId(),
          'month'=>$deplacement->getMois(),
          'year'=>$deplacement->getAnnee(),
          'idUser'=>$idUser,
        ));
      }
    }
    return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
      'form' => $form->createView(),
      'idMonth'=>$idMonth,
      'month'=>$month,
      'year'=>$year,
      'idUser'=>$idUser,
    ));
  }

  public function editProfilAction($id,Request $request){
    $em = $this->get('doctrine')->getManager();
    $user=$em->getRepository('WebServiceBundle:User')->find($id);
    $date = new \DateTime(date('Y-m-d H:i:s'));
    $form = $this->createForm('FrontOfficeBundle\Form\UserFrontType',$user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $user->setUpdated($date);
      $em=$this->getDoctrine()->getManager();

      $em->persist($user);
      $em->flush($user);

      return $this->redirectToRoute('user_main_page',array(
        'id'=>$user->getId()
      ));
    }

    return $this->render('FrontOfficeBundle:User:editProfil.html.twig', array(
      'form' => $form->createView(),
      'id'=>$id,
    ));
  }

  public function editDayAction($idDay,$idMonth,$month,$year,$idUser,Request $request){
    $em = $this->get('doctrine')->getManager();
    $day=$em->getRepository('WebServiceBundle:DeplacementJour')->find($idDay);
    $date = new \DateTime(date('Y-m-d H:i:s'));
    $typeDeplacement = new TypeDeplacement();
    $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType',$day);
    $typeDeplacement = $em->getRepository('WebServiceBundle:TypeDeplacement')->findOneById(1);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $day->setUpdated($date);
      $day->setMontant($day->getNbKm()*$typeDeplacement->getMontant());

      $em=$this->getDoctrine()->getManager();

      $em->persist($day);
      $em->flush($day);

      return $this->redirectToRoute('show_month',array(
        'idMonth'=>$idMonth,
        'month'=>$month,
        'year'=>$year,
        'idUser'=>$idUser
      ));
    }

    return $this->render('FrontOfficeBundle:User:editProfil.html.twig', array(
      'form' => $form->createView(),
      'idMonth'=>$idMonth,
      'month'=>$month,
      'year'=>$year,
      'idUser'=>$idUser,
    ));
  }
}
