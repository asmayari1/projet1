<?php

/* ::home.html.twig */
class __TwigTemplate_54b3ce21dbc868877624881f44a9ff74878a13aa45fc4c4fda8fddb71113e71b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Nedra Ghariani Mehdid</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/current/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"
          media=\"screen\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <style type=\"text/css\" id=\"enject\"></style>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryPagination.js"), "html", null, true);
        echo "\"></script>
    <div id=\"fb-root\"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            //how much items per page to show
            var show_per_page = 7;
            //getting the amount of elements inside content div
            var number_of_items = \$('#content').children().size();
            //calculate the number of pages we are going to have
            var number_of_pages = Math.ceil(number_of_items / show_per_page);

            //set the value of our hidden input fields
            \$('#current_page').val(0);
            \$('#show_per_page').val(show_per_page);

            //now when we got all we need for the navigation let's make it '

            /*
             what are we going to have in the navigation?
             - link to previous page
             - links to specific pages
             - link to next page
             */
            var navigation_html = '<a class=\"previous_link\" href=\"javascript:previous();\">Prev</a>';
            var current_link = 0;
            while (number_of_pages > current_link) {
                navigation_html += '<a class=\"page_link\" href=\"javascript:go_to_page(' + current_link + ')\" longdesc=\"' + current_link + '\">' + (current_link + 1) + '</a>';
                current_link++;
            }
            navigation_html += '<a class=\"next_link\" href=\"javascript:next();\">Next</a>';

            \$('#page_navigation').html(navigation_html);

            //add active_page class to the first page link
            \$('#page_navigation .page_link:first').addClass('active_page');

            //hide all the elements inside content div
            \$('#content').children().css('display', 'none');

            //and show the first n (show_per_page) elements
            \$('#content').children().slice(0, show_per_page).css('display', 'block');

        });

        function previous() {

            new_page = parseInt(\$('#current_page').val()) - 1;
            //if there is an item before the current active link run the function
            if (\$('.active_page').prev('.page_link').length == true) {
                go_to_page(new_page);
            }

        }

        function next() {
            new_page = parseInt(\$('#current_page').val()) + 1;
            //if there is an item after the current active link run the function
            if (\$('.active_page').next('.page_link').length == true) {
                go_to_page(new_page);
            }

        }
        function go_to_page(page_num) {
            //get the number of items shown per page
            var show_per_page = parseInt(\$('#show_per_page').val());

            //get the element number where to start the slice from
            start_from = page_num * show_per_page;

            //get the element number where to end the slice
            end_on = start_from + show_per_page;

            //hide all children elements of content div, get specific items and show them
            \$('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

            /*get the page link that has longdesc attribute of the current page and add active_page class to it
             and remove that class from previously active page link*/
            \$('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass('active_page');

            //update the current page input field
            \$('#current_page').val(page_num);
        }

    </script>
    <style>
        #page_navigation a {
            padding: 3px;
            border: 1px solid #FC5114;
            margin: 2px;
            color: black;
            text-decoration: none
        }

        .active_page {
            background: #FC5114;
            color: white !important;
        }
    </style>


</head>
<body>
<section id=\"headerSection\">
    <div class=\"container\">
        <div class=\"navbar\">
            <div class=\"container\">
                <button type=\"button\" class=\"btn btn-navbar active\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <h1><a class=\"brand\" href=\"index.html\">
                        <small>
                            <img class=\"media-object\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\"

                        </small>
                    </a></h1>
                <div class=\"nav-collapse collapse\">
                    <ul class=\"nav pull-right\">
                        <li class=\"active\"><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("news_index_front");
        echo "\">Accueil</a></li>

                        <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("introduction_index_front");
        echo "\">Aprops</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("services_index_front");
        echo "\">Coaching </a></li>
                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("formation_index_front");
        echo "\">Formation</a></li>
                            </ul>
                        </li>
                        <li class=\"programme\"><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("programme_index_front");
        echo "\">Programmes:TV/Radio</a></li>

                        <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("temoignages_index_front");
        echo "\">Témoignages</a></li>
                        <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("media_index_front");
        echo "\">Portfollio</a></li>
                        <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\" class=\" glyphicon-envelope\">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Header Ends================================================ -->
<section id=\"bodySection\"  style=\"background-color: #DADADA\">

<div class=\"container\" >
        ";
        // line 176
        $this->displayBlock('slider', $context, $blocks);
        // line 178
        echo "
        ";
        // line 179
        $this->displayBlock('body', $context, $blocks);
        // line 181
        echo "
    </div>

</section>

<section id=\"footerSection\">

    <div class=\"container\">
        <footer class=\"footer well well-small\">
            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <h4>Newsletter and Subscription</h4>
                    <form action=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("programme_email");
        echo "\" method=\"Post\">
                        <div class=\"input-append\">
                            <input id=\"appendedInputButton\" name=\"email\" placeholder=\"Enter your e-mail\" type=\"text\">
                            <button class=\"btn btn-warning\" type=\"submit\">send</button>
                        </div>
                    </form>
                </div>
                <div class=\"span5\">
                    <h4>Ma page FaceBook</h4>
                    <ul class=\"media-list\">
                        <li class=\"media\">
                            <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/nedraghariani?fref=ts\"
                                 data-colorscheme=\"light\" data-show-faces=\"true\" data-header=\"true\" data-stream=\"false\"
                                 data-show-border=\"true\"></div>
                    </ul>
                </div>

                <div class=\"span3\">
                    <a href=\"\" title=\"services\" class=\"style-h5\"><i></i> Accueil </a><br/>
                    <a href=\"\" title=\"\" class=\"style-h5\"> Nedra Ghariani Mahdid </a><br/>
                    <a href=\"\" title=\"portfolio\" class=\"style-h5\"> Coaching </a><br/>
                    <a href=\"\" title=\"portfolio\" class=\"style-h5\"> Formation </a><br/>
                    <a href=\"\" title=\"portfolio\" class=\"style-h5\"> Evénements </a><br/>
                    <a href=\"\" title=\"portfolio\" class=\"style-h5\"> Témoignages </a><br/>
                    <a href=\"\" title=\"portfolio\" class=\"style-h5\"> Contact </a><br/>


                    <h5>Find us on</h5>

                    <div style=\"font-size:2.5em;\">
                        <a href=\"#facebook\" role=\"button\" data-toggle=\"modal\" style=\"display:inline-block; width:1em\">
                            <i class=\"icon-facebook-sign\"> </i> </a>
                        <a href=\"#twitter\" role=\"button\" data-toggle=\"modal\" title=\"\"
                           style=\"display:inline-block; width:1em\"> <i class=\"icon-twitter-sign\"> </i> </a>
                        <a href=\"#youtube\" role=\"button\" data-toggle=\"modal\" style=\"display:inline-block;width:1em\"> <i
                                    class=\"icon-facetime-video\"> </i> </a>
                        <a href=\"#\" title=\"\" style=\"display:inline-block;width:1em\"> <i
                                    class=\"icon-google-plus-sign\"> </i> </a>
                        <a href=\"#rss\" role=\"button\" data-toggle=\"modal\" style=\"display:inline-block;width:1em\"> <i
                                    class=\"icon-rss\"> </i> </a>
                        <!-- Facebook -->
                        <div id=\"facebook\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"facebook\" aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Facebook Header</h3>
                            </div>
                            <div class=\"modal-body\">
                                <p>\"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer.\"</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                        <!-- Twitter -->
                        <div id=\"twitter\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"twitter\"
                             aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Twitter Header</h3>
                            </div>
                            <div class=\"modal-body\">
                                <p>\"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer.\"</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                        <!-- Rss feed -->
                        <div id=\"rss\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"rss\"
                             aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>RSS fed header</h3>
                            </div>
                            <div class=\"modal-body\">
                                <p>\"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer.\"</p>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                        <!-- Youtube -->
                        <div id=\"youtube\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"youtube\"
                             aria-hidden=\"true\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                <h3>Youtube Vedio</h3>
                            </div>
                            <div class=\"modal-body\">
                                Vedios here
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                <button class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p style=\"padding:18px 0 44px\">&copy; 2015,NadraGharianiMahdid </p>
        </footer>
    </div>

    <!-- /container -->
</section>
<a href=\"#\" class=\"btn\" style=\"position: fixed; bottom: 38px; right: 10px; display: none; \" id=\"toTop\"> <i
            class=\"icon-arrow-up\"></i> Go to top</a>

<!-- Placed at the end of the document so the pages load faster -->
<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/business_ltd_1.0.js"), "html", null, true);
        echo "\"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id=\"secectionBox\">
    <link rel=\"stylesheet\" href=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/switch/themeswitch.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"/>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/switch/theamswitcher.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <div id=\"themeContainer\">
        <div id=\"hideme\" class=\"themeTitle\"></div>
        <div class=\"themeName\">Follow via FaceBook</div>
        <div class=\"images style\">
            <div class=\"fb-like-box\" data-href=\"https://www.facebook.com/nedraghariani?fref=ts\" data-colorscheme=\"light\"
                 data-show-faces=\"true\" data-header=\"true\" data-stream=\"false\" data-show-border=\"true\"></div>

        </div>


    </div>
</div>

<span id=\"themesBtn\"></span>
</body>
</html>";
    }

    // line 176
    public function block_slider($context, array $blocks = array())
    {
        // line 177
        echo "        ";
    }

    // line 179
    public function block_body($context, array $blocks = array())
    {
        // line 180
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 180,  452 => 179,  448 => 177,  445 => 176,  424 => 317,  420 => 316,  413 => 312,  409 => 311,  405 => 310,  401 => 309,  397 => 308,  279 => 193,  265 => 181,  263 => 179,  260 => 178,  258 => 176,  244 => 165,  240 => 164,  236 => 163,  231 => 161,  225 => 158,  221 => 157,  214 => 153,  209 => 151,  200 => 145,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  32 => 10,  21 => 1,);
    }
}
