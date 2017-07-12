<?php

namespace Marmiwild\CoreBundle\Controller;

use Marmiwild\CoreBundle\Entity\Recette;
use Marmiwild\CoreBundle\Form\CreateRecetteType;
use Marmiwild\CoreBundle\Services\ImageUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Recette controller.
 *
 */
class RecetteController extends Controller
{
    /**
     * Lists all Recette entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recettes = $em->getRepository('MarmiwildCoreBundle:Recette')->findAll();

        return $this->render('MarmiwildCoreBundle:Recette:index.html.twig', array(
            'recettes' => $recettes,
        ));
    }

    /**
     * Creates a new Recette entity.
     *
     */
    public function newAction(Request $request, ImageUploader $uploader)
    {
        $recette = new Recette();
        $form = $this->createForm(CreateRecetteType::class, $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $recette->setDateCreation(new \DateTime());
            $em = $this->getDoctrine()->getManager();

            $image = $recette->getImage();
            $imageName = $uploader->upload($image);
            $recette->setImage($imageName);

            foreach ($recette->getRecettesIngredients() as $composant) {
                $composant->setRecette($recette);
                $em->persist($composant);
            }

            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('recette_show', array('id' => $recette->getId()));
        }

        return $this->render('MarmiwildCoreBundle:Recette:new.html.twig', array(
            'recette' => $recette,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Recette entity.
     *
     */
    public function showAction(Recette $recette)
    {

        return $this->render('MarmiwildCoreBundle:Recette:show.html.twig', array(
            'recette' => $recette,
        ));
    }

    /**
     * Displays a form to edit an existing Recette entity.
     *
     */
    public function editAction(Request $request, Recette $recette)
    {
        $recette->setImage(
            new File($this->getParameter('images_directory').'/'.$recette->getImage())
        );
        $editForm = $this->createForm(CreateRecetteType::class, $recette);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recette_edit', array('id' => $recette->getId()));
        }

        return $this->render('MarmiwildCoreBundle:Recette:edit.html.twig', array(
            'recette' => $recette,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Recette entity.
     *
     */
    public function deleteAction(Request $request, Recette $recette)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recette);
            $em->flush();


        return $this->redirectToRoute('recette_index');
    }

    // ACTIONS REQUETES AJAX
    //----------------------

    public function filterRecettesAction(Request $request, $critere) {

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            if ($critere == 'recentes') {
                $recettes = $em->getRepository(Recette::class)->find3PlusRecentes();
            } elseif ($critere == 'economes') {
                $recettes = $em->getRepository(Recette::class)->find3PlusEconomes();
            } elseif ($critere == 'faciles') {
                $recettes = $em->getRepository(Recette::class)->find5PlusFaciles();
            }

            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $serializer = new Serializer(array($normalizer), array($encoder));
            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $jsonDocuments = $serializer->serialize($recettes, 'json');

            return new JsonResponse(array(
                'data'=> $jsonDocuments
            ));
        }
        throw new HttpException('501', 'Invalid Call');
    }

}
