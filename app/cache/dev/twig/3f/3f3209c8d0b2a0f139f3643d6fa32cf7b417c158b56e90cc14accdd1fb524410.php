<?php

/* base.html.twig */
class __TwigTemplate_d6d475eca5df701069606d0af6594e9f0f5e0f856b97f1d1efd68130d800b315 extends Twig_Template
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
        $__internal_04d75a311dce8d0417e84899b0282090dff005762f1aace0f42fe21246cc9735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d75a311dce8d0417e84899b0282090dff005762f1aace0f42fe21246cc9735->enter($__internal_04d75a311dce8d0417e84899b0282090dff005762f1aace0f42fe21246cc9735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_04d75a311dce8d0417e84899b0282090dff005762f1aace0f42fe21246cc9735->leave($__internal_04d75a311dce8d0417e84899b0282090dff005762f1aace0f42fe21246cc9735_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff057e02cb2459d82f88835712f37ed0368a97fbeecd9e3af8499758e4111928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff057e02cb2459d82f88835712f37ed0368a97fbeecd9e3af8499758e4111928->enter($__internal_ff057e02cb2459d82f88835712f37ed0368a97fbeecd9e3af8499758e4111928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff057e02cb2459d82f88835712f37ed0368a97fbeecd9e3af8499758e4111928->leave($__internal_ff057e02cb2459d82f88835712f37ed0368a97fbeecd9e3af8499758e4111928_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3b4309fd2fe573361cc65a6e16e1edd008281126817a36f58c1b952c0913dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b4309fd2fe573361cc65a6e16e1edd008281126817a36f58c1b952c0913dbc->enter($__internal_a3b4309fd2fe573361cc65a6e16e1edd008281126817a36f58c1b952c0913dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a3b4309fd2fe573361cc65a6e16e1edd008281126817a36f58c1b952c0913dbc->leave($__internal_a3b4309fd2fe573361cc65a6e16e1edd008281126817a36f58c1b952c0913dbc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ccd4dec268a1e8be651d20e88ee6514c2591fbc4b41578bab53240e9abc185f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccd4dec268a1e8be651d20e88ee6514c2591fbc4b41578bab53240e9abc185f->enter($__internal_6ccd4dec268a1e8be651d20e88ee6514c2591fbc4b41578bab53240e9abc185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ccd4dec268a1e8be651d20e88ee6514c2591fbc4b41578bab53240e9abc185f->leave($__internal_6ccd4dec268a1e8be651d20e88ee6514c2591fbc4b41578bab53240e9abc185f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_238995f49f09dd9d87dba0fe3f00f6b12c12cbdc214d5f760be03df632b01177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238995f49f09dd9d87dba0fe3f00f6b12c12cbdc214d5f760be03df632b01177->enter($__internal_238995f49f09dd9d87dba0fe3f00f6b12c12cbdc214d5f760be03df632b01177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_238995f49f09dd9d87dba0fe3f00f6b12c12cbdc214d5f760be03df632b01177->leave($__internal_238995f49f09dd9d87dba0fe3f00f6b12c12cbdc214d5f760be03df632b01177_prof);

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
