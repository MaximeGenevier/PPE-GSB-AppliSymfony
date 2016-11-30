<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_26140fd0a636c7b4c86228396d8a6df64a0a2be076bb820b57c21132c76b9877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6415076b44c581da3fe42cde2662468762f7d893c333c888ef1e592594d6e126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6415076b44c581da3fe42cde2662468762f7d893c333c888ef1e592594d6e126->enter($__internal_6415076b44c581da3fe42cde2662468762f7d893c333c888ef1e592594d6e126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6415076b44c581da3fe42cde2662468762f7d893c333c888ef1e592594d6e126->leave($__internal_6415076b44c581da3fe42cde2662468762f7d893c333c888ef1e592594d6e126_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c69bb41402db787e157277d763342315839303cc3446f499565874029c9d4fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69bb41402db787e157277d763342315839303cc3446f499565874029c9d4fbb->enter($__internal_c69bb41402db787e157277d763342315839303cc3446f499565874029c9d4fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c69bb41402db787e157277d763342315839303cc3446f499565874029c9d4fbb->leave($__internal_c69bb41402db787e157277d763342315839303cc3446f499565874029c9d4fbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61d49630d8c7076a6afacf7d437a475d16c1b27895860d6818d83d71c70c20cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d49630d8c7076a6afacf7d437a475d16c1b27895860d6818d83d71c70c20cd->enter($__internal_61d49630d8c7076a6afacf7d437a475d16c1b27895860d6818d83d71c70c20cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61d49630d8c7076a6afacf7d437a475d16c1b27895860d6818d83d71c70c20cd->leave($__internal_61d49630d8c7076a6afacf7d437a475d16c1b27895860d6818d83d71c70c20cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bc5594b70665fc9db8f6665f9a14f7207ea3f8082271dd10b99d7e81119039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bc5594b70665fc9db8f6665f9a14f7207ea3f8082271dd10b99d7e81119039->enter($__internal_95bc5594b70665fc9db8f6665f9a14f7207ea3f8082271dd10b99d7e81119039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_95bc5594b70665fc9db8f6665f9a14f7207ea3f8082271dd10b99d7e81119039->leave($__internal_95bc5594b70665fc9db8f6665f9a14f7207ea3f8082271dd10b99d7e81119039_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
