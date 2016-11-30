<?php

namespace rvmg\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use rvmg\GSBBundle\Model\ModeleGSB;

class AccueilController extends Controller
{
    public function indexAction()
    {
        $form = $this->createFormBuilder()
                     ->add('login', 'text')
                     ->add('motDePasse', 'password')
                     ->add('valider', 'submit')
                     ->add('annuler', 'reset')
                     ->getForm();
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        $modele = new ModeleGSB();
        if($form->isValid()){
            
            $lesUtilisateurs = $modele->getUtilisateur('Visiteur', 'Test', 'PWD');
            $data = $form->getData();
            return $this->render('rvmgGSBBundle:Visiteur:vueAccueilVisiteur.html.twig', array('data'=>$data, 'users'=>$lesUtilisateurs));
            
        }
        
        return $this->render('rvmgGSBBundle:Accueil:index.html.twig', array('form'=>$form->createView()));
    }
    
    public function visiteurAction(){
        
        
    }
       
}
