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
                    <div class=\"wrapper\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
        echo "\" alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>Qui je suis?</h2>

                            <p>nedra </p>
                            <a href=\"about_us.html\" class=\"btn btn-large btn-success\">Read more</a>
                        </div>
                    </div>
                </div>
                <div style=\"text-align:center\" class=\"item active\">
                    <div class=\"wrapper\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
        echo "\"
                                              alt=\"business webebsite template\">

                        <div class=\"carousel-caption\">
                            <h2>Qu'est que je faire</h2>

                            <p>We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.  We recently introduce cheapest and best mobile web design packages in our services. </p>
                            <a href=\"services.html\" class=\"btn btn-large btn-success\">Read more</a>
                        </div>
                    </div>
                </div>

                <div style=\"text-align:center\" class=\"item\">
                    <div class=\"wrapper\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
        echo "\" alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>What we have done?</h2>

                            <p>We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.  We recently introduce cheapest and best mobile web design packages in our services.  </p>
                            <a href=\"portfolio.html\" class=\"btn btn-large btn-success\">Our Portfolio</a>
                        </div>
                    </div>
                </div>

                <div style=\"text-align:center\" class=\"item\">
                    <div class=\"wrapper\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
        echo "\" alt=\"business themes\">

                        <div class=\"carousel-caption\">
                            <h2>Need help?</h2>

                            <p>We specialise in web design, web development and graphic design for different Desktop, Mobiles and Tablets.  We recently introduce cheapest and best mobile web design packages in our services.  </p>
                            <a href=\"contact.html\" class=\"btn btn-large btn-success\">Contact us</a>
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
<div class=\"span8\">
    <div id='content'>

        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 65
            echo "          <p><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
            echo "\" alt=\"\"></p>
           <P>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</P>
            <p>
         publiée le:";
            // line 68
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d "), "html", null, true);
            }
            // line 69
            echo "        </p>
            <p>";
            // line 70
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description");
            echo "</p>
         <P>  <button type=\"button\" class=\"btn btn-warning\"><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"
                                                             class=\"btn-warning\">Lire la suite</a></button></P>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
</div>


    <!-- An empty div which will be populated using jQuery -->
    <div id='page_navigation'></div>
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
        return array (  142 => 76,  131 => 71,  127 => 70,  124 => 69,  120 => 68,  115 => 66,  110 => 65,  106 => 64,  82 => 43,  67 => 31,  51 => 18,  37 => 7,  31 => 3,  28 => 2,);
    }
}
