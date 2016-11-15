<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6e2b182659f9901fe495f977a38b8f0aff14dc0fbc075951943d68866ae7d10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7db9336e72b9a217fb9c302bdac6376622cc7851ced08f35a52ba6def6ba9cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7db9336e72b9a217fb9c302bdac6376622cc7851ced08f35a52ba6def6ba9cc->enter($__internal_f7db9336e72b9a217fb9c302bdac6376622cc7851ced08f35a52ba6def6ba9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7db9336e72b9a217fb9c302bdac6376622cc7851ced08f35a52ba6def6ba9cc->leave($__internal_f7db9336e72b9a217fb9c302bdac6376622cc7851ced08f35a52ba6def6ba9cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c149b9a00a919011e5f81c885eb2d57108005da9d6867558841a99b022fe800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c149b9a00a919011e5f81c885eb2d57108005da9d6867558841a99b022fe800->enter($__internal_2c149b9a00a919011e5f81c885eb2d57108005da9d6867558841a99b022fe800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2c149b9a00a919011e5f81c885eb2d57108005da9d6867558841a99b022fe800->leave($__internal_2c149b9a00a919011e5f81c885eb2d57108005da9d6867558841a99b022fe800_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Carnet_adresse\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
