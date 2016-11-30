<?php

/* base.html.twig */
class __TwigTemplate_863f2464aad1cc6f6028c78a97f6df901096defd11a57a4234955ff7794f1500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a8c0d5178f27fca0637082612a72f0e21c8a409f03aaea4e2675ff59dbb8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a8c0d5178f27fca0637082612a72f0e21c8a409f03aaea4e2675ff59dbb8a8->enter($__internal_f6a8c0d5178f27fca0637082612a72f0e21c8a409f03aaea4e2675ff59dbb8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f6a8c0d5178f27fca0637082612a72f0e21c8a409f03aaea4e2675ff59dbb8a8->leave($__internal_f6a8c0d5178f27fca0637082612a72f0e21c8a409f03aaea4e2675ff59dbb8a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1172cc34da06e29db2574278d949f08c250e943a810144d9e2db192844d0145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1172cc34da06e29db2574278d949f08c250e943a810144d9e2db192844d0145->enter($__internal_b1172cc34da06e29db2574278d949f08c250e943a810144d9e2db192844d0145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1172cc34da06e29db2574278d949f08c250e943a810144d9e2db192844d0145->leave($__internal_b1172cc34da06e29db2574278d949f08c250e943a810144d9e2db192844d0145_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b11890eaa00680def88dd19e903dd2ddb2ce36c3d840366d4ce73e3146aa0279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11890eaa00680def88dd19e903dd2ddb2ce36c3d840366d4ce73e3146aa0279->enter($__internal_b11890eaa00680def88dd19e903dd2ddb2ce36c3d840366d4ce73e3146aa0279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b11890eaa00680def88dd19e903dd2ddb2ce36c3d840366d4ce73e3146aa0279->leave($__internal_b11890eaa00680def88dd19e903dd2ddb2ce36c3d840366d4ce73e3146aa0279_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9064f47058d73d69272dafae1a774966d5337bb72afa690485cdae933a645f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9064f47058d73d69272dafae1a774966d5337bb72afa690485cdae933a645f52->enter($__internal_9064f47058d73d69272dafae1a774966d5337bb72afa690485cdae933a645f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9064f47058d73d69272dafae1a774966d5337bb72afa690485cdae933a645f52->leave($__internal_9064f47058d73d69272dafae1a774966d5337bb72afa690485cdae933a645f52_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4db1e00a6d1559f7418f6adde18699ce6bc09323be4f2951eff9a9f605a42a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db1e00a6d1559f7418f6adde18699ce6bc09323be4f2951eff9a9f605a42a2d->enter($__internal_4db1e00a6d1559f7418f6adde18699ce6bc09323be4f2951eff9a9f605a42a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4db1e00a6d1559f7418f6adde18699ce6bc09323be4f2951eff9a9f605a42a2d->leave($__internal_4db1e00a6d1559f7418f6adde18699ce6bc09323be4f2951eff9a9f605a42a2d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
