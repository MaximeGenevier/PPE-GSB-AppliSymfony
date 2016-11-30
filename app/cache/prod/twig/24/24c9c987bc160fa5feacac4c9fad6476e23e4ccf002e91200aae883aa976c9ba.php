<?php

/* rvmgGSBBundle:Default:index.html.twig */
class __TwigTemplate_56fa95ff2bdb5bf9cb8173ed98fdc7b772f49c115ea566ed1c71c792283cb5b6 extends Twig_Template
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
        $__internal_459a16016af2f168acb8a5e2a78e1106d50a856b8d8755dc7d7bf0f599c8f675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459a16016af2f168acb8a5e2a78e1106d50a856b8d8755dc7d7bf0f599c8f675->enter($__internal_459a16016af2f168acb8a5e2a78e1106d50a856b8d8755dc7d7bf0f599c8f675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459a16016af2f168acb8a5e2a78e1106d50a856b8d8755dc7d7bf0f599c8f675->leave($__internal_459a16016af2f168acb8a5e2a78e1106d50a856b8d8755dc7d7bf0f599c8f675_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0437ff07ac85e72edff5f92dce9994059b5c7b9856f0f4c148dac87753a2b5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0437ff07ac85e72edff5f92dce9994059b5c7b9856f0f4c148dac87753a2b5eb->enter($__internal_0437ff07ac85e72edff5f92dce9994059b5c7b9856f0f4c148dac87753a2b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_0437ff07ac85e72edff5f92dce9994059b5c7b9856f0f4c148dac87753a2b5eb->leave($__internal_0437ff07ac85e72edff5f92dce9994059b5c7b9856f0f4c148dac87753a2b5eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_310a65856c7a5b8c9994c81c174992286520c07788d0f817b777f08cae3d1077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310a65856c7a5b8c9994c81c174992286520c07788d0f817b777f08cae3d1077->enter($__internal_310a65856c7a5b8c9994c81c174992286520c07788d0f817b777f08cae3d1077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    <button>Visiteur</button>
    <br/>
    <button>Comptable</button>
";
        
        $__internal_310a65856c7a5b8c9994c81c174992286520c07788d0f817b777f08cae3d1077->leave($__internal_310a65856c7a5b8c9994c81c174992286520c07788d0f817b777f08cae3d1077_prof);

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
