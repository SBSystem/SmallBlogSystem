<?php

namespace App\Controller;

use App\SmallBlogSystem\Kernel;
use App\SmallBlogSystem\Level\KernelStartInfo;
use App\SmallBlogSystem\Level\LogLevel;
use App\SmallBlogSystem\Managers\LogManager;
use App\SmallBlogSystem\TemplatesReturn\IndexTemplatesReturn;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class index extends Controller
{
    public function indexPage()
    {
        $kernel = new Kernel(KernelStartInfo::BOOT);
        $logger = new LogManager();
        if($logger->getManager())
        {
          $logger->log(LogLevel::INFO, 'ASD');
        }
        //$kernel->log(LogLevel::KERNEL, 'System loaded.');
        return $this->render('index.html.twig', array(
            'title' => IndexTemplatesReturn::get('title'),
            'charset' => IndexTemplatesReturn::get('charset'),
            'pageAuthor' => IndexTemplatesReturn::get('pageAuthor'),
            'generator' => IndexTemplatesReturn::get('generator')

        ));
    }
}
