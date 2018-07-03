<?php

/* stores_delete_success.html.twig */
class __TwigTemplate_acd34bddbbc4c1e2793fa2c22b8bc7c87e326c88f96c5ab71307edc16cb931cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_delete_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Store Deleted";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content-block-title\">Store Deleted</div>
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">Store deleted successfully</div>
  </div>
         <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link\">Back to list</a>
    <a href=\"/index\" class=\"link\">Home</a>
  </div>
</div>
    
    
    
 
    ";
    }

    public function getTemplateName()
    {
        return "stores_delete_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Store Deleted{% endblock %}
{% block content %}
    <div class=\"content-block-title\">Store Deleted</div>
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">Store deleted successfully</div>
  </div>
         <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link\">Back to list</a>
    <a href=\"/index\" class=\"link\">Home</a>
  </div>
</div>
    
    
    
 
    {% endblock %}", "stores_delete_success.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_delete_success.html.twig");
    }
}
