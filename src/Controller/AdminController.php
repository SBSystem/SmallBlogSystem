<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\SmallBlogSystem\TemplatesReturn\IndexTemplatesReturn;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function dashboard(AuthorizationCheckerInterface $auth): Response
    {
        if($auth->isGranted('ROLE_ADMIN') === false) {
            throw new AccessDeniedException('Only users with admin previleges can see this page!');
        }

        return $this->render('adminDashboard.html.twig', array(

            'title' => IndexTemplatesReturn::get('title'),
            'charset' => IndexTemplatesReturn::get('charset'),
            'pageAuthor' => IndexTemplatesReturn::get('pageAuthor'),
            'generator' => IndexTemplatesReturn::get('generator')

        ));

    }
}