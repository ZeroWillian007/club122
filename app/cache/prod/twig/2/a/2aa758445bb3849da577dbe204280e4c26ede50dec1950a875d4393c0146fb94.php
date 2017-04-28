<?php

/* WBJUserBundle:Usuarios:index.html.twig */
class __TwigTemplate_2aa758445bb3849da577dbe204280e4c26ede50dec1950a875d4393c0146fb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "WBJUserBundle:Usuarios:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "
      ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "  ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">          
            <div class=\"col-md-4\">
                <h1>Club<p>
                        <code>122<small>Quito-Ecuador</small></code>
                    </p></h1>
            </div>        
            <div class=\"col-md-6 col-sm-12 col-xs-12 login pull-right\">
                <!--LOGIN DE USUARIOS-->
              
                <form style=\"padding-top: 5px; padding-left: 5%;\" class=\"form-inline\" method=\"POST\" action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("wbj_user_login");
        echo "\">
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputEmail3\">Nombre De Usuario</label>
                        <input class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Usuario\" name=\"user\"/>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"exampleInputPassword3\">COntraseña</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\" name=\"pass\"/>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Recordarme</input>
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Ingresar</button>
                </form>
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
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#meta1\">Meta</a></li>
                                <li><a href=\"#servicios\">Servicios</a></li>
                                <li><a href=\"#\">Galeria</a></li>
                                <li><a href=\"#\">Nuestro Equipo</a></li>
                                <li><a href=\"#contactos\">Contactos</a></li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"carousel slide\" id=\"carousel-222580\" >
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-slide-to=\"0\" data-target=\"#carousel-222580\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-222580\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-222580\" class=\"active\">
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img alt=\"Carousel Bootstrap First\" src=\"/web/public/images/img-slider1.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tFirst Thumbnail label
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img alt=\"Carousel Bootstrap Second\" src=\"/web/public/images/img-slider2.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tSecond Thumbnail label
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t<img alt=\"Carousel Bootstrap Third\" src=\"/web/public/images/img-slider3.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tThird Thumbnail label
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <a class=\"left carousel-control\" href=\"#carousel-222580\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a> <a class=\"right carousel-control\" href=\"#carousel-222580\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
\t\t\t</div>
\t\t</div>
\t</div>
        <div id=\"meta1\">
            <h3 class=\"text-center\" style=\"color: #006400\"> Nuestra meta </h3>
                <p class=\"text-center\">
                    Nuestra empresa tiene como meta satisfacer a nuestros clientes en su totalidad Con absolutista discreción y profesionalismo
                </p>
        </div>
        <div class=\"row\" id=\"servicios\">
            <div class=\"row\">
                <h3 class=\"text-center\">NUESTROS SERVICIOS</h3>
                <p class=\"text-center\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                    semper aliquam quis mattis quam.
                </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center \">Car Wash</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center\">Car Servicing</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center\">Car Checkup</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center\">Painting</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center\">Modifiying</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 servicios\">                   
                    <div class=\"serviciosInter\">
                        <h4 class=\"text-center\">Alignment</h4>
                        <p class=\"text-justify\">    
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"/web/public/images/nuestraempresa.jpg\" class=\"img-responsive\" alt=\"\"/>
            </div>
            <div class=\"col-md-6 nuestracomp\">
                <h2>About Our Company</h2>
                <p class=\"text-justify\">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit
                Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"text-center\">Our Team</h1>
                <p class=\"text-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                    semper aliquam quis mattis quam.
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 equipo\">               
                    <h3>Jonh Dow</h3>
                    <strong>Founder</strong>               
                <p class=\"text-justify\">                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa
                </p>
                    <div class=\"pull-right\">
                        <span class=\"glyphicon glyphicon-ban-circle\"></span>
                        <span class=\"glyphicon glyphicon-apple\"></span> 
                        <span class=\"glyphicon glyphicon-arrow-up\"></span> 
                    </div>
            </div>
            <div class=\"col-md-3 equipo\">
                <h3>Jonh Dow</h3>
                <strong>Founder</strong>               
                <p class=\"text-justify\">                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa
                </p>
                <div class=\"pull-right\">
                    <span class=\"glyphicon glyphicon-ban-circle\"></span>
                    <span class=\"glyphicon glyphicon-apple\"></span> 
                    <span class=\"glyphicon glyphicon-arrow-up\"></span> 
                </div>  
            </div>
            <div class=\"col-md-3 equipo\">
                <h3>Jonh Dow</h3>
                <strong>Founder</strong>               
                <p class=\"text-justify\">                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa
                </p>
                <div class=\"pull-right\">
                    <span class=\"glyphicon glyphicon-ban-circle\"></span>
                    <span class=\"glyphicon glyphicon-apple\"></span> 
                    <span class=\"glyphicon glyphicon-arrow-up\"></span> 
                </div>
            </div>
            <div class=\"col-md-3 equipo\">
                <h3>Jonh Dow</h3>
                <strong>Founder</strong>               
                <p class=\"text-justify\">                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa
                </p>
                <div class=\"pull-right\">
                    <span class=\"glyphicon glyphicon-ban-circle\"></span>
                    <span class=\"glyphicon glyphicon-apple\"></span> 
                    <span class=\"glyphicon glyphicon-arrow-up\"></span> 
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 class=\"text-center\">Price</h3>
                <p class=\"text-center\">                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                    semper aliquam quis mattis quam.
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <br/>
                <div class=\"panel panel-danger panel-body\">
                    <p class=\"text-center\">
                        Basic<br/>
                        \$13<br/>
                        <br/>
                        Per Month<br/>
                        <br/>
                        10 GB Storage<br/>
                        500 GB Bandwidth<br/>
                        Email Support<br/>
                        24x7 Suppor<br/>
                        <button class=\"btn btn-default solicitar\">SOLICITAR</button>
                    </p>
                </div>
                
            </div>
            <div class=\"col-md-4\">
                <br/>
                <div class=\"panel panel-danger panel-body\">
                    <p class=\"text-center\">
                        Premium<br/>
                        \$23<br/>
                        <br/>
                        Per Month<br/>
                        <br/>
                        10 GB Storage<br/>
                        500 GB Bandwidth<br/>
                        Email Support<br/>
                        24x7 Support<br/>
                           
                        <button class=\"btn btn-default solicitar\">SOLICITAR</button>
                    </p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <br/>
                <div class=\"panel panel-danger panel-body\">
                    <p class=\"text-center\">
                        Developer<br/>
                        \$33<br/>
                        <br/>
                        Per Month<br/>
                        <br/>
                        10 GB Storage<br/>
                        500 GB Bandwidth<br/>
                        Email Support<br/>
                        24x7 Support<br/>

                        <button class=\"btn btn-default solicitar\">SOLICITAR</button>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row contatosmarco\" id=\"contactos\">
            <div class=\"col-md-2\">
                
            </div>
            <div class=\"col-md-8\">
                <h3 class=\"text-center\">Contactos</h3>
                <p class=\"text-center\">                  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                    semper aliquam quis mattis quam.
                    <form method=\"post\" action=\"php/contact.php\" name=\"cform\" id=\"cform\">
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Asunto\"></input>
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" placeholder=\"Mensaje\"></textarea>
                        </div>
                        
                        <button class=\"btn btn-default\">ENVIAR</button>
                    </form>
                </p>
            </div>
            <div class=\"col-md-2\">
                
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p class=\"text-center\">
                    direccion
                </p>
            </div>
            <div class=\"col-md-6\">
                <p class=\"text-center\">
                    Contactanos
                </p>
            </div>
        </div>
        
        
            
            



";
    }

    // line 378
    public function block_scripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("scripts", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "WBJUserBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 378,  69 => 23,  55 => 13,  52 => 12,  44 => 9,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
