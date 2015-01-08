<?php

/* SiteNedraBundle:Front:showTemoignagesFront.html.twig */
class __TwigTemplate_9544f28d4dd10de66997d61af103a319dc4e39369c8202a5b41d55f4933d6c54 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<section id=\"bannerSection\"
             style=\"background:url(";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/banner/portfolio.png) no-repeat center center"), "html", null, true);
        echo " \">

    <div class=\"container\">
            <h1 id=\"pageTitle\" class=\"style-h1\">
                <small class=\"style-h1\">Liste des Témoignages</small>
\t\t<span class=\"pull-right toolTipgroup\">
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via facebook\"><img style=\"width:45px\"
                                                                                                src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/facebook.png"), "html", null, true);
        echo "\"
                                                                                                alt=\"facebook\"
                                                                                                title=\"facebook\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via twitter\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/twitter.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"twitter\"
                                                                                               title=\"twitter\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via youtube\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/youtube.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"youtube\"
                                                                                               title=\"youtube\"></a>
\t\t</span>
            </h1>
        </div>

    </section>
    <br>

    <input type='hidden' id='current_page'/>
    <input type='hidden' id='show_per_page'/>
<div class=\"row\">
   <div class=\"span8\">
    <div id='content'>

        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 38
            echo "
            <p>message:";
            // line 39
            echo $this->getAttribute($context["entity"], "message", array());
            echo "</p>
            <p>envoyé par:";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</p>
            <p>Age: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "age", array()), "html", null, true);
            echo "ans</p>
            <p>Adresse:";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</p>
            <p> Profession:";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "profession", array()), "html", null, true);
            echo "</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    </div>


       <!-- An empty div which will be populated using jQuery -->
       <div id='page_navigation'></div>

   </div>

    <div class=\"span4\">


        <div class=\"well well-small\">
            <h4 class=\"style-h1\">Derniers Programmes</h4>
            <ul class=\"nav nav-tabs nav-stacked\">
                <li>
                    ";
        // line 62
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
        // line 71
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
        // line 80
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
        return "SiteNedraBundle:Front:showTemoignagesFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 80,  147 => 71,  135 => 62,  117 => 46,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  89 => 38,  85 => 37,  66 => 21,  59 => 17,  52 => 13,  42 => 6,  39 => 5,  36 => 3,  11 => 1,);
    }
}
