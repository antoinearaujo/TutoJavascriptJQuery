<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4cf0bdda1eebdcefa82904c8a22adaf12f9187faf34d4597326be64babdc40bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c51b22eb3c9ad461ebdb04660c24b377a2eb27b65b3e2b836b53e4414749d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c51b22eb3c9ad461ebdb04660c24b377a2eb27b65b3e2b836b53e4414749d36->enter($__internal_2c51b22eb3c9ad461ebdb04660c24b377a2eb27b65b3e2b836b53e4414749d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c51b22eb3c9ad461ebdb04660c24b377a2eb27b65b3e2b836b53e4414749d36->leave($__internal_2c51b22eb3c9ad461ebdb04660c24b377a2eb27b65b3e2b836b53e4414749d36_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fe051503e667d7c53de22f63d43cf701a3355bbf040dd8d482b0bfefefb18f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe051503e667d7c53de22f63d43cf701a3355bbf040dd8d482b0bfefefb18f6->enter($__internal_7fe051503e667d7c53de22f63d43cf701a3355bbf040dd8d482b0bfefefb18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_7fe051503e667d7c53de22f63d43cf701a3355bbf040dd8d482b0bfefefb18f6->leave($__internal_7fe051503e667d7c53de22f63d43cf701a3355bbf040dd8d482b0bfefefb18f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a093e590d06c89be22dc5b047a379540b60439b5c98be1dffeadf2147c6320d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a093e590d06c89be22dc5b047a379540b60439b5c98be1dffeadf2147c6320d->enter($__internal_0a093e590d06c89be22dc5b047a379540b60439b5c98be1dffeadf2147c6320d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a093e590d06c89be22dc5b047a379540b60439b5c98be1dffeadf2147c6320d->leave($__internal_0a093e590d06c89be22dc5b047a379540b60439b5c98be1dffeadf2147c6320d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ce022e99486fa10ea5d7b436f3fd457b9d1e0c91f4991fdbfe245202687fe56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce022e99486fa10ea5d7b436f3fd457b9d1e0c91f4991fdbfe245202687fe56->enter($__internal_2ce022e99486fa10ea5d7b436f3fd457b9d1e0c91f4991fdbfe245202687fe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ce022e99486fa10ea5d7b436f3fd457b9d1e0c91f4991fdbfe245202687fe56->leave($__internal_2ce022e99486fa10ea5d7b436f3fd457b9d1e0c91f4991fdbfe245202687fe56_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/TutojQuery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
