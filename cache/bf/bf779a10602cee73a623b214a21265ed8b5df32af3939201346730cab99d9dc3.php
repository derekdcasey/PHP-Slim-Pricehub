<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'overlayTitle' => array($this, 'block_overlayTitle'),
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
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- Your app title -->
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    <link rel=\"stylesheet\" href=\"/css/framework7.ios.min.css\">
    <!-- Path to Framework7 iOS related color styles -->
    <link rel=\"stylesheet\" href=\"/css/framework7.ios.colors.min.css\">
    <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
    <!-- Path to your custom app styles-->
    <link rel=\"stylesheet\" href=\"/css/my-app.css\">
    
    ";
        // line 19
        $this->displayBlock('headextra', $context, $blocks);
        // line 20
        echo "  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class=\"statusbar-overlay\"></div>
    <!-- Panels overlay-->
    <div class=\"panel-overlay\"></div>
    <!-- Left panel with reveal effect-->
    <div class=\"panel panel-left panel-reveal\">
      <div class=\"content-block\">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Views -->
 
    <div class=\"views  layout-dark\">
      <!-- Your main view, should have \"view-main\" class -->
      <div class=\"view view-main\">
              <a href=\"/pricehub/priceadd\" class=\"floating-button\">
    <i class=\"f7-icons\">add</i>
  </a>
        <!-- Top Navbar-->
        <div class=\"navbar\">
          <div class=\"navbar-inner\">
            <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->
            
            <div class=\"center sliding\">";
        // line 45
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
            <div class=\"page-content  layout-dark\">
            ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class=\"toolbar\">
          <div class=\"toolbar-inner\">
            <!-- Toolbar links -->
             <!-- <a href=\"#\" class=\"link\">Link 1</a>
          <a href=\"#\" class=\"link\">Link 2</a> -->
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    ";
        // line 91
        $this->displayBlock('scriptextra', $context, $blocks);
        // line 92
        echo "  </body>
</html>              ";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 19
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 45
    public function block_overlayTitle($context, array $blocks = array())
    {
        echo "Main";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "                
            
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href=\"about.html\">About app</a>
            
                
            ";
    }

    // line 91
    public function block_scriptextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 91,  148 => 63,  145 => 62,  139 => 45,  133 => 19,  127 => 10,  122 => 92,  120 => 91,  98 => 71,  96 => 62,  76 => 45,  49 => 20,  47 => 19,  35 => 10,  24 => 1,);
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
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- Your app title -->
    <title>{% block title %}Index{% endblock %}</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    <link rel=\"stylesheet\" href=\"/css/framework7.ios.min.css\">
    <!-- Path to Framework7 iOS related color styles -->
    <link rel=\"stylesheet\" href=\"/css/framework7.ios.colors.min.css\">
    <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
    <!-- Path to your custom app styles-->
    <link rel=\"stylesheet\" href=\"/css/my-app.css\">
    
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
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Views -->
 
    <div class=\"views  layout-dark\">
      <!-- Your main view, should have \"view-main\" class -->
      <div class=\"view view-main\">
              <a href=\"/pricehub/priceadd\" class=\"floating-button\">
    <i class=\"f7-icons\">add</i>
  </a>
        <!-- Top Navbar-->
        <div class=\"navbar\">
          <div class=\"navbar-inner\">
            <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->
            
            <div class=\"center sliding\">{% block overlayTitle %}Main{% endblock %}</div>
            
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
            <div class=\"page-content  layout-dark\">
            {% block content %}
                
            
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href=\"about.html\">About app</a>
            
                
            {% endblock %}
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class=\"toolbar\">
          <div class=\"toolbar-inner\">
            <!-- Toolbar links -->
             <!-- <a href=\"#\" class=\"link\">Link 1</a>
          <a href=\"#\" class=\"link\">Link 2</a> -->
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    {% block scriptextra %}{% endblock %}
  </body>
</html>              ", "master.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
