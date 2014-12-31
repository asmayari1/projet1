<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_640f78fadf51785aa902374dc79ca88f2c965214b50aac52d6fd981b1f28dcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <meta charset=\"UTF-8\">

    <title>Hello NedraAdmin</title>

    <style>

        body{
            margin: 0;
            padding: 0;
            background:#000000;

            color: #000000;
            font-family: Arial;
            font-size: 12px;
        }

        .body{
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background-image:url(\"../img/fleur.jpg\");
            background-size: cover;
            -webkit-filter: blur(5px);
            z-index: 0;
        }

        .grad{
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
            z-index: 1;
            opacity: 0.7;
        }

        .header{
            position: absolute;
            top: calc(50% - 35px);
            left: calc(50% - 255px);
            z-index: 2;
        }

        .header div{
            float: left;
            color: #f67712;
            font-family: 'Exo', sans-serif;
            font-size: 35px;
            font-weight: 200;
        }

        .header div span{
            color: #000000 !important;
        }

        .login{
            position: absolute;
            top: calc(50% - 75px);
            left: calc(50% - 50px);
            height: 200px;
            width: 200px;
            padding: 10px;
            z-index: 2;
            margin: 5px;
        }

        .login input[type=text]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid #000000;
            border-radius: 2px;
            color: #000000;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }

        .login input[type=password]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid #000000;
            border-radius: 2px;
            color:#000000;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
            margin-top: 10px;
        }

        .login input[type=button]{
            width: 260px;
            height: 35px;
            background: #000000;
            border: 1px solid #000000;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .login input[type=button]:hover{
            opacity: 0.8;
        }

        .login input[type=button]:active{
            opacity: 0.6;
        }

        .login input[type=text]:focus{
            outline: none;
            border: 1px solid #000000;
        }

        .login input[type=password]:focus{
            outline: none;
            border: 1px solid #000000;
        }

        .login input[type=button]:focus{
            outline: none;
        }


    </style>

    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prefixfree.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

    <div class=\"body\"></div>
    <div class=\"grad\"></div>
    <div class=\"header\">
        <div>Site<span>Nedra</span></div>
    </div>
    <br>

<div class=\"login\">
    ";
        // line 157
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 159
        echo "</div>



</div>
</body>
</html>
";
    }

    // line 157
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 158
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 158,  194 => 157,  183 => 159,  181 => 157,  166 => 145,  20 => 1,);
    }
}
