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

        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 42
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\" />

        ";
        // line 49
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
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
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</span>
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">

                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"path";
        // line 80
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
        // line 126
        echo $this->env->getExtension('routing')->getPath("coaching");
        echo "\"><span class=\"icon16 minia-icon-list-4\"></span>Coaching  </a>
                               
                            </li>
                            <li><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("introduction");
        echo "\"><span class=\"icon16 icomoon-icon-stats-up\"></span>Apropos</a></li>

                            <li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("media");
        echo "\"><span class=\"icon16 icomoon-icon-font\"></span> Portfollios </a></li>
                           


                            <li>
                                <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\"><span class=\"icon16  brocco-icon-envelope\"></span>Articles </a>
                            </li>

                            
                            <li><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("programme");
        echo "\"><span class=\"icon24 iconic-icon-chart\"></span> Events:TV/Radio/autres</a></li>
                            <li>
                                <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("services");
        echo "\"><span class=\"icon16 icomoon-icon-paper\"></span> Formations</a>
                                
                            </li>
                            <li><a href=\"";
        // line 145
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
        // line 158
        $this->displayBlock('bodyy', $context, $blocks);
        // line 162
        echo "                        <!-- lina il bare  -->
                    </div><!-- End search -->
                    ";
        // line 164
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "                </div><!-- End .heading-->

            </div><!-- End .row-fluid -->


                                                    ";
        // line 173
        $this->displayBlock('javascripts', $context, $blocks);
        // line 250
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
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/supr-theme/jquery.ui.supr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.cleditor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <!-- Plugin stylesheets -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/color-picker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/validate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/smart_wizard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

            <!-- Main stylesheets -->
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  /> 



        ";
    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 50
        echo "
        ";
    }

    // line 158
    public function block_bodyy($context, array $blocks = array())
    {
        // line 159
        echo "

                        ";
    }

    // line 164
    public function block_body($context, array $blocks = array())
    {
        // line 165
        echo "

                    ";
    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        // line 174
        echo "                                                        <script >
                                                            //adding load class to body and hide page
                                                            document.documentElement.className += 'loadstate';
                                                        </script>


                                                        <!-- Le javascript
                                                       ================================================== -->
                                                        <script  src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
                                                        <script  src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>  
                                                        <script  src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>

                                                        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
                                                        <!-- Load plugins -->
                                                        <script  src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/qtip/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.grow.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.tooltip_0.4.4.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/prettify/prettify.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jtree.js"), "html", null, true);
        echo "\"></script>

                                                        ";
        // line 203
        $this->displayBlock('js', $context, $blocks);
        // line 207
        echo "
                                                        <script  src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/watermark/jquery.watermark.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elastic/jquery.elastic.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/maskedinput/jquery.maskedinput-1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/stepper/ui.stepper.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/color-picker/colorpicker.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/timeentry/jquery.timeentry.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/select/select2.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dualselect/jquery.dualListBox-1.3.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/tiny_mce/jquery.tinymce.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_set.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch_data.js"), "html", null, true);
        echo "\"></script><!-- JSON for searched results -->
                                                        <script  src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/search/tipuesearch.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/animated-progress-bar/jquery.progressbar.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pnotify/jquery.pnotify.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/lazy-load/jquery.lazyload.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jpages/jPages.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pretty-photo/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/smartWizzard/jquery.smartWizard-2.0.min.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/touch-punch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/ios-fix/ios-orientationchange-fix.js"), "html", null, true);
        echo "\"></script>

                                                        <script  src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/elfinder/elfinder.min.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/plupload.html4.js"), "html", null, true);
        echo "\"></script>
                                                        <script  src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"), "html", null, true);
        echo "\"></script>


                                                        <!-- Init plugins -->

                                                        <!-- Important Place before main.js  -->
                                                        <script  src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js\"></script>
                                                        <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


                                                    ";
    }

    // line 203
    public function block_js($context, array $blocks = array())
    {
        // line 204
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
        return array (  584 => 204,  581 => 203,  573 => 246,  563 => 239,  559 => 238,  555 => 237,  551 => 236,  547 => 235,  542 => 233,  538 => 232,  533 => 230,  529 => 229,  525 => 228,  521 => 227,  517 => 226,  513 => 225,  508 => 223,  504 => 222,  500 => 221,  496 => 220,  492 => 219,  488 => 218,  484 => 217,  480 => 216,  476 => 215,  472 => 214,  468 => 213,  464 => 212,  460 => 211,  456 => 210,  452 => 209,  448 => 208,  445 => 207,  443 => 203,  438 => 201,  434 => 200,  430 => 199,  426 => 198,  422 => 197,  417 => 195,  413 => 194,  409 => 193,  405 => 192,  401 => 191,  397 => 190,  393 => 189,  388 => 187,  383 => 185,  379 => 184,  375 => 183,  364 => 174,  361 => 173,  355 => 165,  352 => 164,  346 => 159,  343 => 158,  338 => 50,  335 => 49,  326 => 37,  320 => 34,  316 => 33,  312 => 32,  308 => 31,  304 => 30,  300 => 29,  296 => 28,  292 => 27,  288 => 26,  284 => 25,  280 => 24,  276 => 23,  272 => 22,  268 => 21,  264 => 20,  260 => 19,  256 => 18,  251 => 16,  247 => 15,  243 => 14,  239 => 13,  235 => 12,  231 => 11,  228 => 10,  225 => 9,  217 => 250,  215 => 173,  208 => 168,  206 => 164,  202 => 162,  200 => 158,  184 => 145,  178 => 142,  173 => 140,  166 => 136,  158 => 131,  147 => 126,  98 => 80,  88 => 73,  63 => 52,  61 => 49,  56 => 47,  48 => 45,  44 => 44,  40 => 43,  37 => 42,  35 => 9,  25 => 1,  176 => 84,  160 => 74,  153 => 129,  146 => 66,  139 => 62,  132 => 60,  128 => 59,  124 => 57,  120 => 56,  100 => 39,  93 => 34,  81 => 28,  75 => 25,  68 => 21,  62 => 20,  58 => 19,  52 => 46,  49 => 17,  45 => 16,  31 => 4,  28 => 3,);
    }
}
