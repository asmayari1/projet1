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
        <title>Nedra Ghariani</title>

        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 45
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\" />

        ";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "<!--  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        -->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

    <script src=\"//tinymce.cachefly.net/4.1/tinymce.min.js\"></script>
    <body>
        <!-- loading animation -->
        <div id=\"qLoverlay\"></div>
        <div id=\"qLbar\"></div>

        <div id=\"header\">

            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <div class=\"container-fluid\">
                        <a class=\"brand\" href=\"#\">&nbsp;<span class=\"slogan\"><FONT color=\"blue\" width=\"100\" Size=\"3\"></Font></span></a>
                        <div class=\"btn-group pull-right\">
                            <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\" glyphicon glyphicon-user\"></i>


                                <span class=\"hidden-sm hidden-xs\">admin:";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</span>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">

                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"path";
        // line 83
        echo "fos_user_security_logout";
        echo "\">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /navbar-inner -->
            </div><!-- /navbar --> 

        </div><!-- End #header -->

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
                </div><!-- End search -->            

                <div class=\"sidenav\">

                    <div class=\"sidebar-widget\" style=\"margin: -1px 0 0 0;\">
                        <h5 class=\"title\" style=\"margin-bottom:0\">Navigation</h5>
                    </div><!-- End .sidenav-widget -->

                    <div class=\"mainnav\">
                        <ul>
                           
                            <li>
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("coaching");
        echo "\"><span class=\"icon16 minia-icon-list-4\"></span>Coaching  </a>
                               
                            </li>
                            <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("introduction");
        echo "\"><span class=\"icon16 icomoon-icon-stats-up\"></span>Apropos</a></li>

                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("media");
        echo "\"><span class=\"icon16 icomoon-icon-font\"></span> Portfollios </a></li>
                           


                            <li>
                                <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\"><span class=\"icon16  brocco-icon-envelope\"></span>Articles </a>
                            </li>

                            
                            <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("programme");
        echo "\"><span class=\"icon24 iconic-icon-chart\"></span> Events:TV/Radio/autres</a></li>
                            <li>
                                <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><span class=\"icon16 icomoon-icon-paper\"></span> Formations</a>
                                
                            </li>
                            <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("temoignages");
        echo "\"><span class=\"icon16 brocco-icon-calendar\"></span> Temoignages</a></li>

                        </ul>
                    </div>
                </div><!-- End sidenav -->

            </div><!-- End #sidebar -->

            <!--Body content-->
            <div id=\"content\" class=\"clearfix\">
                <div class=\"contentwrapper\"><!--Content wrapper-->

                    <div class=\"heading\">
                        ";
        // line 161
        $this->displayBlock('bodyy', $context, $blocks);
        // line 165
        echo "                        <!-- lina il bare  -->
                    </div><!-- End search -->
                    ";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "                </div><!-- End .heading-->

            </div><!-- End .row-fluid -->


                                                    ";
        // line 176
        $this->displayBlock('javascripts', $context, $blocks);
        // line 253
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
            <link  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jtree.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />


            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/supr-theme/jquery.ui.supr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.cleditor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />

            <!-- Plugin stylesheets -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/color-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/validate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/smart_wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

            <!-- Main stylesheets -->
            <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  /> 



        ";
    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 53
        echo "
        ";
    }

    // line 161
    public function block_bodyy($context, array $blocks = array())
    {
        // line 162
        echo "

                        ";
    }

    // line 167
    public function block_body($context, array $blocks = array())
    {
        // line 168
        echo "

                    ";
    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
        // line 177
        echo "                                                        <script >
                                                            //adding load class to body and hide page
                                                            document.documentElement.className += 'loadstate';
                                                        </script>


                                                        <!-- Le javascript
                                                       ================================================== -->
                                                        <script  src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
                                                        <script  src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>  
                                                        <script  src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>

                                                        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
                                                        <!-- Load plugins -->
                                                        <script  src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.grow.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.tooltip_0.4.4.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jtree.js"), "html", null, true);
        echo "\"></script>

                                                        ";
        // line 206
        $this->displayBlock('js', $context, $blocks);
        // line 210
        echo "
                                                        <script  src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/watermark/jquery.watermark.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elastic/jquery.elastic.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/maskedinput/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/stepper/ui.stepper.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/colorpicker.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/timeentry/jquery.timeentry.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dualselect/jquery.dualListBox-1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tiny_mce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_set.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_data.js"), "html", null, true);
        echo "\"></script><!-- JSON for searched results -->
                                                        <script  src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/animated-progress-bar/jquery.progressbar.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/lazy-load/jquery.lazyload.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/jquery.smartWizard-2.0.min.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/touch-punch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ios-fix/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.html4.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"), "html", null, true);
        echo "\"></script>


                                                        <!-- Init plugins -->

                                                        <!-- Important Place before main.js  -->
                                                        <script  src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js\"></script>
                                                        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


                                                    ";
    }

    // line 206
    public function block_js($context, array $blocks = array())
    {
        // line 207
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
        return array (  587 => 207,  584 => 206,  576 => 249,  566 => 242,  562 => 241,  558 => 240,  554 => 239,  550 => 238,  545 => 236,  541 => 235,  536 => 233,  532 => 232,  528 => 231,  524 => 230,  520 => 229,  516 => 228,  511 => 226,  507 => 225,  503 => 224,  499 => 223,  495 => 222,  491 => 221,  487 => 220,  483 => 219,  479 => 218,  475 => 217,  471 => 216,  467 => 215,  463 => 214,  459 => 213,  455 => 212,  451 => 211,  448 => 210,  446 => 206,  441 => 204,  437 => 203,  433 => 202,  429 => 201,  425 => 200,  420 => 198,  416 => 197,  412 => 196,  408 => 195,  404 => 194,  400 => 193,  396 => 192,  391 => 190,  386 => 188,  382 => 187,  378 => 186,  367 => 177,  364 => 176,  358 => 168,  355 => 167,  349 => 162,  346 => 161,  341 => 53,  338 => 52,  329 => 40,  323 => 37,  319 => 36,  315 => 35,  311 => 34,  307 => 33,  303 => 32,  299 => 31,  295 => 30,  291 => 29,  287 => 28,  283 => 27,  279 => 26,  275 => 25,  271 => 24,  267 => 23,  263 => 22,  259 => 21,  253 => 18,  249 => 17,  245 => 16,  241 => 15,  235 => 12,  231 => 11,  228 => 10,  225 => 9,  217 => 253,  215 => 176,  208 => 171,  206 => 167,  202 => 165,  200 => 161,  184 => 148,  178 => 145,  173 => 143,  166 => 139,  158 => 134,  153 => 132,  147 => 129,  98 => 83,  63 => 55,  61 => 52,  52 => 49,  48 => 48,  44 => 47,  40 => 46,  37 => 45,  35 => 9,  25 => 1,  107 => 45,  100 => 40,  88 => 76,  82 => 31,  75 => 27,  70 => 25,  66 => 24,  60 => 23,  56 => 50,  53 => 21,  49 => 20,  31 => 4,  28 => 3,);
    }
}
