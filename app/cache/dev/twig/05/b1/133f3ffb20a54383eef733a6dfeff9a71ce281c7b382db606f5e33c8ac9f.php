<?php

/* SiteNedraBundle:Contact:index.html.twig */
class __TwigTemplate_05b1133f3ffb20a54383eef733a6dfeff9a71ce281c7b382db606f5e33c8ac9f extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Contact list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "SiteNedraBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 178,  439 => 177,  432 => 174,  411 => 319,  400 => 314,  396 => 313,  392 => 312,  249 => 177,  244 => 174,  65 => 19,  53 => 19,  70 => 9,  76 => 30,  58 => 21,  584 => 204,  581 => 203,  573 => 246,  563 => 239,  559 => 238,  555 => 237,  551 => 236,  547 => 235,  542 => 233,  538 => 232,  533 => 230,  529 => 229,  525 => 228,  521 => 227,  517 => 226,  513 => 225,  508 => 223,  504 => 222,  500 => 221,  496 => 220,  492 => 219,  488 => 218,  484 => 217,  476 => 215,  472 => 214,  468 => 213,  464 => 212,  460 => 211,  456 => 210,  452 => 209,  448 => 208,  445 => 207,  443 => 203,  438 => 201,  434 => 200,  426 => 198,  422 => 197,  417 => 195,  405 => 192,  401 => 191,  397 => 190,  388 => 311,  383 => 185,  375 => 183,  364 => 174,  361 => 173,  352 => 164,  346 => 159,  343 => 158,  338 => 50,  335 => 49,  326 => 37,  320 => 34,  316 => 33,  308 => 31,  304 => 30,  300 => 29,  296 => 28,  292 => 27,  288 => 26,  284 => 25,  280 => 24,  276 => 23,  272 => 22,  260 => 19,  256 => 18,  251 => 179,  239 => 13,  231 => 164,  228 => 10,  225 => 9,  215 => 173,  206 => 164,  202 => 162,  200 => 158,  184 => 145,  178 => 142,  153 => 129,  480 => 216,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 175,  430 => 199,  427 => 143,  423 => 142,  413 => 194,  409 => 193,  407 => 318,  402 => 130,  398 => 129,  393 => 189,  387 => 122,  384 => 310,  381 => 120,  379 => 184,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 165,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 32,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 21,  264 => 20,  258 => 81,  252 => 80,  247 => 15,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 14,  240 => 86,  238 => 85,  235 => 12,  230 => 82,  227 => 81,  224 => 160,  221 => 77,  219 => 158,  217 => 250,  208 => 150,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 21,  87 => 25,  21 => 1,  26 => 2,  93 => 28,  88 => 73,  78 => 21,  46 => 17,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 136,  163 => 62,  158 => 131,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 15,  24 => 4,  25 => 1,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 9,  40 => 43,  37 => 12,  22 => 2,  246 => 176,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 80,  96 => 31,  83 => 35,  74 => 26,  66 => 15,  55 => 15,  52 => 46,  50 => 18,  43 => 8,  41 => 13,  35 => 6,  32 => 10,  29 => 3,  209 => 82,  203 => 148,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 140,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 126,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 26,  60 => 6,  57 => 17,  54 => 6,  51 => 17,  48 => 16,  45 => 14,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 7,);
    }
}
