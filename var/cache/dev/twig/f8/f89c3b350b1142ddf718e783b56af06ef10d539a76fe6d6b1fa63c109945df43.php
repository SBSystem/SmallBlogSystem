<?php

/* index.html.twig */
class __TwigTemplate_3fbfa9cbe6b4d69d6c4d6ca5bbb84445c29dfdf4d85094f873119a9c1feb2390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e3e63ff302678ffd4651db64e72e48bc33b619cb9abc87f0ec998cf4716a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3e63ff302678ffd4651db64e72e48bc33b619cb9abc87f0ec998cf4716a50->enter($__internal_63e3e63ff302678ffd4651db64e72e48bc33b619cb9abc87f0ec998cf4716a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

</head>
<body>

";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "

</body>
</html>";
        
        $__internal_63e3e63ff302678ffd4651db64e72e48bc33b619cb9abc87f0ec998cf4716a50->leave($__internal_63e3e63ff302678ffd4651db64e72e48bc33b619cb9abc87f0ec998cf4716a50_prof);

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
        return array (  31 => 8,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>

</head>
<body>

{{ title }}

</body>
</html>", "index.html.twig", "/home/ubuntu/Pulpit/SbsOrg/SbsOrg2/templates/index.html.twig");
    }
}
