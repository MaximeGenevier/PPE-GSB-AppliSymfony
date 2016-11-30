<?php

/* rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig */
class __TwigTemplate_11d88795aa28e1f8cd7d031424e3ecd906b90c79373f7218e732587d8f25e0b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90cef2b7cb0af882c52408ba4165beeff71be73d231ea46fee433f78755517ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cef2b7cb0af882c52408ba4165beeff71be73d231ea46fee433f78755517ec->enter($__internal_90cef2b7cb0af882c52408ba4165beeff71be73d231ea46fee433f78755517ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cef2b7cb0af882c52408ba4165beeff71be73d231ea46fee433f78755517ec->leave($__internal_90cef2b7cb0af882c52408ba4165beeff71be73d231ea46fee433f78755517ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f4323062dcf31a03a94f45e11ce6ce758a4d1e7a8e609ba10705c6115a6db0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4323062dcf31a03a94f45e11ce6ce758a4d1e7a8e609ba10705c6115a6db0c->enter($__internal_3f4323062dcf31a03a94f45e11ce6ce758a4d1e7a8e609ba10705c6115a6db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Visiteur
";
        
        $__internal_3f4323062dcf31a03a94f45e11ce6ce758a4d1e7a8e609ba10705c6115a6db0c->leave($__internal_3f4323062dcf31a03a94f45e11ce6ce758a4d1e7a8e609ba10705c6115a6db0c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6f0878f386ec6f083f5a990b7d4e84b0f82c1bcc801b105b06ee7c1e069893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6f0878f386ec6f083f5a990b7d4e84b0f82c1bcc801b105b06ee7c1e069893->enter($__internal_cd6f0878f386ec6f083f5a990b7d4e84b0f82c1bcc801b105b06ee7c1e069893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_cd6f0878f386ec6f083f5a990b7d4e84b0f82c1bcc801b105b06ee7c1e069893->leave($__internal_cd6f0878f386ec6f083f5a990b7d4e84b0f82c1bcc801b105b06ee7c1e069893_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:vueConnexionVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Visiteur
{% endblock %}
{% block body %}
    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    {{ form(form) }}
{% endblock %}
";
    }
}
