<?php

/* base.html.twig */
class __TwigTemplate_45b796269778e9f9b655b59d77dfee9be8a86154d1d52d08bb0995ca9e92b062 extends Twig_Template
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
        $__internal_f99b0489017048d744e058fd2bd7d8e422fe1c8c811dea20b2e494cdc236bd26 = $this->env->getExtension("native_profiler");
        $__internal_f99b0489017048d744e058fd2bd7d8e422fe1c8c811dea20b2e494cdc236bd26->enter($__internal_f99b0489017048d744e058fd2bd7d8e422fe1c8c811dea20b2e494cdc236bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 42
        echo "    </body>
</html>";
        
        $__internal_f99b0489017048d744e058fd2bd7d8e422fe1c8c811dea20b2e494cdc236bd26->leave($__internal_f99b0489017048d744e058fd2bd7d8e422fe1c8c811dea20b2e494cdc236bd26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab4c1ee82b554740a068c36860b0102926f9ec3904100cc22a9da1f2ac67c98e = $this->env->getExtension("native_profiler");
        $__internal_ab4c1ee82b554740a068c36860b0102926f9ec3904100cc22a9da1f2ac67c98e->enter($__internal_ab4c1ee82b554740a068c36860b0102926f9ec3904100cc22a9da1f2ac67c98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ab4c1ee82b554740a068c36860b0102926f9ec3904100cc22a9da1f2ac67c98e->leave($__internal_ab4c1ee82b554740a068c36860b0102926f9ec3904100cc22a9da1f2ac67c98e_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_64461eda69fd3273b7974bfc06e53ebf351e6aa9f28785ef5736bb5ab5135453 = $this->env->getExtension("native_profiler");
        $__internal_64461eda69fd3273b7974bfc06e53ebf351e6aa9f28785ef5736bb5ab5135453->enter($__internal_64461eda69fd3273b7974bfc06e53ebf351e6aa9f28785ef5736bb5ab5135453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club-122Quito";
        
        $__internal_64461eda69fd3273b7974bfc06e53ebf351e6aa9f28785ef5736bb5ab5135453->leave($__internal_64461eda69fd3273b7974bfc06e53ebf351e6aa9f28785ef5736bb5ab5135453_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d36297e0acf54bff16dbfbd4227442798a718f43e02b777d7cdb8cd25c7b742 = $this->env->getExtension("native_profiler");
        $__internal_4d36297e0acf54bff16dbfbd4227442798a718f43e02b777d7cdb8cd25c7b742->enter($__internal_4d36297e0acf54bff16dbfbd4227442798a718f43e02b777d7cdb8cd25c7b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "             
            
            ";
        
        $__internal_4d36297e0acf54bff16dbfbd4227442798a718f43e02b777d7cdb8cd25c7b742->leave($__internal_4d36297e0acf54bff16dbfbd4227442798a718f43e02b777d7cdb8cd25c7b742_prof);

    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_fb4c8e91dfa9244c7981ccbd1b910de2af728b7e8e79fa9797653f8e43b27d7d = $this->env->getExtension("native_profiler");
        $__internal_fb4c8e91dfa9244c7981ccbd1b910de2af728b7e8e79fa9797653f8e43b27d7d->enter($__internal_fb4c8e91dfa9244c7981ccbd1b910de2af728b7e8e79fa9797653f8e43b27d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
              
           
              
        ";
        
        $__internal_fb4c8e91dfa9244c7981ccbd1b910de2af728b7e8e79fa9797653f8e43b27d7d->leave($__internal_fb4c8e91dfa9244c7981ccbd1b910de2af728b7e8e79fa9797653f8e43b27d7d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  131 => 36,  128 => 35,  122 => 34,  113 => 27,  107 => 26,  95 => 20,  81 => 12,  75 => 9,  71 => 7,  65 => 6,  57 => 42,  55 => 34,  49 => 30,  47 => 26,  38 => 20,  35 => 19,  33 => 6,  26 => 1,);
    }
}
