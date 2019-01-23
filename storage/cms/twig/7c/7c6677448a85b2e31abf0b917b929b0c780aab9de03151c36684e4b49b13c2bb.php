<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/layouts/fallback.htm */
class __TwigTemplate_53ac7a1e80e46d33d4cc46f1ee17d5c756fe4b019ede827dc06d2f409a343582 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/layouts/fallback.htm", "");
    }
}
