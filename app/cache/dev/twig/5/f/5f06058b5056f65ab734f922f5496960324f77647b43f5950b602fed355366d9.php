<?php

/* WBJUserBundle:Usuarios:listar_todos.html.twig */
class __TwigTemplate_5f06058b5056f65ab734f922f5496960324f77647b43f5950b602fed355366d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WBJUserBundle:Usuarios:listar_todos.html.twig", 1);
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
        $__internal_852fd1d790ae0216e1904be4639dea2b4e79b347125fd2811275a3d1baea7b67 = $this->env->getExtension("native_profiler");
        $__internal_852fd1d790ae0216e1904be4639dea2b4e79b347125fd2811275a3d1baea7b67->enter($__internal_852fd1d790ae0216e1904be4639dea2b4e79b347125fd2811275a3d1baea7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WBJUserBundle:Usuarios:listar_todos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_852fd1d790ae0216e1904be4639dea2b4e79b347125fd2811275a3d1baea7b67->leave($__internal_852fd1d790ae0216e1904be4639dea2b4e79b347125fd2811275a3d1baea7b67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ada1c606bcf04317e5b6637df5e4e40caaae572fcf6397db0f96cb7d9f37758 = $this->env->getExtension("native_profiler");
        $__internal_5ada1c606bcf04317e5b6637df5e4e40caaae572fcf6397db0f96cb7d9f37758->enter($__internal_5ada1c606bcf04317e5b6637df5e4e40caaae572fcf6397db0f96cb7d9f37758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_5ada1c606bcf04317e5b6637df5e4e40caaae572fcf6397db0f96cb7d9f37758->leave($__internal_5ada1c606bcf04317e5b6637df5e4e40caaae572fcf6397db0f96cb7d9f37758_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38a75bd89d00a1e3978f75e5cf7a5c6217f30ab790982dcd6fa50b07ca107e70 = $this->env->getExtension("native_profiler");
        $__internal_38a75bd89d00a1e3978f75e5cf7a5c6217f30ab790982dcd6fa50b07ca107e70->enter($__internal_38a75bd89d00a1e3978f75e5cf7a5c6217f30ab790982dcd6fa50b07ca107e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
        
        $__internal_38a75bd89d00a1e3978f75e5cf7a5c6217f30ab790982dcd6fa50b07ca107e70->leave($__internal_38a75bd89d00a1e3978f75e5cf7a5c6217f30ab790982dcd6fa50b07ca107e70_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c810a5b484a5ddb3ac775f36c069233eed5426a3df70bb8aec6d2d536758d3 = $this->env->getExtension("native_profiler");
        $__internal_b0c810a5b484a5ddb3ac775f36c069233eed5426a3df70bb8aec6d2d536758d3->enter($__internal_b0c810a5b484a5ddb3ac775f36c069233eed5426a3df70bb8aec6d2d536758d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <strong>INFORMACION DE ADMINISTRADOR TOTAL ENCONTRADOS:  ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " </strong>
            </div>
            <div class=\"panel-body\">
                
                <div class=\"row\"> 
                    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            echo "                       <div class=\"col-md-4 col-sm-6 \">
                            <br/>
                            
                            <a href=\" ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wbj_user_listartodos-listar", array("id" => $this->getAttribute($context["user"], "idUser", array()))), "html", null, true);
            echo "  \"><p class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombres", array()), "html", null, true);
            echo "</p></a>
                            <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/fotos/" . $this->getAttribute($context["user"], "img", array()))), "html", null, true);
            echo "\" style=\"height:3cm; width:3cm\" class=\"center-block img-responsive\" />
                            <hr style=\"background-color: red;height: 1px; \">
                           
                       </div>
                     
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " 
                </div>
            </div>
        </div>
        ";
        // line 80
        echo "        <div class=\"pagination\">
            ";
        // line 81
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
        
        


";
        
        $__internal_b0c810a5b484a5ddb3ac775f36c069233eed5426a3df70bb8aec6d2d536758d3->leave($__internal_b0c810a5b484a5ddb3ac775f36c069233eed5426a3df70bb8aec6d2d536758d3_prof);

    }

    // line 92
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_bddd0a06f507a1a3229f91774eedf93344b7b1cf251469f5eeac96faa969ad92 = $this->env->getExtension("native_profiler");
        $__internal_bddd0a06f507a1a3229f91774eedf93344b7b1cf251469f5eeac96faa969ad92->enter($__internal_bddd0a06f507a1a3229f91774eedf93344b7b1cf251469f5eeac96faa969ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
        
        $__internal_bddd0a06f507a1a3229f91774eedf93344b7b1cf251469f5eeac96faa969ad92->leave($__internal_bddd0a06f507a1a3229f91774eedf93344b7b1cf251469f5eeac96faa969ad92_prof);

    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:listar_todos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 92,  177 => 81,  174 => 80,  168 => 75,  156 => 70,  150 => 69,  145 => 66,  141 => 65,  133 => 60,  117 => 47,  112 => 45,  76 => 13,  70 => 12,  56 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
