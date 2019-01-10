<?php

namespace BackOfficeBundle\Controller;

use WebServiceBundle\Entity\Societe;
use BackOfficeBundle\Form\SocieteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Societe controller.
 *
 */
class SocieteController extends Controller
{
    /**
     * Lists all societe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $societes = $em->getRepository('WebServiceBundle:Societe')->findAll();

        return $this->render('BackOfficeBundle:Societe:index.html.twig', array(
            'societes' => $societes,
        ));
    }

    /**
     * Creates a new societe entity.
     *
     */
    public function newAction(Request $request)
    {
        $societe = new Societe();
        $form = $this->createForm('BackOfficeBundle\Form\SocieteType', $societe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($societe);
            $em->flush($societe);

            return $this->redirectToRoute('back_office_societe_show', array('id' => $societe->getId()));
        }

        return $this->render('BackOfficeBundle:Societe:new.html.twig', array(
            'societe' => $societe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a societe entity.
     *
     */
    public function showAction(Societe $societe)
    {
        $deleteForm = $this->createDeleteForm($societe);

        return $this->render('BackOfficeBundle:Societe:show.html.twig', array(
            'societe' => $societe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing societe entity.
     *
     */
    public function editAction(Request $request, Societe $societe)
    {
        $deleteForm = $this->createDeleteForm($societe);
        $editForm = $this->createForm('BackOfficeBundle\Form\SocieteType', $societe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('back_office_societe_edit', array('id' => $societe->getId()));
        }

        return $this->render('BackOfficeBundle:Societe:edit.html.twig', array(
            'societe' => $societe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a societe entity.
     *
     */
    public function deleteAction(Request $request, Societe $societe)
    {
        $form = $this->createDeleteForm($societe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($societe);
            $em->flush($societe);
        }

        return $this->redirectToRoute('back_office_societe_index');
    }

    /**
     * Creates a form to delete a societe entity.
     *
     * @param Societe $societe The societe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Societe $societe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('back_office_societe_delete', array('id' => $societe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
