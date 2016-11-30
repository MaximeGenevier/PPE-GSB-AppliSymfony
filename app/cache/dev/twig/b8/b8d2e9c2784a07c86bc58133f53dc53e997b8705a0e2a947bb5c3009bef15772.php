<?php

/* rvmgGSBBundle:Visiteur:vueAccueilVisiteur.html.twig */
class __TwigTemplate_4106f4372fc169e08a90e56edbd824c8b142ce90953414209ee24638b4a7ee6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Visiteur:vueAccueilVisiteur.html.twig", 1);
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
        $__internal_d7ee4bbb03114c08d6b6f771bd224df5151a7223f08aa34d91ebed033e2514c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ee4bbb03114c08d6b6f771bd224df5151a7223f08aa34d91ebed033e2514c6->enter($__internal_d7ee4bbb03114c08d6b6f771bd224df5151a7223f08aa34d91ebed033e2514c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Visiteur:vueAccueilVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ee4bbb03114c08d6b6f771bd224df5151a7223f08aa34d91ebed033e2514c6->leave($__internal_d7ee4bbb03114c08d6b6f771bd224df5151a7223f08aa34d91ebed033e2514c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_237c5a247cd005ea2678044b9c47d6d65c55a78ddb402c7d857118b2e93ec201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237c5a247cd005ea2678044b9c47d6d65c55a78ddb402c7d857118b2e93ec201->enter($__internal_237c5a247cd005ea2678044b9c47d6d65c55a78ddb402c7d857118b2e93ec201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Visiteur
";
        
        $__internal_237c5a247cd005ea2678044b9c47d6d65c55a78ddb402c7d857118b2e93ec201->leave($__internal_237c5a247cd005ea2678044b9c47d6d65c55a78ddb402c7d857118b2e93ec201_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_67130f2c164167965df152158eb26d65bbde3283e9c37e360a38bc6261762bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67130f2c164167965df152158eb26d65bbde3283e9c37e360a38bc6261762bc1->enter($__internal_67130f2c164167965df152158eb26d65bbde3283e9c37e360a38bc6261762bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "login", array()), "html", null, true);
        echo "
";
        
        $__internal_67130f2c164167965df152158eb26d65bbde3283e9c37e360a38bc6261762bc1->leave($__internal_67130f2c164167965df152158eb26d65bbde3283e9c37e360a38bc6261762bc1_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Visiteur:vueAccueilVisiteur.html.twig";
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
    Visiteur
{% endblock %}
{% block body %}
    {{ data.login }}
{% endblock %}
";
    }
}
