<?php

/* contact/show.html.twig */
class __TwigTemplate_2354c6e825cfb9fe0918bdf450f25e9482e2221c6385f3e8c6ad0b6cb882e931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "contact/show.html.twig", 1);
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
        $__internal_06ae8e818bcb969e750387a4c70840063f102619718714709443bf01c0d3ab4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ae8e818bcb969e750387a4c70840063f102619718714709443bf01c0d3ab4e->enter($__internal_06ae8e818bcb969e750387a4c70840063f102619718714709443bf01c0d3ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06ae8e818bcb969e750387a4c70840063f102619718714709443bf01c0d3ab4e->leave($__internal_06ae8e818bcb969e750387a4c70840063f102619718714709443bf01c0d3ab4e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e04dc8a828e83ab536b91c0624a3e33f7601190a7ed44c4a945c37cf509b21f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04dc8a828e83ab536b91c0624a3e33f7601190a7ed44c4a945c37cf509b21f2->enter($__internal_e04dc8a828e83ab536b91c0624a3e33f7601190a7ed44c4a945c37cf509b21f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/show.html.twig"));

        echo " Ajouter un contact";
        
        $__internal_e04dc8a828e83ab536b91c0624a3e33f7601190a7ed44c4a945c37cf509b21f2->leave($__internal_e04dc8a828e83ab536b91c0624a3e33f7601190a7ed44c4a945c37cf509b21f2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a97463ade9606e22fe77ca8d6a528187f8d06e5fc5b17a7e64730054c9170c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97463ade9606e22fe77ca8d6a528187f8d06e5fc5b17a7e64730054c9170c79->enter($__internal_a97463ade9606e22fe77ca8d6a528187f8d06e5fc5b17a7e64730054c9170c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact/show.html.twig"));

        // line 4
        echo "    <h1>Contact</h1>
\t
\t<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <table>
        <li>
\t\t\t<td>
\t\t\t\t<a class=\"button\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
        echo "\">Back to the list</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a class=\"button\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input class=\"button\" type=\"submit\" value=\"Delete\">
\t\t\t\t";
        // line 43
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t\t</td>
        </li>
    </ul>
";
        
        $__internal_a97463ade9606e22fe77ca8d6a528187f8d06e5fc5b17a7e64730054c9170c79->leave($__internal_a97463ade9606e22fe77ca8d6a528187f8d06e5fc5b17a7e64730054c9170c79_prof);

    }

    public function getTemplateName()
    {
        return "contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  113 => 41,  107 => 38,  101 => 35,  90 => 27,  83 => 23,  76 => 19,  69 => 15,  62 => 11,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Ajouter un contact{% endblock %}
{% block content %}
    <h1>Contact</h1>
\t
\t<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contact.id }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ contact.adresse }}</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>{{ contact.siteweb }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ contact.email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ contact.phone }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <li>
\t\t\t<td>
\t\t\t\t<a class=\"button\" href=\"{{ path('contact_index') }}\">Back to the list</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a class=\"button\" href=\"{{ path('contact_edit', { 'id': contact.id }) }}\">Edit</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{{ form_start(delete_form) }}
\t\t\t\t\t<input class=\"button\" type=\"submit\" value=\"Delete\">
\t\t\t\t{{ form_end(delete_form) }}
\t\t\t\t</td>
        </li>
    </ul>
{% endblock %}
", "contact/show.html.twig", "C:\\wamp\\www\\Carnet_adresse\\app\\Resources\\views\\contact\\show.html.twig");
    }
}
