<?php

/* ::base.html.twig */
class __TwigTemplate_dd94434b083cf57c0c15c2c81a12167b0ede9e9ed470418b7b6fc311a42495f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyy' => array($this, 'block_bodyy'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Nedra Ghariani Mahdid</title>

    <meta charset=\"UTF-8\"/>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\"/>

    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 42
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\"
          href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\"
          href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\"
          href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\"/>

    ";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    <!--  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        -->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
</head>

<script src=\"//tinymce.cachefly.net/4.1/tinymce.min.js\"></script>
<body>
<!-- loading animation -->
<div id=\"qLoverlay\"></div>
<div id=\"qLbar\"></div>

<div id=\"header\">

    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"brand\" href=\"#\">
                    Admin.
                    <span class=\"slogan\">NedraGhariani</span>
                </a>

                <div class=\"btn-group pull-right\">
                    <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\" glyphicon glyphicon-user\"></i>


                        <span class=\"hidden-sm hidden-xs\">admin:";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">

                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"path";
        // line 88
        echo "fos_user_security_logout";
        echo "\">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->

</div>
<!-- End #header -->

<div id=\"wrapper\">

    <!--Responsive navigation button-->
    <div class=\"resBtn\">
        <a href=\"#\"><span class=\"icon16 minia-icon-list-3\"></span></a>
    </div>

    <!--Sidebar collapse button-->
    <div class=\"collapseBtn\">
        <a href=\"#\" class=\"tipR\" title=\"Hide sidebar\"><span class=\"icon12 minia-icon-layout\"></span></a>
    </div>

    <!--Sidebar background-->
    <div id=\"sidebarbg\">

    </div>
    <!--Sidebar content-->
    <div id=\"sidebar\">

        <div class=\"shortcuts\">
            <ul>

            </ul>
        </div>
        <!-- End search -->

        <div class=\"sidenav\">

            <div class=\"sidebar-widget\" style=\"margin: -1px 0 0 0;\">
                <h5 class=\"title\" style=\"margin-bottom:0\">Menu</h5>
            </div>
            <!-- End .sidenav-widget -->

            <div class=\"mainnav\">
                <ul>
                    <li><a href=\"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("introduction");
        echo "\"><span class=\"brocco-icon-heart \"></span>Apropos</a></li>


                    <li>
                        <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("coaching");
        echo "\"><span class=\"entypo-icon-users \"></span>Coaching </a>

                    </li>

                    <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("portfolio");
        echo "\"><span class=\"silk-icon-pictures \"></span> Portfollios </a></li>


                    <li>
                        <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\"><span class=\"eco-article \"></span>Articles </a>
                    </li>


                    <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("programme");
        echo "\"><span class=\" entypo-icon-screen\"></span>Programmes</a></li>
                    <li>
                        <a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><span class=\"icon16 icomoon-icon-paper\"></span> Formations</a>

                    </li>
                    <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("temoignages");
        echo "\"><span class=\"  icomoon-icon-pencil-2\"></span>Statuts</a>
                    </li>

                    <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("temoignages");
        echo "\"><span class=\"eco-users \"></span> Temoignages</a></li>

                </ul>
            </div>
        </div>
        <!-- End sidenav -->

    </div>
    <!-- End #sidebar -->

    <!--Body content-->
    <div id=\"content\" class=\"clearfix\">
        <div class=\"contentwrapper\"><!--Content wrapper-->

            <div class=\"heading\">
                ";
        // line 176
        $this->displayBlock('bodyy', $context, $blocks);
        // line 180
        echo "                <!-- lina il bare  -->
            </div>
            <!-- End search -->
            ";
        // line 183
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "        </div>
        <!-- End .heading-->

    </div>
    <!-- End .row-fluid -->


    ";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 271
        echo "

</body>
</html>
";
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        // line 10
        echo "
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jtree.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/supr-theme/jquery.ui.supr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.cleditor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Plugin stylesheets -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/color-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/validate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/smart_wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <!-- Main stylesheets -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>



    ";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "
    ";
    }

    // line 176
    public function block_bodyy($context, array $blocks = array())
    {
        // line 177
        echo "

                ";
    }

    // line 183
    public function block_body($context, array $blocks = array())
    {
        // line 184
        echo "

            ";
    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        // line 195
        echo "        <script>
            //adding load class to body and hide page
            document.documentElement.className += 'loadstate';
        </script>


        <!-- Le javascript
       ================================================== -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        <!-- Load plugins -->
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.grow.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.tooltip_0.4.4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jtree.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 224
        $this->displayBlock('js', $context, $blocks);
        // line 228
        echo "
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/watermark/jquery.watermark.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elastic/jquery.elastic.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/maskedinput/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/stepper/ui.stepper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/colorpicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/timeentry/jquery.timeentry.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dualselect/jquery.dualListBox-1.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tiny_mce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_set.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_data.js"), "html", null, true);
        echo "\"></script><!-- JSON for searched results -->
        <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/animated-progress-bar/jquery.progressbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/lazy-load/jquery.lazyload.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/jquery.smartWizard-2.0.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/touch-punch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ios-fix/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.html4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"), "html", null, true);
        echo "\"></script>


        <!-- Init plugins -->

        <!-- Important Place before main.js  -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js\"></script>
        <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


    ";
    }

    // line 224
    public function block_js($context, array $blocks = array())
    {
        // line 225
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 225,  605 => 224,  597 => 267,  587 => 260,  583 => 259,  579 => 258,  575 => 257,  571 => 256,  566 => 254,  562 => 253,  557 => 251,  553 => 250,  549 => 249,  545 => 248,  541 => 247,  537 => 246,  532 => 244,  528 => 243,  524 => 242,  520 => 241,  516 => 240,  512 => 239,  508 => 238,  504 => 237,  500 => 236,  496 => 235,  492 => 234,  488 => 233,  484 => 232,  480 => 231,  476 => 230,  472 => 229,  469 => 228,  467 => 224,  462 => 222,  458 => 221,  454 => 220,  450 => 219,  446 => 218,  441 => 216,  437 => 215,  433 => 214,  429 => 213,  425 => 212,  421 => 211,  417 => 210,  412 => 208,  407 => 206,  403 => 205,  399 => 204,  388 => 195,  385 => 194,  379 => 184,  376 => 183,  370 => 177,  367 => 176,  362 => 53,  359 => 52,  350 => 37,  344 => 34,  340 => 33,  336 => 32,  332 => 31,  328 => 30,  324 => 29,  320 => 28,  316 => 27,  312 => 26,  308 => 25,  304 => 24,  300 => 23,  296 => 22,  292 => 21,  288 => 20,  284 => 19,  280 => 18,  275 => 16,  271 => 15,  267 => 14,  263 => 13,  259 => 12,  255 => 11,  252 => 10,  249 => 9,  241 => 271,  239 => 194,  230 => 187,  228 => 183,  223 => 180,  221 => 176,  203 => 161,  197 => 158,  191 => 155,  186 => 153,  179 => 149,  172 => 145,  165 => 141,  158 => 137,  106 => 88,  96 => 81,  66 => 55,  64 => 52,  59 => 50,  55 => 49,  50 => 47,  45 => 45,  40 => 43,  37 => 42,  35 => 9,  25 => 1,);
    }
}
