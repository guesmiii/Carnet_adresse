<?php

/* contact/edit.html.twig */
class __TwigTemplate_eefcc5a45713806c14df7ee9cd86265546778d56fe44fb920bd009c83af5304e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "contact/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_594dcd10f2c1d7e24910eee81694c1a1c380739fd9e8085f99e4b10de59df492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594dcd10f2c1d7e24910eee81694c1a1c380739fd9e8085f99e4b10de59df492->enter($__internal_594dcd10f2c1d7e24910eee81694c1a1c380739fd9e8085f99e4b10de59df492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594dcd10f2c1d7e24910eee81694c1a1c380739fd9e8085f99e4b10de59df492->leave($__internal_594dcd10f2c1d7e24910eee81694c1a1c380739fd9e8085f99e4b10de59df492_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b3bd08f8b943b0e041cbc4d50039c4ff56922e4c84bd3930c23fb080403e7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3bd08f8b943b0e041cbc4d50039c4ff56922e4c84bd3930c23fb080403e7d8->enter($__internal_5b3bd08f8b943b0e041cbc4d50039c4ff56922e4c84bd3930c23fb080403e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/edit.html.twig"));

        echo " Modifier un contact";
        
        $__internal_5b3bd08f8b943b0e041cbc4d50039c4ff56922e4c84bd3930c23fb080403e7d8->leave($__internal_5b3bd08f8b943b0e041cbc4d50039c4ff56922e4c84bd3930c23fb080403e7d8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c4dd3484d688f01a541bd0bafdb4bf54072a1526b79f980c41e26be0c2ccc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4dd3484d688f01a541bd0bafdb4bf54072a1526b79f980c41e26be0c2ccc01->enter($__internal_5c4dd3484d688f01a541bd0bafdb4bf54072a1526b79f980c41e26be0c2ccc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/edit.html.twig"));

        // line 4
        echo "    <h1>Contact edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class =\"button\" type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

\t<table>
    <tr>
        <td>
            <a class=\"button\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
        echo "\">Back to the list</a>
        </td>
        <td>
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"button\" type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </td>
    </tr>
\t</table>
";
        
        $__internal_5c4dd3484d688f01a541bd0bafdb4bf54072a1526b79f980c41e26be0c2ccc01->leave($__internal_5c4dd3484d688f01a541bd0bafdb4bf54072a1526b79f980c41e26be0c2ccc01_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  80 => 17,  74 => 14,  66 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}
{% block title %} Modifier un contact{% endblock %}
{% block content %}
    <h1>Contact edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input class =\"button\" type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

\t<table>
    <tr>
        <td>
            <a class=\"button\" href=\"{{ path('contact_index') }}\">Back to the list</a>
        </td>
        <td>
            {{ form_start(delete_form) }}
                <input class=\"button\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </td>
    </tr>
\t</table>
{% endblock %}
", "contact/edit.html.twig", "C:\\wamp\\www\\Carnet_adresse\\app\\Resources\\views\\contact\\edit.html.twig");
    }
}
