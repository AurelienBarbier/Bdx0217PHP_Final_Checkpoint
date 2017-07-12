<?php

namespace MarmiwildBundle\Controller;

use MarmiwildBundle\Entity\recetteIngredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Recetteingredient controller.
 *
 * @Route("recetteingredient")
 */
class recetteIngredientController extends Controller
{
    /**
     * Lists all recetteIngredient entities.
     *
     * @Route("/", name="recetteingredient_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recetteIngredients = $em->getRepository('MarmiwildBundle:recetteIngredient')->findAll();

        return $this->render('recetteingredient/index.html.twig', array(
            'recetteIngredients' => $recetteIngredients,
        ));
    }

    /**
     * Creates a new recetteIngredient entity.
     *
     * @Route("/new", name="recetteingredient_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $recetteIngredient = new Recetteingredient();
        $form = $this->createForm('MarmiwildBundle\Form\recetteIngredientType', $recetteIngredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recetteIngredient);
            $em->flush();

            return $this->redirectToRoute('recetteingredient_show', array('id' => $recetteIngredient->getId()));
        }

        return $this->render('recetteingredient/new.html.twig', array(
            'recetteIngredient' => $recetteIngredient,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recetteIngredient entity.
     *
     * @Route("/{id}", name="recetteingredient_show")
     * @Method("GET")
     */
    public function showAction(recetteIngredient $recetteIngredient)
    {
        $deleteForm = $this->createDeleteForm($recetteIngredient);

        return $this->render('recetteingredient/show.html.twig', array(
            'recetteIngredient' => $recetteIngredient,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recetteIngredient entity.
     *
     * @Route("/{id}/edit", name="recetteingredient_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, recetteIngredient $recetteIngredient)
    {
        $deleteForm = $this->createDeleteForm($recetteIngredient);
        $editForm = $this->createForm('MarmiwildBundle\Form\recetteIngredientType', $recetteIngredient);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recetteingredient_edit', array('id' => $recetteIngredient->getId()));
        }

        return $this->render('recetteingredient/edit.html.twig', array(
            'recetteIngredient' => $recetteIngredient,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recetteIngredient entity.
     *
     * @Route("/{id}", name="recetteingredient_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, recetteIngredient $recetteIngredient)
    {
        $form = $this->createDeleteForm($recetteIngredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recetteIngredient);
            $em->flush();
        }

        return $this->redirectToRoute('recetteingredient_index');
    }

    /**
     * Creates a form to delete a recetteIngredient entity.
     *
     * @param recetteIngredient $recetteIngredient The recetteIngredient entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(recetteIngredient $recetteIngredient)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recetteingredient_delete', array('id' => $recetteIngredient->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
