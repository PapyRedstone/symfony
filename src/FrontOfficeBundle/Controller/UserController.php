<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\EntityManagerInterface;
use WebServiceBundle\Entity\User;
use WebServiceBundle\Entity\Deplacement;
use WebServiceBundle\Repository\userRepository;
use WebServiceBundle\Form\DeplacementJourType;
use WebServiceBundle\Form\UserType;

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
    $user = new User();
    $user=$em->getRepository('WebServiceBundle:User')->findOneById((int)$id);
    $deplacement->setUser($user);
    $deplacement->setCreated($date);
    $deplacement->setUpdated($date);
    $form = $this->createForm('WebServiceBundle\Form\DeplacementType',$deplacement);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
      $em=$this->getDoctrine()->getManager();
      $em->persist($deplacement);
      $em->flush($deplacement);

      return $this->redirectToRoute('user_main_page',array(
        'id'=>$deplacement->getUser()
      ));
    }

    return $this->render('FrontOfficeBundle:User:addMonth.html.twig', array(
      'form' => $form->createView()
    ));
  }

  public function deleteMonthAction(Deplacement $deplacement){
    if (!$deplacement) {
      throw $this->createNotFoundException('No guest found');
    }

    $em = $this->get('doctrine')->getManager();
    $em->remove($deplacement);
    $em->flush();

    return $this->redirect($this->generateUrl('FrontOfficeBundle:User:show.html.twig'));
  }

}
