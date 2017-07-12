<?php

namespace MarmiWildBundle\Controller;

use MarmiWildBundle\Entity\Recettes;
use MarmiWildBundle\Form\RecettesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MarmiWildBundle:Default:index.html.twig');
    }

    public function recettesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findBy(array(), array('id' => 'desc'));
        return $this->render('MarmiWildBundle:Default:Recette.html.twig', array('recettes' => $recettes));
    }
    public function dessertsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $desserts = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();
        return $this->render('MarmiWildBundle:Default:Dessert.html.twig', array('desserts' => $desserts));
    }
    public function boissonsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();
        return $this->render('MarmiWildBundle:Default:Boissons.html.twig', array('recettes' => $recettes));
    }
    public function aperitifsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();
        return $this->render('MarmiWildBundle:Default:Aperitifs.html.twig', array('recettes' => $recettes));
    }
    public function platsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();
        return $this->render('MarmiWildBundle:Default:Plats.html.twig', array('recettes' => $recettes));
    }
    public function entreesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();
        return $this->render('MarmiWildBundle:Default:Entrees.html.twig', array('recettes' => $recettes));
    }

    public function addRecettesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $recettes = new Recettes();
        $form = $this->createForm(RecettesType::class, $recettes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recettes);
            $em->flush();

            $this->addFlash('success', 'Une nouvelle recette a bien été ajoutée !');

        }

        return $this->render('MarmiWildBundle:Default:addRecette.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function rechercheAction()
    {
        if (empty($_GET['term'])) {
            return $this->redirectToRoute('homepage');
        }
        $querryarray = explode(' ', $_GET['term']);
        $em = $this->getDoctrine()->getManager();
        $querryrecette = array();
        $recettes = $em
            ->getRepository('MarmiWildBundle:Recettes')
            ->findAll();

        foreach ($recettes as $recette) {
            foreach ($querryarray as $querry) {
                if (strpos($recette->getTitre(), $querry) !== false || strpos($recette->getType(), $querry) !== false) {
                    if (!in_array($recette, $querryrecette)) {
                        array_push($querryrecette, $recette);
                    }
                }
            }
        }
        if (empty($querryrecette)) {
            $this->addFlash( 'warning', "Aucun résultat pour la recherche : '{$_GET['term']}' !"
            );
            return $this->redirectToRoute('homepage');
        }
        if ($querryrecette) {
            $this->addFlash( 'success', "Il y a des correspondances avec '{$_GET['term']}' !"
            );
        }

        return $this->render('MarmiWildBundle:Default:resultat.html.twig', array('liste' =>  $querryrecette, 'term'=> str_replace(" ", "+", $_GET['term'])));

    }
}
