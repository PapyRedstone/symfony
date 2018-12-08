<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebServiceBundle\Entity\User;

class UserController extends Controller
{
    public function profilAction($id){
      $em=$this->get('doctrine')->getManager();
      $user=$em->getRepository("WebServiceBundle:User")->findOneById($id);
      return $this->render('FrontOfficeBundle:User:profil.html.twig',[
        'user'=> $user,
      ]);
    }
}
