<?php

/* WBJUserBundle:Usuarios:nuevo.html.twig */
class __TwigTemplate_2834d1ad5ea6a0da37c35cb7eb852e875c7eb7ac3e9a8796629d8d948fa04ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basenuevo.html.twig", "WBJUserBundle:Usuarios:nuevo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basenuevo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e086ab3ff21d560194e5f6e992ccb1410bce322dd60685e11c974675c6c0816 = $this->env->getExtension("native_profiler");
        $__internal_0e086ab3ff21d560194e5f6e992ccb1410bce322dd60685e11c974675c6c0816->enter($__internal_0e086ab3ff21d560194e5f6e992ccb1410bce322dd60685e11c974675c6c0816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e086ab3ff21d560194e5f6e992ccb1410bce322dd60685e11c974675c6c0816->leave($__internal_0e086ab3ff21d560194e5f6e992ccb1410bce322dd60685e11c974675c6c0816_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62b4ebd17dfbb3292a6ea77f289a75f6aca8ca4b35d434ab0b3ba755912161f1 = $this->env->getExtension("native_profiler");
        $__internal_62b4ebd17dfbb3292a6ea77f289a75f6aca8ca4b35d434ab0b3ba755912161f1->enter($__internal_62b4ebd17dfbb3292a6ea77f289a75f6aca8ca4b35d434ab0b3ba755912161f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_62b4ebd17dfbb3292a6ea77f289a75f6aca8ca4b35d434ab0b3ba755912161f1->leave($__internal_62b4ebd17dfbb3292a6ea77f289a75f6aca8ca4b35d434ab0b3ba755912161f1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45c93dc4eef9a8097dcb80b0656efefc5e11fb904af07e5908a94bc7f8718f1e = $this->env->getExtension("native_profiler");
        $__internal_45c93dc4eef9a8097dcb80b0656efefc5e11fb904af07e5908a94bc7f8718f1e->enter($__internal_45c93dc4eef9a8097dcb80b0656efefc5e11fb904af07e5908a94bc7f8718f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_45c93dc4eef9a8097dcb80b0656efefc5e11fb904af07e5908a94bc7f8718f1e->leave($__internal_45c93dc4eef9a8097dcb80b0656efefc5e11fb904af07e5908a94bc7f8718f1e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8444471ddde69627363177409624c7280f50176b9fa75dde80efa434d2c7888b = $this->env->getExtension("native_profiler");
        $__internal_8444471ddde69627363177409624c7280f50176b9fa75dde80efa434d2c7888b->enter($__internal_8444471ddde69627363177409624c7280f50176b9fa75dde80efa434d2c7888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("wbj_user_userHomeAdmin");
        echo "\">HOME <span class=\"sr-only\">(current)</span></a></li>
                                <li><a href=\"#\">Editar Informacion</a></li>
                                <li><a href=\"#meta1\">Preferencias</a></li>
                                <li><a href=\"#\">Usuarios</a></li>
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
                <strong>Datos de Nuevo Usuario:</strong>
            </div>
            <div class=\"panel-body\">

                ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
                
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'label');
        echo "
                        </label>
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite sus Nombres")));
        echo "
                        <span class=\"text-danger\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
                        </label>
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite sus Apellidos")));
        echo "
                        <span class=\"text-danger\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "</span>
                    </div>
                     <div class=\"form-group\">
                        <label>
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'label');
        echo "
                        </label>
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite su Nickname")));
        echo "
                        <span class=\"text-danger\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nickname", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass", array()), 'label');
        echo "
                        </label>
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidas", array()), 'label');
        echo "
                        </label>
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidas", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite sus Medidas")));
        echo "
                        <span class=\"text-danger\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medidas", array()), 'errors');
        echo "</span>
                    </div>
                     <div class=\"form-group\">
                        <label>
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cost", array()), 'label');
        echo "
                        </label>
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cost", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite costo en Dolares")));
        echo "
                        <span class=\"text-danger\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cost", array()), 'errors');
        echo "</span>
                    </div>
                     <div class=\"form-group\">
                        <label>
                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signo", array()), 'label');
        echo "
                        </label>
                        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signo", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNaci", array()), 'label');
        echo "
                        </label>
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNaci", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNaci", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'label');
        echo "
                        </label>
                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite nacionalidad")));
        echo "
                        <span class=\"text-danger\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacionalidad", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'label');
        echo "
                        </label>
                        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite provincia")));
        echo "
                        <span class=\"text-danger\">";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'label');
        echo "
                        </label>
                        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite ciudad")));
        echo "
                        <span class=\"text-danger\">";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ciudad", array()), 'errors');
        echo "</span>
                    </div>
                     <div class=\"form-group\">
                        <label>
                            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privi", array()), 'label');
        echo "
                        </label>
                        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privi", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite ciudad")));
        echo "
                        <span class=\"text-danger\">";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privi", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        </label>
                        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite ciudad")));
        echo "
                        <span class=\"text-danger\">";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                        <label>
                            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduc", array()), 'label');
        echo "
                        </label>
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduc", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Diguite ciudad")));
        echo "
                        <span class=\"text-danger\">";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduc", array()), 'errors');
        echo "</span>
                    </div>
                    
                 </div>
                 <div class=\"col-md-6\">
                        <mark>Por favor elija una foto para su perfil</mark>
                        
                        <div class=\"form-group\">
                           <label>
                               ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img", array()), 'label');
        echo "
                           </label>
                              ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img", array()), 'widget', array("id" => "file-perfil"));
        echo "
                              <span class=\"text-danger\">";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img", array()), 'errors');
        echo "</span>
                        </div>
                        
                        <pre><strong>OPCIONAL</strong> Por favor elija tres fotos adicionales para su galería</pre>
                        
                         <div class=\"form-group\">
                           <label>
                               ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img2", array()), 'label');
        echo "
                           </label>
                              ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img2", array()), 'widget', array("id" => "file-perfil1"));
        echo "
                              <span class=\"text-danger\">";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img2", array()), 'errors');
        echo "</span>
                        </div>
                        
                         <div class=\"form-group\">
                           <label>
                               ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img3", array()), 'label');
        echo "
                           </label>
                              ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img3", array()), 'widget', array("id" => "file-perfil2"));
        echo "
                              <span class=\"text-danger\">";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img3", array()), 'errors');
        echo "</span>
                        </div>
                        
                         <div class=\"form-group\">
                           <label>
                               ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img4", array()), 'label');
        echo "
                           </label>
                              ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img4", array()), 'widget', array("id" => "file-perfil3"));
        echo "
                              <span class=\"text-danger\">";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "img4", array()), 'errors');
        echo "</span>
                        </div>
                        
                        
                        
                        
                        
                        
                       
                        
                        
                     <div class=\"row\" style=\"margin-top: 10%;\">
                        <div class=\"col-md-3 center-block\">
                            <img src=\"images/team-1.jpg\" id=\"img-user-perfil\"   class=\"img-responsive img-circle\" alt=\"\"/>
                        </div>
                        <div class=\"col-md-3 center-block\">
                            <img src=\"images/team-1.jpg\" id=\"img-user-perfil1\" class=\"img-responsive img-thumbnail\" alt=\"\"/>
                        </div>
                        <div class=\"col-md-3 center-block\">
                            <img src=\"images/team-1.jpg\" id=\"img-user-perfil2\"  class=\"img-responsive img-thumbnail\" alt=\"\"/>
                        </div>
                        <div class=\"col-md-3 center-block\">
                            <img src=\"images/team-1.jpg\" id=\"img-user-perfil3\"  class=\"img-responsive img-thumbnail\" alt=\"\"/>
                        </div>
                    </div>
                        
                        
                        
                        
                        
                    
                 </div>
                    
                 <p>
                    ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-default btn-block ")));
        echo "
                 </p>
                  
                    
                ";
        // line 240
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
               
            </div>
        </div>
       
        
        
     
       
        
       
            



 ";
        
        $__internal_8444471ddde69627363177409624c7280f50176b9fa75dde80efa434d2c7888b->leave($__internal_8444471ddde69627363177409624c7280f50176b9fa75dde80efa434d2c7888b_prof);

    }

    // line 260
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7b16bd14e88b166984f5a2b8b24bc1cb595534b64c1a39602e5ea40ef001540c = $this->env->getExtension("native_profiler");
        $__internal_7b16bd14e88b166984f5a2b8b24bc1cb595534b64c1a39602e5ea40ef001540c->enter($__internal_7b16bd14e88b166984f5a2b8b24bc1cb595534b64c1a39602e5ea40ef001540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " 
 ";
        // line 261
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
   
 ";
        
        $__internal_7b16bd14e88b166984f5a2b8b24bc1cb595534b64c1a39602e5ea40ef001540c->leave($__internal_7b16bd14e88b166984f5a2b8b24bc1cb595534b64c1a39602e5ea40ef001540c_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 261,  501 => 260,  478 => 240,  471 => 236,  434 => 202,  430 => 201,  425 => 199,  417 => 194,  413 => 193,  408 => 191,  400 => 186,  396 => 185,  391 => 183,  381 => 176,  377 => 175,  372 => 173,  360 => 164,  356 => 163,  351 => 161,  344 => 157,  340 => 156,  335 => 154,  328 => 150,  324 => 149,  319 => 147,  312 => 143,  308 => 142,  303 => 140,  296 => 136,  292 => 135,  287 => 133,  280 => 129,  276 => 128,  271 => 126,  264 => 122,  260 => 121,  255 => 119,  248 => 115,  244 => 114,  239 => 112,  232 => 108,  228 => 107,  223 => 105,  216 => 101,  212 => 100,  207 => 98,  200 => 94,  196 => 93,  191 => 91,  184 => 87,  180 => 86,  175 => 84,  168 => 80,  164 => 79,  159 => 77,  152 => 73,  148 => 72,  143 => 70,  135 => 65,  112 => 45,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
