<?php

/* stores_view.html.twig */
class __TwigTemplate_6c5042717f323e921d1f7005f3cf79ef9f594c61ff36412abbc2e5832df2059a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_view.html.twig", 1);
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
        echo "    <div class=\"content-block-title\">Styled Cards</div>
 
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">Another card. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Suspendisse feugiat sem est, non tincidunt ligula volutpat sit amet. Mauris aliquet magna justo. </div>
  </div>
</div>      
    
<div class=\"card demo-card-header-pic\">
  <div style=\"background-image:url(...)\" valign=\"bottom\" class=\"card-header color-white no-border\">Journey To Mountains</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      <p class=\"color-gray\">Posted on January 21, 2015</p>
      <p>Quisque eget vestibulum nulla...</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"#\" class=\"link\">Like</a>
    <a href=\"#\" class=\"link\">Read more</a>
  </div>
</div>
    
    
    
    ";
    }

    public function getTemplateName()
    {
        return "stores_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
    <div class=\"content-block-title\">Styled Cards</div>
 
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">Another card. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Suspendisse feugiat sem est, non tincidunt ligula volutpat sit amet. Mauris aliquet magna justo. </div>
  </div>
</div>      
    
<div class=\"card demo-card-header-pic\">
  <div style=\"background-image:url(...)\" valign=\"bottom\" class=\"card-header color-white no-border\">Journey To Mountains</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      <p class=\"color-gray\">Posted on January 21, 2015</p>
      <p>Quisque eget vestibulum nulla...</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"#\" class=\"link\">Like</a>
    <a href=\"#\" class=\"link\">Read more</a>
  </div>
</div>
    
    
    
    {% endblock %}
", "stores_view.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\stores_view.html.twig");
    }
}
