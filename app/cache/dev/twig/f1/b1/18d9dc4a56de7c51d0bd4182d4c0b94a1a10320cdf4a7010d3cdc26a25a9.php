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
        return array (  97 => 42,  90 => 38,  113 => 52,  160 => 74,  146 => 66,  100 => 39,  81 => 28,  77 => 37,  127 => 70,  124 => 57,  110 => 65,  205 => 137,  181 => 124,  84 => 37,  442 => 178,  439 => 177,  432 => 174,  411 => 319,  400 => 314,  396 => 313,  392 => 312,  249 => 177,  244 => 174,  65 => 19,  53 => 18,  70 => 29,  76 => 32,  58 => 19,  584 => 204,  581 => 203,  573 => 246,  563 => 239,  559 => 238,  555 => 237,  551 => 236,  547 => 235,  542 => 233,  538 => 232,  533 => 230,  529 => 229,  525 => 228,  521 => 227,  517 => 226,  513 => 225,  508 => 223,  504 => 222,  500 => 221,  496 => 220,  492 => 219,  488 => 218,  484 => 217,  476 => 215,  472 => 214,  468 => 213,  464 => 212,  460 => 211,  456 => 210,  452 => 209,  448 => 208,  445 => 207,  443 => 203,  438 => 201,  434 => 200,  426 => 198,  422 => 197,  417 => 195,  405 => 192,  401 => 191,  397 => 190,  388 => 311,  383 => 185,  375 => 183,  364 => 174,  361 => 173,  352 => 164,  346 => 159,  343 => 158,  338 => 50,  335 => 49,  326 => 37,  320 => 34,  316 => 33,  308 => 31,  304 => 30,  300 => 29,  296 => 28,  292 => 27,  288 => 26,  284 => 25,  280 => 24,  276 => 23,  272 => 22,  260 => 19,  256 => 18,  251 => 179,  239 => 13,  231 => 164,  228 => 10,  225 => 9,  215 => 173,  206 => 164,  202 => 162,  200 => 158,  184 => 125,  178 => 142,  153 => 70,  480 => 216,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 175,  430 => 199,  427 => 143,  423 => 142,  413 => 194,  409 => 193,  407 => 318,  402 => 130,  398 => 129,  393 => 189,  387 => 122,  384 => 310,  381 => 120,  379 => 184,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 32,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 21,  264 => 20,  258 => 81,  252 => 80,  247 => 15,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 123,  169 => 60,  140 => 55,  132 => 60,  128 => 59,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 14,  240 => 86,  238 => 85,  235 => 12,  230 => 82,  227 => 81,  224 => 160,  221 => 77,  219 => 158,  217 => 143,  208 => 150,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 56,  102 => 32,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  38 => 6,  94 => 38,  89 => 39,  85 => 38,  75 => 29,  68 => 21,  56 => 21,  87 => 33,  21 => 1,  26 => 3,  93 => 36,  88 => 40,  78 => 34,  46 => 14,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 136,  163 => 62,  158 => 131,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 45,  91 => 49,  62 => 20,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 28,  72 => 31,  69 => 24,  47 => 18,  40 => 12,  37 => 7,  22 => 2,  246 => 176,  157 => 56,  145 => 46,  139 => 62,  131 => 52,  123 => 47,  120 => 56,  115 => 66,  111 => 37,  108 => 36,  101 => 32,  98 => 80,  96 => 43,  83 => 34,  74 => 30,  66 => 15,  55 => 23,  52 => 20,  50 => 13,  43 => 11,  41 => 13,  35 => 6,  32 => 10,  29 => 3,  209 => 82,  203 => 148,  199 => 134,  193 => 73,  189 => 127,  187 => 84,  182 => 66,  176 => 84,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 103,  149 => 51,  147 => 126,  144 => 78,  141 => 48,  133 => 85,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 67,  109 => 34,  106 => 43,  103 => 32,  99 => 46,  95 => 28,  92 => 42,  86 => 32,  82 => 43,  80 => 36,  73 => 25,  64 => 22,  60 => 22,  57 => 17,  54 => 20,  51 => 22,  48 => 19,  45 => 16,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 7,);
    }
}
