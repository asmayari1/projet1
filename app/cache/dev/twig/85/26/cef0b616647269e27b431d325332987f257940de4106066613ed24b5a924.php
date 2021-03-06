<?php

/* SiteNedraBundle:Front:showMediaFront.html.twig */
class __TwigTemplate_8526cef0b616647269e27b431d325332987f257940de4106066613ed24b5a924 extends Twig_Template
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
        echo "<section id=\"bannerSection\"
             style=\"background:url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/banner/portfolio.png) no-repeat center center"), "html", null, true);
        echo " \">
        <div class=\"container\">
            <h1 id=\"pageTitle\" class=\"style-h1\">Portfolio
                <small class=\"style-h1\">Potfolio</small>
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
<div class=\"row\">
    <li class=\"span3\">
        <div class=\"thumbnail\">
            <div class=\"blockDtl\">
                <h4>My web solutions</h4>
                <a href=\"http://mywebsolution.info\" target=\"_blank\" ><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
        echo "\" alt=\"bootstrap business templates\"/></a>
                <p>Our aim is simple - to provide affordable web design and development services for different devices. </p>
                <div class=\"btn-toolbar\">
                    <div class=\"btn-group toolTipgroup\">
                        <a class=\"btn\" href=\"mailto:developer.sba@gmail.com\" data-placement=\"right\" data-original-title=\"send email\"><i class=\"icon-envelope\"></i></a>
                        <a class=\"btn\" href=\"#\" data-placement=\"top\" data-original-title=\"do you like?\"><i class=\"icon-thumbs-up\"></i></a>
                        <a class=\"btn\" href=\"#\" data-placement=\"top\" data-original-title=\"dont like?\"><i class=\"icon-thumbs-down\"></i></a>
                        <a class=\"btn\" href=\"#\" data-placement=\"top\" data-original-title=\"share\"><i class=\"icon-link\"></i></a>
                        <a href=\"http://mywebsolution.info\" target=\"_blank\" class=\"btn\" data-placement=\"left\" data-original-title=\"browse\"><i class=\"icon-globe\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </li>
</div>
    </div>
    <br>
    <table class=\"records_list\">

        <tbody>
        ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "            <div class=\"jumbotron\">

            </div>
            <tr>


                <ul>
                    <li>
                        <a class=\"btn btn-success\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("introduction_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a class=\"btn btn-info\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("introduction_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Front:showMediaFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 69,  124 => 63,  118 => 60,  108 => 52,  104 => 51,  81 => 31,  65 => 18,  58 => 14,  51 => 10,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
