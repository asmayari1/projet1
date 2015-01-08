<?php

/* SiteNedraBundle:News:new.html.twig */
class __TwigTemplate_9aaafbe6f9de9a7b257f7e2033873de7988028dc85d65f1124c7ec9e6c5de1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1> Ajouter un nouveau article</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("news_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    </form>

        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">
            Back to the list
        </a>

";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  49 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
