<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* Training controller.
*
* @Route("admin")
*/
class AdminController extends Controller
{
  /**
  * @Route("/",name="admin_index")
  */
  public function indexAction()
  {
    $admin = $this->getUser();
    $admin->getId();
    $em = $this->getDoctrine()->getManager();
    // $trainings = $em->getRepository('PortfolioBundle:Training')->findAll();
    $profile = $em->getRepository('PortfolioBundle:Profile')->findOneby(array('admin'=>$admin));
    $skill = $em->getRepository('PortfolioBundle:Skill')->findAll();
    $training = $em->getRepository('PortfolioBundle:Training')->findAll();
    $production = $em->getRepository('PortfolioBundle:Production')->findAll();

    return $this->render('@PortfolioBundle/Resources/views/admin/index.html.twig', array(
      'profile' => $profile,
      'skill' => $skill,
      'training' => $training,
      'production' => $production

    ));
  }

}
