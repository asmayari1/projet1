<?php

/* SiteNedraBundle:Temoignages:index.html.twig */
class __TwigTemplate_f1b118d9dc4a56de7c51d0bd4182d4c0b94a1a10320cdf4a7010d3cdc26a25a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        echo "<h1>Listes des  Temoignages </h1>



    <div class=\"box-inner\">

        <table class=\"table table-striped table-bordered bootstrap-datatable datatable responsive\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Age</th>
                <th>Adresse</th>
                <th>Message</th>
                <th>Profession</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "
                <tr>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "age"), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profession"), "html", null, true);
            echo "</td>



                    <td>
                        <a class=\"btn btn-success\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>
                            View
                        </a>
                        <a class=\"btn btn-info\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit icon-white\"></i>
                            Edit
                        </a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                            Delete
                        </a>
                    </td>

                </tr>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
        <ul>
            <li>
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("temoignages_new");
        echo "\">
                    Create a new entry
                </a>
            </li>
        </ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Temoignages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 56,  113 => 52,  97 => 42,  90 => 38,  83 => 34,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 23,  51 => 22,  31 => 4,  28 => 3,);
    }
}
