<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_41eaa5b1287c3b04a89ce492f9e2faffb14016bb1e3a86f5d925a085fee48273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_355c2237faf72bc96393f93f139fadd7e0775c01fda66d540f528b2ed522a47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355c2237faf72bc96393f93f139fadd7e0775c01fda66d540f528b2ed522a47a->enter($__internal_355c2237faf72bc96393f93f139fadd7e0775c01fda66d540f528b2ed522a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355c2237faf72bc96393f93f139fadd7e0775c01fda66d540f528b2ed522a47a->leave($__internal_355c2237faf72bc96393f93f139fadd7e0775c01fda66d540f528b2ed522a47a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0a8612c6c00c29fb3a88d2f6e960eeecdb562f132e9332c80cfce12cd55b7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a8612c6c00c29fb3a88d2f6e960eeecdb562f132e9332c80cfce12cd55b7f5->enter($__internal_c0a8612c6c00c29fb3a88d2f6e960eeecdb562f132e9332c80cfce12cd55b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_c0a8612c6c00c29fb3a88d2f6e960eeecdb562f132e9332c80cfce12cd55b7f5->leave($__internal_c0a8612c6c00c29fb3a88d2f6e960eeecdb562f132e9332c80cfce12cd55b7f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f19af9d524b87f72e5b0d5b57a05eca57b1b51fd27171afc71798be4272d092f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19af9d524b87f72e5b0d5b57a05eca57b1b51fd27171afc71798be4272d092f->enter($__internal_f19af9d524b87f72e5b0d5b57a05eca57b1b51fd27171afc71798be4272d092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f19af9d524b87f72e5b0d5b57a05eca57b1b51fd27171afc71798be4272d092f->leave($__internal_f19af9d524b87f72e5b0d5b57a05eca57b1b51fd27171afc71798be4272d092f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c67e6cd62b663667973355f58221c41729e75a4d2f7bc6cf31bfceaf64d84ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e6cd62b663667973355f58221c41729e75a4d2f7bc6cf31bfceaf64d84ae2->enter($__internal_c67e6cd62b663667973355f58221c41729e75a4d2f7bc6cf31bfceaf64d84ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c67e6cd62b663667973355f58221c41729e75a4d2f7bc6cf31bfceaf64d84ae2->leave($__internal_c67e6cd62b663667973355f58221c41729e75a4d2f7bc6cf31bfceaf64d84ae2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Carnet_adresse\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
