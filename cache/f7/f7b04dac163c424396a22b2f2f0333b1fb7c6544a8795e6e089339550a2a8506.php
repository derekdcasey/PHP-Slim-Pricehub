<?php

/* error_internal.html.twig */
class __TwigTemplate_5b813b3e504f7e440ca8ea625a44862d39c0a85b8a5a40d46b8578552a057b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "error_internal.html.twig", 1);
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
        echo "Internal Error";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "    
    <div class=\"card\">
  <div class=\"card-header\">Internal Error</div>
   <img src=\"/images/code_ninja.png\" style=\"width:100%; height:100%;\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\"></div>
     <p>Internal error occurred, we're very sorry.
    Our team of coding ninjas has been notified and is already working on the problem.</p>
  </div>
  <div class=\"card-footer\"><a class=\"link external\" href=\"/login\">Go home</a></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "error_internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Internal Error{% endblock %}

{% block content %}    
    <div class=\"card\">
  <div class=\"card-header\">Internal Error</div>
   <img src=\"/images/code_ninja.png\" style=\"width:100%; height:100%;\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\"></div>
     <p>Internal error occurred, we're very sorry.
    Our team of coding ninjas has been notified and is already working on the problem.</p>
  </div>
  <div class=\"card-footer\"><a class=\"link external\" href=\"/login\">Go home</a></div>
</div>

{% endblock %}", "error_internal.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\error_internal.html.twig");
    }
}
