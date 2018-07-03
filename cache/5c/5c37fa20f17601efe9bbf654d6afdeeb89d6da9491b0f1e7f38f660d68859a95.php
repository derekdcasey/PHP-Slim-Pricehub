<?php

/* products_addedit.html.twig */
class __TwigTemplate_6437509f241a219f65690c03bc1fa763a32356539532112117509ab2d0275315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_addedit.html.twig", 1);
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
        echo "Products ";
        if (($context["isEditing"] ?? null)) {
            echo "Edit";
        } else {
            echo "Add";
        }
        echo " ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
";
        // line 5
        if (($context["errorList"] ?? null)) {
            // line 6
            echo "    <div class=\"content-block\"> 
        <ul>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
    </div>
";
        }
        // line 13
        echo " 


    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
        <form method=\"post\" enctype=\"multipart/form-data\" >
            <div class=\"list-block\">
                <ul>
                    <!-- Text inputs -->
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">bag</i></div>                            
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"text\" placeholder=\"Product name\" name=\"name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </li>

                    ";
        // line 34
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"file\" placeholder=\"Product Image\" name=\"productImage\">
                                </div>
                            </div>
                        </div>
                    </li>

                    ";
        // line 46
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">compose</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <textarea placeholder=\"Write a comment...\" name=\"comment\" class=\"resizable\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "comment", array()), "html", null, true);
        echo "</textarea>
                                </div>    
                            </div>
                        </div>
                    </li>

                    ";
        // line 58
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <input type=\"submit\" class=\"button button-big button-fill\" value=\"";
        // line 61
        if (($context["isEditing"] ?? null)) {
            echo "Update";
        } else {
            echo "Add";
        }
        echo " Product\">
                            </div>
                        </div>
                    </li>
                </ul>

        </form>
    </div> 
</div>
<div class=\"content-block\">&nbsp;</div>
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
        return array (  130 => 61,  125 => 58,  116 => 51,  109 => 46,  96 => 34,  87 => 27,  71 => 13,  66 => 11,  57 => 9,  53 => 8,  49 => 6,  47 => 5,  44 => 4,  41 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Products {% if isEditing %}Edit{% else %}Add{% endif %} {% endblock %}
{% block content %}
    
{% if errorList %}
    <div class=\"content-block\"> 
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    </div>
{% endif %} 


    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
        <form method=\"post\" enctype=\"multipart/form-data\" >
            <div class=\"list-block\">
                <ul>
                    <!-- Text inputs -->
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">bag</i></div>                            
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"text\" placeholder=\"Product name\" name=\"name\" value=\"{{v.name}}\">
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
                                    <input type=\"file\" placeholder=\"Product Image\" name=\"productImage\">
                                </div>
                            </div>
                        </div>
                    </li>

                    {# comment #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">compose</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <textarea placeholder=\"Write a comment...\" name=\"comment\" class=\"resizable\">{{v.comment}}</textarea>
                                </div>    
                            </div>
                        </div>
                    </li>

                    {# submit #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <input type=\"submit\" class=\"button button-big button-fill\" value=\"{% if isEditing %}Update{% else %}Add{% endif %} Product\">
                            </div>
                        </div>
                    </li>
                </ul>

        </form>
    </div> 
</div>
<div class=\"content-block\">&nbsp;</div>
{% endblock %}

", "products_addedit.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\products_addedit.html.twig");
    }
}
