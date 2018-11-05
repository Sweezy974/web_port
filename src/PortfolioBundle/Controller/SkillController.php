<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Skill controller.
 *
 * @Route("admin/skill")
 */
class SkillController extends Controller
{
    /**
     * Lists all skill entities.
     *
     * @Route("/", name="admin_skill_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $skills = $em->getRepository('PortfolioBundle:Skill')->findAll();

        return $this->render('@PortfolioBundle/Resources/views/admin/skill/index.html.twig', array(
            'skills' => $skills,
        ));
    }

    /**
     * Creates a new skill entity.
     *
     * @Route("/new", name="admin_skill_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $admin = $this->getUser();
        $admin->getId();
        $skill = new Skill();
        $form = $this->createForm('PortfolioBundle\Form\SkillType', $skill);
        $form->handleRequest($request);
        $skill
        ->setAdmin($admin);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($skill);
            $em->flush();

            return $this->redirectToRoute('admin_skill_show', array('id' => $skill->getId()));
        }

        return $this->render('@PortfolioBundle/Resources/views/admin/skill/new.html.twig', array(
            'skill' => $skill,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a skill entity.
     *
     * @Route("/{id}", name="admin_skill_show")
     * @Method("GET")
     */
    public function showAction(Skill $skill)
    {
        $deleteForm = $this->createDeleteForm($skill);

        return $this->render('@PortfolioBundle/Resources/views/admin/skill/show.html.twig', array(
            'skill' => $skill,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing skill entity.
     *
     * @Route("/{id}/edit", name="admin_skill_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Skill $skill)
    {
        $deleteForm = $this->createDeleteForm($skill);
        $editForm = $this->createForm('PortfolioBundle\Form\SkillType', $skill);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_skill_edit', array('id' => $skill->getId()));
        }

        return $this->render('@PortfolioBundle/Resources/views/admin/skill/edit.html.twig', array(
            'skill' => $skill,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a skill entity.
     *
     * @Route("/{id}", name="admin_skill_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Skill $skill)
    {
        $form = $this->createDeleteForm($skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($skill);
            $em->flush();
        }

        return $this->redirectToRoute('admin_skill_index');
    }

    /**
     * Creates a form to delete a skill entity.
     *
     * @param Skill $skill The skill entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Skill $skill)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_skill_delete', array('id' => $skill->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
