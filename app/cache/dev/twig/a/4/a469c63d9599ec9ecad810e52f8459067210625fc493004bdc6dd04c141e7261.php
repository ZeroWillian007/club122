<?php

/* WBJUserBundle:Usuarios:listar_todos_revisar_detalle.html.twig */
class __TwigTemplate_a469c63d9599ec9ecad810e52f8459067210625fc493004bdc6dd04c141e7261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WBJUserBundle:Usuarios:listar_todos_revisar_detalle.html.twig", 1);
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
        $__internal_7dfe572c2bd3522f11502bd5463ab08e0b259d31c54ec6803296757612b97128 = $this->env->getExtension("native_profiler");
        $__internal_7dfe572c2bd3522f11502bd5463ab08e0b259d31c54ec6803296757612b97128->enter($__internal_7dfe572c2bd3522f11502bd5463ab08e0b259d31c54ec6803296757612b97128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:listar_todos_revisar_detalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfe572c2bd3522f11502bd5463ab08e0b259d31c54ec6803296757612b97128->leave($__internal_7dfe572c2bd3522f11502bd5463ab08e0b259d31c54ec6803296757612b97128_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eb0cb3291beca75710e22cbc00a20fb22b54de91dcaf78b379fa322a847cb6a = $this->env->getExtension("native_profiler");
        $__internal_4eb0cb3291beca75710e22cbc00a20fb22b54de91dcaf78b379fa322a847cb6a->enter($__internal_4eb0cb3291beca75710e22cbc00a20fb22b54de91dcaf78b379fa322a847cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_4eb0cb3291beca75710e22cbc00a20fb22b54de91dcaf78b379fa322a847cb6a->leave($__internal_4eb0cb3291beca75710e22cbc00a20fb22b54de91dcaf78b379fa322a847cb6a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38d333553e59ebfc4df39b2249a4a8b7851f71b5ab2157fc864e116363e514dd = $this->env->getExtension("native_profiler");
        $__internal_38d333553e59ebfc4df39b2249a4a8b7851f71b5ab2157fc864e116363e514dd->enter($__internal_38d333553e59ebfc4df39b2249a4a8b7851f71b5ab2157fc864e116363e514dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_38d333553e59ebfc4df39b2249a4a8b7851f71b5ab2157fc864e116363e514dd->leave($__internal_38d333553e59ebfc4df39b2249a4a8b7851f71b5ab2157fc864e116363e514dd_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb86ca6b429ed73d0ea340681842b83f65f322f786fe03c50c99c85c559c44b = $this->env->getExtension("native_profiler");
        $__internal_ceb86ca6b429ed73d0ea340681842b83f65f322f786fe03c50c99c85c559c44b->enter($__internal_ceb86ca6b429ed73d0ea340681842b83f65f322f786fe03c50c99c85c559c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <li class=\"active\"><a href=\"#\">HOME <span class=\"sr-only\">(current)</span></a></li>
                                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("wbj_user_editinfoAdmin");
        echo "\">Editar Informacion</a></li>
                                <li><a href=\"#meta1\">Preferencias</a></li>
                                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("wbj_user_usuarios");
        echo "\">Usuarios</a></li>
                                <li><a href=\"#\">Publicaciones</a></li>
                                <li><a href=\"#\">Configuracion</a></li>
                                
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class=\"row panel panel-primary\">
            <div class=\"panel-heading\">
                <strong>INFORMACION DE ADMINISTRADOR </strong>
            </div>
            <div class=\"panel-body\">
                
                <div class=\"row\"> 
                  <div class=\"col-md-6\">
                      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img", array()))), "html", null, true);
        echo "\" alt=\"Imagen Perfil\" class=\"center-block img-responsive\" style=\"height:7cm\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img2", array()))), "html", null, true);
        echo "\" alt=\"Imagen Impactante\" class=\"center-block img-responsive\" style=\"height:7cm\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img3", array()))), "html", null, true);
        echo "\" alt=\"Imagen Sexy\" class=\"center-block img-responsive\" style=\"height:7cm\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img4", array()))), "html", null, true);
        echo "\" alt=\"Imagen Libre\" class=\"center-block img-responsive\" style=\"height:7cm\" >
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"text-info\">NOMBRES:</div><mark>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombres", array()), "html", null, true);
        echo "</mark>
                    <div class=\"text-info\">APELLIDOS:</div><mark> ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array()), "html", null, true);
        echo "</mark>
                    <div class=\"text-info\">SIGNO:</div> <mark> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "signo", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">NACIONALIDAD:</div><mark>  ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nacionalidad", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">PROVINCIA:</div> <mark> ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "provincia", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">CIUDAD:</div> <mark> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ciudad", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">COMENTARIO:</div> <mark> ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "introduc", array()), "html", null, true);
        echo "<mark>
                  </div>
                  
                 
                  
                </div>
            </div>
            
        </div>
                  <div class=\"row\">
                      <div class=\"col-md-12\">
                           <a href=\" ";
        // line 123
        echo $this->env->getExtension('routing')->getPath("wbj_user_listartodos");
        echo " \"><p class=\"text-center \">VOLVER</p></a>
                      </div>
                      
                  </div>


";
        
        $__internal_ceb86ca6b429ed73d0ea340681842b83f65f322f786fe03c50c99c85c559c44b->leave($__internal_ceb86ca6b429ed73d0ea340681842b83f65f322f786fe03c50c99c85c559c44b_prof);

    }

    // line 134
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b8f611c3c69c1023ef07357bc96b800fba1d6eca4bae535f6c7822dc07ffe5c9 = $this->env->getExtension("native_profiler");
        $__internal_b8f611c3c69c1023ef07357bc96b800fba1d6eca4bae535f6c7822dc07ffe5c9->enter($__internal_b8f611c3c69c1023ef07357bc96b800fba1d6eca4bae535f6c7822dc07ffe5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
        
        $__internal_b8f611c3c69c1023ef07357bc96b800fba1d6eca4bae535f6c7822dc07ffe5c9->leave($__internal_b8f611c3c69c1023ef07357bc96b800fba1d6eca4bae535f6c7822dc07ffe5c9_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:listar_todos_revisar_detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 134,  229 => 123,  215 => 112,  211 => 111,  207 => 110,  203 => 109,  199 => 108,  195 => 107,  191 => 106,  172 => 90,  165 => 86,  158 => 82,  151 => 78,  117 => 47,  112 => 45,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
