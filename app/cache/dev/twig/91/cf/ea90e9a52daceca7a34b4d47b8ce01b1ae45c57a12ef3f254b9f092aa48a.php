<?php

/* DanWasHereBundle:FlashWorkshop:index.html.twig */
class __TwigTemplate_91cfea90e9a52daceca7a34b4d47b8ce01b1ae45c57a12ef3f254b9f092aa48a extends Twig_Template
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
        echo " Flash Workshop - DanWasHere ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Flash Workshop</h1>

<p>I'm no longer coding in Flash, and these are around 10 years old, but some are fun to look at.</p>

<h2>Games</h2>

<p><a href=\"/flash_files/car_game.html\">Car game</a></p>
<p><a href=\"/flash_files/ballgame.html\">Ball game</a></p>

<h2>Interactives</h2>

<p>Most of these work by moving your mouse over the pictures.</p>

<p><a href=\"/flash_files/blob_grid1.html\">Blob grid</a></p>
<p><a href=\"/flash_files/dots.html\">Dots</a></p>
<p><a href=\"/flash_files/fish_eye_lens.html\">Fish Eye Lens</a></p>
<p><a href=\"/flash_files/folding_mc.html\">Folding Image Experiment</a></p>
<p><a href=\"/flash_files/grass_v1.html\">Interactive Grass</a></p>
<p><a href=\"/flash_files/paper_clips.html\">Paper Clips</a></p>
<p><a href=\"/flash_files/rectangle_push_v1.html\">Rectangle push</a></p>
<p><a href=\"/flash_files/rectangle_rotation_v2.html\">Rectangle push and rotate</a></p>
<p><a href=\"/flash_files/rubberbrick_rain_v1.html\">Rubberbricks (Rectangle push continuation)</a></p>
<p><a href=\"/flash_files/rubberbrick_rain_v2.html\">Rubberbricks with constraints</a></p>
<p><a href=\"/flash_files/snakes_v1.html\">Snakes</a></p>
<p><a href=\"/flash_files/snakes_v2.html\">Snakes II</a></p>
<p><a href=\"/flash_files/waving_lines_wmouse.html\">Waving lines following mouse</a></p>
<p><a href=\"/flash_files/spirals_in_motion.html\">Spirals in motion</a></p>
<p><a href=\"/flash_files/spirals_in_motion_v1.html\">Spirals in motion 1</a></p>
<p><a href=\"/flash_files/spirals_in_motion_v2.html\">Spirals in motion 2</a></p>
<p><a href=\"/flash_files/spirals_in_motion_v3.html\">Spirals in motion 3</a></p>
<p><a href=\"/flash_files/spirals_in_motion_v4.html\">Spirals in motion 4</a></p>
<p><a href=\"/flash_files/spirals_in_motion_v5.html\">Spirals in motion 5</a></p>
<p><a href=\"/flash_files/swirls.html\">Swirls</a></p>
<p><a href=\"/flash_files/tunnel_vision.html\">Tunnel Vision</a></p>
<p><a href=\"/flash_files/worm_v1.html\">Worm</a></p>

<h2>Maths experiments</h2>

<p><a href=\"/flash_files/fit_balls_into_space.3.html\">Fitting random balls into a space</a></p>
<p><a href=\"/flash_files/fit_balls_into_space.3.a.html\">Fitting uniform balls into a space</a></p>
<p><a href=\"/flash_files/gravity_2.html\">Gravity</a></p>
<p><a href=\"/flash_files/photo_zoom.html\">Photo Zoom (Pamplona Bull)</a></p>
<p><a href=\"/flash_files/point_to_vector.html\">Maths experiment: Point to Vector</a></p>
<p><a href=\"/flash_files/camera_shutter.html\">Camera shutter</a></p>

<p><a href=\"/flash_files/waving_lines_wball.html\">Waving lines with ball</a></p>

<h2>Passive experiments</h2>

<p><a href=\"/flash_files/aciiiiiiid.html\">Aciiiiiiid</a></p>
<p><a href=\"/flash_files/swimming_fish_5.html\">Swimming Fish</a></p>


";
    }

    public function getTemplateName()
    {
        return "DanWasHereBundle:FlashWorkshop:index.html.twig";
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
