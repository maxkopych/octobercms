<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/pages/movies.htm */
class __TwigTemplate_9f1220b4719e4cb6e8221ae86c8caebba08e46a82e393b92fef700c8f4c469d1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "

<ul class=\"record-list list-group\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "        <li>
            ";
            // line 13
            echo "            ";
            ob_start();
            // line 14
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 15
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 17
            echo "
                <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", array()), "html", null, true);
            echo "</h3>


                ";
            // line 21
            if (($context["detailsPage"] ?? null)) {
                // line 22
                echo "                    </a>
                ";
            }
            // line 24
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 25
            echo "
            ";
            // line 31
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", array()), "thumb", array(0 => 200, 1 => 200), "method"), "html", null, true);
            echo "\" alt=\"\">

            ";
            // line 34
            echo "            ";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", array()), 150));
            echo "
        </li>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>

";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 43
            echo "    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 46
                echo "                <li class=\"page-item\"><a
                            class=\"page-link\" href=\"";
                // line 47
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr;
                        Prev</a></li>
            ";
            }
            // line 50
            echo "
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "                <li class=\"page-item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a class=\"page-link\" href=\"";
                // line 53
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
            ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 58
                echo "                <li class=\"page-item\"><a
                            class=\"page-link\" href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next
                        &rarr;</a></li>
            ";
            }
            // line 62
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  158 => 59,  155 => 58,  153 => 57,  150 => 56,  139 => 53,  134 => 52,  130 => 51,  127 => 50,  121 => 47,  118 => 46,  116 => 45,  112 => 43,  110 => 42,  106 => 40,  97 => 38,  87 => 34,  81 => 31,  78 => 25,  75 => 24,  71 => 22,  69 => 21,  63 => 18,  60 => 17,  54 => 15,  51 => 14,  48 => 13,  45 => 11,  40 => 10,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<ul class=\"record-list list-group\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                <h3>{{ record.name }}</h3>


                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

            {#thumbnail with 200/200 it will auto generates
              You can crope it too by
              200,200,{'mode':'crop'}
              also auto value allowed
            #}
            <img src=\"{{ record.poster.thumb(200,200) }}\" alt=\"\">

            {# |raw adding with html #}
            {{ html_limit(record.description, 150)|raw }}
        </li>

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            {% if records.currentPage > 1 %}
                <li class=\"page-item\"><a
                            class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr;
                        Prev</a></li>
            {% endif %}

            {% for page in 1..records.lastPage %}
                <li class=\"page-item {{ records.currentPage == page ? 'active' : null }}\">
                    <a class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                </li>
            {% endfor %}

            {% if records.lastPage > records.currentPage %}
                <li class=\"page-item\"><a
                            class=\"page-link\" href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next
                        &rarr;</a></li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/movies.htm", "");
    }
}
