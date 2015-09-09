<?php

namespace FormerStudentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \FormerStudentsBundle\Entity\FormerStudent;
use \FormerStudentsBundle\Entity\University;
use \FormerStudentsBundle\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;

class BacController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormerStudentsBundle:Bac:index.html.twig', array('name' => 'okba'));
    }

    public function inscriptionAction(Request $request){
      $formerStudent = new FormerStudent();
      $university = new University();
      $form = $this->get('form.factory')->create(new RegistrationType, $formerStudent);

      $form->handleRequest($request);

      if ($form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($formerStudent);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Vous êtes bien enregistré.');

        return $this->redirect($this->generateUrl('former_students_list'));
      }
      return $this->render('FormerStudentsBundle:Bac:inscription.html.twig', array(
        'form' => $form->createView(),
      ));
    }

    public function listAction(){
        $em = $this->getDoctrine()->getManager();
        $studentsList = $em->getRepository('FormerStudentsBundle\Entity\FormerStudent')->findAll();
        return $this->render('FormerStudentsBundle:Bac:studentsList.html.twig',
            array('students' => $studentsList));
    }

    public function documentationAction(){
      return $this->render('FormerStudentsBundle:Bac:documentation.html.twig');
    }
}
