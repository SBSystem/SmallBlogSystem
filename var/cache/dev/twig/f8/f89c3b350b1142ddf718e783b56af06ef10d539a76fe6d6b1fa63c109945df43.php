<?php

/* index.html.twig */
class __TwigTemplate_3fbfa9cbe6b4d69d6c4d6ca5bbb84445c29dfdf4d85094f873119a9c1feb2390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'charset' => array($this, 'block_charset'),
            'authorMeta' => array($this, 'block_authorMeta'),
            'generator' => array($this, 'block_generator'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ee5c698e2124ed1769fc034d99396e698834db8f388bcf1181652d00fe0dc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee5c698e2124ed1769fc034d99396e698834db8f388bcf1181652d00fe0dc9f->enter($__internal_6ee5c698e2124ed1769fc034d99396e698834db8f388bcf1181652d00fe0dc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ee5c698e2124ed1769fc034d99396e698834db8f388bcf1181652d00fe0dc9f->leave($__internal_6ee5c698e2124ed1769fc034d99396e698834db8f388bcf1181652d00fe0dc9f_prof);

    }

    // line 3
    public function block_charset($context, array $blocks = array())
    {
        $__internal_014b640902f6ce9b1a7ca6f320ad6153de88316bb379ed3a9ed11d537f179999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014b640902f6ce9b1a7ca6f320ad6153de88316bb379ed3a9ed11d537f179999->enter($__internal_014b640902f6ce9b1a7ca6f320ad6153de88316bb379ed3a9ed11d537f179999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "charset"));

        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new Twig_Error_Runtime('Variable "charset" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_014b640902f6ce9b1a7ca6f320ad6153de88316bb379ed3a9ed11d537f179999->leave($__internal_014b640902f6ce9b1a7ca6f320ad6153de88316bb379ed3a9ed11d537f179999_prof);

    }

    // line 4
    public function block_authorMeta($context, array $blocks = array())
    {
        $__internal_1f034a689a727e81964ae7535f6a6a3755a5b64c444b5bd3218dadb7470cc77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f034a689a727e81964ae7535f6a6a3755a5b64c444b5bd3218dadb7470cc77c->enter($__internal_1f034a689a727e81964ae7535f6a6a3755a5b64c444b5bd3218dadb7470cc77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authorMeta"));

        echo twig_escape_filter($this->env, (isset($context["pageAuthor"]) || array_key_exists("pageAuthor", $context) ? $context["pageAuthor"] : (function () { throw new Twig_Error_Runtime('Variable "pageAuthor" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_1f034a689a727e81964ae7535f6a6a3755a5b64c444b5bd3218dadb7470cc77c->leave($__internal_1f034a689a727e81964ae7535f6a6a3755a5b64c444b5bd3218dadb7470cc77c_prof);

    }

    // line 5
    public function block_generator($context, array $blocks = array())
    {
        $__internal_bb9a75bb86138bc6660789dbd549f67dd06d5fc4c904c3b1274cb7dc27866a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9a75bb86138bc6660789dbd549f67dd06d5fc4c904c3b1274cb7dc27866a9e->enter($__internal_bb9a75bb86138bc6660789dbd549f67dd06d5fc4c904c3b1274cb7dc27866a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "generator"));

        echo twig_escape_filter($this->env, (isset($context["generator"]) || array_key_exists("generator", $context) ? $context["generator"] : (function () { throw new Twig_Error_Runtime('Variable "generator" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_bb9a75bb86138bc6660789dbd549f67dd06d5fc4c904c3b1274cb7dc27866a9e->leave($__internal_bb9a75bb86138bc6660789dbd549f67dd06d5fc4c904c3b1274cb7dc27866a9e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3139bd6ed92a3c5c0e62ec9e518ceee5f88ab0865a288d330d85bbe5f7e6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3139bd6ed92a3c5c0e62ec9e518ceee5f88ab0865a288d330d85bbe5f7e6da->enter($__internal_8f3139bd6ed92a3c5c0e62ec9e518ceee5f88ab0865a288d330d85bbe5f7e6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_8f3139bd6ed92a3c5c0e62ec9e518ceee5f88ab0865a288d330d85bbe5f7e6da->leave($__internal_8f3139bd6ed92a3c5c0e62ec9e518ceee5f88ab0865a288d330d85bbe5f7e6da_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c511f42dbdc9fad9ce419ad7f64cd5edb4ea4fb2dc8aa3d67a96f6afa21fe0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c511f42dbdc9fad9ce419ad7f64cd5edb4ea4fb2dc8aa3d67a96f6afa21fe0a->enter($__internal_4c511f42dbdc9fad9ce419ad7f64cd5edb4ea4fb2dc8aa3d67a96f6afa21fe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <h1>Hello World!</h1>

";
        
        $__internal_4c511f42dbdc9fad9ce419ad7f64cd5edb4ea4fb2dc8aa3d67a96f6afa21fe0a->leave($__internal_4c511f42dbdc9fad9ce419ad7f64cd5edb4ea4fb2dc8aa3d67a96f6afa21fe0a_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  86 => 8,  74 => 6,  62 => 5,  50 => 4,  38 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block charset %}{{ charset }}{% endblock %}
{% block authorMeta %}{{ pageAuthor }}{% endblock %}
{% block generator %}{{ generator }}{% endblock %}
{% block title %}{{ title }}{% endblock %}

{% block body %}

    <h1>Hello World!</h1>

{% endblock %}", "index.html.twig", "/home/ubuntu/Pulpit/SbsOrg/SbsOrg/templates/index.html.twig");
    }
}
