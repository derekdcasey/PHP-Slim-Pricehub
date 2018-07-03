<?php

/* access_denied.html.twig */
class __TwigTemplate_40d0599bff5490ec2f8896092ddd549389853dd383a27c8b61092670fe0fe096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "access_denied.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Access Denied";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"list-block\">
    <br>
  <ul>
      
      <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
       <a href=\"/pricehub/login\" class='external'>Login</a>
             </div>
        </div>
       </li>
       <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
                 <a href=\"/pricehub/register\" class='external'>Or create an account</a>
             </div>
        </div>
            </li>
  
  </ul>
";
    }

    public function getTemplateName()
    {
        return "access_denied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Access Denied{% endblock %}

{% block content %}
    <div class=\"list-block\">
    <br>
  <ul>
      
      <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
       <a href=\"/pricehub/login\" class='external'>Login</a>
             </div>
        </div>
       </li>
       <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
                 <a href=\"/pricehub/register\" class='external'>Or create an account</a>
             </div>
        </div>
            </li>
  
  </ul>
{% endblock %}", "access_denied.html.twig", "C:\\xampp\\htdocs\\pricehub\\templates\\access_denied.html.twig");
    }
}
