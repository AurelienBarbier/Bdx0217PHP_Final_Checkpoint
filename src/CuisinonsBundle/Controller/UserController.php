<?php

namespace CuisinonsBundle\Controller;

use CuisinonsBundle\Entity\User;
use CuisinonsBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{
    public function profilAction(User $user, Request $request)
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            $this->addFlash(
                'success',
                'Votre profil a bien été modifié'
            );
        }

        return $this->render('CuisinonsBundle:User:profil.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function registerAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isSubmitted())
        {
            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                'Votre inscription a bien été prise en compte'
            );

            return $this->redirectToRoute('cuisinons_login');
        }

        return $this->render('CuisinonsBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
