<?php

/* stores_addedit.html.twig */
class __TwigTemplate_48562b532b27761969df24aa41647af5b78e78c707880162144f84271a0f74db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_addedit.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <style>
        #map {
            height: 12em;            
        }
    </style>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (($context["errorList"] ?? null)) {
            // line 13
            echo "        <ul>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 18
        echo " 
  
        <div class=\"content-block\"> 
            <div class=\"content-block-title\">Stores</div>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"list-block\">
                    <ul>
                        <!-- Text inputs -->
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">info</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"text\" placeholder=\"Store Name\" name=\"name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <input type=\"hidden\" name=\"longitude\" id=\"longitude\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "longitude", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"latitude\" id=\"latitude\" ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "latitude", array()), "html", null, true);
        echo ">                                                     
                        
                        ";
        // line 40
        echo "                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">photos</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"file\" name=\"storeImage\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "logoPath", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </li>


                        ";
        // line 53
        echo "                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-inner\">
                                    <input type=\"submit\" class=\"button button-big button-fill\" value=\"";
        // line 56
        if (($context["isEditing"] ?? null)) {
            echo "Update";
        } else {
            echo "Add";
        }
        echo " Store\">
                                </div>
                            </div>
                        </li>
                    </ul>
            </form>
        </div> 
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"card-content-inner\"><div id=\"map\"></div></div>
                </div>
            </div>     
    </div>

";
    }

    // line 72
    public function block_scriptextra($context, array $blocks = array())
    {
        echo " 
    <script    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48\">
    </script>
    <script>
        
   function initialize() {
      var map;
      var position = new google.maps.LatLng(50.45, 4.45);    // set your own default location.
      var myOptions = {
        zoom: 15,
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
        var marker = new google.maps.Marker({
            position: location, 
            map: map, 
            draggable: true,
            title: \"You are here! Drag the marker to the exact location.\"
        });
        // set the value an value of the <input>
        updateInput(location.lat(), location.lng());

        // Add a \"drag end\" event handler
        google.maps.event.addListener(marker, 'dragend', function() {
          updateInput(this.position.lat(), this.position.lng());
        });


      }

      function locationNotFound() {
        // location not found, you might want to do something here
      }

    }
    function updateInput(lat, lng) {
      document.getElementById(\"longitude\").value = lng;
      document.getElementById(\"latitude\").value = lat;
    }
   // google.maps.event.addDomListener(window, 'load', initialize);
   \$(document).ready(initialize);
</script>

";
    }

    public function getTemplateName()
    {
        return "stores_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  122 => 56,  117 => 53,  107 => 45,  100 => 40,  95 => 37,  91 => 36,  83 => 31,  68 => 18,  64 => 17,  55 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  30 => 3,  11 => 1,);
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

{% block headextra %} 
    <style>
        #map {
            height: 12em;            
        }
    </style>
{% endblock %}

{% block content %}
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %} 
  
        <div class=\"content-block\"> 
            <div class=\"content-block-title\">Stores</div>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"list-block\">
                    <ul>
                        <!-- Text inputs -->
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">info</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"text\" placeholder=\"Store Name\" name=\"name\" value=\"{{v.name}}\">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <input type=\"hidden\" name=\"longitude\" id=\"longitude\" value=\"{{v.longitude}}\">
                        <input type=\"hidden\" name=\"latitude\" id=\"latitude\" {{v.latitude}}>                                                     
                        
                        {# image path #}
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">photos</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"file\" name=\"storeImage\" value=\"{{v.logoPath}}\">
                                    </div>
                                </div>
                            </div>
                        </li>


                        {# submit #}
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-inner\">
                                    <input type=\"submit\" class=\"button button-big button-fill\" value=\"{% if isEditing %}Update{% else %}Add{% endif %} Store\">
                                </div>
                            </div>
                        </li>
                    </ul>
            </form>
        </div> 
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"card-content-inner\"><div id=\"map\"></div></div>
                </div>
            </div>     
    </div>

{% endblock %}

{% block scriptextra %} 
    <script    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48\">
    </script>
    <script>
        
   function initialize() {
      var map;
      var position = new google.maps.LatLng(50.45, 4.45);    // set your own default location.
      var myOptions = {
        zoom: 15,
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
        var marker = new google.maps.Marker({
            position: location, 
            map: map, 
            draggable: true,
            title: \"You are here! Drag the marker to the exact location.\"
        });
        // set the value an value of the <input>
        updateInput(location.lat(), location.lng());

        // Add a \"drag end\" event handler
        google.maps.event.addListener(marker, 'dragend', function() {
          updateInput(this.position.lat(), this.position.lng());
        });


      }

      function locationNotFound() {
        // location not found, you might want to do something here
      }

    }
    function updateInput(lat, lng) {
      document.getElementById(\"longitude\").value = lng;
      document.getElementById(\"latitude\").value = lat;
    }
   // google.maps.event.addDomListener(window, 'load', initialize);
   \$(document).ready(initialize);
</script>

{% endblock %}", "stores_addedit.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_addedit.html.twig");
    }
}
