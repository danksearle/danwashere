<?php

/* DanWasHereBundle:Welcome:index.html.twig */
class __TwigTemplate_51e3a3a75f970f3788033cad852ee56562684b8e3a027efb2a0e969ca733b11a extends Twig_Template
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
        echo " Home - DanWasHere ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>PHP Developer in Barcelona</h1>

<p>I'm Dan Searle, ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo ", English and a freelance developer based in Barcelona, Spain, currently focused on PHP and MySQL. In the past I've done a lot of work coding in Flash.</p>

<p>Please <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">contact me</a> for up-to-date details of my experience and a CV.</p>

";
    }

    public function getTemplateName()
    {
        return "DanWasHereBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
