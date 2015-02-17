<?php

/* DanWasHereBundle:Portfolio:index.html.twig */
class __TwigTemplate_26ef35d67ec489d996b3c59ebd017ffd45128c7158a6d445067a601090cbe8c2 extends Twig_Template
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
        echo " Portfolio - DanWasHere ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Portfolio</h1>

<div class=\"portfolio_block_odd\">
\t<h4><a class=\"anchor\" name=\"photo_scatter\">Photo Scatter</a></h4>
\t<p><a href=\"/portfolio/photo_scatter/photo_scatter.html\"><img style=\"float:left;\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/photo_scatter.jpg"), "html", null, true);
        echo "\" title=\"Photo Scatter\" alt=\"Screen shot from Photo Scatter\" /></a>
\tThis is a simple <abbr title=\"Extensible Markup Language\">XML</abbr> driven photo viewer written in <abbr title=\"Actionscript 2\">AS2</abbr>. You enlarge the photos by clicking on them, or you can drag and throw them by clicking and dragging. In particular you can rotate them and give them a spin as you throw them. To add to the realism it uses the DropShadowFilter to add a shadow to each photo.</p>
\t<p><a class=\"launch_project\" href=\"/portfolio/photo_scatter/photo_scatter.html\">Open Photo Scatter</a></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_even\">
\t<h4><a class=\"anchor\" name=\"bbcw_ncsl\">Leadership Pathways for the National College for School Leadership</a></a></h4>
\t<p>
\t<img style=\"float:left; clear:left;\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ncsl_1.jpg"), "html", null, true);
        echo "\" title=\"Leadership Pathways for the National College for School Leadership 1\" alt=\"Screen shot from Leadership Pathways for the National College for School Leadership 1\" />
\t<img style=\"float:left; clear:left;\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ncsl_2.jpg"), "html", null, true);
        echo "\" title=\"Leadership Pathways for the National College for School Leadership 1\" alt=\"Screen shot from Leadership Pathways for the National College for School Leadership 2\" />
\t<img style=\"float:left; clear:left;\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ncsl_3.jpg"), "html", null, true);
        echo "\" title=\"Leadership Pathways for the National College for School Leadership 1\" alt=\"Screen shot from Leadership Pathways for the National College for School Leadership 3\" />
\t<img style=\"float:left; clear:left;\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ncsl_4.jpg"), "html", null, true);
        echo "\" title=\"Leadership Pathways for the National College for School Leadership 1\" alt=\"Screen shot from Leadership Pathways for the National College for School Leadership 4\" />
\tThe design team at <strong>BBC Worldwide Interactive Learning</strong> had a working application that presented the user with a series of interactive screens designed to help them assess their team leadership skills, and they asked me to get involved to help increase the data communication across the application. Previously the screens would simply capture and record their own data, I extended that so that they could now read in and use the data captured in other parts of the application.</p>
\t<p>I also developed certain specialised screens, such as a drag-and-drop card sorting interface and a 3D spinning carousel-type interface <em><a href=\"#3d_carousel\">(see the prototype)</a></em>.</p>
\t<p>The screen shots you see included here represent a few of the screens that I developed.</p>
\t<p>As well as the project work itself, I devised new ways to help the team with their own development work: by helping to streamline the core application code; by adding a debug tool to the interface to give the developer feedback as the application runs; and creating a way for us to run the application in a development environment with full control over the parameters passed into the Flash by using HTML and Javascript.</p>
\t<p>This work was carried out for <strong>BBC Worldwide Interactive Learning</strong> and unfortunately I cannot provide a direct link to a live demo.</p>
\t<p>Flash 8, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_odd\">
\t<h4><a class=\"anchor\" name=\"catalogue\">Page Flipping Catalogue</a></h4>
\t<p><img style=\"float:left;\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/page_flipping_catalogue.jpg"), "html", null, true);
        echo "\" title=\"Page Flipping Catalogue\" alt=\"Screen shot from Page Flipping Catalogue\" />
\tI was part of a team that created a dynamic, page-flipping catalogue Flash application that allowed the client to publish their own online interactive catalogues from PDF originals. I worked on all the Flash code, and contributed to the <abbr title=\"Content Management System\">CMS</abbr>. The catalogues include clickable hotspots that can link to other pages in the catalogue, or link to other websites; there is a bookmark and notes feature to allow the users to record their favourite pages or add notes to pages; send to friend; zoom in and search feature.</p>
\t<p>The page flipping technique is quite wide spread on the internet now, and there exist a number of free solutions already out there - but in this case I wrote all the code to create the page turning effect myself, including working out the technique and maths behind it.</p>
\t<p>I also developed a Flash interface as a part of the CMS to allow the admin to create the clickable hotspots - the admin would see a page image and be able to draw rectangles on it to mark the hotspots. They then fill out the details of what action to take when clicked.</p>
\t<p>I worked with the UK based agency <strong>Ichameleon</strong> to develop this for one of their clients, as such I cannot provide a direct link to a live demo.</p>
\t<p>Flash 8, <abbr title=\"Actionscript 2\">AS2</abbr></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_even\">
\t<h4><a class=\"anchor\" name=\"exam\">Timed Multi-Choice Flash Exam</a></h4>
\t<p><img style=\"float:left;\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/flash_exam.jpg"), "html", null, true);
        echo "\" title=\"Timed Multi-Choice Flash Exam\" alt=\"Screen shot from Timed Multi-Choice Flash Exam\" />
\tAs part of a larger project, which I built in PHP and MySQL, I created a multiple choice, timed exam in Flash using <abbr title=\"Object-oriented programming\">OOP</abbr> in <abbr title=\"Actionscript 2\">AS2</abbr>. The questions and answers were set up in the <abbr title=\"Content Management System\">CMS</abbr> and fed to Flash via <abbr title=\"Extensible Markup Language\">XML</abbr> from the database. The timing was controlled at the server to prevent cheating. The exam movie would communicate with the server to start and stop the clock, and also to submit the answers the user gave.</p>
\t<p>The interface was a simple, text based form using check boxes to capture the answers. Each question could have one or more right answers, and the number of answer choices was flexible too - all this controlled via the <abbr title=\"Extensible Markup Language\">XML</abbr>.</p>
\t<p>The screen shot shown is deliberately obscured to protect the client, but it shows part of the interface when the user is reviewing an exam they've taken previously, where their answers are compared to the correct answers, and further help is given to them so that they can continue their studies of the course material.</p>
\t<p>I worked with the UK based agency Moonfish to develop this for one of their clients, as such I cannot provide a direct link to the exam.</p>
\t<p>Flash 8, <abbr title=\"Actionscript 2\">AS2</abbr></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_odd\">
\t<h4><a class=\"anchor\" name=\"ultimathrust\">UltimaThrust: Multi-level Game</a></h4>
\t<p><a href=\"/ultimathrust/ultimathrust.php\"><img style=\"float:left;\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ultimathrust.jpg"), "html", null, true);
        echo "\" title=\"UltimaThrust\" alt=\"Screen shot from UltimaThrust\" /></a>
\tI wrote this single player, multi-level game at the end of 2003, in <abbr title=\"Actionscript 1\">AS1</abbr> in Flash MX, it's based on the game Thrust from the 80s. You control a spaceship and the aim is to collect a pod and deposit it in a teleporter. On the way you are attacked by gun turrets, have to navigate through tunnels, doors and gravity generators.</p>
\t<p>Other features are editable keyboard controls that are remembered using cookies and a hiscore table built with PHP, MySQL and <abbr title=\"Extensible Markup Language\">XML</abbr>.</p>
\t<p><a class=\"launch_project\" href=\"/ultimathrust/ultimathrust.php\">Play UltimaThrust</a></p>
\t<div class=\"break\"></div>
</div>

<h3>Small Games and Interactives</h3>

<div class=\"portfolio_block_even\">
\t<h4><a class=\"anchor\" name=\"3d_carousel\">3D Spinning Carousel Menu</a></h4>
\t<p><a href=\"/portfolio/3d_carousel_menu/index.html\"><img style=\"float:left;\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/menu_carousel.gif"), "html", null, true);
        echo "\" title=\"3D Carousel Menu\" alt=\"Screen shot from 3D Carousel Menu\" /></a>
\tA 3D rotating menu. You can click on the black buttons, or on the menu items themselves, and they all rotate to position the one you selected at the front.</p>
\t<p>This was used as the basis for work on part of the <a href=\"#bbcw_ncsl\"><abbr title=\"National College for School Leadership\">NCSL</abbr> project for the <abbr title=\"BBC Worldwide Interactive Learning\">BBCW</abbr></a>.</p>
\t<p>Flash MX, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<p><a class=\"launch_project\" href=\"/portfolio/3d_carousel_menu/index.html\">View 3D Carousel Menu</a></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_odd\">
\t<h4><a class=\"anchor\" name=\"ou_xmas_card\">Open University Christmas Card</a></h4>
\t<p><a href=\"http://openlearn.open.ac.uk/mod/resource/view.php?id=52919\"><img style=\"float:left;\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/open_university_christmas_card.jpg"), "html", null, true);
        echo "\" title=\"Open University Christmas Card\" alt=\"Screen shot from Open University Christmas Card\" /></a>
\tUse your mouse to try to catch the falling snow flakes. I scripted the falling snow and how it interacts with the mouse, my brother designed and created the card.</p>
\t<p>Flash MX, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<p><a class=\"launch_project\" href=\"http://openlearn.open.ac.uk/mod/resource/view.php?id=52919\">View Card</a></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_even\">
\t<h4><a class=\"anchor\" name=\"car_game_1\">Car Game 1</a></h4>
\t<p><a href=\"/portfolio/car_game_1/index.html\"><img style=\"float:left;\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/car_game_1.jpg"), "html", null, true);
        echo "\" title=\"Car Game 1\" alt=\"Screen shot from Car Game 1\" /></a>
\tA simple car racer with a lap timer.</p>
\t<p>Flash MX, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<p><a class=\"launch_project\" href=\"/portfolio/car_game_1/index.html\">Play Car Game</a></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_odd\">
\t<h4><a class=\"anchor\" name=\"ball_game\">Ball Game</a></h4>
\t<p><a href=\"/flash_files/ballgame.html\"><img style=\"float:left;\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/ball_game.jpg"), "html", null, true);
        echo "\" title=\"Ball Game\" alt=\"Screen shot from Ball Game\" /></a>
\tUse your mouse to knock the ball around; the grass reacts to the ball and the wind.</p>
\t<p>Flash MX, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<p><a class=\"launch_project\" href=\"/flash_files/ballgame.html\">Play Ball Game</a></p>
\t<div class=\"break\"></div>
</div>

<div class=\"portfolio_block_even\">
\t<h4><a class=\"anchor\" name=\"news_ticker\">Scrolling News Ticker</a></h4>
\t<p><a href=\"/portfolio/news_ticker/index.html\"><img style=\"float:left;\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/danwashere/pix/portfolio/news_ticker.gif"), "html", null, true);
        echo "\" title=\"Scrolling News Ticker\" alt=\"Screen shot from Scrolling News Ticker\" /></a>
\tA vertically scrolling news ticker, powered by <abbr title=\"Extensible Markup Language\">XML</abbr>. The news item text is created dynamically, and due to a bug in Flash's text rendering code it was necessary to manually script the breaking of words across lines. Each news item is a link, the link destination is also defined in the XML.</p>
\t<p>At one time, this was used on the ActionAid.org.uk homepage.</p>
\t<p>Flash MX, <abbr title=\"Actionscript 1\">AS1</abbr></p>
\t<p><a class=\"launch_project\" href=\"/portfolio/news_ticker/index.html\">View Scrolling News Ticker</a></p>
\t<div class=\"break\"></div>
</div>


";
    }

    public function getTemplateName()
    {
        return "DanWasHereBundle:Portfolio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 105,  171 => 96,  159 => 87,  147 => 78,  134 => 68,  120 => 57,  106 => 46,  92 => 35,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  53 => 11,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
