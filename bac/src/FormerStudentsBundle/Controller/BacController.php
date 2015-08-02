<?php

namespace FormerStudentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BacController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormerStudentsBundle:Default:index.html.twig', array('name' => 'okba'));
    }
}
