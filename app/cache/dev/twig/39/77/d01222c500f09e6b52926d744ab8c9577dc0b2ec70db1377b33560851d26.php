<?php

/* DanWasHereBundle:Contact:index.html.twig */
class __TwigTemplate_3977d01222c500f09e6b52926d744ab8c9577dc0b2ec70db1377b33560851d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DanWasHereBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DanWasHereBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Contact - DanWasHere ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Contact Me</h1>

<p>Let's talk! <span class=\"nobr\"><strong>danksearle <em>-at-</em> gmail <em>-dot-</em> com</strong></span>, <a href=\"https://twitter.com/danksearle\">@danksearle</a>, <a href=\"http://es.linkedin.com/in/danksearle\">LinkedIn</a>.</p>

";
    }

    public function getTemplateName()
    {
        return "DanWasHereBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
