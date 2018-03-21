<?php

namespace App\Controller;

use App\SmallBlogSystem\Kernel;
use App\SmallBlogSystem\Level\KernelStartInfo;
use App\SmallBlogSystem\Level\LogLevel;
use App\SmallBlogSystem\Managers\LogManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmallBlogSystem\TemplatesReturn\TwigTemplatesConfig;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexPage(): Response
    {
        $kernel = new Kernel(KernelStartInfo::BOOT);
        $logger = new LogManager();
        if($logger->getManager())
        {
          $logger->log(LogLevel::INFO, 'ASD');
        }
        return $this->render('index.html.twig', array(
            'title' => TwigTemplatesConfig::TITLE,
            'charset' => TwigTemplatesConfig::CHARSET,
            'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
            'generator' => TwigTemplatesConfig::GENERATOR
        ));
    }
    public function loginPage(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('login', TextType::class, array('label' => 'Login', 'placeholder' => 'Login...'))
            ->add('password', PasswordType::class, array('label' => 'Haslo', 'placeholder' => 'Haslo...'))
            ->add('submit', SubmitType::class, array('label' => 'Zaloguj się!'))
            ->getForm();

        return $this->render('Index/login.html.twig', array(
            'title' => TwigTemplatesConfig::TITLE,
            'charset' => TwigTemplatesConfig::CHARSET,
            'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
            'generator' => TwigTemplatesConfig::GENERATOR,
            'form' => $form->createView()
        ));
    }
    public function remindPassword(): Response
    {
        $form = $this->createFormBuilder()
            ->add('email', TextType::class, array('label' => 'E-mail', 'placeholder' => 'E-mail...'))
            ->add('submit', SubmitType::class, array('label' => 'Wyslij wiadomosc'))
            ->getForm();

        return $this->render('Index/login.html.twig', array(
            'title' => TwigTemplatesConfig::TITLE,
            'charset' => TwigTemplatesConfig::CHARSET,
            'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
            'generator' => TwigTemplatesConfig::GENERATOR,
            'form' => $form->createView()
        ));
    }
    public function logout(): Response
    {
        $this->redirectToRoute('/');
    }

    public function loginFormPost($_POST)
    {

    }
    public function loginUser()
    {
        $userRepo = $this->getDoctrine()->getRepository('User');
        $entity = $userRepo->find(1);
        $authenticate = new UsernamePasswordToken(
            $entity,
            null,
            'user_db',
            $entity->getRole()
        );

        $this->container->get('security.context')->setToken($authenticate);
    }
    public function logoutUser()
    {

    }

}
