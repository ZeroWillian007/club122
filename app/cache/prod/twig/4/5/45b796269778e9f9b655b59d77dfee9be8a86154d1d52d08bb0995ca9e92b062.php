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
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo "Club-122Quito";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "             
            
            ";
    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  104 => 36,  101 => 35,  98 => 34,  92 => 27,  89 => 26,  83 => 20,  72 => 12,  66 => 9,  62 => 7,  59 => 6,  54 => 42,  52 => 34,  46 => 30,  44 => 26,  35 => 20,  32 => 19,  30 => 6,  23 => 1,);
    }
}
