<?php

/* SiteNedraBundle:Coaching:index.html.twig */
class __TwigTemplate_52cfd7abfb6421e7e60460ee3b921915e69d678a17c28f8999276139933fab79 extends Twig_Template
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
        echo "<h1>Coaching list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>

                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                       <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coaching_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                  <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coaching_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 30
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("coaching_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Coaching:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  58 => 21,  584 => 204,  581 => 203,  573 => 246,  563 => 239,  559 => 238,  555 => 237,  551 => 236,  547 => 235,  542 => 233,  538 => 232,  533 => 230,  529 => 229,  525 => 228,  521 => 227,  517 => 226,  513 => 225,  508 => 223,  504 => 222,  500 => 221,  496 => 220,  492 => 219,  488 => 218,  484 => 217,  476 => 215,  472 => 214,  468 => 213,  464 => 212,  460 => 211,  456 => 210,  452 => 209,  448 => 208,  445 => 207,  443 => 203,  438 => 201,  434 => 200,  426 => 198,  422 => 197,  417 => 195,  405 => 192,  401 => 191,  397 => 190,  388 => 187,  383 => 185,  375 => 183,  364 => 174,  361 => 173,  352 => 164,  346 => 159,  343 => 158,  338 => 50,  335 => 49,  326 => 37,  320 => 34,  316 => 33,  308 => 31,  304 => 30,  300 => 29,  296 => 28,  292 => 27,  288 => 26,  284 => 25,  280 => 24,  276 => 23,  272 => 22,  260 => 19,  256 => 18,  251 => 16,  239 => 13,  231 => 11,  228 => 10,  225 => 9,  215 => 173,  206 => 164,  202 => 162,  200 => 158,  184 => 145,  178 => 142,  153 => 129,  480 => 216,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 199,  427 => 143,  423 => 142,  413 => 194,  409 => 193,  407 => 131,  402 => 130,  398 => 129,  393 => 189,  387 => 122,  384 => 121,  381 => 120,  379 => 184,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 32,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 21,  264 => 20,  258 => 81,  252 => 80,  247 => 15,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 49,  273 => 96,  269 => 94,  254 => 92,  243 => 14,  240 => 86,  238 => 85,  235 => 12,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 250,  208 => 168,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 52,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 47,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 73,  78 => 21,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 136,  163 => 62,  158 => 131,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 43,  37 => 42,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 80,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  55 => 15,  52 => 46,  50 => 10,  43 => 8,  41 => 7,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 126,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 24,  60 => 6,  57 => 11,  54 => 10,  51 => 17,  48 => 16,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
