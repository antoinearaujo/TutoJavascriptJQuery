<?php

/* TutoBundle:Default:page.html.twig */
class __TwigTemplate_c9b1f4d7cfc7d50909d63734c0f2d4950ce8755dc000ef95905d9acc55e30654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cae85d20b65ec69b1295010064764ceae0c5bc500f985036468be9b52c0871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cae85d20b65ec69b1295010064764ceae0c5bc500f985036468be9b52c0871a->enter($__internal_2cae85d20b65ec69b1295010064764ceae0c5bc500f985036468be9b52c0871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TutoBundle:Default:page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
     <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery_test.js"), "html", null, true);
        echo "\"></script>
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
       <body style=\"background-color: #f00000; text-align :center;\">

      <script type=\"text/javascript\">
  <!--
    jQuery(document).ready(function(\$){
    \$('#exemple-fadetoggle a').click(function(e){
        \$('#exemple-fadetoggle span').fadeToggle();
    });
});
    </script>

 
<div id=\"exemple-fadetoggle\">
    <a href=\"#\"><h1><i>TEST JQUERY :CLIQUEZ ICI !</i></h1></a>
    <span>Reclique pour effacer !</span>
</div>

<div class=\"parent2\">
    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_homepage");
        echo "\"><div class=\"test4\" ><i class=\"fa fa-envelope-o fa-2x\"></i></div></a>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_jquery");
        echo "\"><div class=\"test1\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_homepage");
        echo "\"><i class=\"fa fa-user fa-2x\"></i></div></a>
  <div class=\"test2\"><i class=\"fa fa-graduation-cap fa-2x\"></i></div>
  <div class=\"test3\"><i class=\"fa fa-code fa-2x\"></i></div>
  <div class=\"mask2\"><i class=\"fa fa-home fa-3x\"></i></div></div>


  </body>
</html>";
        
        $__internal_2cae85d20b65ec69b1295010064764ceae0c5bc500f985036468be9b52c0871a->leave($__internal_2cae85d20b65ec69b1295010064764ceae0c5bc500f985036468be9b52c0871a_prof);

    }

    public function getTemplateName()
    {
        return "TutoBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  59 => 27,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
    <meta charset=\"UTF-8\">
     <script src=\"{{ asset('bundles/framework/js/jquery.min.js') }}\"></script>
     <script src=\"{{ asset('bundles/framework/js/jquery_test.js') }}\"></script>
     <link href=\"{{ asset('bundles/framework/css/styles.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
      <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
       <body style=\"background-color: #f00000; text-align :center;\">

      <script type=\"text/javascript\">
  <!--
    jQuery(document).ready(function(\$){
    \$('#exemple-fadetoggle a').click(function(e){
        \$('#exemple-fadetoggle span').fadeToggle();
    });
});
    </script>

 
<div id=\"exemple-fadetoggle\">
    <a href=\"#\"><h1><i>TEST JQUERY :CLIQUEZ ICI !</i></h1></a>
    <span>Reclique pour effacer !</span>
</div>

<div class=\"parent2\">
    <a href=\"{{ path('tuto_homepage') }}\"><div class=\"test4\" ><i class=\"fa fa-envelope-o fa-2x\"></i></div></a>
    <a href=\"{{ path('tuto_jquery') }}\"><div class=\"test1\" href=\"{{ path('tuto_homepage') }}\"><i class=\"fa fa-user fa-2x\"></i></div></a>
  <div class=\"test2\"><i class=\"fa fa-graduation-cap fa-2x\"></i></div>
  <div class=\"test3\"><i class=\"fa fa-code fa-2x\"></i></div>
  <div class=\"mask2\"><i class=\"fa fa-home fa-3x\"></i></div></div>


  </body>
</html>", "TutoBundle:Default:page.html.twig", "/var/www/html/TutojQuery/src/TutoBundle/Resources/views/Default/page.html.twig");
    }
}
