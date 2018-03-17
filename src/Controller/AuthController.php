<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\SmallBlogSystem\TemplatesReturn\TwigTemplatesConfig;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AuthController extends Controller
{
    public function login(AuthorizationCheckerInterface $auth)
    {
        if($auth->isGranted('ROLE_ADMIN') != false) {
            return $this->redirectToRoute('/');
        }
        $form = $this->createFormBuilder()
            ->add('Login', TextType::class)
            ->add('Password', PasswordType::class)
            ->add('Submit', SubmitType::class, array('label' => 'Zaloguj'))
            ->getForm();
        return $this->render('auth/login.html.twig', array(
            'title' => TwigTemplatesConfig::TITLE,
            'charset' => TwigTemplatesConfig::CHARSET,
            'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
            'generator' => TwigTemplatesConfig::GENERATOR,
            'form' => $form->createView()
        ));
    }
    public function register(AuthorizationCheckerInterface $auth)
    {
        if($auth->isGranted('ROLE_ADMIN') != false) {
            return $this->redirectToRoute('/');
        }
        return $this->render('auth/register.html.twig', array(
                'title' => TwigTemplatesConfig::TITLE,
                'charset' => TwigTemplatesConfig::CHARSET,
                'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
                'generator' => TwigTemplatesConfig::GENERATOR
        ));
    }

}