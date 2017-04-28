<?php

/* WBJUserBundle:Usuarios:editinfo.html.twig */
class __TwigTemplate_8f40c6642446b21a6f75793c9e8ca00d352cd8ee440af31da6ba4b153134fd18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basenuevo.html.twig", "WBJUserBundle:Usuarios:editinfo.html.twig", 1);
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
        $__internal_0e27c1ff5c774c809030b845f0a65ba417a1c3362ffbf0eb87a9f7be0568d099 = $this->env->getExtension("native_profiler");
        $__internal_0e27c1ff5c774c809030b845f0a65ba417a1c3362ffbf0eb87a9f7be0568d099->enter($__internal_0e27c1ff5c774c809030b845f0a65ba417a1c3362ffbf0eb87a9f7be0568d099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:editinfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e27c1ff5c774c809030b845f0a65ba417a1c3362ffbf0eb87a9f7be0568d099->leave($__internal_0e27c1ff5c774c809030b845f0a65ba417a1c3362ffbf0eb87a9f7be0568d099_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1512f1901e362e11558ce4a9b67677296f186ead0a723c551aec6dac7006a3c9 = $this->env->getExtension("native_profiler");
        $__internal_1512f1901e362e11558ce4a9b67677296f186ead0a723c551aec6dac7006a3c9->enter($__internal_1512f1901e362e11558ce4a9b67677296f186ead0a723c551aec6dac7006a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_1512f1901e362e11558ce4a9b67677296f186ead0a723c551aec6dac7006a3c9->leave($__internal_1512f1901e362e11558ce4a9b67677296f186ead0a723c551aec6dac7006a3c9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22ef0c502deca4858d256aadacddceaa6b59719690c0e7157ad2c196c95301d4 = $this->env->getExtension("native_profiler");
        $__internal_22ef0c502deca4858d256aadacddceaa6b59719690c0e7157ad2c196c95301d4->enter($__internal_22ef0c502deca4858d256aadacddceaa6b59719690c0e7157ad2c196c95301d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_22ef0c502deca4858d256aadacddceaa6b59719690c0e7157ad2c196c95301d4->leave($__internal_22ef0c502deca4858d256aadacddceaa6b59719690c0e7157ad2c196c95301d4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1dae7e5fd97f29a4e9801eb82ce9482ea0451a57004178884538d6d1754fece = $this->env->getExtension("native_profiler");
        $__internal_f1dae7e5fd97f29a4e9801eb82ce9482ea0451a57004178884538d6d1754fece->enter($__internal_f1dae7e5fd97f29a4e9801eb82ce9482ea0451a57004178884538d6d1754fece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                DATOS DE USUARIO
            </div>
            <div class=\"panel-body\">
                
              <form class=\"bg-info\" method=\"POST\" action=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("wbj_user_actualizar");
        echo "\" enctype=\"multipart/form-data\">
                <div class=\"col-md-6 \">
                    
                        <div class=\"form-group\">
                            
                            <input class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombres", array()), "html", null, true);
        echo "\" name=\"nombresa\" id=\"nombresa\" />
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellidos", array()), "html", null, true);
        echo "\" name=\"apellidosa\" id=\"apellidosa\" />
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "\" name=\"nicknamea\" id=\"nicknamea\" />
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pass", array()), "html", null, true);
        echo "\"  name=\"passa\" id=\"passa\" />
                        </div> 
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nacionalidad", array()), "html", null, true);
        echo "\" name=\"nacionalidada\" id=\"nacionalidada\" />
                        </div> 
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "provincia", array()), "html", null, true);
        echo "\" name=\"provinciaa\" id=\"provinciaa\"/>
                        </div> 
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ciudad", array()), "html", null, true);
        echo "\" name=\"ciudada\" id=\"ciudada\" />
                        </div> 
                        <div class=\"form-group\">
                            <input class=\"form-control\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "introduc", array()), "html", null, true);
        echo "\" name=\"introduca\" id=\"introduca\" />
                        </div>
                        
                    
                </div>
                <div class=\"col-md-6\">
                    <div class=\"row\" style=\"margin-top:1cm;\">
                        <div class=\"col-md-4\">
                             <label class=\"btn btn-success btn-block\">
                               FOTO PERFIL <input type=\"file\" style=\"display: none;\"  id=\"file-perfil\" name=\"file-perfil\" >
                              </label>    
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img", array()))), "html", null, true);
        echo "\" class=\"center-block img-responsive\" id=\"img-user-perfil\" />
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"btn btn-success btn-block\">
                               FOTO SENSUAL <input type=\"file\" style=\"display: none;\" id=\"file-perfil1\" name=\"file-perfil1\">
                           </label>
                           <label class=\"btn btn-success btn-block\">
                               FOTO SEXY <input type=\"file\" style=\"display: none;\" id=\"file-perfil2\" name=\"file-perfil2\">
                           </label>  
                           <label class=\"btn btn-success btn-block\">
                               FOTO LIBRE <input type=\"file\" style=\"display: none;\" id=\"file-perfil3\" name=\"file-perfil3\">
                           </label>  
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin-top:1cm;\">
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img2", array()))), "html", null, true);
        echo "\" class=\"center-block img-responsive\" id=\"img-user-perfil1\" />
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img3", array()))), "html", null, true);
        echo "\" class=\"center-block img-responsive\" id=\"img-user-perfil2\"  />
                        </div>
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "img4", array()))), "html", null, true);
        echo "\" class=\"center-block img-responsive\" id=\"img-user-perfil3\" />
                        </div>
                    </div>
                </div>
                  <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-danger btn-block\">ACTUALIZAR</button>
                  </div>
              </form>  
            </div>    
        </div>
        <div class=\"row panel panel-danger panel-body\">
            <div class=\"col-md-12 panel panel-danger panel-body\">
               
                otras opcionees
            </div>
            
        </div>



";
        
        $__internal_f1dae7e5fd97f29a4e9801eb82ce9482ea0451a57004178884538d6d1754fece->leave($__internal_f1dae7e5fd97f29a4e9801eb82ce9482ea0451a57004178884538d6d1754fece_prof);

    }

    // line 150
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_57d429ddc8a9f4a89142cb9d579d0de65566f701f8d2c5d49219a85cee258db2 = $this->env->getExtension("native_profiler");
        $__internal_57d429ddc8a9f4a89142cb9d579d0de65566f701f8d2c5d49219a85cee258db2->enter($__internal_57d429ddc8a9f4a89142cb9d579d0de65566f701f8d2c5d49219a85cee258db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
        
        $__internal_57d429ddc8a9f4a89142cb9d579d0de65566f701f8d2c5d49219a85cee258db2->leave($__internal_57d429ddc8a9f4a89142cb9d579d0de65566f701f8d2c5d49219a85cee258db2_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:editinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 150,  228 => 125,  222 => 122,  216 => 119,  197 => 103,  181 => 90,  175 => 87,  169 => 84,  163 => 81,  157 => 78,  151 => 75,  145 => 72,  139 => 69,  131 => 64,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
