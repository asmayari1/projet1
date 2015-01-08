<?php

/* SiteNedraBundle:Temoignages:index.html.twig */
class __TwigTemplate_f1b118d9dc4a56de7c51d0bd4182d4c0b94a1a10320cdf4a7010d3cdc26a25a9 extends Twig_Template
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
        // line 5
        echo "<div class=\"row-fluid\">

        <div class=\"span12\">

            <div class=\"box gradient\">

                <div class=\"title\">
                    <h4>
                        <span>Liste Des Témoignages</span>
                    </h4>
                </div>
                <div class=\"content noPad clearfix\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"
                           class=\"responsive dynamicTable display table table-bordered\" width=\"100%\">
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
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                            <tr>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "age", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo $this->getAttribute($context["entity"], "message", array());
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "profession", array()), "html", null, true);
            echo "</td>


                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>
                                        View
                                    </a>
                                    <a class=\"btn btn-info\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"glyphicon glyphicon-edit icon-white\"></i>
                                        Edit
                                    </a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temoignages_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 57
        echo "                        </tbody>

                    </table>


                </div>
            </div>
            <ul>
                <li>
                    <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("programme_new");
        echo "\">
                        Create a new entry
                    </a>
                </li>
            </ul>

        </div>
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
        return array (  136 => 66,  125 => 57,  112 => 50,  105 => 46,  98 => 42,  91 => 38,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  72 => 33,  68 => 32,  39 => 5,  36 => 3,  11 => 1,);
    }
}
