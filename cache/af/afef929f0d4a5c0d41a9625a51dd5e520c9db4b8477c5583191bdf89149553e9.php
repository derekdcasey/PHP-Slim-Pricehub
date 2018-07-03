<?php

/* register.html.twig */
class __TwigTemplate_f3f20d9434dbcd3da2761f011da04e05a187c0cd3f0af5fbc8d33d5e1510fcc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'overlayTitle' => array($this, 'block_overlayTitle'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
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
    public function block_overlayTitle($context, array $blocks = array())
    {
        echo "Register";
    }

    // line 5
    public function block_headextra($context, array $blocks = array())
    {
        // line 6
        echo " <script>
            \$(document).ready(function() {
                \$('input[name=email]').bind(\"propertychange change click keyup input paste\", function() {
                    // AJAX request
                    var email = \$('input[name=email]').val();
                    \$('#isTaken').load('/isemailregistered/' + email);
                });
            });
        </script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
    <form method=\"post\">

<div class=\"list-block\">
    <br>
  <ul>
    <!-- Text inputs -->
     <div class=\"item-content\"><p><span id='isTaken'></span></p></div>
      <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Name:</div>
          <div class=\"item-input\">
            <input type=\"text\" placeholder=\"Name\" name=\"name\">
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
           
          <div class=\"item-title label\">E-mail</div>
          <div class=\"item-input\">
            <input type=\"email\" placeholder=\"E-mail\" name=\"email\">
          </div>
        </div>
      </div>
    </li>

        <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Password</div>
          <div class=\"item-input\">
            <input type=\"password\" placeholder=\"Password\" name=\"pass1\">
          </div>
        </div>
      </div>
    </li>
    
         <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Password</div>
          <div class=\"item-input\">
            <input type=\"password\" placeholder=\"Confirm Password\" name=\"pass2\">
          </div>
        </div>
      </div>
    </li>
    <li>
        <br>
        <div class=\"item-content\">
             <div class=\"item-inner\">
        <input type=\"submit\" value=\"Register\" class=\"button button-big color-blue\"/>
             </div>
        </div>
    </li>
  </ul>
    
    </form>
    ";
        // line 80
        if (($context["errorList"] ?? null)) {
            // line 81
            echo "        <br>
        <div class=\"item-content\">
<ul>
    ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 85
                echo "        
    <li>";
                // line 86
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "    
</ul>
";
        }
        // line 91
        echo "    </div>
</div>
    
    
    
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 91,  141 => 88,  133 => 86,  130 => 85,  126 => 84,  121 => 81,  119 => 80,  55 => 18,  52 => 17,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block overlayTitle %}Register{% endblock %}

{% block headextra %}
 <script>
            \$(document).ready(function() {
                \$('input[name=email]').bind(\"propertychange change click keyup input paste\", function() {
                    // AJAX request
                    var email = \$('input[name=email]').val();
                    \$('#isTaken').load('/isemailregistered/' + email);
                });
            });
        </script>
{% endblock %}

{% block content %}

    <form method=\"post\">

<div class=\"list-block\">
    <br>
  <ul>
    <!-- Text inputs -->
     <div class=\"item-content\"><p><span id='isTaken'></span></p></div>
      <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Name:</div>
          <div class=\"item-input\">
            <input type=\"text\" placeholder=\"Name\" name=\"name\">
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
           
          <div class=\"item-title label\">E-mail</div>
          <div class=\"item-input\">
            <input type=\"email\" placeholder=\"E-mail\" name=\"email\">
          </div>
        </div>
      </div>
    </li>

        <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Password</div>
          <div class=\"item-input\">
            <input type=\"password\" placeholder=\"Password\" name=\"pass1\">
          </div>
        </div>
      </div>
    </li>
    
         <li>
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-title label\">Password</div>
          <div class=\"item-input\">
            <input type=\"password\" placeholder=\"Confirm Password\" name=\"pass2\">
          </div>
        </div>
      </div>
    </li>
    <li>
        <br>
        <div class=\"item-content\">
             <div class=\"item-inner\">
        <input type=\"submit\" value=\"Register\" class=\"button button-big color-blue\"/>
             </div>
        </div>
    </li>
  </ul>
    
    </form>
    {% if errorList %}
        <br>
        <div class=\"item-content\">
<ul>
    {% for error in errorList %}
        
    <li>{{error}}</li>
    {% endfor %}
    
</ul>
{% endif %}
    </div>
</div>
    
    
    
{% endblock %}
", "register.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\register.html.twig");
    }
}
