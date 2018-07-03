<?php

/* index.html.twig */
class __TwigTemplate_b1d9f4be629dbc67fbada3827432ce4c43329a984ff316c15ec432d75abb77e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"content-block\">
    <a href=\"/price/add\" class=\"external button button-fill button-big button-blue\">Add Price</a> 
    </div>
    <div class=\"content-block\">
    <a href=\"/stores/list\" class=\"external button button-fill button-big button-blue\">Stores</a>
    </div>
   <div class=\"content-block\">
    <a href=\"/products/list\" class=\"external button button-fill button-big button-blue\">Products</a>
    </div>  
     <div class=\"content-block\">
    <a href=\"/price/list\" class=\"external button button-fill button-big button-blue\">Prices</a> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
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

    <div class=\"content-block\">
    <a href=\"/price/add\" class=\"external button button-fill button-big button-blue\">Add Price</a> 
    </div>
    <div class=\"content-block\">
    <a href=\"/stores/list\" class=\"external button button-fill button-big button-blue\">Stores</a>
    </div>
   <div class=\"content-block\">
    <a href=\"/products/list\" class=\"external button button-fill button-big button-blue\">Products</a>
    </div>  
     <div class=\"content-block\">
    <a href=\"/price/list\" class=\"external button button-fill button-big button-blue\">Prices</a> 
    </div>
{% endblock %}



", "index.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\index.html.twig");
    }
}
