<?php

/* SiteNedraBundle:News:index.html.twig */
class __TwigTemplate_972da6610c92bfaa6381167b5bc5b4f6e80dc4dec229e5e304925480106049b2 extends Twig_Template
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
        echo "<h1>Liste des artiles</h1>
    <div class=\"row-fluid\">

        <div class=\"span12\">

            <div class=\"box gradient\">

                <div class=\"title\">
                    <h4>
                        <span>Liste Des Formations</span>
                    </h4>
                </div>
                <div class=\"content noPad clearfix\">
                    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"
                           class=\"responsive dynamicTable display table table-bordered\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Auteur</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "auteur", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</td>
                                <td>

                                    <a class=\"btn btn-success\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"glyphicon glyphicon-zoom-in icon-white\"></i>
                                        View
                                    </a>
                                    <a class=\"btn btn-info\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                        <i class=\"glyphicon glyphicon-edit icon-white\"></i>
                                        Edit
                                    </a>
                                    <a class=\"btn btn-danger\"
                                       href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 54
        echo "                        </tbody>

                    </table>


                </div>
            </div>
            <ul>
                <li>
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("news_new");
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
        return "SiteNedraBundle:News:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 63,  122 => 54,  109 => 47,  101 => 42,  94 => 38,  88 => 35,  84 => 34,  78 => 33,  74 => 32,  71 => 31,  67 => 30,  39 => 4,  36 => 3,  11 => 1,);
    }
}
