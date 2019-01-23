<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/pages/single-movie.htm */
class __TwigTemplate_1a46c49c3cc98576fbcc95bf7d0ea51d7e2c57e4fdaccf9faffc5d8e40746ba0 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails2"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails2"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails2"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
            echo "
        <small class=\"blockquote-footer\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", array()), "html", null, true);
            echo "</small>
    </h1>

    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">



    <article class=\"my-5\">
        ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", array());
            echo "
    </article>

    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", array())) {
                // line 19
                echo "        <h3 class=\"my-3\">Gallery</h3>
        <div class=\"row\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 22
                    echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <img class=\"img-fluid img-thumbnail\" src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", array()), "html", null, true);
                    echo "\" alt=\"\">
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "        </div>
    ";
            }
            // line 28
            echo "

";
        } else {
            // line 31
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/single-movie.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  85 => 28,  81 => 26,  72 => 23,  69 => 22,  65 => 21,  61 => 19,  59 => 18,  53 => 15,  45 => 10,  39 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails2.record %}
{% set displayColumn = builderDetails2.displayColumn %}
{% set notFoundMessage = builderDetails2.notFoundMessage %}

{% if record %}
    <h1>{{ record.name }}
        <small class=\"blockquote-footer\">{{ record.year }}</small>
    </h1>

    <img src=\"{{ record.poster.path }}\" alt=\"\">



    <article class=\"my-5\">
        {{ record.description|raw }}
    </article>

    {% if(record.gallery) %}
        <h3 class=\"my-3\">Gallery</h3>
        <div class=\"row\">
            {% for img in record.gallery %}
                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <img class=\"img-fluid img-thumbnail\" src=\"{{ img.path }}\" alt=\"\">
                </div>
            {% endfor %}
        </div>
    {% endif %}


{% else %}
    {{ notFoundMessage }}
{% endif %}", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/single-movie.htm", "");
    }
}
