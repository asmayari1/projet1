<?php

/* SiteNedraBundle:Message:email.txt.twig */
class __TwigTemplate_bb60b243089807b0e2446f682cdec99f5670c894827c1f17f95a85144c9ae1a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
De :";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["personne"]) ? $context["personne"] : $this->getContext($context, "personne")), "html", null, true);
        echo "
Email:";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "
message:";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Message:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
