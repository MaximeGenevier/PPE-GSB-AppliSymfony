<?php

/* rvmgGSBBundle:Accueil:index.html.twig */
class __TwigTemplate_385779bb9cc09fcbdf5690b64403eb2791cdccba2ec8946910fba7ea03c7bf61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rvmgGSBBundle:Default:base.html.twig", "rvmgGSBBundle:Accueil:index.html.twig", 1);
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
        $__internal_05430c04f4b343855e06d923b1bfafb133836e4024b5be8f7d9a8d609288437b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05430c04f4b343855e06d923b1bfafb133836e4024b5be8f7d9a8d609288437b->enter($__internal_05430c04f4b343855e06d923b1bfafb133836e4024b5be8f7d9a8d609288437b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05430c04f4b343855e06d923b1bfafb133836e4024b5be8f7d9a8d609288437b->leave($__internal_05430c04f4b343855e06d923b1bfafb133836e4024b5be8f7d9a8d609288437b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaee06c0fdd1d4f3b51472afefede94b1febe7934ff65c4a13b31b6f4ace1f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee06c0fdd1d4f3b51472afefede94b1febe7934ff65c4a13b31b6f4ace1f3b->enter($__internal_aaee06c0fdd1d4f3b51472afefede94b1febe7934ff65c4a13b31b6f4ace1f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Visiteur
";
        
        $__internal_aaee06c0fdd1d4f3b51472afefede94b1febe7934ff65c4a13b31b6f4ace1f3b->leave($__internal_aaee06c0fdd1d4f3b51472afefede94b1febe7934ff65c4a13b31b6f4ace1f3b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c541e85bb28faf053d8bca161252e8406c9789fd560ec96cc3a0e7213f2f0b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c541e85bb28faf053d8bca161252e8406c9789fd560ec96cc3a0e7213f2f0b88->enter($__internal_c541e85bb28faf053d8bca161252e8406c9789fd560ec96cc3a0e7213f2f0b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Galaxy Swiss Bourdin</h1>
    <br/>
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_c541e85bb28faf053d8bca161252e8406c9789fd560ec96cc3a0e7213f2f0b88->leave($__internal_c541e85bb28faf053d8bca161252e8406c9789fd560ec96cc3a0e7213f2f0b88_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Accueil:index.html.twig";
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
