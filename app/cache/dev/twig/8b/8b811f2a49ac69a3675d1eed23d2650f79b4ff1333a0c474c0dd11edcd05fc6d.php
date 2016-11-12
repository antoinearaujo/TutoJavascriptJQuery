<?php

/* TutoBundle:Default:index.html.twig */
class __TwigTemplate_a7468cf65d3fc5b1d954448dad2e8ca11cc11812ed16e8dde775a0f232e9384e extends Twig_Template
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
        $__internal_5ad4478164d0203313f551b545f4302b22383f1733a25f7b957f838b1b6fb5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad4478164d0203313f551b545f4302b22383f1733a25f7b957f838b1b6fb5c8->enter($__internal_5ad4478164d0203313f551b545f4302b22383f1733a25f7b957f838b1b6fb5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TutoBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
<head>

<!-- en-tete du document -->

  <title>TutoJavascript</title>
 <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery_test.js"), "html", null, true);
        echo "\"></script>
     <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
</head>

<body style=\"background-color: #F00000\">

       <script type=\"text/javascript\">
  <!--
    jQuery(document).ready(function(\$){
    \$('#exemple-fadetoggle a').click(function(e){
        \$('#exemple-fadetoggle span').fadeToggle();
    });
});
    </script>



    <script type=\"text/javascript\">
  <!--
    function anneeNaissance()
      {
       var age = prompt(\"Quel âge avez-vous?\");
       var resultat = 2016 - age;
       alert(\"Votre année de naissance est :\" + resultat)
     
      }

    function avoirPoids()
      {
       var poids = prompt(\"Quel poids faites-vous?\");
      }

    function majeur()
      {
      var age = prompt('Quel âge avez-vous ? ');
      var majeur = (age >= 18);
      var mineur = (age < 18);
      if(majeur)
        {
          alert('Vous êtes majeur ! ');
        }
      if(mineur)
        {
          alert('Vous êtes mineur ! ');

        }
       
      }

      ///////Jeu Plus ou moins !!!!

      function nb_aleatoire(min, max)
          {
               var nb = min + (max-min+1)*Math.random();
               return Math.floor(nb);
          }
                
          function PoM_manche(min, max)
          {
               var nb = nb_aleatoire(min, max);        // nb a deviner
               var cpt = 0;    // nb de coups pour le trouver
               var saisie;     // nb tape par le joueur
               var msg = 'Le nombre a deviner est compris entre ' + min + ' et ' + max + '.';


               do
               {
                    saisie = prompt(msg);

                    // si \"Annuler\"
                    if(saisie == null)
                         return 0;

                    cpt++;
                    if(saisie > nb)
                         msg = \"C'est moins\";
                    else
                         msg = \"C'est plus\";
               }
               while(saisie != nb);

               return cpt;
          }
                
          function PoM_partie(min, max)
          {
               var cpt = 0;    // nb de manches jouees
               var best_score = 0;     // meilleur score
               var score;      // score de la partie en cours
               var continuer;

               do
               {
                    score = PoM_manche(min, max);   // joue la manche
                    if(score)
                    {
                         cpt++;
                         if(score < best_score || best_score == 0)
                              best_score = score;
                         continuer = confirm(\"Bravo, tu as gagne en \" + score + \" coups.\\nVeux-tu rejouer ?\");
                    }
                    else
                         continuer = false;
               }
               while(continuer);

               alert(\"Tu as joue \" + cpt + \" manche(s).\\nTon meilleur score est de \" + best_score + \" coups.\");
               return best_score;
          }

  //-->
  </script>



  


  <!-- ici se trouve le contenu de la page web -->
     
     <h1 style=\"text-align: center;\"><strong>Test Javascript/JQuery</strong></h1>
     <!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
<meta charset=\"utf-8\" />
<meta name=\"author\" content=\"Script Tutorials\" />
<title>Responsive menu | Script Tutorials</title>
<!-- add styles -->
<link href=\"css/main.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<div class=\"container\">
<ul id=\"nav\">
<li><a href=\"#\">Home</a></li>
<li><a href=\"#s1\">Menu 1</a>
<span id=\"s1\"></span>
<ul class=\"subs\">
<li><a href=\"#\">Header a</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
<li><a href=\"#\">Header b</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
</ul>
</li>
<li class=\"active\"><a href=\"#s2\">Menu 2</a>
<span id=\"s2\"></span>
<ul class=\"subs\">
<li><a href=\"#\">Header c</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
<li><a href=\"#\">Header d</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
</ul>
</li>
<li><a href=\"#\">Menu 3</a></li>
<li><a href=\"#\">Menu 4</a></li>
<li><a href=\"#\">Menu 5</a></li>
<li><a href=\"https://www.script-tutorials.com/css3-responsive-menu/\">Back to Responsive menu tutorial</a></li>
</ul>
</div>
</body>
</html>



 <p style=\"text-align: center;\"><i><strong> Profil :</strong></i></br></br>

    <a href=\"#\" onclick=\"anneeNaissance();\">Calculer date de naissance</a></br>
    <a href=\"#\" onclick=\"majeur();\">Majeur ou mineur ?</a></br>
    <a href=\"#\" onclick=\"avoirPoids();\">Enregistrer son poids</a></br></br>



     <i><strong>Jeu Plus ou Moins :</strong></i></br></br>




     <a href=\"#\" onclick=\"javascript:PoM_partie(1,63)\">Niveau Facile</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(1,100)\">Niveau Normal</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(0,250)\">Niveau Hard</a>
</p>




<div class=\"parent2\">
    <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_homepage");
        echo "\"><div class=\"test4\" ><i class=\"fa fa-envelope-o fa-2x\"></i></div></a>

 <a href=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_jquery");
        echo "\"><div class=\"test1\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tuto_homepage");
        echo "\"><i class=\"fa fa-user fa-2x\"></i></div></a>
  <div class=\"test2\"><i class=\"fa fa-graduation-cap fa-2x\"></i></div>
  <div class=\"test3\"><i class=\"fa fa-code fa-2x\"></i></div>
  <div class=\"mask2\"><i class=\"fa fa-home fa-3x\"></i></div></div>

      
  </body>


   
</body>

</html>";
        
        $__internal_5ad4478164d0203313f551b545f4302b22383f1733a25f7b957f838b1b6fb5c8->leave($__internal_5ad4478164d0203313f551b545f4302b22383f1733a25f7b957f838b1b6fb5c8_prof);

    }

    public function getTemplateName()
    {
        return "TutoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 219,  249 => 217,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
<head>

<!-- en-tete du document -->

  <title>TutoJavascript</title>
 <script src=\"{{ asset('bundles/framework/js/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/framework/js/jquery_test.js') }}\"></script>
     <link href=\"{{ asset('bundles/framework/css/styles.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
      <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
</head>

<body style=\"background-color: #F00000\">

       <script type=\"text/javascript\">
  <!--
    jQuery(document).ready(function(\$){
    \$('#exemple-fadetoggle a').click(function(e){
        \$('#exemple-fadetoggle span').fadeToggle();
    });
});
    </script>



    <script type=\"text/javascript\">
  <!--
    function anneeNaissance()
      {
       var age = prompt(\"Quel âge avez-vous?\");
       var resultat = 2016 - age;
       alert(\"Votre année de naissance est :\" + resultat)
     
      }

    function avoirPoids()
      {
       var poids = prompt(\"Quel poids faites-vous?\");
      }

    function majeur()
      {
      var age = prompt('Quel âge avez-vous ? ');
      var majeur = (age >= 18);
      var mineur = (age < 18);
      if(majeur)
        {
          alert('Vous êtes majeur ! ');
        }
      if(mineur)
        {
          alert('Vous êtes mineur ! ');

        }
       
      }

      ///////Jeu Plus ou moins !!!!

      function nb_aleatoire(min, max)
          {
               var nb = min + (max-min+1)*Math.random();
               return Math.floor(nb);
          }
                
          function PoM_manche(min, max)
          {
               var nb = nb_aleatoire(min, max);        // nb a deviner
               var cpt = 0;    // nb de coups pour le trouver
               var saisie;     // nb tape par le joueur
               var msg = 'Le nombre a deviner est compris entre ' + min + ' et ' + max + '.';


               do
               {
                    saisie = prompt(msg);

                    // si \"Annuler\"
                    if(saisie == null)
                         return 0;

                    cpt++;
                    if(saisie > nb)
                         msg = \"C'est moins\";
                    else
                         msg = \"C'est plus\";
               }
               while(saisie != nb);

               return cpt;
          }
                
          function PoM_partie(min, max)
          {
               var cpt = 0;    // nb de manches jouees
               var best_score = 0;     // meilleur score
               var score;      // score de la partie en cours
               var continuer;

               do
               {
                    score = PoM_manche(min, max);   // joue la manche
                    if(score)
                    {
                         cpt++;
                         if(score < best_score || best_score == 0)
                              best_score = score;
                         continuer = confirm(\"Bravo, tu as gagne en \" + score + \" coups.\\nVeux-tu rejouer ?\");
                    }
                    else
                         continuer = false;
               }
               while(continuer);

               alert(\"Tu as joue \" + cpt + \" manche(s).\\nTon meilleur score est de \" + best_score + \" coups.\");
               return best_score;
          }

  //-->
  </script>



  


  <!-- ici se trouve le contenu de la page web -->
     
     <h1 style=\"text-align: center;\"><strong>Test Javascript/JQuery</strong></h1>
     <!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
<meta charset=\"utf-8\" />
<meta name=\"author\" content=\"Script Tutorials\" />
<title>Responsive menu | Script Tutorials</title>
<!-- add styles -->
<link href=\"css/main.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<div class=\"container\">
<ul id=\"nav\">
<li><a href=\"#\">Home</a></li>
<li><a href=\"#s1\">Menu 1</a>
<span id=\"s1\"></span>
<ul class=\"subs\">
<li><a href=\"#\">Header a</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
<li><a href=\"#\">Header b</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
</ul>
</li>
<li class=\"active\"><a href=\"#s2\">Menu 2</a>
<span id=\"s2\"></span>
<ul class=\"subs\">
<li><a href=\"#\">Header c</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
<li><a href=\"#\">Header d</a>
<ul>
<li><a href=\"#\">Submenu x</a></li>
<li><a href=\"#\">Submenu y</a></li>
<li><a href=\"#\">Submenu z</a></li>
</ul>
</li>
</ul>
</li>
<li><a href=\"#\">Menu 3</a></li>
<li><a href=\"#\">Menu 4</a></li>
<li><a href=\"#\">Menu 5</a></li>
<li><a href=\"https://www.script-tutorials.com/css3-responsive-menu/\">Back to Responsive menu tutorial</a></li>
</ul>
</div>
</body>
</html>



 <p style=\"text-align: center;\"><i><strong> Profil :</strong></i></br></br>

    <a href=\"#\" onclick=\"anneeNaissance();\">Calculer date de naissance</a></br>
    <a href=\"#\" onclick=\"majeur();\">Majeur ou mineur ?</a></br>
    <a href=\"#\" onclick=\"avoirPoids();\">Enregistrer son poids</a></br></br>



     <i><strong>Jeu Plus ou Moins :</strong></i></br></br>




     <a href=\"#\" onclick=\"javascript:PoM_partie(1,63)\">Niveau Facile</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(1,100)\">Niveau Normal</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(0,250)\">Niveau Hard</a>
</p>




<div class=\"parent2\">
    <a href=\"{{ path('tuto_homepage') }}\"><div class=\"test4\" ><i class=\"fa fa-envelope-o fa-2x\"></i></div></a>

 <a href=\"{{ path('tuto_jquery') }}\"><div class=\"test1\" href=\"{{ path('tuto_homepage') }}\"><i class=\"fa fa-user fa-2x\"></i></div></a>
  <div class=\"test2\"><i class=\"fa fa-graduation-cap fa-2x\"></i></div>
  <div class=\"test3\"><i class=\"fa fa-code fa-2x\"></i></div>
  <div class=\"mask2\"><i class=\"fa fa-home fa-3x\"></i></div></div>

      
  </body>


   
</body>

</html>", "TutoBundle:Default:index.html.twig", "/var/www/html/TutojQuery/src/TutoBundle/Resources/views/Default/index.html.twig");
    }
}
