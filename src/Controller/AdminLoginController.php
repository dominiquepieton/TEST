<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminLoginController extends AbstractController
{
    /**
     * Permet la connexion au dashboard
     * @Route("/login", name="login_admin")
     */
    public function login(AuthenticationUtils $utils): Response
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();

        return $this->render('login/login.html.twig', [
            'error' => $error !== null,
            'username' => $username
        ]);
    }


    /**
     * Permet la déconnexion
     * @Route("/logout", name="logout_admin")
     * @return void
     */
    public function logout()
    {
    }

   
}
