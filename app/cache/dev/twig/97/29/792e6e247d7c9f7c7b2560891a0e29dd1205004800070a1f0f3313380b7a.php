<?php

/* SiteNedraBundle:Front:showCoachingFront.html.twig */
class __TwigTemplate_9729792e6e247d7c9f7c7b2560891a0e29dd1205004800070a1f0f3313380b7a extends Twig_Template
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
    <br>
    <table class=\"records_list\">

        <tbody>
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <div class=\"jumbotron\">
                <p>";
            // line 32
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description");
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

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
        return array (  85 => 35,  76 => 32,  73 => 31,  69 => 30,  54 => 18,  47 => 14,  40 => 10,  31 => 3,  28 => 2,);
    }
}
