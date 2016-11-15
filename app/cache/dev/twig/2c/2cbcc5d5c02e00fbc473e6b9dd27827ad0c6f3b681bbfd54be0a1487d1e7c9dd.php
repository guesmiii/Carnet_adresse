<?php

/* contact/new.html.twig */
class __TwigTemplate_78c497dcdc60155305eab948510e49177fb5582f6f144c51e49f884503dd6198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "contact/new.html.twig", 1);
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
        $__internal_6effeb62bb4053af5f0a6e3199898f7267ba70c016edeba335da570fe9bd43a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6effeb62bb4053af5f0a6e3199898f7267ba70c016edeba335da570fe9bd43a6->enter($__internal_6effeb62bb4053af5f0a6e3199898f7267ba70c016edeba335da570fe9bd43a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6effeb62bb4053af5f0a6e3199898f7267ba70c016edeba335da570fe9bd43a6->leave($__internal_6effeb62bb4053af5f0a6e3199898f7267ba70c016edeba335da570fe9bd43a6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af7aca8cbad3c4b92543f886e567556b77e2d1a5e92b1bde330fc96436f7da97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7aca8cbad3c4b92543f886e567556b77e2d1a5e92b1bde330fc96436f7da97->enter($__internal_af7aca8cbad3c4b92543f886e567556b77e2d1a5e92b1bde330fc96436f7da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/new.html.twig"));

        echo " Nouveau Contact";
        
        $__internal_af7aca8cbad3c4b92543f886e567556b77e2d1a5e92b1bde330fc96436f7da97->leave($__internal_af7aca8cbad3c4b92543f886e567556b77e2d1a5e92b1bde330fc96436f7da97_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2616743f30137bd2ee3faad5f2809c0fc0acf2ee9c606c8e93deb4c9c9d02054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2616743f30137bd2ee3faad5f2809c0fc0acf2ee9c606c8e93deb4c9c9d02054->enter($__internal_2616743f30137bd2ee3faad5f2809c0fc0acf2ee9c606c8e93deb4c9c9d02054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/new.html.twig"));

        // line 4
        echo "    <h1>Contact creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2616743f30137bd2ee3faad5f2809c0fc0acf2ee9c606c8e93deb4c9c9d02054->leave($__internal_2616743f30137bd2ee3faad5f2809c0fc0acf2ee9c606c8e93deb4c9c9d02054_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  66 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Nouveau Contact{% endblock %}
{% block content %}
    <h1>Contact creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('contact_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "contact/new.html.twig", "C:\\wamp\\www\\Carnet_adresse\\app\\Resources\\views\\contact\\new.html.twig");
    }
}
