<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_73d535b3ecb6360aa9979c28824477402a6f8fc2b68d06bc77a510dabe952553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a618cadeb6f86ae848e80780cd3a826755f04c6e49485b209008681c269d881a = $this->env->getExtension("native_profiler");
        $__internal_a618cadeb6f86ae848e80780cd3a826755f04c6e49485b209008681c269d881a->enter($__internal_a618cadeb6f86ae848e80780cd3a826755f04c6e49485b209008681c269d881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a618cadeb6f86ae848e80780cd3a826755f04c6e49485b209008681c269d881a->leave($__internal_a618cadeb6f86ae848e80780cd3a826755f04c6e49485b209008681c269d881a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9247b24a259d5043717698f7c5efbf90cab10edee26d0343fb9ca7864440aa90 = $this->env->getExtension("native_profiler");
        $__internal_9247b24a259d5043717698f7c5efbf90cab10edee26d0343fb9ca7864440aa90->enter($__internal_9247b24a259d5043717698f7c5efbf90cab10edee26d0343fb9ca7864440aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9247b24a259d5043717698f7c5efbf90cab10edee26d0343fb9ca7864440aa90->leave($__internal_9247b24a259d5043717698f7c5efbf90cab10edee26d0343fb9ca7864440aa90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da3de172c54faf9c59fed0b6a6c9ab1c0a8c6d8f1f6ae3e9495f8433d34fa03c = $this->env->getExtension("native_profiler");
        $__internal_da3de172c54faf9c59fed0b6a6c9ab1c0a8c6d8f1f6ae3e9495f8433d34fa03c->enter($__internal_da3de172c54faf9c59fed0b6a6c9ab1c0a8c6d8f1f6ae3e9495f8433d34fa03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da3de172c54faf9c59fed0b6a6c9ab1c0a8c6d8f1f6ae3e9495f8433d34fa03c->leave($__internal_da3de172c54faf9c59fed0b6a6c9ab1c0a8c6d8f1f6ae3e9495f8433d34fa03c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8129262670af7d50967ee83b4e1b17a07c3fa69e15ca25b59e5d99b62a333b44 = $this->env->getExtension("native_profiler");
        $__internal_8129262670af7d50967ee83b4e1b17a07c3fa69e15ca25b59e5d99b62a333b44->enter($__internal_8129262670af7d50967ee83b4e1b17a07c3fa69e15ca25b59e5d99b62a333b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8129262670af7d50967ee83b4e1b17a07c3fa69e15ca25b59e5d99b62a333b44->leave($__internal_8129262670af7d50967ee83b4e1b17a07c3fa69e15ca25b59e5d99b62a333b44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
