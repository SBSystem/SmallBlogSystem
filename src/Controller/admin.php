<?php

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use App\SmallBlogSystem\TemplatesReturn\IndexTemplatesReturn;

class admin extends Controller
{
    public function dashboard(AuthorizationCheckerInterface $auth)
    {
        if(false === $auth->isGranted('ROLE_ADMIN')) {
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