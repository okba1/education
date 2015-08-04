<?php

namespace FormerStudentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BacController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormerStudentsBundle:Bac:index.html.twig', array('name' => 'okba'));
    }

    public function inscriptionAction(){
      return $this->render('FormerStudentsBundle:Bac:inscription.html.twig');
    }

    public function listAction(){
      return $this->render('FormerStudentsBundle:Bac:studentsList.html.twig');
    }

    public function documentationAction(){
      return $this->render('FormerStudentsBundle:Bac:documentation.html.twig');
    }
}
