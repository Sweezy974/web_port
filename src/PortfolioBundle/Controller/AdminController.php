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
    $profile = $em->getRepository('PortfolioBundle:Profile')->findOneby(array('admin'=>$admin));
    $skill = $em->getRepository('PortfolioBundle:Skill')->findby(array('admin'=>$admin),array('id' => 'desc'));
    $training = $em->getRepository('PortfolioBundle:Training')->findby(array('admin'=>$admin),array('id' => 'desc'));
    return $this->render('@PortfolioBundle/Resources/views/admin/index.html.twig', array(
      'profile' => $profile,
      'skill' => $skill,
      'training' => $training,
    ));
  }

}
