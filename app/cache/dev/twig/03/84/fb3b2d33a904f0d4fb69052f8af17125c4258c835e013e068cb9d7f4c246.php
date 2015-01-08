<?php

/* SiteNedraBundle:Front:showIntroductionFront.html.twig */
class __TwigTemplate_0384fb3b2d33a904f0d4fb69052f8af17125c4258c835e013e068cb9d7f4c246 extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "        <!--/stories-->
        <div class=\"row\">


            <div class=\"col-md-12\">
                <h1 class=\"style-h1\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</h1>
            </div>

        </div>
        <div class=\"row\">


            <div class=\"style-image\">
                <a class=\"story-img\" href=\"#\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedra.jpg"), "html", null, true);
            echo "\" class=\"img-circle\"></a>
            </div>


            <div class=\" col-lg-offset-2 col-xs-6\">
                <p style=\"text-align: center\">";
            // line 25
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
            </div>


        </div>





    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Front:showIntroductionFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  69 => 25,  61 => 20,  50 => 12,  43 => 7,  39 => 6,  36 => 4,  11 => 1,);
    }
}
