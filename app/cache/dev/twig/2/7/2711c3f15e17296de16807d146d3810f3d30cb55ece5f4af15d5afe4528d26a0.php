<?php

/* WBJUserBundle:Usuarios:admin.html.twig */
class __TwigTemplate_2711c3f15e17296de16807d146d3810f3d30cb55ece5f4af15d5afe4528d26a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WBJUserBundle:Usuarios:admin.html.twig", 1);
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
        $__internal_a19277f93430d6e171a73808efbf0da50730670c7f39837f713a4f8e0cd39b76 = $this->env->getExtension("native_profiler");
        $__internal_a19277f93430d6e171a73808efbf0da50730670c7f39837f713a4f8e0cd39b76->enter($__internal_a19277f93430d6e171a73808efbf0da50730670c7f39837f713a4f8e0cd39b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19277f93430d6e171a73808efbf0da50730670c7f39837f713a4f8e0cd39b76->leave($__internal_a19277f93430d6e171a73808efbf0da50730670c7f39837f713a4f8e0cd39b76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f63a3b6cf9ef0a7bd21f45eaca2d8ba5036562024a73d8b6554658143a272bc = $this->env->getExtension("native_profiler");
        $__internal_8f63a3b6cf9ef0a7bd21f45eaca2d8ba5036562024a73d8b6554658143a272bc->enter($__internal_8f63a3b6cf9ef0a7bd21f45eaca2d8ba5036562024a73d8b6554658143a272bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_8f63a3b6cf9ef0a7bd21f45eaca2d8ba5036562024a73d8b6554658143a272bc->leave($__internal_8f63a3b6cf9ef0a7bd21f45eaca2d8ba5036562024a73d8b6554658143a272bc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e1e819fbb050614047c671b1c75fc1c0be88f34c8a70bb905a48241df7c93bc = $this->env->getExtension("native_profiler");
        $__internal_8e1e819fbb050614047c671b1c75fc1c0be88f34c8a70bb905a48241df7c93bc->enter($__internal_8e1e819fbb050614047c671b1c75fc1c0be88f34c8a70bb905a48241df7c93bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_8e1e819fbb050614047c671b1c75fc1c0be88f34c8a70bb905a48241df7c93bc->leave($__internal_8e1e819fbb050614047c671b1c75fc1c0be88f34c8a70bb905a48241df7c93bc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e66a1b9997edc79260e4a7fa1281b1053f5371d2412d76186e485436f4663d6f = $this->env->getExtension("native_profiler");
        $__internal_e66a1b9997edc79260e4a7fa1281b1053f5371d2412d76186e485436f4663d6f->enter($__internal_e66a1b9997edc79260e4a7fa1281b1053f5371d2412d76186e485436f4663d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("wbj_user_listartodos");
        echo "\">Explorar</a></li>
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
                <strong>INFORMACION DE ADMINISTRADOR <small>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fechaUpdate", array()), "Y-m-d"), "html", null, true);
        echo "</small> </strong>
            </div>
            <div class=\"panel-body\">
                 
                
                <div class=\"col-md-6 panel panel-danger panel-body\">

                    
                    <div class=\"text-info\">NOMBRES:</div><mark>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombres", array()), "html", null, true);
        echo "</mark>
                    <div class=\"text-info\">APELLIDOS:</div><mark> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array()), "html", null, true);
        echo "</mark>
                    <div class=\"text-info\">NICKNAME:</div> <mark>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">CONTRASEÑA:</div> <mark>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pass", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">SIGNO:</div> <mark> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "signo", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">NACIONALIDAD:</div><mark>  ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nacionalidad", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">PROVINCIA:</div> <mark> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "provincia", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">CIUDAD:</div> <mark> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ciudad", array()), "html", null, true);
        echo "<mark>
                    <div class=\"text-info\">COMENTARIO:</div> <mark> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "introduc", array()), "html", null, true);
        echo "<mark>
                </div>
                
                <div class=\"col-md-6\">
                    
                       <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img", array()))), "html", null, true);
        echo "\" class=\"center-block img-responsive\" />
                       <br/>
                       
                       <p class=\"text-justify\">
                           Bienvenido a la aplicación señor <mark> ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array()), "html", null, true);
        echo " </mark> administrador le damos un cordial salúdalo  
                       </p>
                </div>
                
            </div>
        </div>


";
        
        $__internal_e66a1b9997edc79260e4a7fa1281b1053f5371d2412d76186e485436f4663d6f->leave($__internal_e66a1b9997edc79260e4a7fa1281b1053f5371d2412d76186e485436f4663d6f_prof);

    }

    // line 98
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9241517c15abd500daa86a5977a6195f2505b5adf7436d0eb16a915cd06952b5 = $this->env->getExtension("native_profiler");
        $__internal_9241517c15abd500daa86a5977a6195f2505b5adf7436d0eb16a915cd06952b5->enter($__internal_9241517c15abd500daa86a5977a6195f2505b5adf7436d0eb16a915cd06952b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
        
        $__internal_9241517c15abd500daa86a5977a6195f2505b5adf7436d0eb16a915cd06952b5->leave($__internal_9241517c15abd500daa86a5977a6195f2505b5adf7436d0eb16a915cd06952b5_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 98,  194 => 85,  187 => 81,  179 => 76,  175 => 75,  171 => 74,  167 => 73,  163 => 72,  159 => 71,  155 => 70,  151 => 69,  147 => 68,  136 => 60,  120 => 47,  116 => 46,  112 => 45,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
