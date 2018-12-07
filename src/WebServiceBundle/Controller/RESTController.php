<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WebServiceBundle\Entity\Deplacement;

class RESTController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebServiceBundle:Default:index.html.twig');
    }

    public function listDeplacement(Request $request){
        $em = $this->getDoctrine()->getManager();

        $depl = $em->getRepository('WebService:Deplacement')->findByNameOrdered($name='');

        $response = new Response();
        $response->setContent(json_encode($depl));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin','*');

        return $response;
    }
}
