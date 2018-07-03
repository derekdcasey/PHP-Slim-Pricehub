<?php

/* login.html.twig */
class __TwigTemplate_2b6bd024781674d0eae417384823982530542b74717c9f7da33214333198862a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'overlayTitle' => array($this, 'block_overlayTitle'),
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
        echo "Login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <form method=\"post\">

<div class=\"list-block\">
    <br>
  <ul>
    <!-- Text inputs -->

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
            <input type=\"password\" placeholder=\"Password\" name=\"password\">
          </div>
        </div>
      </div>
    </li>
    
  
    <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
        <input type=\"submit\" value=\"Login\" class=\"button button-raised big-button button-fill color-blue\"/>
             </div>
        </div>
       </li>
       <li>
           <div class=\"content-block\">           
            <a href=\"/register\" class='external button button-raised big-button button-fill color-blue'>Create an account</a>
           </div>
            </li>
            <li>
            <div class=\"content-block\">           
             <a href=\"/passreset/request\" class='external button button-raised big-button button-fill color-orange'>Forgot you password?</a>
           </div>
            </li>
  </ul>
    
    <div class=\"content-block\">
        ";
        // line 57
        if (($context["error"] ?? null)) {
            // line 58
            echo "    <p>Login failed, try again or <a href=\"/register\">register</a></p>
";
        }
        // line 60
        echo "    </div>
    
    </div>
</div>
    
    
    
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 60,  93 => 58,  91 => 57,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block overlayTitle %}Login{% endblock %}

{% block content %}

    <form method=\"post\">

<div class=\"list-block\">
    <br>
  <ul>
    <!-- Text inputs -->

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
            <input type=\"password\" placeholder=\"Password\" name=\"password\">
          </div>
        </div>
      </div>
    </li>
    
  
    <li>
        <div class=\"item-content\">
             <div class=\"item-inner\">
        <input type=\"submit\" value=\"Login\" class=\"button button-raised big-button button-fill color-blue\"/>
             </div>
        </div>
       </li>
       <li>
           <div class=\"content-block\">           
            <a href=\"/register\" class='external button button-raised big-button button-fill color-blue'>Create an account</a>
           </div>
            </li>
            <li>
            <div class=\"content-block\">           
             <a href=\"/passreset/request\" class='external button button-raised big-button button-fill color-orange'>Forgot you password?</a>
           </div>
            </li>
  </ul>
    
    <div class=\"content-block\">
        {% if error %}
    <p>Login failed, try again or <a href=\"/register\">register</a></p>
{% endif %}
    </div>
    
    </div>
</div>
    
    
    
{% endblock %}
", "login.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\login.html.twig");
    }
}
