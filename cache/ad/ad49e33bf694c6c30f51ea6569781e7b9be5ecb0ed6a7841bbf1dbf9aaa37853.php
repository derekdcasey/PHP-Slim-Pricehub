<?php

/* products_view.html.twig */
class __TwigTemplate_9daf38a375b4d827a9ab0d509b2849e0f093e9f1f6ccf6531e378177b6bc0507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
            'scriptextra' => array($this, 'block_scriptextra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "name", array()), "html", null, true);
        echo " Page";
    }

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        #map{
            height: 12em;
        }
        
        .tooltip { position:absolute;
\twidth: 145px;
\tpadding: 5px;
\tborder: 1px solid gray;
\tfont-size: 9pt;
\tfont-family: Verdana;
\tbackground-color: #fff;
\tcolor: #000;
}
    </style>
    
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        // line 23
        echo "



    <div class=\"card\">
        <div class=\"card-header\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "prodName", array()), "html", null, true);
        echo "</div>
        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "picPath", array()), "html", null, true);
        echo "\" style=\"width:100%; height:100%;\">
        <div class=\"card-content\">
            <div class=\"card-content-inner\">
                <p class=\"color-gray\">Added by ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "username", array()), "html", null, true);
        echo "</p>
                <p>Barcode: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "barcode", array()), "html", null, true);
        echo "</p>
                <p>Comment: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "comment", array()), "html", null, true);
        echo "</p>
                ";
        // line 36
        echo "                <p class=\"buttons-row\">
                    <a href=\"#\" class=\"button button-big ripple-yellow button-fill\">";
        // line 37
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo " ";
        if ((($context["price"] ?? null) > 1)) {
            echo "Prices";
        } elseif ((($context["price"] ?? null) < 0)) {
            echo "Prices";
        } else {
            echo "Price";
        }
        echo "</a>
                </p>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"/products/list\" class=\"link external\">Store list</a>
            <a href=\"/products/edit/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link external\">Update</a>
            <a href=\"/products/delete/";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link  external\">Delete</a>
        </div>
    </div>
    <form method=\"post\">
        <input type=\"hidden\" id=\"long\" name=\"long\">
        <input type=\"hidden\" id=\"lat\" name=\"lat\">
    </form>
    <div class=\"card\">
        <div class=\"card-content\">
            <ul>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nearbyStores"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 55
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
            echo "</li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                    <li>no data </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    </div> 
    <div class=\"card\">
        <div class=\"card-content\">
            <div class=\"card-content-inner\"><div id=\"map\"></div></div>
        </div>
    </div>  

    ";
        // line 68
        echo "
";
    }

    // line 71
    public function block_scriptextra($context, array $blocks = array())
    {
        echo " 
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48\">
    </script> 
    <script>
        function initialize() {
        var map;
                var position = new google.maps.LatLng(50.45, 4.45); // set your own default location.
                var myOptions = {
                zoom: 13,
                        center: position
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions);
                // We send a request to search for the location of the user.  
                // If that location is found, we will zoom/pan to this place, and set a marker
                navigator.geolocation.getCurrentPosition(locationFound, locationNotFound);
                function locationFound(position) {
                // we will zoom/pan to this place, and set a marker
                var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        // var accuracy = position.coords.accuracy;
                        map.setCenter(location);
                        //TODO: MAKE MARKERS IN A TWIG FOR LOOP       
                // set the value an value of the <input>
                updateInput(location.lat(), location.lng());

            }


            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nearbyStores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 99
            echo "
                    var uluru = new google.maps.LatLng(";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "latitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "longitude", array()), "html", null, true);
            echo ");
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: \"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
            echo "\"
                    ";
            // line 105
            echo "   
                 }); 
          
";
            // line 120
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        
         
        
            function locationNotFound() {
                // location not found, you might want to do something here
            }

        }
        function updateInput(lat, lng) {
            document.getElementById(\"long\").value = lng;
            document.getElementById(\"lat\").value = lat;
        }
        // google.maps.event.addDomListener(window, 'load', initialize);
        \$(document).ready(initialize);

    </script>
<script type=\"text/javascript\" src=\"/js/custom_map_tooltip.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "products_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 121,  223 => 120,  218 => 105,  214 => 104,  205 => 100,  202 => 99,  198 => 98,  167 => 71,  162 => 68,  152 => 59,  145 => 57,  137 => 55,  132 => 54,  119 => 44,  115 => 43,  98 => 37,  95 => 36,  91 => 34,  87 => 33,  83 => 32,  77 => 29,  73 => 28,  66 => 23,  64 => 22,  61 => 21,  41 => 4,  38 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}
{% block title %}{{p.name}} Page{% endblock %}
{% block headextra %}
    <style>
        #map{
            height: 12em;
        }
        
        .tooltip { position:absolute;
\twidth: 145px;
\tpadding: 5px;
\tborder: 1px solid gray;
\tfont-size: 9pt;
\tfont-family: Verdana;
\tbackground-color: #fff;
\tcolor: #000;
}
    </style>
    
{% endblock %}
{% block content %}
    {#  {% for s in store %}  #}




    <div class=\"card\">
        <div class=\"card-header\">{{p.prodName}}</div>
        <img src=\"{{p.picPath}}\" style=\"width:100%; height:100%;\">
        <div class=\"card-content\">
            <div class=\"card-content-inner\">
                <p class=\"color-gray\">Added by {{p.username}}</p>
                <p>Barcode: {{p.barcode}}</p>
                <p>Comment: {{p.comment}}</p>
                {# TODO ADD link to prices page WHERE productId={{p.id}} #}
                <p class=\"buttons-row\">
                    <a href=\"#\" class=\"button button-big ripple-yellow button-fill\">{{price}} {% if price > 1 %}Prices{% elseif price < 0 %}Prices{% else %}Price{% endif %}</a>
                </p>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"/products/list\" class=\"link external\">Store list</a>
            <a href=\"/products/edit/{{p.id}}\" class=\"link external\">Update</a>
            <a href=\"/products/delete/{{p.id}}\" class=\"link  external\">Delete</a>
        </div>
    </div>
    <form method=\"post\">
        <input type=\"hidden\" id=\"long\" name=\"long\">
        <input type=\"hidden\" id=\"lat\" name=\"lat\">
    </form>
    <div class=\"card\">
        <div class=\"card-content\">
            <ul>
                {% for s in nearbyStores %}
                    <li>{{s.name}}</li>
                    {% else %}
                    <li>no data </li>
                    {% endfor %}
        </div>
    </div> 
    <div class=\"card\">
        <div class=\"card-content\">
            <div class=\"card-content-inner\"><div id=\"map\"></div></div>
        </div>
    </div>  

    {# {% endfor %}  #}

{% endblock %}

{% block scriptextra %} 
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48\">
    </script> 
    <script>
        function initialize() {
        var map;
                var position = new google.maps.LatLng(50.45, 4.45); // set your own default location.
                var myOptions = {
                zoom: 13,
                        center: position
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions);
                // We send a request to search for the location of the user.  
                // If that location is found, we will zoom/pan to this place, and set a marker
                navigator.geolocation.getCurrentPosition(locationFound, locationNotFound);
                function locationFound(position) {
                // we will zoom/pan to this place, and set a marker
                var location = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        // var accuracy = position.coords.accuracy;
                        map.setCenter(location);
                        //TODO: MAKE MARKERS IN A TWIG FOR LOOP       
                // set the value an value of the <input>
                updateInput(location.lat(), location.lng());

            }


            {% for s in nearbyStores %}

                    var uluru = new google.maps.LatLng({{s.latitude}}, {{s.longitude}});
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: \"{{s.name}}\"
                    {#  tooltip: \"<strong>{{s.name}}</strong>\"       #}   
                 }); 
          
{#        var tooltip = new Tooltip({map: map}, marker);
                 
                 tooltip.bindTo(\"text\", marker, \"tooltip\");
        google.maps.event.addListener(marker, 'mouseover', function() {
            tooltip.addTip();
            tooltip.getPos2(marker.getPosition());
        });
  \t
        google.maps.event.addListener(marker, 'mouseout', function() {
            tooltip.removeTip();
        });
 #}
        {% endfor %}
        
         
        
            function locationNotFound() {
                // location not found, you might want to do something here
            }

        }
        function updateInput(lat, lng) {
            document.getElementById(\"long\").value = lng;
            document.getElementById(\"lat\").value = lat;
        }
        // google.maps.event.addDomListener(window, 'load', initialize);
        \$(document).ready(initialize);

    </script>
<script type=\"text/javascript\" src=\"/js/custom_map_tooltip.js\"></script>
{% endblock %}", "products_view.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\products_view.html.twig");
    }
}
