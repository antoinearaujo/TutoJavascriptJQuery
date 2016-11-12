<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6c3c8022ce445a587cf3a860747779c3b2900b13609750ba379941180ff99e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17807eec45709cc023c58c426dfbf71b5efa24ee08037666ab5f3bce98381ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17807eec45709cc023c58c426dfbf71b5efa24ee08037666ab5f3bce98381ba0->enter($__internal_17807eec45709cc023c58c426dfbf71b5efa24ee08037666ab5f3bce98381ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17807eec45709cc023c58c426dfbf71b5efa24ee08037666ab5f3bce98381ba0->leave($__internal_17807eec45709cc023c58c426dfbf71b5efa24ee08037666ab5f3bce98381ba0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcfd00983a908f11c1254dd8680315b7adee62cf7a824ea37c038f6697611e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfd00983a908f11c1254dd8680315b7adee62cf7a824ea37c038f6697611e70->enter($__internal_bcfd00983a908f11c1254dd8680315b7adee62cf7a824ea37c038f6697611e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bcfd00983a908f11c1254dd8680315b7adee62cf7a824ea37c038f6697611e70->leave($__internal_bcfd00983a908f11c1254dd8680315b7adee62cf7a824ea37c038f6697611e70_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_237fb9784b2933d859e50cee47337b09e90682645ec7580c57dc6592cf951223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237fb9784b2933d859e50cee47337b09e90682645ec7580c57dc6592cf951223->enter($__internal_237fb9784b2933d859e50cee47337b09e90682645ec7580c57dc6592cf951223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_237fb9784b2933d859e50cee47337b09e90682645ec7580c57dc6592cf951223->leave($__internal_237fb9784b2933d859e50cee47337b09e90682645ec7580c57dc6592cf951223_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ba90f109b479f6bafc4582fbfd29f13da392f5e1004ea37af5717e255233a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ba90f109b479f6bafc4582fbfd29f13da392f5e1004ea37af5717e255233a9->enter($__internal_71ba90f109b479f6bafc4582fbfd29f13da392f5e1004ea37af5717e255233a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_71ba90f109b479f6bafc4582fbfd29f13da392f5e1004ea37af5717e255233a9->leave($__internal_71ba90f109b479f6bafc4582fbfd29f13da392f5e1004ea37af5717e255233a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/TutojQuery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
