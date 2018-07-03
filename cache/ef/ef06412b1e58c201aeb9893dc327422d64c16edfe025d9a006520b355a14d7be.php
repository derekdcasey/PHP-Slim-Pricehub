<?php

/* products_addedit.html.twig */
class __TwigTemplate_c8d4aec62b99e498bc9489ea2661838e8939a718051c2220d8bb577940b2d075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_addedit.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        // line 11
        echo "<div class=\"content-block-title\">Products</div>
<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"list-block\">
  <ul>
    <!-- Text inputs -->
    <li>
      <div class=\"item-content\">
        <div class=\"item-media\"><i class=\"icon f7-icons\">person</i></div>
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <input type=\"text\" placeholder=\"Name\" name=\"name\">
          </div>
        </div>
      </div>
    </li>
 
    ";
        // line 28
        echo "    <li>
      <div class=\"item-content\">
        <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <input type=\"file\" placeholder=\"PicPath\" name=\"picPath\">
          </div>
        </div>
      </div>
    </li>
    
  </ul>
</div> 
</form>
";
    }

    public function getTemplateName()
    {
        return "products_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 28,  33 => 11,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
   {# {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %} #}
<div class=\"content-block-title\">Products</div>
<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"list-block\">
  <ul>
    <!-- Text inputs -->
    <li>
      <div class=\"item-content\">
        <div class=\"item-media\"><i class=\"icon f7-icons\">person</i></div>
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <input type=\"text\" placeholder=\"Name\" name=\"name\">
          </div>
        </div>
      </div>
    </li>
 
    {# image path #}
    <li>
      <div class=\"item-content\">
        <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <input type=\"file\" placeholder=\"PicPath\" name=\"picPath\">
          </div>
        </div>
      </div>
    </li>
    
  </ul>
</div> 
</form>
{% endblock %}

", "products_addedit.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\products_addedit.html.twig");
    }
}
