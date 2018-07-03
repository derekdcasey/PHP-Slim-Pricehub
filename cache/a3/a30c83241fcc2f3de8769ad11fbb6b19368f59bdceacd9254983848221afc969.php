<?php

/* stores_list.html.twig */
class __TwigTemplate_5ed2b921d4af368b54eedce9966459bb156ce949088d96c0712aefee289e200b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'searchbar' => array($this, 'block_searchbar'),
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
        echo "Store List";
    }

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    // line 14
    public function block_searchbar($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>

    <div class=\"searchbar-overlay\"></div>
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
            Nothing found
        </div>

        <div class=\"list-block list-block-search searchbar-found\">
            <!-- List View -->
            <div class=\"content-block-title\">Store List</div>
            <ul>               
                <div class=\"list-block accordion-list\">

                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 37
            echo "                        <li>
                            <a href=\"/stores/view/";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "logoPath", array()), "html", null, true);
            echo "\" width=\"44\" height=\"44\"></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title-row\">
                                        <div class=\"item-title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "name", array()), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                </div>
            </ul>
        </div>
        ";
        // line 55
        echo "        <div class=\"content-block\">&nbsp;</div>
    </div>

";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "

";
    }

    public function getTemplateName()
    {
        return "stores_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 62,  119 => 61,  112 => 55,  106 => 50,  99 => 48,  88 => 42,  82 => 39,  78 => 38,  75 => 37,  70 => 36,  47 => 15,  44 => 14,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block title %}Store List{% endblock %}
{% block headextra %}
    {# <script>
         \$(document).ready(function () {
         // respond to all events that may change the value of input
         \$('input[name=searchbar]').bind('propertychange change keyup input paste', function () {
             var searchInput = \$('input[name=searchbar]').val();
             \$('#searchList').load('/storeresult/' + searchInput);
         });
     });
     </script> #}
{% endblock %}
{% block searchbar %}
    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>

    <div class=\"searchbar-overlay\"></div>
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
            Nothing found
        </div>

        <div class=\"list-block list-block-search searchbar-found\">
            <!-- List View -->
            <div class=\"content-block-title\">Store List</div>
            <ul>               
                <div class=\"list-block accordion-list\">

                    {% for l in list %}
                        <li>
                            <a href=\"/stores/view/{{l.id}}\" class=\"item-link item-content external\">
                                <div class=\"item-media\"><img src=\"{{l.logoPath}}\" width=\"44\" height=\"44\"></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-title-row\">
                                        <div class=\"item-title\">{{l.name}}</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    {% else %}

                    {% endfor %}

                </div>
            </ul>
        </div>
        {# creates white space at bottom of screen #}
        <div class=\"content-block\">&nbsp;</div>
    </div>

{% endblock %}


{% block content %}


{% endblock %}", "stores_list.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_list.html.twig");
    }
}
