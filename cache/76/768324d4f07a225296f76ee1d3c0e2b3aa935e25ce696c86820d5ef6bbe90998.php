<?php

/* register_success.html.twig */
class __TwigTemplate_34b01a4b296215eaa968781f694b1e2432af84c3da2d3b86fd3fbb68b896e51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register_success.html.twig", 1);
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
        echo "Registered";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"card\">
  <div class=\"card-header\">Successfully registered</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\"></div>
  </div>
  <div class=\"card-footer\"><a class=\"link external\" href=\"/login\">Login</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "register_success.html.twig";
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
{% block title %}Registered{% endblock %}
{% block content %}
<div class=\"card\">
  <div class=\"card-header\">Successfully registered</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\"></div>
  </div>
  <div class=\"card-footer\"><a class=\"link external\" href=\"/login\">Login</a></div>
</div>
{% endblock %}", "register_success.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\register_success.html.twig");
    }
}
