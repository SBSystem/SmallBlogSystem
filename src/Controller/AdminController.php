<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\SmallBlogSystem\TemplatesReturn\TwigTemplatesConfig;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function dashboard(AuthorizationCheckerInterface $auth): Response
    {
        if($auth->isGranted('ROLE_ADMIN') === false) {
            throw new AccessDeniedException('Only users with admin previleges can see this page!');
        }

        return $this->render('admin/adminDashboard.html.twig', array(
            'title' => TwigTemplatesConfig::TITLE,
            'charset' => TwigTemplatesConfig::CHARSET,
            'pageAuthor' => TwigTemplatesConfig::PAGE_AUTHOR,
            'generator' => TwigTemplatesConfig::GENERATOR
        ));

    }
}