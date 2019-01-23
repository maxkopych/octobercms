<?php

/* F:\openServer\OSPanel\domains\laravel-october-cms.local/themes/mytheme/layouts/default.htm */
class __TwigTemplate_c8760775051ade3fbc389cc4f5568317b1464fbfeb0cfcbcee0abba25893da2e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
  <!--When you put in array it will combine them and minify them-->
  <!--Plus it also converting sass and less-->
  <!--<link rel=\"stylesheet\" href=\"";
        // line 14
        echo "\">-->

  <!--we can use laravel elixir to autorefresh. check gulpfile.js and we don't need []-->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/css/style.css");
        echo "\">


  ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "</head>
<body>

";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 25
        echo "

<!-- Scripts -->
<!--When you put in array it will combine them and minify them-->
<!--<script src=\"";
        // line 29
        echo "\"></script>-->

<!--we can use laravel elixir to autorefresh. check gulpfile.js and we don't need []-->
<!--By Default it compile to all.js-->
<script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/js/all.js");
        echo "\"></script>

";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  88 => 35,  83 => 33,  77 => 29,  71 => 25,  69 => 24,  64 => 21,  61 => 20,  55 => 17,  50 => 14,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>October CMS - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
  <!--When you put in array it will combine them and minify them-->
  <!--Plus it also converting sass and less-->
  <!--<link rel=\"stylesheet\" href=\"{#{ ['assets/css/style.scss']|theme }#}\">-->

  <!--we can use laravel elixir to autorefresh. check gulpfile.js and we don't need []-->
  <link rel=\"stylesheet\" href=\"{{ 'assets/compiled/css/style.css'|theme }}\">


  {% styles %}
</head>
<body>

{% page %}


<!-- Scripts -->
<!--When you put in array it will combine them and minify them-->
<!--<script src=\"{#{ ['assets/js/jquery.js', 'assets/js/main.js']|theme }#}\"></script>-->

<!--we can use laravel elixir to autorefresh. check gulpfile.js and we don't need []-->
<!--By Default it compile to all.js-->
<script src=\"{{ 'assets/compiled/js/all.js'|theme }}\"></script>

{% scripts %}

</body>
</html>", "F:\\openServer\\OSPanel\\domains\\laravel-october-cms.local/themes/mytheme/layouts/default.htm", "");
    }
}
