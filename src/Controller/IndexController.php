<?php

namespace App\Controller;

use App\SmallBlogSystem\Kernel;
use App\SmallBlogSystem\Level\KernelStartInfo;
use App\SmallBlogSystem\Level\LogLevel;
use App\SmallBlogSystem\Managers\LogManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SmallBlogSystem\TemplatesReturn\TwigTemplatesConfig;

class IndexController extends Controller
{
    public function indexPage()
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
}
