<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/pages/genres.htm */
class __TwigTemplate_334ae58403cc797fe7a55e14c85d24e1d12abdc0e10d877f9dca053f00b790a1 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movies", array())) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 7
                echo "       <h3><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-movie", array("slug" => twig_get_attribute($this->env, $this->source, $context["movie"], "slug", array())));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", array()), "html", null, true);
                echo "</a></h3>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/genres.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  39 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record.movies %}
    {%  for movie in record.movies %}
       <h3><a href=\"{{ \"single-movie\"|page({slug: movie.slug}) }}\">{{ movie.name }}</a></h3>
    {% endfor %}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/pages/genres.htm", "");
    }
}
