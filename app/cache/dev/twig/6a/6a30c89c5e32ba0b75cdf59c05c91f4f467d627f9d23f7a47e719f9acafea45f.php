<?php

/* rvmgGSBBundle:Default:index.html.twig */
class __TwigTemplate_7ac95dad90d2fa50fd7970208e13ff3bd92438f9a04c99b0b97c1ff9e21b885c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Default:index.html.twig", 1);
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
        $__internal_a51e3cbf8934e32aa4624ab63429844ebdda39e41b4b07b200fc7f5e8d35979e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51e3cbf8934e32aa4624ab63429844ebdda39e41b4b07b200fc7f5e8d35979e->enter($__internal_a51e3cbf8934e32aa4624ab63429844ebdda39e41b4b07b200fc7f5e8d35979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51e3cbf8934e32aa4624ab63429844ebdda39e41b4b07b200fc7f5e8d35979e->leave($__internal_a51e3cbf8934e32aa4624ab63429844ebdda39e41b4b07b200fc7f5e8d35979e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_feee76a51dbf72e367ba0dfc657e7dcea119d4ee1f06d18ab62e1b8e9b41eda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feee76a51dbf72e367ba0dfc657e7dcea119d4ee1f06d18ab62e1b8e9b41eda6->enter($__internal_feee76a51dbf72e367ba0dfc657e7dcea119d4ee1f06d18ab62e1b8e9b41eda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_feee76a51dbf72e367ba0dfc657e7dcea119d4ee1f06d18ab62e1b8e9b41eda6->leave($__internal_feee76a51dbf72e367ba0dfc657e7dcea119d4ee1f06d18ab62e1b8e9b41eda6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_de5ac5fbc35a01edf9f9268cd344c8955bb7f122db36e61907559d121b3ced28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5ac5fbc35a01edf9f9268cd344c8955bb7f122db36e61907559d121b3ced28->enter($__internal_de5ac5fbc35a01edf9f9268cd344c8955bb7f122db36e61907559d121b3ced28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    <button>Visiteur</button>
    <br/>
    <button>Comptable</button>
";
        
        $__internal_de5ac5fbc35a01edf9f9268cd344c8955bb7f122db36e61907559d121b3ced28->leave($__internal_de5ac5fbc35a01edf9f9268cd344c8955bb7f122db36e61907559d121b3ced28_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"rvmgGSBBundle:Default:base.html.twig\" %}

{% block title %}
    Accueil
{% endblock %}
{% block body %}
    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    <button>Visiteur</button>
    <br/>
    <button>Comptable</button>
{% endblock %}
";
    }
}
