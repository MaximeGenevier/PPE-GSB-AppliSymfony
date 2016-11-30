<?php

/* rvmgGSBBundle:Default:base.html.twig */
class __TwigTemplate_bddf7da476a235e96aaf745e2e9e87f59cb42687488b11fca24a0bc72f036641 extends Twig_Template
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
        $__internal_44ad82a4fef3ac1db6413a02dc090abb08f891c01b1cc3421433eb56af5fb46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ad82a4fef3ac1db6413a02dc090abb08f891c01b1cc3421433eb56af5fb46a->enter($__internal_44ad82a4fef3ac1db6413a02dc090abb08f891c01b1cc3421433eb56af5fb46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rvmgGSBBundle:Default:base.html.twig"));

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
        
        $__internal_44ad82a4fef3ac1db6413a02dc090abb08f891c01b1cc3421433eb56af5fb46a->leave($__internal_44ad82a4fef3ac1db6413a02dc090abb08f891c01b1cc3421433eb56af5fb46a_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb7d6a670aab4454a6d18a7e5cbf048cdbcc57539b638f3088fb19b99f708ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7d6a670aab4454a6d18a7e5cbf048cdbcc57539b638f3088fb19b99f708ece->enter($__internal_cb7d6a670aab4454a6d18a7e5cbf048cdbcc57539b638f3088fb19b99f708ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            <title>
                ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "            </title>
        ";
        
        $__internal_cb7d6a670aab4454a6d18a7e5cbf048cdbcc57539b638f3088fb19b99f708ece->leave($__internal_cb7d6a670aab4454a6d18a7e5cbf048cdbcc57539b638f3088fb19b99f708ece_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e978494637901ef0c42a5cb17a8e65bec6cd2f52d8becceb9250d3bf8fd20fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e978494637901ef0c42a5cb17a8e65bec6cd2f52d8becceb9250d3bf8fd20fdb->enter($__internal_e978494637901ef0c42a5cb17a8e65bec6cd2f52d8becceb9250d3bf8fd20fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e978494637901ef0c42a5cb17a8e65bec6cd2f52d8becceb9250d3bf8fd20fdb->leave($__internal_e978494637901ef0c42a5cb17a8e65bec6cd2f52d8becceb9250d3bf8fd20fdb_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e4656a60beb50a3eacd19161a61916858d8af7a2bc47123ed16f913ff2511c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4656a60beb50a3eacd19161a61916858d8af7a2bc47123ed16f913ff2511c2->enter($__internal_6e4656a60beb50a3eacd19161a61916858d8af7a2bc47123ed16f913ff2511c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e4656a60beb50a3eacd19161a61916858d8af7a2bc47123ed16f913ff2511c2->leave($__internal_6e4656a60beb50a3eacd19161a61916858d8af7a2bc47123ed16f913ff2511c2_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ef3ba48db054c410347999aa9a6d0172418aecef4cf76c86b946900fcef207e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3ba48db054c410347999aa9a6d0172418aecef4cf76c86b946900fcef207e5->enter($__internal_ef3ba48db054c410347999aa9a6d0172418aecef4cf76c86b946900fcef207e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            ";
        
        $__internal_ef3ba48db054c410347999aa9a6d0172418aecef4cf76c86b946900fcef207e5->leave($__internal_ef3ba48db054c410347999aa9a6d0172418aecef4cf76c86b946900fcef207e5_prof);

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
                &copy; Copyright 2016 by Romain Venel & Maxime Genevier 
            {% endblock %}
        </div>
    </body>
</html>";
    }
}
