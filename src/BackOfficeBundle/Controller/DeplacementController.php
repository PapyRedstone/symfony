<?php

/**
 * C'est le contrôleur qui gére l'entité Deplacement pour le BackOffice
 *
 * @author Lorens BARRAUD
 * @version 1.0
 *
*/

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebServiceBundle\Entity\Deplacement;
use WebServiceBundle\Repository\userRepository;
use BackOfficeBundle\Form\DeplacementType;

/**
* Deplacement controller.
*
*/
class DeplacementController extends Controller
{
  public function indexAction(){
    $em=$this->get('doctrine')->getManager();

    $users=$em->getRepository("WebServiceBundle:User")->findAll();

    return $this->render('BackOfficeBundle:Deplacement:index.html.twig',[
      'users' => $users,
    ]);

  }
  public function showDeplacementAction($id){
    $em=$this->get('doctrine')->getManager();

    if($id==1){
      $months=$em->getRepository("WebServiceBundle:User")->findAllMonths();
    } else {
      $months=$em->getRepository("WebServiceBundle:User")->findAllMonth($id);
    }

    return $this->render('BackOfficeBundle:Deplacement:show.html.twig',[
      'months' => $months,
      'id' => $id,
    ]);
  }

  public function showDetailedDeplacementAction(Request $request,$idUser,$idMonth){
    $em=$this->get('doctrine')->getManager();
    $date = new \DateTime(date('Y-m-d H:i:s'));

    $months=$em->getRepository("WebServiceBundle:Deplacement")->findBy(array('id'=>$idMonth));
    $month=$months[0];

    if($idUser==1){

      $form = $this->createForm('BackOfficeBundle\Form\DeplacementBackType',$month);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $month->setUpdated($date);
        $month->setDateValidation($date);
        $em->persist($month);
        $em->flush($month);

        return $this->redirectToRoute('back_office_deplacement_show',array(
          'id'=>$idUser,
        ));
      }

      return $this->render('BackOfficeBundle:Deplacement:detail.html.twig',[
        'month' => $month,
        'form' => $form->createView(),
        'idUser' => $idUser,
      ]);
    }
    return $this->render('BackOfficeBundle:Deplacement:detail.html.twig',[
      'month' => $month,
      'idUser' => $idUser,
    ]);
  }

}
