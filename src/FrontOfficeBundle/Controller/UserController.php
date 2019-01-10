<?php

/**
 * C'est le contrôleur principale du FrontOffice. Tout les méthodes pour le FrontOffice s'y trouvent.
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

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

  public function showAction($idMonth,$idUser){
    $em=$this->get('doctrine')->getManager();
    $day=$em->getRepository("WebServiceBundle:User")->findAllDays($idMonth,$idUser);
    $deplacement=new Deplacement();
    $addition=$em->getRepository("WebServiceBundle:User")->sumEuroAndKM($idMonth,$idUser);
    $deplacement = $em->getRepository('WebServiceBundle:Deplacement')->findOneById($idMonth);
    $nbdays=date('t',mktime(0, 0, 0, $deplacement->getMois(), 1, $deplacement->getAnnee()));
    for($i=0;$i<$nbdays;$i++){
      $monthdays[$i]=strftime("%A",mktime(0,0,0,$deplacement->getMois(),$i+1,$deplacement->getAnnee()));
    }
    return $this->render('FrontOfficeBundle:User:show.html.twig',[
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
          'id'=>$id,
          'message' => null
        ));
      }
      else{
        return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
          'form' => $form->createView(),
          'id'=>$id,
          'message' => 'This month already exist'
        ));
      }
    }
    return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
      'form' => $form->createView(),
      'id'=>$id,
      'message' => null
    ));
  }

  public function addDayAction(Request $request,$idMonth,$idUser){
    $em=$this->get('doctrine')->getManager();
    $dateNow = new \DateTime(date('Y-m-d H:i:s'));
    $deplacement = new Deplacement();
    $day = new DeplacementJour();
    $typeDeplacement = new TypeDeplacement();
    $deplacement = $em->getRepository('WebServiceBundle:Deplacement')->findOneById($idMonth);
    $typeDeplacement = $em->getRepository('WebServiceBundle:TypeDeplacement')->findOneById(1);
    $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType',$day);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $verifDay = $em->getRepository('WebServiceBundle:DeplacementJour')->verifyDay($day->getJour(),$idMonth);

      if(intval($verifDay[0]['nb_jour'])==0){
        $day->setDeplacement($deplacement);
        $day->setCreated($dateNow);
        $day->setUpdated($dateNow);
        $day->setTypeDeplacement($typeDeplacement);
        $day->setMontant($day->getNbKm()*$typeDeplacement->getMontant());
        $date = new \DateTime(date($deplacement->getAnnee().'-'.$deplacement->getMois().'-'.$day->getJour().''));
        $day->setDate($date);

        $em->persist($day);
        $em->flush($day);

        return $this->redirectToRoute('show_month',array(
          'idMonth'=>$deplacement->getId(),
          'idUser'=>$idUser,
        ));
      }

      else{
        return $this->render('FrontOfficeBundle:User:addDay.html.twig',array(
          'form' => $form->createView(),
          'idMonth'=>$deplacement->getId(),
          'idUser'=>$idUser,
          'message'=>'This day already exist'
        ));
      }
    }
    return $this->render('FrontOfficeBundle:User:addDay.html.twig', array(
      'form' => $form->createView(),
      'idMonth'=>$idMonth,
      'idUser'=>$idUser,
      'message'=>null
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

  public function editDayAction($idDay,$idMonth,$idUser,Request $request){
    $em = $this->get('doctrine')->getManager();
    $day=$em->getRepository('WebServiceBundle:DeplacementJour')->find($idDay);
    $dateNow = new \DateTime(date('Y-m-d H:i:s'));
    $deplacement = new Deplacement();
    $form = $this->createForm('FrontOfficeBundle\Form\DeplacementJourType',$day);
    $deplacement = $em->getRepository('WebServiceBundle:Deplacement')->findOneById($idMonth);
    $typeDeplacement = $em->getRepository('WebServiceBundle:TypeDeplacement')->findOneById(1);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $verifDay = $em->getRepository('WebServiceBundle:DeplacementJour')->verifyDay($day->getJour(),$idMonth);

      if(intval($verifDay[0]['nb_jour'])==0){
        $day->setUpdated($dateNow);
        $day->setMontant($day->getNbKm()*$typeDeplacement->getMontant());
        $date = new \DateTime(date($deplacement->getAnnee().'-'.$deplacement->getMois().'-'.$day->getJour().''));
        $day->setDate($date);

        $em=$this->getDoctrine()->getManager();

        $em->persist($day);
        $em->flush($day);

        return $this->redirectToRoute('show_month',array(
          'idMonth'=>$idMonth,
          'idUser'=>$idUser
        ));
      }
      else{
        return $this->render('FrontOfficeBundle:User:editDay.html.twig', array(
          'form' => $form->createView(),
          'idMonth'=>$idMonth,
          'idUser'=>$idUser,
          'message'=>'This day already exist'
        ));
      }
    }

    return $this->render('FrontOfficeBundle:User:editDay.html.twig', array(
      'form' => $form->createView(),
      'idMonth'=>$idMonth,
      'idUser'=>$idUser,
      'message'=>null
    ));
  }
}
