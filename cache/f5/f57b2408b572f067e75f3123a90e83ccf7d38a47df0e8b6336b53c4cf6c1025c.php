<?php

/* stores_delete.html.twig */
class __TwigTemplate_fc6572c31077838be5fa78e211118ad0dcb0105f74ec5773564c4461af83a8d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_delete.html.twig", 1);
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
        echo "    ";
        if (($context["errorList"] ?? null)) {
            // line 5
            echo "        <ul>
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
    ";
        }
        // line 11
        echo "    <div class=\"page-content\">
        <div class=\"content-block-title\">Delete Product</div>
        <div class=\"list-block\">
            <ul>
                <li class=\"item-content\">
                    <div class=\"item-media\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "picPath", array()), "html", null, true);
        echo "\"></div>
                    <div class=\"item-inner\">
                        <div class=\"item-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
                        <div class=\"item-after\">Label</div>
                    </div>
                </li>
            </ul>
            <div class=\"list-block-label\">Are you sure you want to delete this product?</div>
        </div>
        <p class=\"buttons-row\">
            <a href=\"/stores/view/";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"button button-big button-fill button-raised color-teal\">Cancel</a>
            ";
        // line 29
        echo "        <form method=\"post\" action=\"/stores/delete/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"confirmed\" value=\"true\">
            <input type=\"submit\"  class=\"button button-big button-fill button-raised color-pink\" value=\"Delete\">
        </form>
    </p>
</div> 

";
    }

    public function getTemplateName()
    {
        return "stores_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  77 => 26,  66 => 18,  61 => 16,  54 => 11,  50 => 9,  41 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %}
    <div class=\"page-content\">
        <div class=\"content-block-title\">Delete Product</div>
        <div class=\"list-block\">
            <ul>
                <li class=\"item-content\">
                    <div class=\"item-media\"><img src=\"{{s.picPath}}\"></div>
                    <div class=\"item-inner\">
                        <div class=\"item-title\">{{s.name}}</div>
                        <div class=\"item-after\">Label</div>
                    </div>
                </li>
            </ul>
            <div class=\"list-block-label\">Are you sure you want to delete this product?</div>
        </div>
        <p class=\"buttons-row\">
            <a href=\"/stores/view/{{s.id}}\" class=\"button button-big button-fill button-raised color-teal\">Cancel</a>
            {# action not necessary since we're already on URL
               looking like action=\"/admin/products/delete/{{p.id}}\" #}
        <form method=\"post\" action=\"/stores/delete/{{s.id}}\">
            <input type=\"hidden\" name=\"confirmed\" value=\"true\">
            <input type=\"submit\"  class=\"button button-big button-fill button-raised color-pink\" value=\"Delete\">
        </form>
    </p>
</div> 

{% endblock %}

", "stores_delete.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_delete.html.twig");
    }
}
