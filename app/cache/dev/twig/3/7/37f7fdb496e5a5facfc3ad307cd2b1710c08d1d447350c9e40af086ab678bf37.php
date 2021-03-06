<?php

/* form_div_layout.html.twig */
class __TwigTemplate_37f7fdb496e5a5facfc3ad307cd2b1710c08d1d447350c9e40af086ab678bf37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae2e5f75a67dc27c8850cecc041773942c077dd53af84a02a2229b5bf76ee55b = $this->env->getExtension("native_profiler");
        $__internal_ae2e5f75a67dc27c8850cecc041773942c077dd53af84a02a2229b5bf76ee55b->enter($__internal_ae2e5f75a67dc27c8850cecc041773942c077dd53af84a02a2229b5bf76ee55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('button_widget', $context, $blocks);
        // line 193
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 198
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 205
        $this->displayBlock('form_label', $context, $blocks);
        // line 227
        $this->displayBlock('button_label', $context, $blocks);
        // line 231
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 239
        $this->displayBlock('form_row', $context, $blocks);
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 253
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 259
        $this->displayBlock('form', $context, $blocks);
        // line 265
        $this->displayBlock('form_start', $context, $blocks);
        // line 278
        $this->displayBlock('form_end', $context, $blocks);
        // line 285
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_ae2e5f75a67dc27c8850cecc041773942c077dd53af84a02a2229b5bf76ee55b->leave($__internal_ae2e5f75a67dc27c8850cecc041773942c077dd53af84a02a2229b5bf76ee55b_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6363765e03fbaed84b0b969473034c8d81064989938f63c5cde4c8fa5d2c2fee = $this->env->getExtension("native_profiler");
        $__internal_6363765e03fbaed84b0b969473034c8d81064989938f63c5cde4c8fa5d2c2fee->enter($__internal_6363765e03fbaed84b0b969473034c8d81064989938f63c5cde4c8fa5d2c2fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6363765e03fbaed84b0b969473034c8d81064989938f63c5cde4c8fa5d2c2fee->leave($__internal_6363765e03fbaed84b0b969473034c8d81064989938f63c5cde4c8fa5d2c2fee_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cf0295837989296824f878aa60c03cf54e4d41607b3be248a988f2d292e9e926 = $this->env->getExtension("native_profiler");
        $__internal_cf0295837989296824f878aa60c03cf54e4d41607b3be248a988f2d292e9e926->enter($__internal_cf0295837989296824f878aa60c03cf54e4d41607b3be248a988f2d292e9e926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_cf0295837989296824f878aa60c03cf54e4d41607b3be248a988f2d292e9e926->leave($__internal_cf0295837989296824f878aa60c03cf54e4d41607b3be248a988f2d292e9e926_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_79fae27b7f0aae6d69f96382914fb5428094645a2a07422faa0ee460dbdc5057 = $this->env->getExtension("native_profiler");
        $__internal_79fae27b7f0aae6d69f96382914fb5428094645a2a07422faa0ee460dbdc5057->enter($__internal_79fae27b7f0aae6d69f96382914fb5428094645a2a07422faa0ee460dbdc5057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_79fae27b7f0aae6d69f96382914fb5428094645a2a07422faa0ee460dbdc5057->leave($__internal_79fae27b7f0aae6d69f96382914fb5428094645a2a07422faa0ee460dbdc5057_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_796cec0509eae02769aa2d7beaf701af849b3d21b64cd4b960fb4e2bacdc29e5 = $this->env->getExtension("native_profiler");
        $__internal_796cec0509eae02769aa2d7beaf701af849b3d21b64cd4b960fb4e2bacdc29e5->enter($__internal_796cec0509eae02769aa2d7beaf701af849b3d21b64cd4b960fb4e2bacdc29e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_796cec0509eae02769aa2d7beaf701af849b3d21b64cd4b960fb4e2bacdc29e5->leave($__internal_796cec0509eae02769aa2d7beaf701af849b3d21b64cd4b960fb4e2bacdc29e5_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_05e684f649a67cad752d4d24ace0b49410a1d748d75295a0a1096077c52a12e4 = $this->env->getExtension("native_profiler");
        $__internal_05e684f649a67cad752d4d24ace0b49410a1d748d75295a0a1096077c52a12e4->enter($__internal_05e684f649a67cad752d4d24ace0b49410a1d748d75295a0a1096077c52a12e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_05e684f649a67cad752d4d24ace0b49410a1d748d75295a0a1096077c52a12e4->leave($__internal_05e684f649a67cad752d4d24ace0b49410a1d748d75295a0a1096077c52a12e4_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_a385e913e7ee9bff4051b150939c677f678ba4221bae100e141364bba03290c2 = $this->env->getExtension("native_profiler");
        $__internal_a385e913e7ee9bff4051b150939c677f678ba4221bae100e141364bba03290c2->enter($__internal_a385e913e7ee9bff4051b150939c677f678ba4221bae100e141364bba03290c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_a385e913e7ee9bff4051b150939c677f678ba4221bae100e141364bba03290c2->leave($__internal_a385e913e7ee9bff4051b150939c677f678ba4221bae100e141364bba03290c2_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_598613d52e81920768b8a6783722c54b019b6c9109a5d5be5d568312458fdbb1 = $this->env->getExtension("native_profiler");
        $__internal_598613d52e81920768b8a6783722c54b019b6c9109a5d5be5d568312458fdbb1->enter($__internal_598613d52e81920768b8a6783722c54b019b6c9109a5d5be5d568312458fdbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_598613d52e81920768b8a6783722c54b019b6c9109a5d5be5d568312458fdbb1->leave($__internal_598613d52e81920768b8a6783722c54b019b6c9109a5d5be5d568312458fdbb1_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1d55f7472ff0c8a00b49cc67e9fa38cb05a4fc47ba66bdc6bbd468011652df46 = $this->env->getExtension("native_profiler");
        $__internal_1d55f7472ff0c8a00b49cc67e9fa38cb05a4fc47ba66bdc6bbd468011652df46->enter($__internal_1d55f7472ff0c8a00b49cc67e9fa38cb05a4fc47ba66bdc6bbd468011652df46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_1d55f7472ff0c8a00b49cc67e9fa38cb05a4fc47ba66bdc6bbd468011652df46->leave($__internal_1d55f7472ff0c8a00b49cc67e9fa38cb05a4fc47ba66bdc6bbd468011652df46_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_e09b3e8b1b600ec477255b5bd7e8b952114cdb17a0e1ac7defa9a675fca5fc6c = $this->env->getExtension("native_profiler");
        $__internal_e09b3e8b1b600ec477255b5bd7e8b952114cdb17a0e1ac7defa9a675fca5fc6c->enter($__internal_e09b3e8b1b600ec477255b5bd7e8b952114cdb17a0e1ac7defa9a675fca5fc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e09b3e8b1b600ec477255b5bd7e8b952114cdb17a0e1ac7defa9a675fca5fc6c->leave($__internal_e09b3e8b1b600ec477255b5bd7e8b952114cdb17a0e1ac7defa9a675fca5fc6c_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9aec6f80dd47b8b0ee52ea8d1bbe935a071d1c67b189ad6e9cb6f8a3b62ad347 = $this->env->getExtension("native_profiler");
        $__internal_9aec6f80dd47b8b0ee52ea8d1bbe935a071d1c67b189ad6e9cb6f8a3b62ad347->enter($__internal_9aec6f80dd47b8b0ee52ea8d1bbe935a071d1c67b189ad6e9cb6f8a3b62ad347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_9aec6f80dd47b8b0ee52ea8d1bbe935a071d1c67b189ad6e9cb6f8a3b62ad347->leave($__internal_9aec6f80dd47b8b0ee52ea8d1bbe935a071d1c67b189ad6e9cb6f8a3b62ad347_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_297fde7a2d7910585a3695bced13609564a10f1908a0811d504ba72d92b15091 = $this->env->getExtension("native_profiler");
        $__internal_297fde7a2d7910585a3695bced13609564a10f1908a0811d504ba72d92b15091->enter($__internal_297fde7a2d7910585a3695bced13609564a10f1908a0811d504ba72d92b15091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_297fde7a2d7910585a3695bced13609564a10f1908a0811d504ba72d92b15091->leave($__internal_297fde7a2d7910585a3695bced13609564a10f1908a0811d504ba72d92b15091_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_dacc1ac4c8b54e04ec6dd20c93b7e53e4fec7cea554b3a27910dd22cd278ce42 = $this->env->getExtension("native_profiler");
        $__internal_dacc1ac4c8b54e04ec6dd20c93b7e53e4fec7cea554b3a27910dd22cd278ce42->enter($__internal_dacc1ac4c8b54e04ec6dd20c93b7e53e4fec7cea554b3a27910dd22cd278ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_dacc1ac4c8b54e04ec6dd20c93b7e53e4fec7cea554b3a27910dd22cd278ce42->leave($__internal_dacc1ac4c8b54e04ec6dd20c93b7e53e4fec7cea554b3a27910dd22cd278ce42_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7ee69fc37fe484ecea3b741b2c38218f585b56bf74fecc90fb9c143a96727e60 = $this->env->getExtension("native_profiler");
        $__internal_7ee69fc37fe484ecea3b741b2c38218f585b56bf74fecc90fb9c143a96727e60->enter($__internal_7ee69fc37fe484ecea3b741b2c38218f585b56bf74fecc90fb9c143a96727e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_7ee69fc37fe484ecea3b741b2c38218f585b56bf74fecc90fb9c143a96727e60->leave($__internal_7ee69fc37fe484ecea3b741b2c38218f585b56bf74fecc90fb9c143a96727e60_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_84cf721afaf6ec58db3b74be94d86dea6baeb170f76a884e0faad85ccd3b60e5 = $this->env->getExtension("native_profiler");
        $__internal_84cf721afaf6ec58db3b74be94d86dea6baeb170f76a884e0faad85ccd3b60e5->enter($__internal_84cf721afaf6ec58db3b74be94d86dea6baeb170f76a884e0faad85ccd3b60e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_84cf721afaf6ec58db3b74be94d86dea6baeb170f76a884e0faad85ccd3b60e5->leave($__internal_84cf721afaf6ec58db3b74be94d86dea6baeb170f76a884e0faad85ccd3b60e5_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_48a13c13634b9183268d52ad113b2d91ae44287fe79a49ab80fc4d70d18fc5a3 = $this->env->getExtension("native_profiler");
        $__internal_48a13c13634b9183268d52ad113b2d91ae44287fe79a49ab80fc4d70d18fc5a3->enter($__internal_48a13c13634b9183268d52ad113b2d91ae44287fe79a49ab80fc4d70d18fc5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_48a13c13634b9183268d52ad113b2d91ae44287fe79a49ab80fc4d70d18fc5a3->leave($__internal_48a13c13634b9183268d52ad113b2d91ae44287fe79a49ab80fc4d70d18fc5a3_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_e4646b845ab151eafebd4d532d3fccb097373d8a2eaabb4175e9d5c5cbba1c35 = $this->env->getExtension("native_profiler");
        $__internal_e4646b845ab151eafebd4d532d3fccb097373d8a2eaabb4175e9d5c5cbba1c35->enter($__internal_e4646b845ab151eafebd4d532d3fccb097373d8a2eaabb4175e9d5c5cbba1c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e4646b845ab151eafebd4d532d3fccb097373d8a2eaabb4175e9d5c5cbba1c35->leave($__internal_e4646b845ab151eafebd4d532d3fccb097373d8a2eaabb4175e9d5c5cbba1c35_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_96331c318dbf3b9ffc72652df52069ed90c43b3dc063be81f84b9b2efa3f622c = $this->env->getExtension("native_profiler");
        $__internal_96331c318dbf3b9ffc72652df52069ed90c43b3dc063be81f84b9b2efa3f622c->enter($__internal_96331c318dbf3b9ffc72652df52069ed90c43b3dc063be81f84b9b2efa3f622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_96331c318dbf3b9ffc72652df52069ed90c43b3dc063be81f84b9b2efa3f622c->leave($__internal_96331c318dbf3b9ffc72652df52069ed90c43b3dc063be81f84b9b2efa3f622c_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_6716fa8562669d241859649355a52d0c93baaabefa079891c3c3b7690a6ee0e2 = $this->env->getExtension("native_profiler");
        $__internal_6716fa8562669d241859649355a52d0c93baaabefa079891c3c3b7690a6ee0e2->enter($__internal_6716fa8562669d241859649355a52d0c93baaabefa079891c3c3b7690a6ee0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6716fa8562669d241859649355a52d0c93baaabefa079891c3c3b7690a6ee0e2->leave($__internal_6716fa8562669d241859649355a52d0c93baaabefa079891c3c3b7690a6ee0e2_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_07a4842a7eb580acc4113acdf437129e3eaa0f5021e4fa92d89ac3dc91de1c0d = $this->env->getExtension("native_profiler");
        $__internal_07a4842a7eb580acc4113acdf437129e3eaa0f5021e4fa92d89ac3dc91de1c0d->enter($__internal_07a4842a7eb580acc4113acdf437129e3eaa0f5021e4fa92d89ac3dc91de1c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07a4842a7eb580acc4113acdf437129e3eaa0f5021e4fa92d89ac3dc91de1c0d->leave($__internal_07a4842a7eb580acc4113acdf437129e3eaa0f5021e4fa92d89ac3dc91de1c0d_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f00b2d828e7ea21f7343e7f47820056037c45b00ecc801a22890ec025410beac = $this->env->getExtension("native_profiler");
        $__internal_f00b2d828e7ea21f7343e7f47820056037c45b00ecc801a22890ec025410beac->enter($__internal_f00b2d828e7ea21f7343e7f47820056037c45b00ecc801a22890ec025410beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_f00b2d828e7ea21f7343e7f47820056037c45b00ecc801a22890ec025410beac->leave($__internal_f00b2d828e7ea21f7343e7f47820056037c45b00ecc801a22890ec025410beac_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_2d5f40c85308c3273dea4548e4c7355f0cfc25375fafe6c5913954f4a3105367 = $this->env->getExtension("native_profiler");
        $__internal_2d5f40c85308c3273dea4548e4c7355f0cfc25375fafe6c5913954f4a3105367->enter($__internal_2d5f40c85308c3273dea4548e4c7355f0cfc25375fafe6c5913954f4a3105367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2d5f40c85308c3273dea4548e4c7355f0cfc25375fafe6c5913954f4a3105367->leave($__internal_2d5f40c85308c3273dea4548e4c7355f0cfc25375fafe6c5913954f4a3105367_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_53bf1d5c436d9fdd1835954045d8a27622d50eddf800bc8644cefeab867a8de6 = $this->env->getExtension("native_profiler");
        $__internal_53bf1d5c436d9fdd1835954045d8a27622d50eddf800bc8644cefeab867a8de6->enter($__internal_53bf1d5c436d9fdd1835954045d8a27622d50eddf800bc8644cefeab867a8de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_53bf1d5c436d9fdd1835954045d8a27622d50eddf800bc8644cefeab867a8de6->leave($__internal_53bf1d5c436d9fdd1835954045d8a27622d50eddf800bc8644cefeab867a8de6_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_262271a0e6a72d6c6bdf3922e9240d2d723afcdbfdf64be5ad841ea7178935f4 = $this->env->getExtension("native_profiler");
        $__internal_262271a0e6a72d6c6bdf3922e9240d2d723afcdbfdf64be5ad841ea7178935f4->enter($__internal_262271a0e6a72d6c6bdf3922e9240d2d723afcdbfdf64be5ad841ea7178935f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_262271a0e6a72d6c6bdf3922e9240d2d723afcdbfdf64be5ad841ea7178935f4->leave($__internal_262271a0e6a72d6c6bdf3922e9240d2d723afcdbfdf64be5ad841ea7178935f4_prof);

    }

    // line 179
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a1287e3590823f0f1aa0a1d5b85fff4c41abeba8c4774862d2aaef91df8a61dd = $this->env->getExtension("native_profiler");
        $__internal_a1287e3590823f0f1aa0a1d5b85fff4c41abeba8c4774862d2aaef91df8a61dd->enter($__internal_a1287e3590823f0f1aa0a1d5b85fff4c41abeba8c4774862d2aaef91df8a61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 180
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 181
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 182
                $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 183
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 184
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 187
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 190
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_a1287e3590823f0f1aa0a1d5b85fff4c41abeba8c4774862d2aaef91df8a61dd->leave($__internal_a1287e3590823f0f1aa0a1d5b85fff4c41abeba8c4774862d2aaef91df8a61dd_prof);

    }

    // line 193
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_f2f48dc9ee373a348146adb2e0e59a435e5136c86b40cfc0c332617a8bca0823 = $this->env->getExtension("native_profiler");
        $__internal_f2f48dc9ee373a348146adb2e0e59a435e5136c86b40cfc0c332617a8bca0823->enter($__internal_f2f48dc9ee373a348146adb2e0e59a435e5136c86b40cfc0c332617a8bca0823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 195
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f2f48dc9ee373a348146adb2e0e59a435e5136c86b40cfc0c332617a8bca0823->leave($__internal_f2f48dc9ee373a348146adb2e0e59a435e5136c86b40cfc0c332617a8bca0823_prof);

    }

    // line 198
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_e281df15014ae0dd169c50db5d0805aab58d1548b56c1ede329700e14a05e883 = $this->env->getExtension("native_profiler");
        $__internal_e281df15014ae0dd169c50db5d0805aab58d1548b56c1ede329700e14a05e883->enter($__internal_e281df15014ae0dd169c50db5d0805aab58d1548b56c1ede329700e14a05e883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e281df15014ae0dd169c50db5d0805aab58d1548b56c1ede329700e14a05e883->leave($__internal_e281df15014ae0dd169c50db5d0805aab58d1548b56c1ede329700e14a05e883_prof);

    }

    // line 205
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ac1ce833452c25ca7f3def59091ff22366a95310126d4f0340364131e76ec7aa = $this->env->getExtension("native_profiler");
        $__internal_ac1ce833452c25ca7f3def59091ff22366a95310126d4f0340364131e76ec7aa->enter($__internal_ac1ce833452c25ca7f3def59091ff22366a95310126d4f0340364131e76ec7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 206
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 207
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 208
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 210
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 211
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 213
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 214
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 215
                    $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 216
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 217
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 220
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 223
            echo "<label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_ac1ce833452c25ca7f3def59091ff22366a95310126d4f0340364131e76ec7aa->leave($__internal_ac1ce833452c25ca7f3def59091ff22366a95310126d4f0340364131e76ec7aa_prof);

    }

    // line 227
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_0967ca61de8f987dad1a027cb3fff54c6d0c91c97018ad60f4fd8e1dd3c5b07b = $this->env->getExtension("native_profiler");
        $__internal_0967ca61de8f987dad1a027cb3fff54c6d0c91c97018ad60f4fd8e1dd3c5b07b->enter($__internal_0967ca61de8f987dad1a027cb3fff54c6d0c91c97018ad60f4fd8e1dd3c5b07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_0967ca61de8f987dad1a027cb3fff54c6d0c91c97018ad60f4fd8e1dd3c5b07b->leave($__internal_0967ca61de8f987dad1a027cb3fff54c6d0c91c97018ad60f4fd8e1dd3c5b07b_prof);

    }

    // line 231
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_164f4d287433d40dc3274e548dff927bd676d6b14cd8bbc043e2004e1fcfb143 = $this->env->getExtension("native_profiler");
        $__internal_164f4d287433d40dc3274e548dff927bd676d6b14cd8bbc043e2004e1fcfb143->enter($__internal_164f4d287433d40dc3274e548dff927bd676d6b14cd8bbc043e2004e1fcfb143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 236
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_164f4d287433d40dc3274e548dff927bd676d6b14cd8bbc043e2004e1fcfb143->leave($__internal_164f4d287433d40dc3274e548dff927bd676d6b14cd8bbc043e2004e1fcfb143_prof);

    }

    // line 239
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9de9ef7279effbf8143413d01746fcb05a3dde27ecea5bc4b25b1c19ae132a45 = $this->env->getExtension("native_profiler");
        $__internal_9de9ef7279effbf8143413d01746fcb05a3dde27ecea5bc4b25b1c19ae132a45->enter($__internal_9de9ef7279effbf8143413d01746fcb05a3dde27ecea5bc4b25b1c19ae132a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 240
        echo "<div>";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 244
        echo "</div>";
        
        $__internal_9de9ef7279effbf8143413d01746fcb05a3dde27ecea5bc4b25b1c19ae132a45->leave($__internal_9de9ef7279effbf8143413d01746fcb05a3dde27ecea5bc4b25b1c19ae132a45_prof);

    }

    // line 247
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1635c2bff9b963f3c3dbdb52f27241a85053c94df0ba5e38cbdbccec8976d2c1 = $this->env->getExtension("native_profiler");
        $__internal_1635c2bff9b963f3c3dbdb52f27241a85053c94df0ba5e38cbdbccec8976d2c1->enter($__internal_1635c2bff9b963f3c3dbdb52f27241a85053c94df0ba5e38cbdbccec8976d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 248
        echo "<div>";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 250
        echo "</div>";
        
        $__internal_1635c2bff9b963f3c3dbdb52f27241a85053c94df0ba5e38cbdbccec8976d2c1->leave($__internal_1635c2bff9b963f3c3dbdb52f27241a85053c94df0ba5e38cbdbccec8976d2c1_prof);

    }

    // line 253
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_98bd37a96e261b7a61eb4ebe5eb486c95ccf97dc7ac26b7470aa1f8096b737ba = $this->env->getExtension("native_profiler");
        $__internal_98bd37a96e261b7a61eb4ebe5eb486c95ccf97dc7ac26b7470aa1f8096b737ba->enter($__internal_98bd37a96e261b7a61eb4ebe5eb486c95ccf97dc7ac26b7470aa1f8096b737ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_98bd37a96e261b7a61eb4ebe5eb486c95ccf97dc7ac26b7470aa1f8096b737ba->leave($__internal_98bd37a96e261b7a61eb4ebe5eb486c95ccf97dc7ac26b7470aa1f8096b737ba_prof);

    }

    // line 259
    public function block_form($context, array $blocks = array())
    {
        $__internal_d90c5431fc4b01abe163c90e4ce5f74928f044e0833089b18c04f100b73d3ffc = $this->env->getExtension("native_profiler");
        $__internal_d90c5431fc4b01abe163c90e4ce5f74928f044e0833089b18c04f100b73d3ffc->enter($__internal_d90c5431fc4b01abe163c90e4ce5f74928f044e0833089b18c04f100b73d3ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 260
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 262
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_d90c5431fc4b01abe163c90e4ce5f74928f044e0833089b18c04f100b73d3ffc->leave($__internal_d90c5431fc4b01abe163c90e4ce5f74928f044e0833089b18c04f100b73d3ffc_prof);

    }

    // line 265
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_683c967be72116694fc2911b4e8b4dffe5337fb729a84142cd4d5fb8bdaf8af2 = $this->env->getExtension("native_profiler");
        $__internal_683c967be72116694fc2911b4e8b4dffe5337fb729a84142cd4d5fb8bdaf8af2->enter($__internal_683c967be72116694fc2911b4e8b4dffe5337fb729a84142cd4d5fb8bdaf8af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 266
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 267
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 268
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 270
            $context["form_method"] = "POST";
        }
        // line 272
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 273
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 274
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_683c967be72116694fc2911b4e8b4dffe5337fb729a84142cd4d5fb8bdaf8af2->leave($__internal_683c967be72116694fc2911b4e8b4dffe5337fb729a84142cd4d5fb8bdaf8af2_prof);

    }

    // line 278
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_9e6230c7d3ba240852740f438ba6fe4fcfba4b931a8a874a8ee00699b4917c43 = $this->env->getExtension("native_profiler");
        $__internal_9e6230c7d3ba240852740f438ba6fe4fcfba4b931a8a874a8ee00699b4917c43->enter($__internal_9e6230c7d3ba240852740f438ba6fe4fcfba4b931a8a874a8ee00699b4917c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 279
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 282
        echo "</form>";
        
        $__internal_9e6230c7d3ba240852740f438ba6fe4fcfba4b931a8a874a8ee00699b4917c43->leave($__internal_9e6230c7d3ba240852740f438ba6fe4fcfba4b931a8a874a8ee00699b4917c43_prof);

    }

    // line 285
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_bcf4ba81d3ea7e5f06074b0eb9c438216aa3b48e61632402be0dd3d50a0b7226 = $this->env->getExtension("native_profiler");
        $__internal_bcf4ba81d3ea7e5f06074b0eb9c438216aa3b48e61632402be0dd3d50a0b7226->enter($__internal_bcf4ba81d3ea7e5f06074b0eb9c438216aa3b48e61632402be0dd3d50a0b7226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 286
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_bcf4ba81d3ea7e5f06074b0eb9c438216aa3b48e61632402be0dd3d50a0b7226->leave($__internal_bcf4ba81d3ea7e5f06074b0eb9c438216aa3b48e61632402be0dd3d50a0b7226_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bbf729181402cc4aa5b2e23eb9c2e797a6c69b7a7fcf8143264b28e994dedd8d = $this->env->getExtension("native_profiler");
        $__internal_bbf729181402cc4aa5b2e23eb9c2e797a6c69b7a7fcf8143264b28e994dedd8d->enter($__internal_bbf729181402cc4aa5b2e23eb9c2e797a6c69b7a7fcf8143264b28e994dedd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_bbf729181402cc4aa5b2e23eb9c2e797a6c69b7a7fcf8143264b28e994dedd8d->leave($__internal_bbf729181402cc4aa5b2e23eb9c2e797a6c69b7a7fcf8143264b28e994dedd8d_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_bb8763b5412295fe77afdf095ff536effc8dbf3c15a771c0ca17e382da32608b = $this->env->getExtension("native_profiler");
        $__internal_bb8763b5412295fe77afdf095ff536effc8dbf3c15a771c0ca17e382da32608b->enter($__internal_bb8763b5412295fe77afdf095ff536effc8dbf3c15a771c0ca17e382da32608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bb8763b5412295fe77afdf095ff536effc8dbf3c15a771c0ca17e382da32608b->leave($__internal_bb8763b5412295fe77afdf095ff536effc8dbf3c15a771c0ca17e382da32608b_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_b2e093f38f4efb36a7f326f9637f82bb59488976b31f84d38c452b11f168cddc = $this->env->getExtension("native_profiler");
        $__internal_b2e093f38f4efb36a7f326f9637f82bb59488976b31f84d38c452b11f168cddc->enter($__internal_b2e093f38f4efb36a7f326f9637f82bb59488976b31f84d38c452b11f168cddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b2e093f38f4efb36a7f326f9637f82bb59488976b31f84d38c452b11f168cddc->leave($__internal_b2e093f38f4efb36a7f326f9637f82bb59488976b31f84d38c452b11f168cddc_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_711f0a30e6394b77a7c3554e2ce5944c5752931dac03932aaa6dbc757725f698 = $this->env->getExtension("native_profiler");
        $__internal_711f0a30e6394b77a7c3554e2ce5944c5752931dac03932aaa6dbc757725f698->enter($__internal_711f0a30e6394b77a7c3554e2ce5944c5752931dac03932aaa6dbc757725f698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_711f0a30e6394b77a7c3554e2ce5944c5752931dac03932aaa6dbc757725f698->leave($__internal_711f0a30e6394b77a7c3554e2ce5944c5752931dac03932aaa6dbc757725f698_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_87e68205c654b666996c3c3d308e34472a3a552b98082cea2caedeb2b2f89604 = $this->env->getExtension("native_profiler");
        $__internal_87e68205c654b666996c3c3d308e34472a3a552b98082cea2caedeb2b2f89604->enter($__internal_87e68205c654b666996c3c3d308e34472a3a552b98082cea2caedeb2b2f89604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_87e68205c654b666996c3c3d308e34472a3a552b98082cea2caedeb2b2f89604->leave($__internal_87e68205c654b666996c3c3d308e34472a3a552b98082cea2caedeb2b2f89604_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_519a72b97bae871ad85a4ecd430e5ef842de4b71c791f9192e32ae205a713044 = $this->env->getExtension("native_profiler");
        $__internal_519a72b97bae871ad85a4ecd430e5ef842de4b71c791f9192e32ae205a713044->enter($__internal_519a72b97bae871ad85a4ecd430e5ef842de4b71c791f9192e32ae205a713044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_519a72b97bae871ad85a4ecd430e5ef842de4b71c791f9192e32ae205a713044->leave($__internal_519a72b97bae871ad85a4ecd430e5ef842de4b71c791f9192e32ae205a713044_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_d2dec37e71aef5e9afa1a1a3434c54ace04051fb63a11798e60572bc68b6e289 = $this->env->getExtension("native_profiler");
        $__internal_d2dec37e71aef5e9afa1a1a3434c54ace04051fb63a11798e60572bc68b6e289->enter($__internal_d2dec37e71aef5e9afa1a1a3434c54ace04051fb63a11798e60572bc68b6e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d2dec37e71aef5e9afa1a1a3434c54ace04051fb63a11798e60572bc68b6e289->leave($__internal_d2dec37e71aef5e9afa1a1a3434c54ace04051fb63a11798e60572bc68b6e289_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1269 => 368,  1267 => 367,  1262 => 366,  1260 => 365,  1255 => 364,  1253 => 363,  1251 => 362,  1247 => 361,  1241 => 360,  1226 => 355,  1224 => 354,  1219 => 353,  1217 => 352,  1212 => 351,  1210 => 350,  1208 => 349,  1204 => 348,  1195 => 347,  1189 => 346,  1174 => 341,  1172 => 340,  1167 => 339,  1165 => 338,  1160 => 337,  1158 => 336,  1156 => 335,  1152 => 334,  1146 => 333,  1140 => 332,  1125 => 327,  1123 => 326,  1118 => 325,  1116 => 324,  1111 => 323,  1109 => 322,  1107 => 321,  1103 => 320,  1099 => 319,  1095 => 318,  1091 => 317,  1085 => 316,  1079 => 315,  1068 => 311,  1064 => 310,  1058 => 309,  1046 => 302,  1044 => 301,  1040 => 300,  1034 => 299,  1026 => 295,  1018 => 293,  1014 => 292,  1012 => 291,  1010 => 290,  1004 => 289,  995 => 286,  989 => 285,  982 => 282,  979 => 280,  977 => 279,  971 => 278,  961 => 274,  959 => 273,  935 => 272,  932 => 270,  929 => 268,  927 => 267,  925 => 266,  919 => 265,  912 => 262,  910 => 261,  908 => 260,  902 => 259,  895 => 254,  889 => 253,  882 => 250,  880 => 249,  878 => 248,  872 => 247,  865 => 244,  863 => 243,  861 => 242,  859 => 241,  857 => 240,  851 => 239,  844 => 236,  838 => 231,  827 => 227,  804 => 223,  800 => 220,  797 => 217,  796 => 216,  795 => 215,  793 => 214,  790 => 213,  787 => 211,  784 => 210,  781 => 208,  779 => 207,  777 => 206,  771 => 205,  764 => 200,  762 => 199,  756 => 198,  749 => 195,  747 => 194,  741 => 193,  728 => 190,  724 => 187,  721 => 184,  720 => 183,  719 => 182,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 285,  133 => 278,  131 => 265,  129 => 259,  127 => 253,  125 => 247,  123 => 239,  121 => 231,  119 => 227,  117 => 205,  115 => 198,  113 => 193,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
