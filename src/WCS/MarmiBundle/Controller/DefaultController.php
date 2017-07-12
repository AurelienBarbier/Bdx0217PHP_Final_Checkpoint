<?php

namespace WCS\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use WCS\MarmiBundle\Entity\User;
use WCS\MarmiBundle\Form\UserType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em->getRepository('WCSMarmiBundle:Recette')->findAll();
        return $this->render('WCSMarmiBundle:Default:index.html.twig', array('recettes' => $recettes));
    }
    public function inscriptionAction(Request $request){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();


            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash(
                'success',
                'Inscription effectuée avec succés !'
            );
            return $this->redirectToRoute('wcs_marmi_login');
        }

        return $this->render('WCSMarmiBundle:Default:register.html.twig',
            array('form' => $form->createView()));
    }
    public function connexionAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('WCSMarmiBundle:Default:login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
    public function logincheckAction(){
        return $this->render('WCSMarmiBundle:Default:login.html.twig');
    }
    public function myrecipeAction(){
        return $this->render('WCSMarmiBundle:Default:myrecipe.html.twig');
    }
}
