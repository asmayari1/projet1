<?php

/* SiteNedraBundle:Front:showNewsFront.html.twig */
class __TwigTemplate_a78e41300b8d8918d440917e7bba18b5d33c584e23f80108031247cc9bea893f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::home.html.twig");

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
        echo "<section id=\"carouselSection\" style=\"text-align:center\">
        <div id=\"myCarousel\" class=\"carousel slide\">
            <div class=\"carousel-inner\">
                <div style=\"text-align:center\" class=\"item\">
                    <div class=\"wrapper\"><img
                                src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/business_website_templates_1.jpg"), "html", null, true);
        echo "\"
                                alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>Qui je suis?</h2>

                            <p>Conférencière, experte en développement de soi , Co fondatrice de\" l'école de la vie\",  fondatrice et formatrice de la  méthode\" comment transformer sa vie  en un mois? \" . </p>
                            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("introduction_index_front");
        echo "\" class=\"btn btn-large btn-success\">Plus
                                D'information</a>
                        </div>
                    </div>
                </div>
                <div style=\"text-align:center\" class=\"item active\">
                    <div class=\"wrapper\"><img
                                src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/business_website_templates_2.jpg"), "html", null, true);
        echo "\"
                                alt=\"business webebsite template\">

                        <div class=\"carousel-caption\">
                            <h2>Qu'est que je fais</h2>

                            <p>Je vous guide pas à pas à réaliser vos projets, à réussir plus facilement dans tous les domaines de votre vie. Je vous apprend à dépasser vos difficultés en vous permettant de mieux les gérer.</p>
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("services_index_front");
        echo "\" class=\"btn btn-large btn-success\">Plus
                                D'information</a>
                        </div>
                    </div>
                </div>

                <div style=\"text-align:center\" class=\"item\">
                    <div class=\"wrapper\"><img
                                src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/business_website_templates_3.jpg"), "html", null, true);
        echo "\"
                                alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>Qu'est ce que fait?</h2>

                            <p>We specialise in web design, web development and graphic design for differeuce cheapest and best mobile web design packages in our services.  </p>
                            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("media_index_front");
        echo "\" class=\"btn btn-large btn-success\">Our
                                Portfolio</a>
                        </div>
                    </div>
                </div>

                <div style=\"text-align:center\" class=\"item\">
                    <div class=\"wrapper\"><img
                                src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/business_website_templates_4.jpg"), "html", null, true);
        echo "\"
                                alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>Besoin d'aide?</h2>

                            <p>Vous pouvez me contacter en m'envayant un email.Vous êtes les bienvenues </p>
                            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\" class=\"btn btn-large btn-success\">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
        </div>
    </section>

    <input type='hidden' id='current_page'/>
    <input type='hidden' id='show_per_page'/>
    <div class=\"row\">
        <div class=\"span8\">
            <div id='content'>

                ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 76
            echo "                    <p><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
            echo "\" alt=\"\"></p>
                    <P>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</P>
                    <p>
         publiée le:";
            // line 79
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d "), "html", null, true);
            }
            // line 80
            echo "        </p>
                    <p>";
            // line 81
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description");
            echo "</p>
                    <P>
                        <button type=\"button\" class=\"btn btn-warning\"><a
                                    href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"
                                    >Lire la suite</a></button>
                    </P>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
            </div>


            <!-- An empty div which will be populated using jQuery -->
            <div id='page_navigation'></div>

        </div>

        <div class=\"span4\">
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Statut aujourd'hui</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li class=\"active\">
                        <a href=\"#\">November 2012 (10)</a>
                    </li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Categories</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li class=\"active\">
                        <a href=\"#\">Website Design & Development</a>
                    </li>
                    <li>
                        <a href=\"#\">ALL</a>
                    </li>
                    <li>
                        <a href=\"#\">Design (14)</a>
                    </li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Top Articles</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li>
                        ";
        // line 126
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteNedraBundle:Programme:recentArticles", array("max" => 3)));
        echo "
                    </li>
                </ul>
            </div>
            <div class=\"well well-small\">
                <h4 class=\"style-h1\">Archives</h4>
                <ul class=\"nav nav-tabs nav-stacked\">
                    <li class=\"active\">
                        <a href=\"#\">November 2012 (10)</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Front:showNewsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 126,  168 => 90,  156 => 84,  150 => 81,  147 => 80,  143 => 79,  138 => 77,  133 => 76,  129 => 75,  110 => 59,  100 => 52,  89 => 44,  79 => 37,  68 => 29,  58 => 22,  48 => 15,  38 => 8,  31 => 3,  28 => 2,);
    }
}
