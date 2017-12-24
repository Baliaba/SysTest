<?php
/**
* @author Hassan THECODE
* @version 0.1.7
* @copyright ₸₶£₵😃₫₶ - 2017
**/
namespace DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        # get monolog services
        $logger = $this->get('logger');

        $logger->info("****** Début du tracking du code   ****** ");

        $logger->emergency("****** Erreur de configuration   ****** ");

        $logger->critical("tentative de connexion échoué");

        return $this->render('DocumentBundle:Home:index.html.twig');
    }
    public function getJsonAction(){
      $data  =
      '
      [
        {
          "id": 0,
          "name": "Nettie Mitchell"
        },
        {
          "id": 1,
          "name": "Camacho Cherry"
        },
        {
          "id": 2,
          "name": "Duffy Goodman"
        },
        {
          "id": 3,
          "name": "Bridgette Molina"
        },
        {
          "id": 4,
          "name": "Guy Richardson"
        }
      ]

      ';
      return new Response($data);
    }
}
