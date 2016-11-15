<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_82fe6a7de8500c57960ed0d2aa051769cd08473fedfaa3995f7fb9f633d1796c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_76f96e659464bcf88d97102834636432dec7bda538ad164a9853f230f25d757a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f96e659464bcf88d97102834636432dec7bda538ad164a9853f230f25d757a->enter($__internal_76f96e659464bcf88d97102834636432dec7bda538ad164a9853f230f25d757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f96e659464bcf88d97102834636432dec7bda538ad164a9853f230f25d757a->leave($__internal_76f96e659464bcf88d97102834636432dec7bda538ad164a9853f230f25d757a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56f2aaccdb9479033bb1084fbc6ca24e443590219441399696799ee20352e7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f2aaccdb9479033bb1084fbc6ca24e443590219441399696799ee20352e7f5->enter($__internal_56f2aaccdb9479033bb1084fbc6ca24e443590219441399696799ee20352e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_56f2aaccdb9479033bb1084fbc6ca24e443590219441399696799ee20352e7f5->leave($__internal_56f2aaccdb9479033bb1084fbc6ca24e443590219441399696799ee20352e7f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\Carnet_adresse\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
