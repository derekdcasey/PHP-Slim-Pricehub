<?php

/* register.html.twig */
class __TwigTemplate_bad9f3f9ef7bb6cc18cfd77633e467e37a8c076747f1d37693fa4259450ab0c8 extends Twig_Template
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
        // line 70
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 71
            echo "        <br>
        <div class=\"item-content\">
<ul>
    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                echo "        
    <li>";
                // line 76
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    
</ul>
";
        }
        // line 81
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
        return array (  136 => 81,  131 => 78,  123 => 76,  120 => 75,  116 => 74,  111 => 71,  109 => 70,  55 => 18,  52 => 17,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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
", "register.html.twig", "C:\\xampp\\htdocs\\pricehub\\templates\\register.html.twig");
    }
}
