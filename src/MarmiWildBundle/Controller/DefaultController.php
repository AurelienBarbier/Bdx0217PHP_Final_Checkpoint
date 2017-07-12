<?php

namespace MarmiWildBundle\Controller;

use MarmiWildBundle\Entity\Recipe;
use MarmiWildBundle\Form\RecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $recipes = $this->getDoctrine()->getRepository('MarmiWildBundle:Recipe')->findAll();

        return $this->render('MarmiWildBundle:Default:index.html.twig', array(
            'recipes' => $recipes
        ));
    }

    public function addRecipeAction(Request $request)
    {
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();

            return $this->redirectToRoute('marmi_wild_homepage');
        }

        return $this->render('MarmiWildBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editAction(Recipe $recipe, Request $request)
    {
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('marmi_wild_homepage');
        }

        return $this->render('MarmiWildBundle:Default:edit.html.twig', array(
            'form' => $form->createView(),
            'recipe' => $recipe
        ));
    }

    public function deleteAction(Recipe $recipe)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($recipe);
        $em->flush();

        return $this->redirectToRoute('marmi_wild_homepage');
    }
}
