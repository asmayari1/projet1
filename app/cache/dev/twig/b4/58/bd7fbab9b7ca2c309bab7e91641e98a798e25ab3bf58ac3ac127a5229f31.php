<?php

/* SiteNedraBundle:Contact:new.html.twig */
class __TwigTemplate_b458bd7fbab9b7ca2c309bab7e91641e98a798e25ab3bf58ac3ac127a5229f31 extends Twig_Template
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
        // line 4
        echo "<section id=\"bannerSection\"
             style=\"background:url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/banner/portfolio.png"), "html", null, true);
        echo ") no-repeat center center  ;\">
        <div class=\"container\">
            <h1 id=\"pageTitle\" class=\"style-h1\">
                <small class=\"style-h1\">Contactez-moi</small>
\t\t<span class=\"pull-right toolTipgroup\">
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via facebook\"><img style=\"width:45px\"
                                                                                                src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/facebook.png"), "html", null, true);
        echo "\"
                                                                                                alt=\"facebook\"
                                                                                                title=\"facebook\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via twitter\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/twitter.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"twitter\"
                                                                                               title=\"twitter\"></a>
\t\t\t<a href=\"#\" data-placement=\"top\" data-original-title=\"Find us on via youtube\"><img style=\"width:45px\"
                                                                                               src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/youtube.png"), "html", null, true);
        echo "\"
                                                                                               alt=\"youtube\"
                                                                                               title=\"youtube\"></a>
\t\t</span>
            </h1>
        </div>

    </section>
    <br>
    <div  class=\"row\">
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "
        <div class=\"alert alert-success\" role=\"alert\">
               <div class=\"flash-notice\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
        <div  class=\"span6\">
      ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

     </div>

        <div  class=\"span4\">
                <div id=\"myMap\" style=\"height:500px\">
                    <h4 style=\"text-align: center \">Retrouvez la librairie la plus proche de vous </h4>
                    <iframe src=\"https://mapsengine.google.com/map/embed?mid=zhi9TRL4bKTM.k588PHJEw4TY\" width=\"480\" height=\"400\"></iframe>

                </div>

        </div>
        </div>


";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  96 => 36,  87 => 33,  82 => 30,  78 => 29,  65 => 19,  58 => 15,  51 => 11,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
