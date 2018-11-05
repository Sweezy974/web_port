<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class DefaultController extends Controller
{
    /**
    * @Route("/",name="home")
    */
    public function indexAction()
    {
        // si l'utilisateur est connecté
        $securityContext = $this->container->get('security.authorization_checker');
        // if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        //     // redirection sur acceuil utilisateur
        //     return $this->redirectToRoute('admin_index');
        // }

        return $this->render('@PortfolioBundle/Resources/views/default/index.html.twig', array());


    }
    /**
    * @Route("/competences",name="show_skills")
    */
    public function showSkills()
    {
        // si l'utilisateur est connecté
        $securityContext = $this->container->get('security.authorization_checker');
        return $this->render('@PortfolioBundle/Resources/views/default/skills.html.twig', array());
    }

    /**
    * @Route("/realisations",name="show_productions")
    */
    public function showProductions()
    {
        // si l'utilisateur est connecté
        $securityContext = $this->container->get('security.authorization_checker');
        return $this->render('@PortfolioBundle/Resources/views/default/productions.html.twig', array());
    }

    /**
    * @Route("/parcours",name="show_training")
    */
    public function showTraining()
    {
        // si l'utilisateur est connecté
        $securityContext = $this->container->get('security.authorization_checker');
        return $this->render('@PortfolioBundle/Resources/views/default/training.html.twig', array());
    }

    /**
    * @Route("/parcours",name="show_contact")
    */
    public function showContact()
    {
        // si l'utilisateur est connecté
        $securityContext = $this->container->get('security.authorization_checker');
        return $this->render('@PortfolioBundle/Resources/views/default/contact.html.twig', array());
    }
}
