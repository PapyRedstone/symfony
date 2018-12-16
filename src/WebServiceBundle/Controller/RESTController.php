<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WebServiceBundle\Entity\Deplacement;

class RESTController extends Controller{
    public function indexAction(){
        return $this->render('WebServiceBundle:Default:index.html.twig');
    }
    
    public function listDeplacementAction(){
        $em = $this->get("doctrine")->getManager();

        $depl = $em->getRepository("WebServiceBundle:Deplacement")->getAll();

        $response = new Response();
        $response->setContent(json_encode($depl));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin','*');

        return $response;
    }

    public function listDeplacementIDAction($id){
        $em = $this->get("doctrine")->getManager();
        
        $depl = $em->getRepository("WebServiceBundle:Deplacement")->getID($id);

        $response = new Response();
        $response->setContent(json_encode($depl));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin','*');

        return $response;
    }

    public function listDeplacementUAMAction($user,$annee,$mois){
        var_dump($user);
        var_dump($annee);
        var_dump($mois);
        $em = $this->get("doctrine")->getManager();
        
        $depl = $em->getRepository("WebServiceBundle:Deplacement")->getByUAM($user,$annee,$mois);

        $response = new Response();
        $response->setContent(json_encode($depl));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin','*');

        return $response;
    }
}
