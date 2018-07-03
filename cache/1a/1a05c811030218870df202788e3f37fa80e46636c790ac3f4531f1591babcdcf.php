<?php

/* master.html.twig */
class __TwigTemplate_00c8b13873e5ffcab63f19c339c6109e5a631d51d6c5ae928fb64f80e6565d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'floater' => array($this, 'block_floater'),
            'overlayTitle' => array($this, 'block_overlayTitle'),
            'searchbar' => array($this, 'block_searchbar'),
            'content' => array($this, 'block_content'),
            'scriptextra' => array($this, 'block_scriptextra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags-->
        <meta charset=\"utf-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">

        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <!-- Your app title -->
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Path to Framework7 iOS CSS theme styles-->

        <!-- Path to Framework7 iOS related color styles -->
        <link rel=\"stylesheet\" href=\"/css/framework7.material.min.css\">
        <link rel=\"stylesheet\" href=\"/css/framework7.material.colors.min.css\">

        <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
        <!-- Path to your custom app styles-->
        <link rel=\"stylesheet\" href=\"/css/my-app.css\">   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        // line 24
        $this->displayBlock('headextra', $context, $blocks);
        // line 25
        echo "    </head>
    <body>
        <!-- Status bar overlay for full screen mode (PhoneGap) -->
        <div class=\"statusbar-overlay\"></div>
        <!-- Panels overlay-->
        <div class=\"panel-overlay\"></div>
        <!-- Left panel with reveal effect-->
        <div class=\"panel panel-left panel-reveal\">
            <div class=\"content-block\">

                ";
        // line 35
        if (($context["userSession"] ?? null)) {
            // line 36
            echo "
                    <div class=\"content-block\">      
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    Signed in as ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "email", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content-block\">   
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/logout'>Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
        } else {
            // line 57
            echo "
                    <div class=\"content-block\">
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/login'>Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content-block\">
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/register'>Register</a>
                                </div>
                            </div>
                        </div>
                    </div>


                ";
        }
        // line 79
        echo "
                <!--NAV AREA -->
                <div class=\"list-block\">
                    <ul>
                        <li>
                            <a href=\"/products/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Products</div>

                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"/stores/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Stores</div>

                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"/price/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Prices</div>

                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <!-- Views -->

        <div class=\"views  layout-white\">
            <!-- Your main view, should have \"view-main\" class -->
            <div class=\"view view-main\">
                ";
        // line 121
        $this->displayBlock('floater', $context, $blocks);
        // line 150
        echo "                <!-- Top Navbar-->
                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->

                        <div class=\"center sliding\">";
        // line 155
        $this->displayBlock('overlayTitle', $context, $blocks);
        echo "</div>

                        <div class=\"right\">
                            <!-- 
                              Right link contains only icon - additional \"icon-only\" class
                              Additional \"open-panel\" class tells app to open panel when we click on this link
                            -->
                            <a href=\"#\" class=\"link icon-only open-panel\"><i class=\"icon icon-bars\"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
                <div class=\"pages navbar-through toolbar-through\">
                    <!-- Page, \"data-page\" contains page name -->
                    <div data-page=\"index\" class=\"page\">
                        <!-- Scrollable page content -->
                    ";
        // line 171
        $this->displayBlock('searchbar', $context, $blocks);
        // line 172
        echo "                    <div class=\"page-content  layout-white\"> 
                        ";
        // line 173
        $this->displayBlock('content', $context, $blocks);
        // line 181
        echo "                        ";
        // line 182
        echo "                        <div class=\"content-block\">&nbsp;</div>
                    </div> 
                </div>
            </div>
            <!-- Bottom Toolbar-->
            <div class=\"toolbar\">
                <div class=\"toolbar-inner\">
                    <!-- Toolbar links -->
                    <div class=\"content-block\">
                        <a href=\"/\" class=\"external color-white\"><i class=\"icon f7-icons\">home_fill</i></a> 
                    </div>
                    ";
        // line 194
        echo "                </div>
            </div>

        </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>
    <!-- barcode -->
    <script type=\"text/javascript\" src=\"/js/quagga.min.js\"></script>
    <!-- Path to your app js-->
    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>

";
        // line 206
        $this->displayBlock('scriptextra', $context, $blocks);
        // line 207
        echo "</body>
</html>              ";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 24
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 121
    public function block_floater($context, array $blocks = array())
    {
        // line 122
        echo "
                    <!-- Speed Dial Wrap -->
                    <div class=\"speed-dial\">
                        <!-- FAB inside will open Speed Dial actions -->
                        <a href=\"#\" class=\"floating-button\">
                            <!-- First icon is visible when Speed Dial actions are closed -->
                            <i class=\"icon icon-plus\"></i>
                            <!-- Second icon is visible when Speed Dial actions are opened -->
                            <i class=\"icon icon-close\"></i>
                        </a>
                        <!-- Speed Dial Actions -->
                        <div class=\"speed-dial-buttons\">
                            <!-- First Speed Dial button add price -->
                            <a href=\"/price/add\" class=\"external\">
                                <i class=\"icon f7-icons\">money_dollar</i>
                            </a>
                            <!-- Second Speed Dial add product button -->
                            <a href=\"/products/add\" class=\"external\">
                                <i class=\"icon f7-icons\">bag</i>
                            </a>
                            <!-- Third Speed Dial add store button -->
                            <a href=\"/stores/add\" class=\"external\">
                                <i class=\"icon f7-icons\">world</i>
                            </a>
                        </div>
                    </div>
                    <!-- End of Speed Dial -->
                ";
    }

    // line 155
    public function block_overlayTitle($context, array $blocks = array())
    {
        echo " <i class=\"f7-icons\">bolt_fill</i> PriceTrack";
    }

    // line 171
    public function block_searchbar($context, array $blocks = array())
    {
    }

    // line 173
    public function block_content($context, array $blocks = array())
    {
        // line 174
        echo "

                            <!-- content goes here -->



                        ";
    }

    // line 206
    public function block_scriptextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 206,  295 => 174,  292 => 173,  287 => 171,  281 => 155,  250 => 122,  247 => 121,  241 => 24,  235 => 13,  230 => 207,  228 => 206,  214 => 194,  201 => 182,  199 => 181,  197 => 173,  194 => 172,  192 => 171,  173 => 155,  166 => 150,  164 => 121,  120 => 79,  96 => 57,  77 => 41,  70 => 36,  68 => 35,  56 => 25,  54 => 24,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags-->
        <meta charset=\"utf-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"mobile-web-app-capable\" content=\"yes\">

        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <!-- Your app title -->
        <title>{% block title %}Index{% endblock %}</title>
        <!-- Path to Framework7 iOS CSS theme styles-->

        <!-- Path to Framework7 iOS related color styles -->
        <link rel=\"stylesheet\" href=\"/css/framework7.material.min.css\">
        <link rel=\"stylesheet\" href=\"/css/framework7.material.colors.min.css\">

        <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
        <!-- Path to your custom app styles-->
        <link rel=\"stylesheet\" href=\"/css/my-app.css\">   
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        {% block headextra %} {% endblock %}
    </head>
    <body>
        <!-- Status bar overlay for full screen mode (PhoneGap) -->
        <div class=\"statusbar-overlay\"></div>
        <!-- Panels overlay-->
        <div class=\"panel-overlay\"></div>
        <!-- Left panel with reveal effect-->
        <div class=\"panel panel-left panel-reveal\">
            <div class=\"content-block\">

                {% if userSession %}

                    <div class=\"content-block\">      
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    Signed in as {{userSession.email}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content-block\">   
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/logout'>Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>

                {% else %}

                    <div class=\"content-block\">
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/login'>Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"content-block\">
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <a class=\"button button-fill external\" href='/register'>Register</a>
                                </div>
                            </div>
                        </div>
                    </div>


                {% endif %}

                <!--NAV AREA -->
                <div class=\"list-block\">
                    <ul>
                        <li>
                            <a href=\"/products/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Products</div>

                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"/stores/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Stores</div>

                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"/price/list\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title\">Prices</div>

                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <!-- Views -->

        <div class=\"views  layout-white\">
            <!-- Your main view, should have \"view-main\" class -->
            <div class=\"view view-main\">
                {% block floater %}

                    <!-- Speed Dial Wrap -->
                    <div class=\"speed-dial\">
                        <!-- FAB inside will open Speed Dial actions -->
                        <a href=\"#\" class=\"floating-button\">
                            <!-- First icon is visible when Speed Dial actions are closed -->
                            <i class=\"icon icon-plus\"></i>
                            <!-- Second icon is visible when Speed Dial actions are opened -->
                            <i class=\"icon icon-close\"></i>
                        </a>
                        <!-- Speed Dial Actions -->
                        <div class=\"speed-dial-buttons\">
                            <!-- First Speed Dial button add price -->
                            <a href=\"/price/add\" class=\"external\">
                                <i class=\"icon f7-icons\">money_dollar</i>
                            </a>
                            <!-- Second Speed Dial add product button -->
                            <a href=\"/products/add\" class=\"external\">
                                <i class=\"icon f7-icons\">bag</i>
                            </a>
                            <!-- Third Speed Dial add store button -->
                            <a href=\"/stores/add\" class=\"external\">
                                <i class=\"icon f7-icons\">world</i>
                            </a>
                        </div>
                    </div>
                    <!-- End of Speed Dial -->
                {% endblock %}
                <!-- Top Navbar-->
                <div class=\"navbar\">
                    <div class=\"navbar-inner\">
                        <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->

                        <div class=\"center sliding\">{% block overlayTitle %} <i class=\"f7-icons\">bolt_fill</i> PriceTrack{% endblock %}</div>

                        <div class=\"right\">
                            <!-- 
                              Right link contains only icon - additional \"icon-only\" class
                              Additional \"open-panel\" class tells app to open panel when we click on this link
                            -->
                            <a href=\"#\" class=\"link icon-only open-panel\"><i class=\"icon icon-bars\"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
                <div class=\"pages navbar-through toolbar-through\">
                    <!-- Page, \"data-page\" contains page name -->
                    <div data-page=\"index\" class=\"page\">
                        <!-- Scrollable page content -->
                    {% block searchbar %}{% endblock %}
                    <div class=\"page-content  layout-white\"> 
                        {% block content %}


                            <!-- content goes here -->



                        {% endblock %}
                        {# creates white space at bottom of screen #}
                        <div class=\"content-block\">&nbsp;</div>
                    </div> 
                </div>
            </div>
            <!-- Bottom Toolbar-->
            <div class=\"toolbar\">
                <div class=\"toolbar-inner\">
                    <!-- Toolbar links -->
                    <div class=\"content-block\">
                        <a href=\"/\" class=\"external color-white\"><i class=\"icon f7-icons\">home_fill</i></a> 
                    </div>
                    {# <a href=\"#\" class=\"link\">Link 2</a> #}
                </div>
            </div>

        </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>
    <!-- barcode -->
    <script type=\"text/javascript\" src=\"/js/quagga.min.js\"></script>
    <!-- Path to your app js-->
    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>

{% block scriptextra %}{% endblock %}
</body>
</html>              ", "master.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
