<?php

/* WBJUserBundle:Usuarios:usuarios.html.twig */
class __TwigTemplate_b0912682bf1d1552b31c3f22b96528854f7c2fa9086c84cdb51ea34fcabdb812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WBJUserBundle:Usuarios:usuarios.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c44a883a6671a4c48728d0fba264df2192e9d39f99df7235e56de3602561d71a = $this->env->getExtension("native_profiler");
        $__internal_c44a883a6671a4c48728d0fba264df2192e9d39f99df7235e56de3602561d71a->enter($__internal_c44a883a6671a4c48728d0fba264df2192e9d39f99df7235e56de3602561d71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44a883a6671a4c48728d0fba264df2192e9d39f99df7235e56de3602561d71a->leave($__internal_c44a883a6671a4c48728d0fba264df2192e9d39f99df7235e56de3602561d71a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ada5efa55bc668d228fdf611599a626256f0c27268e43dfb295318bdc935947 = $this->env->getExtension("native_profiler");
        $__internal_1ada5efa55bc668d228fdf611599a626256f0c27268e43dfb295318bdc935947->enter($__internal_1ada5efa55bc668d228fdf611599a626256f0c27268e43dfb295318bdc935947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_1ada5efa55bc668d228fdf611599a626256f0c27268e43dfb295318bdc935947->leave($__internal_1ada5efa55bc668d228fdf611599a626256f0c27268e43dfb295318bdc935947_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b09aca3dd737985d374c85a4e1ad4277353bc5dc83cd76e2561edfbbcc9b4fb = $this->env->getExtension("native_profiler");
        $__internal_9b09aca3dd737985d374c85a4e1ad4277353bc5dc83cd76e2561edfbbcc9b4fb->enter($__internal_9b09aca3dd737985d374c85a4e1ad4277353bc5dc83cd76e2561edfbbcc9b4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_9b09aca3dd737985d374c85a4e1ad4277353bc5dc83cd76e2561edfbbcc9b4fb->leave($__internal_9b09aca3dd737985d374c85a4e1ad4277353bc5dc83cd76e2561edfbbcc9b4fb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_07b031148e13ccca4d2572b29b0895a915a4cc18ec22a0fc312d0339cc8b63de = $this->env->getExtension("native_profiler");
        $__internal_07b031148e13ccca4d2572b29b0895a915a4cc18ec22a0fc312d0339cc8b63de->enter($__internal_07b031148e13ccca4d2572b29b0895a915a4cc18ec22a0fc312d0339cc8b63de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
              <div class=\"row\">          
            <div class=\"col-md-4\">
                <h1>Club
                    <p>
                        <code>122<small>Quito-Ecuador</small></code>
                    </p>
                </h1>    
            </div>       
        </div>
         <div class=\"row\">
           
            <div class=\"col-md-12 \">
                
                <br/>
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"#\">CLUB-122</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"active\"><a href=\"#home\">HOME <span class=\"sr-only\">(current)</span></a></li>
                                <li><a href=\"#\">Informacion</a></li>
                                <li><a href=\"#meta1\">Preferencias</a></li>
                                <li><a href=\"#servicios\">Fotos</a></li>
                                <li><a href=\"#\">Galeria</a></li>
                                <li><a href=\"#\">Nuestro Equipo</a></li>
                                
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class=\"row panel panel-primary\">
            <div class=\"panel-heading\">
                <p class=\"text-center\">OPCIONES DE ADMINISTRADOR</p>
            </div>
            <div class=\"panel-body\">
                <div class=\"col-md-12 \">
                    <form>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("wbj_user_nuevoUsuario");
        echo "\" class=\"btn btn-default center-block\" style=\"margin-top: 1cm; width: 30%;padding-bottom: 1cm;padding-top: 1cm;\">CREAR USUARIO</a>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("wbj_user_editarusernoadmin");
        echo "\" class=\"btn btn-default center-block\" style=\"margin-top: 1cm;width: 30%;padding-bottom: 1cm;padding-top: 1cm;\">EDITAR USUARIO</a>
                        <a class=\"btn btn-default center-block\" style=\"margin-top: 1cm;width: 30%;padding-bottom: 1cm;padding-top: 1cm; margin-bottom: 1cm;\">BORRAR USUARIO</a>
                    </form>
                </div>   
            </div>    
        </div>

";
        
        $__internal_07b031148e13ccca4d2572b29b0895a915a4cc18ec22a0fc312d0339cc8b63de->leave($__internal_07b031148e13ccca4d2572b29b0895a915a4cc18ec22a0fc312d0339cc8b63de_prof);

    }

    // line 78
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_82a8b4c2330dcd7f4d8ae17efe76f48acf5ff45d9dd8f67338769940e87d18ec = $this->env->getExtension("native_profiler");
        $__internal_82a8b4c2330dcd7f4d8ae17efe76f48acf5ff45d9dd8f67338769940e87d18ec->enter($__internal_82a8b4c2330dcd7f4d8ae17efe76f48acf5ff45d9dd8f67338769940e87d18ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
        
        $__internal_82a8b4c2330dcd7f4d8ae17efe76f48acf5ff45d9dd8f67338769940e87d18ec->leave($__internal_82a8b4c2330dcd7f4d8ae17efe76f48acf5ff45d9dd8f67338769940e87d18ec_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 78,  136 => 66,  132 => 65,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
