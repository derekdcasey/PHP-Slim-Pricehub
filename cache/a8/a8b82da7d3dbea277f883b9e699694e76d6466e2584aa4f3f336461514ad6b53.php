<?php

/* access_denied.html.twig */
class __TwigTemplate_89c509f0d18a1d2180929fef1162c9caaeaf93ec47751b0836d387afabf92d0f extends Twig_Template
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
        echo "    <div class=\"card\">
        <div class=\"card-header\">Access Denied</div>
        <div class=\"card-content\"> 
            <div class=\"list-block\">
                <ul>

                    <li> 
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <a href=\"/login\" class='button button-raised button-fill color-blue ripple-indigo external'>Login</a>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <a href=\"/register\" class='button button-raised button-fill color-blue ripple-indigo external'>Or create an account</a>
                            </div>
                        </div>
                    </li>  
                </ul> 
            </div>
        </div>
    </div>
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
    <div class=\"card\">
        <div class=\"card-header\">Access Denied</div>
        <div class=\"card-content\"> 
            <div class=\"list-block\">
                <ul>

                    <li> 
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <a href=\"/login\" class='button button-raised button-fill color-blue ripple-indigo external'>Login</a>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <a href=\"/register\" class='button button-raised button-fill color-blue ripple-indigo external'>Or create an account</a>
                            </div>
                        </div>
                    </li>  
                </ul> 
            </div>
        </div>
    </div>
{% endblock %}", "access_denied.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\access_denied.html.twig");
    }
}
