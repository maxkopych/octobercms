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
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">



    <article class=\"my-5\">
        ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", array());
            echo "
    </article>

    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array())) {
                // line 20
                echo "        <h5 class=\"my-3\">genres</h5>
        <ul>
            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 23
                    echo "                <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("genres", array("slug" => twig_get_attribute($this->env, $this->source, $context["genre"], "slug", array())));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", array())) {
                // line 29
                echo "        <h3 class=\"my-3\">Gallery</h3>
        <div class=\"row\">
            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gallery", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 32
                    echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <img class=\"img-fluid img-thumbnail\" src=\"";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "path", array()), "html", null, true);
                    echo "\" alt=\"\">
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "        </div>
    ";
            }
            // line 38
            echo "

";
        } else {
            // line 41
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
        return array (  119 => 41,  114 => 38,  110 => 36,  101 => 33,  98 => 32,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  81 => 25,  70 => 23,  66 => 22,  62 => 20,  60 => 19,  54 => 16,  46 => 11,  39 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
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

    {% if(record.genres) %}
        <h5 class=\"my-3\">genres</h5>
        <ul>
            {% for genre in record.genres %}
                <li><a href=\"{{ 'genres'|page({slug:genre.slug})  }}\">{{ genre.genre_title }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}

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
