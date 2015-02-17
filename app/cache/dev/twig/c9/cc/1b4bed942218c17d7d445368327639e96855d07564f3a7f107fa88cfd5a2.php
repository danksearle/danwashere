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
            'page_keywords' => array($this, 'block_page_keywords'),
            'page_description' => array($this, 'block_page_description'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head lang=\"en\">
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"Generator\" content=\"EditPlus\" />
<meta name=\"Author\" content=\"Dan Searle\" />
<meta name=\"Keywords\" content=\"";
        // line 7
        $this->displayBlock('page_keywords', $context, $blocks);
        echo "\" />
<meta name=\"Description\" content=\"";
        // line 8
        $this->displayBlock('page_description', $context, $blocks);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/css/main.css"), "html", null, true);
        echo "\" />
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<div id=\"site\">

<div id=\"header\">
    <h1>DanWasHere</h1>
</div>

<div id=\"main\">

    <div id=\"column_1\">
        <div id=\"nav\">
            <ul>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_portfolio");
        echo "\">Portfolio</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_flash_workshop");
        echo "\">Flash Workshop</a></li>
            </ul>
        </div>

    </div>

    <div id=\"content\">

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "
    </div>

</div>

<div id=\"footer_wrapper\">
    <div id=\"footer\">
        <p>I made and own everything on this site, except where otherwise indicated.</p>
        <p>Dan Searle <?php echo date(\"Y\") ?></p>
    </div>
</div>

</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " Untitled ";
    }

    // line 7
    public function block_page_keywords($context, array $blocks = array())
    {
        echo "PHP, Developer, Programmer, Coder, Barcelona, MySQL, Web Development";
    }

    // line 8
    public function block_page_description($context, array $blocks = array())
    {
        echo "Dan Searle's web site";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
    }

    // line 37
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
        return array (  133 => 37,  128 => 36,  122 => 8,  116 => 7,  110 => 4,  92 => 38,  90 => 37,  88 => 36,  77 => 28,  73 => 27,  69 => 26,  65 => 25,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  29 => 4,  24 => 1,);
    }
}
