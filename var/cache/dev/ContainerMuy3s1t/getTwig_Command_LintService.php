<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.command.lint' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Command/LintCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Command/LintCommand.php';

$this->services['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->load(__DIR__.'/getTwigService.php')) && false ?: '_'});

$instance->setName('lint:twig');

return $instance;
