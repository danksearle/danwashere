<?php

/* DanWasHereBundle::layout.html.twig */
class __TwigTemplate_c9cc1b4bed942218c17d7d445368327639e96855d07564f3a7f107fa88cfd5a2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav>
            <ul>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_portfolio");
        echo "\">Portfolio</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_flash_history");
        echo "\">FlashHistory</a></li>
            </ul>
        </nav>

        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DanWasHereBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  85 => 19,  80 => 6,  74 => 5,  68 => 21,  65 => 20,  63 => 19,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
