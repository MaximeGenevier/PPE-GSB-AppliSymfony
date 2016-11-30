<?php

/* rvmgGSBBundle:Default:base.html.twig */
class __TwigTemplate_117a51b4a73befd314be5932de2cb5f08bff51226317bee84fc2df96eaadbaa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93867c76a32f013d1507431889f04f86c59e4fed7927a8d868c0d4f879c9fd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93867c76a32f013d1507431889f04f86c59e4fed7927a8d868c0d4f879c9fd67->enter($__internal_93867c76a32f013d1507431889f04f86c59e4fed7927a8d868c0d4f879c9fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

        // line 1
        echo "<! DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
        
        $__internal_93867c76a32f013d1507431889f04f86c59e4fed7927a8d868c0d4f879c9fd67->leave($__internal_93867c76a32f013d1507431889f04f86c59e4fed7927a8d868c0d4f879c9fd67_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dd6dbe62c0fa90af0449693c77856c0d5f1d55f7252f96ca73478bd3ea68614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd6dbe62c0fa90af0449693c77856c0d5f1d55f7252f96ca73478bd3ea68614->enter($__internal_6dd6dbe62c0fa90af0449693c77856c0d5f1d55f7252f96ca73478bd3ea68614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <title>
                ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "            </title>
        ";
        
        $__internal_6dd6dbe62c0fa90af0449693c77856c0d5f1d55f7252f96ca73478bd3ea68614->leave($__internal_6dd6dbe62c0fa90af0449693c77856c0d5f1d55f7252f96ca73478bd3ea68614_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e831c7656482fc537799bde1c7f7bdcbeb417fce346aeb148396c7402ad5308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e831c7656482fc537799bde1c7f7bdcbeb417fce346aeb148396c7402ad5308->enter($__internal_5e831c7656482fc537799bde1c7f7bdcbeb417fce346aeb148396c7402ad5308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e831c7656482fc537799bde1c7f7bdcbeb417fce346aeb148396c7402ad5308->leave($__internal_5e831c7656482fc537799bde1c7f7bdcbeb417fce346aeb148396c7402ad5308_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffa739bfd7c1b4bc4e5521629372cadd35dc5f263cfb24aa4b7dabb6cb24177b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa739bfd7c1b4bc4e5521629372cadd35dc5f263cfb24aa4b7dabb6cb24177b->enter($__internal_ffa739bfd7c1b4bc4e5521629372cadd35dc5f263cfb24aa4b7dabb6cb24177b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffa739bfd7c1b4bc4e5521629372cadd35dc5f263cfb24aa4b7dabb6cb24177b->leave($__internal_ffa739bfd7c1b4bc4e5521629372cadd35dc5f263cfb24aa4b7dabb6cb24177b_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b4c96b7c0ff9eaa0736d3c29bb4d9b8a1256499a85ce3464a7a4619f6194bfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c96b7c0ff9eaa0736d3c29bb4d9b8a1256499a85ce3464a7a4619f6194bfb4->enter($__internal_b4c96b7c0ff9eaa0736d3c29bb4d9b8a1256499a85ce3464a7a4619f6194bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "                &copy; Copyright 2015 by LLA - 2016
            ";
        
        $__internal_b4c96b7c0ff9eaa0736d3c29bb4d9b8a1256499a85ce3464a7a4619f6194bfb4->leave($__internal_b4c96b7c0ff9eaa0736d3c29bb4d9b8a1256499a85ce3464a7a4619f6194bfb4_prof);

    }

    public function getTemplateName()
    {
        return "rvmgGSBBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  98 => 17,  87 => 14,  76 => 6,  68 => 7,  66 => 6,  63 => 5,  57 => 4,  48 => 20,  46 => 17,  42 => 15,  40 => 14,  33 => 9,  31 => 4,  26 => 1,);
    }

    public function getSource()
    {
        return "<! DOCTYPE html>
<html>
    <head>
        {% block head %}
            <title>
                {% block title %}{% endblock %}
            </title>
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
        </div>
        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2015 by LLA - 2016
            {% endblock %}
        </div>
    </body>
</html>";
    }
}
