<?php

/* contact/index.html.twig */
class __TwigTemplate_773be7736aa4ff6e5dbbf65e56ebf3c71c78d13d8130a8f79761ca3398978b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "contact/index.html.twig", 1);
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
        $__internal_bf7e698ba8743a693a1200205bc7bbc9fa52dd889477d4a167f2e9688fcda79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7e698ba8743a693a1200205bc7bbc9fa52dd889477d4a167f2e9688fcda79f->enter($__internal_bf7e698ba8743a693a1200205bc7bbc9fa52dd889477d4a167f2e9688fcda79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7e698ba8743a693a1200205bc7bbc9fa52dd889477d4a167f2e9688fcda79f->leave($__internal_bf7e698ba8743a693a1200205bc7bbc9fa52dd889477d4a167f2e9688fcda79f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b4ec001179d87f89966d32f0dc54de58a6498fdbff1bc3141d91b594aea64eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4ec001179d87f89966d32f0dc54de58a6498fdbff1bc3141d91b594aea64eb->enter($__internal_4b4ec001179d87f89966d32f0dc54de58a6498fdbff1bc3141d91b594aea64eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/index.html.twig"));

        echo " Carnet d'adresses";
        
        $__internal_4b4ec001179d87f89966d32f0dc54de58a6498fdbff1bc3141d91b594aea64eb->leave($__internal_4b4ec001179d87f89966d32f0dc54de58a6498fdbff1bc3141d91b594aea64eb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_779ab943e3188b8dfe4a45a1c68b57958a0d68a75e806cc6287a95992cb99ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779ab943e3188b8dfe4a45a1c68b57958a0d68a75e806cc6287a95992cb99ca2->enter($__internal_779ab943e3188b8dfe4a45a1c68b57958a0d68a75e806cc6287a95992cb99ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/index.html.twig"));

        // line 4
        echo "    <h1>Carnet d'adresses</h1>

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
\t\t\t
                <th>Email</th>
                <th>Adresse</th>
                <th>Site web</th>
                <th>Numero de telephone </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 20
            echo "            <tr>
                <td> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "siteweb", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
                <td>
                    <!--<ul>
                        <li>-->
                            <a class=\"button\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </td>
\t\t\t\t\t\t<!--</li>
                        <li>-->
\t\t\t\t\t\t<td>
                            <a class=\"button\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        <!--</li>
                    </ul>-->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_779ab943e3188b8dfe4a45a1c68b57958a0d68a75e806cc6287a95992cb99ca2->leave($__internal_779ab943e3188b8dfe4a45a1c68b57958a0d68a75e806cc6287a95992cb99ca2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  118 => 39,  106 => 33,  98 => 28,  91 => 24,  87 => 23,  83 => 22,  77 => 21,  74 => 20,  70 => 19,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Carnet d'adresses{% endblock %}
{% block content %}
    <h1>Carnet d'adresses</h1>

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
\t\t\t
                <th>Email</th>
                <th>Adresse</th>
                <th>Site web</th>
                <th>Numero de telephone </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contact in contacts %}
            <tr>
                <td> <a href=\"{{ path('contact_show', { 'id': contact.id }) }}\">{{ contact.email }}</a></td>
                <td>{{ contact.adresse }}</td>
                <td>{{ contact.siteweb }}</td>
                <td>{{ contact.phone }}</td>
                <td>
                    <!--<ul>
                        <li>-->
                            <a class=\"button\" href=\"{{ path('contact_show', { 'id': contact.id }) }}\">show</a>
                        </td>
\t\t\t\t\t\t<!--</li>
                        <li>-->
\t\t\t\t\t\t<td>
                            <a class=\"button\" href=\"{{ path('contact_edit', { 'id': contact.id }) }}\">edit</a>
                        <!--</li>
                    </ul>-->
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('contact_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "contact/index.html.twig", "C:\\wamp\\www\\Carnet_adresse\\app\\Resources\\views\\contact\\index.html.twig");
    }
}
