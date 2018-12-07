<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function profilAction($id){
      return $this->render('FrontOfficeBundle:User:profil.html.twig',[
        'id'=> $id,
      ]);
    }
}
