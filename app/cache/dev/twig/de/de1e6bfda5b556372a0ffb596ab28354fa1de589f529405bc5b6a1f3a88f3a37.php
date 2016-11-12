<?php

/* base.html.twig */
class __TwigTemplate_12aa77d9c5d693882524ff5e0d83ed8fb5c9729a93a3ea1acb73fbdb8cd3010f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_470827caec88101e210fdca58e97699077e6ff7eb8312c224f8b3237153333ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470827caec88101e210fdca58e97699077e6ff7eb8312c224f8b3237153333ee->enter($__internal_470827caec88101e210fdca58e97699077e6ff7eb8312c224f8b3237153333ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_470827caec88101e210fdca58e97699077e6ff7eb8312c224f8b3237153333ee->leave($__internal_470827caec88101e210fdca58e97699077e6ff7eb8312c224f8b3237153333ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf738cebeb55ff0a8ad666f73144877354270706aacbfe45964242de591369f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf738cebeb55ff0a8ad666f73144877354270706aacbfe45964242de591369f6->enter($__internal_bf738cebeb55ff0a8ad666f73144877354270706aacbfe45964242de591369f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_bf738cebeb55ff0a8ad666f73144877354270706aacbfe45964242de591369f6->leave($__internal_bf738cebeb55ff0a8ad666f73144877354270706aacbfe45964242de591369f6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03e5ee8c145900e37aa8ae8ce4a07c9175ddb3231280d516e8abfd205c7f923b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e5ee8c145900e37aa8ae8ce4a07c9175ddb3231280d516e8abfd205c7f923b->enter($__internal_03e5ee8c145900e37aa8ae8ce4a07c9175ddb3231280d516e8abfd205c7f923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_03e5ee8c145900e37aa8ae8ce4a07c9175ddb3231280d516e8abfd205c7f923b->leave($__internal_03e5ee8c145900e37aa8ae8ce4a07c9175ddb3231280d516e8abfd205c7f923b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd33a4b4c13442f4b62b61341839825c2008583085d39c06a3beac74fef1a7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd33a4b4c13442f4b62b61341839825c2008583085d39c06a3beac74fef1a7b6->enter($__internal_bd33a4b4c13442f4b62b61341839825c2008583085d39c06a3beac74fef1a7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_bd33a4b4c13442f4b62b61341839825c2008583085d39c06a3beac74fef1a7b6->leave($__internal_bd33a4b4c13442f4b62b61341839825c2008583085d39c06a3beac74fef1a7b6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bab86804bfee5fff2293596542ebafaa1ce3eb1ef6229417cc04810f218ea0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab86804bfee5fff2293596542ebafaa1ce3eb1ef6229417cc04810f218ea0a7->enter($__internal_bab86804bfee5fff2293596542ebafaa1ce3eb1ef6229417cc04810f218ea0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_bab86804bfee5fff2293596542ebafaa1ce3eb1ef6229417cc04810f218ea0a7->leave($__internal_bab86804bfee5fff2293596542ebafaa1ce3eb1ef6229417cc04810f218ea0a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/TutojQuery/app/Resources/views/base.html.twig");
    }
}
