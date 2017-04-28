<?php

/* basenuevo.html.twig */
class __TwigTemplate_a8ed3a617981a8e3d96faee65c83e757a573bb570a3f86b59f17102537805c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ac0a725c3a39492129c41873fe2144889a7559e27eaec1dc8ec70d575c1f633 = $this->env->getExtension("native_profiler");
        $__internal_0ac0a725c3a39492129c41873fe2144889a7559e27eaec1dc8ec70d575c1f633->enter($__internal_0ac0a725c3a39492129c41873fe2144889a7559e27eaec1dc8ec70d575c1f633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basenuevo.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
        
        
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        
        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        </head>
        <body class=\"container\">
 
        
        
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        
        
        
        
        ";
        // line 34
        $this->displayBlock('scripts', $context, $blocks);
        // line 99
        echo "    </body>
</html>";
        
        $__internal_0ac0a725c3a39492129c41873fe2144889a7559e27eaec1dc8ec70d575c1f633->leave($__internal_0ac0a725c3a39492129c41873fe2144889a7559e27eaec1dc8ec70d575c1f633_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1eb869cfabb21648b8399a7aa6dc8f6e993f4c5c8fbec7f4d4383d9dcfaa4e7a = $this->env->getExtension("native_profiler");
        $__internal_1eb869cfabb21648b8399a7aa6dc8f6e993f4c5c8fbec7f4d4383d9dcfaa4e7a->enter($__internal_1eb869cfabb21648b8399a7aa6dc8f6e993f4c5c8fbec7f4d4383d9dcfaa4e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            
              
               <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
             
               
               <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>
               
               <!--PAGINA PRINCIPAL-->
               
               
        
        ";
        
        $__internal_1eb869cfabb21648b8399a7aa6dc8f6e993f4c5c8fbec7f4d4383d9dcfaa4e7a->leave($__internal_1eb869cfabb21648b8399a7aa6dc8f6e993f4c5c8fbec7f4d4383d9dcfaa4e7a_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_6645ca75604803de840db35f22e6e0e3ab9da60fe64ca78f62998e62cfc8ef1b = $this->env->getExtension("native_profiler");
        $__internal_6645ca75604803de840db35f22e6e0e3ab9da60fe64ca78f62998e62cfc8ef1b->enter($__internal_6645ca75604803de840db35f22e6e0e3ab9da60fe64ca78f62998e62cfc8ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club-122Quito";
        
        $__internal_6645ca75604803de840db35f22e6e0e3ab9da60fe64ca78f62998e62cfc8ef1b->leave($__internal_6645ca75604803de840db35f22e6e0e3ab9da60fe64ca78f62998e62cfc8ef1b_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd39290e311227f57ff5dbdc1d819efb1408a8f391cd2df5cbedfce75f376e2 = $this->env->getExtension("native_profiler");
        $__internal_2fd39290e311227f57ff5dbdc1d819efb1408a8f391cd2df5cbedfce75f376e2->enter($__internal_2fd39290e311227f57ff5dbdc1d819efb1408a8f391cd2df5cbedfce75f376e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "             
            
            ";
        
        $__internal_2fd39290e311227f57ff5dbdc1d819efb1408a8f391cd2df5cbedfce75f376e2->leave($__internal_2fd39290e311227f57ff5dbdc1d819efb1408a8f391cd2df5cbedfce75f376e2_prof);

    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4c3a6bb4442fe02a5f89ef481a428c2c277ce601fa8adb1d9aa7c5c9fa4c6077 = $this->env->getExtension("native_profiler");
        $__internal_4c3a6bb4442fe02a5f89ef481a428c2c277ce601fa8adb1d9aa7c5c9fa4c6077->enter($__internal_4c3a6bb4442fe02a5f89ef481a428c2c277ce601fa8adb1d9aa7c5c9fa4c6077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 35
        echo "              
              <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function (){
               \$(window).load(function(){
                  var op=0;
                  //imgen perfil
                  \$(function() {
                      \$('#file-perfil').change(function(e) {
                      op=0;
                      addImage(e); 
                      });
                      \$('#file-perfil1').change(function(e) {
                      op=1;
                      addImage(e); 
                      });
                      \$('#file-perfil2').change(function(e) {
                      op=2;
                      addImage(e); 
                      });
                      \$('#file-perfil3').change(function(e) {
                      op=3;
                      addImage(e); 
                      });

                  function addImage(e){
                     var file = e.target.files[0],
                     imageType = /image.*/;
    
                     if (!file.type.match(imageType))
                     return;
  
                     var reader = new FileReader();
                     reader.onload = fileOnload;
                     reader.readAsDataURL(file);
                 }
  
                 function fileOnload(e) {
                    var result=e.target.result;
                    switch(op){
                        case 0:
                          \$('#img-user-perfil').attr(\"src\",result);
                        break;
                        case 1:
                          \$('#img-user-perfil1').attr(\"src\",result);
                        break;
                        case 2:
                          \$('#img-user-perfil2').attr(\"src\",result);
                        break;
                        case 3:
                          \$('#img-user-perfil3').attr(\"src\",result);
                        break;
                    }
                    
                 }
                });
            });

            });
        </script>
           
              
        ";
        
        $__internal_4c3a6bb4442fe02a5f89ef481a428c2c277ce601fa8adb1d9aa7c5c9fa4c6077->leave($__internal_4c3a6bb4442fe02a5f89ef481a428c2c277ce601fa8adb1d9aa7c5c9fa4c6077_prof);

    }

    public function getTemplateName()
    {
        return "basenuevo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  131 => 36,  128 => 35,  122 => 34,  113 => 27,  107 => 26,  95 => 20,  81 => 12,  75 => 9,  71 => 7,  65 => 6,  57 => 99,  55 => 34,  49 => 30,  47 => 26,  38 => 20,  35 => 19,  33 => 6,  26 => 1,);
    }
}
