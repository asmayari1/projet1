<?php

/* SiteNedraBundle:Front:showCoachingFront.html.twig */
class __TwigTemplate_9729792e6e247d7c9f7c7b2560891a0e29dd1205004800070a1f0f3313380b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::home.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"bannerSection\" class=\"style-banner\">

        <div class=\"container\">
            <h1 id=\"pageTitle\" class=\"style-h1\">
                <small class=\"style-h1\">COACHING DE VIE( séance individuelle)</small>
\t\t<span class=\"pull-right toolTipgroup\">
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via facebook\"><img style=\"width:45px\"
                                                                                                src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/facebook.png"), "html", null, true);
        echo "\"
                                                                                                alt=\"facebook\"
                                                                                                title=\"facebook\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via twitter\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/twitter.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"twitter\"
                                                                                               title=\"twitter\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via youtube\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/youtube.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"youtube\"
                                                                                               title=\"youtube\"></a>
\t\t</span>
            </h1>
        </div>

    </section>


    <div class=\"row\">
        <div class=\"span8\">
            <div id='content'>

                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "
                    <div class=\"jumbotron\">
                        <p>";
            // line 35
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            </div>

        </div>
        <div class=\"span4\">


            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Derniers Programmes</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li>
                        ";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteNedraBundle:Programme:recentProgramme", array("max" => 3)));
        echo "

                    </li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Derniers Articles</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li class=\"active\">
                        ";
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteNedraBundle:Services:derniereFormation", array("max" => 3)));
        echo "

                    </li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Dalila Ghariani</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <p>
                        <img class=\"img-responsive\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/dalila.jpg"), "html", null, true);
        echo "\" alt=\"\">

                        Professeur-Conférencière -formatrice, experte en développement Personnel, fondatrice de l'école
                        de la vie, Diplômée en team building and team motivating du NLP Scotland school et Formatrice et
                        enseignante du yoga du rire diplômée du DR Kararia’s School of laughter Yoga London, elle est la
                        cofondatrice et la formatrice de la méthode\" comment transformer sa vie en un mois? \"cette
                        méthode révolutionnaire qui a radicalement changé la vie des gens qui l'ont appliqué.
                        Vous pouvez voir tous ses passages tv sur You tube ou bien la suivre tous les samedis matin sur
                        Hannibal TV.

                    <div style=\"font-size:2.5em;\">
                        <a href=\"#facebook\" role=\"button\" data-toggle=\"modal\" style=\"display:inline-block; width:1em\">
                            <i class=\"icon-facebook-sign\"> </i> </a>
                        <a href=\"#twitter\" role=\"button\" data-toggle=\"modal\" title=\"\"
                           style=\"display:inline-block; width:1em\"> <i class=\"icon-twitter-sign\"> </i> </a>
                        <a href=\"#youtube\" role=\"button\" data-toggle=\"modal\" style=\"display:inline-block;width:1em\"> <i
                                    class=\"icon-facetime-video\"> </i> </a>

                        <!-- Facebook -->
                        <div id=\"facebook\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"facebook\" aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Ma page FaceBook</h3>
                            </div>
                            <div class=\"modal-body\">
                                <p>\"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer.\"</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                        <!-- Twitter -->
                        <div id=\"twitter\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"twitter\"
                             aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Twitter Header</h3>
                            </div>
                            <div class=\"modal-body\">
                                <p>\"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer.\"</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                        <!-- Rss feed -->

                        <!-- Youtube -->
                        <div id=\"youtube\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"youtube\"
                             aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Youtube Vedio</h3>
                            </div>
                            <div class=\"modal-body\">
                                Vedios here
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                    </div>

                    </p>
                </ul>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Front:showCoachingFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 67,  121 => 58,  109 => 49,  96 => 38,  87 => 35,  83 => 33,  79 => 32,  62 => 18,  55 => 14,  48 => 10,  39 => 3,  36 => 2,  11 => 1,);
    }
}
