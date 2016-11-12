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
        $__internal_f85a431ee3c244881ad80e617634d642ad6b3fa31983a15cca913950263ab8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85a431ee3c244881ad80e617634d642ad6b3fa31983a15cca913950263ab8a0->enter($__internal_f85a431ee3c244881ad80e617634d642ad6b3fa31983a15cca913950263ab8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TutoBundle:Default:index.html.twig"));

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
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
</head>

<body style=\"background-color: #F00000\">



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

 <p style=\"text-align: center;\"><i><strong> Profil :</strong></i></br></br>

    <a href=\"#\" onclick=\"anneeNaissance();\">Calculer date de naissance</a></br>
    <a href=\"#\" onclick=\"majeur();\">Majeur ou mineur ?</a></br>
    <a href=\"#\" onclick=\"avoirPoids();\">Enregistrer son poids</a></br></br>



     <i><strong>Jeu Plus ou Moins :</strong></i></br></br>




     <a href=\"#\" onclick=\"javascript:PoM_partie(1,63)\">Niveau Facile</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(1,100)\">Niveau Normal</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(0,250)\">Niveau Hard</a>
</p>




  <span id=\"texteJQ\"></span>
 <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery_test.js"), "html", null, true);
        echo "\"></script>

      </script>
  </body>


   
</body>

</html>";
        
        $__internal_f85a431ee3c244881ad80e617634d642ad6b3fa31983a15cca913950263ab8a0->leave($__internal_f85a431ee3c244881ad80e617634d642ad6b3fa31983a15cca913950263ab8a0_prof);

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
        return array (  169 => 143,  31 => 8,  22 => 1,);
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
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
</head>

<body style=\"background-color: #F00000\">



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

 <p style=\"text-align: center;\"><i><strong> Profil :</strong></i></br></br>

    <a href=\"#\" onclick=\"anneeNaissance();\">Calculer date de naissance</a></br>
    <a href=\"#\" onclick=\"majeur();\">Majeur ou mineur ?</a></br>
    <a href=\"#\" onclick=\"avoirPoids();\">Enregistrer son poids</a></br></br>



     <i><strong>Jeu Plus ou Moins :</strong></i></br></br>




     <a href=\"#\" onclick=\"javascript:PoM_partie(1,63)\">Niveau Facile</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(1,100)\">Niveau Normal</a><br />
     <a href=\"#\" onclick=\"javascript:PoM_partie(0,250)\">Niveau Hard</a>
</p>




  <span id=\"texteJQ\"></span>
 <script src=\"{{ asset('bundles/framework/js/jquery_test.js') }}\"></script>

      </script>
  </body>


   
</body>

</html>", "TutoBundle:Default:index.html.twig", "/var/www/html/TutojQuery/src/TutoBundle/Resources/views/Default/index.html.twig");
    }
}
