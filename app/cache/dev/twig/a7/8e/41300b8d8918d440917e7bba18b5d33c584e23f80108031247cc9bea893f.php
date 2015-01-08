<?php

/* SiteNedraBundle:Front:showNewsFront.html.twig */
class __TwigTemplate_a78e41300b8d8918d440917e7bba18b5d33c584e23f80108031247cc9bea893f extends Twig_Template
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
            echo "                    <p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/news/" . $this->getAttribute($context["entity"], "id", array())) . ".") . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" height=\"525\"
                            width=\"666\"/>
                    </p>
                    <P>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</P>
                    <p>
         publiée le:";
            // line 81
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d "), "html", null, true);
            }
            // line 82
            echo "        </p>
                    <p>";
            // line 83
            echo twig_slice($this->env, $this->getAttribute($context["entity"], "description", array()), 0, 7);
            echo "
                        ";
            // line 84
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "description", array())) > 7)) {
                // line 85
                echo "                            ... <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show_front", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">lire le suite</a>
                        ";
            }
            // line 87
            echo "                    </p>
                    <P>

                    </P>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        // line 110
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
        // line 119
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
        // line 128
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
        return "SiteNedraBundle:Front:showNewsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 128,  214 => 119,  202 => 110,  184 => 94,  172 => 87,  166 => 85,  164 => 84,  160 => 83,  157 => 82,  153 => 81,  148 => 79,  141 => 76,  137 => 75,  118 => 59,  108 => 52,  97 => 44,  87 => 37,  76 => 29,  66 => 22,  56 => 15,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
