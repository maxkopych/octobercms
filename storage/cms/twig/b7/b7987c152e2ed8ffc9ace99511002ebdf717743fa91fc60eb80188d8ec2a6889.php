<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/partials/header.htm */
class __TwigTemplate_2219a03d92d9f49abb6f3c4ea03410f6958c19ad2b5cb1561043df9c1651a5f6 extends Twig_Template
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
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <div class=\"row w-100 justify-content-between\">
                <div class=\"col-auto\">
                    <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><h1 class=\"navbar-brand\">October Movies</h1></a>
                </div>
                <div class=\"col-auto\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "homepage")) {
            echo " active ";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "movies")) {
            echo " active ";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  48 => 13,  43 => 11,  37 => 10,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <div class=\"row w-100 justify-content-between\">
                <div class=\"col-auto\">
                    <a href=\"{{ 'homepage'|page }}\"><h1 class=\"navbar-brand\">October Movies</h1></a>
                </div>
                <div class=\"col-auto\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item {% if this.page.id == 'homepage' %} active {% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'homepage'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item {% if this.page.id == 'movies' %} active {% endif %}\">
                            <a class=\"nav-link\" href=\"{{ 'movies'|page }}\">Movies</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/partials/header.htm", "");
    }
}
