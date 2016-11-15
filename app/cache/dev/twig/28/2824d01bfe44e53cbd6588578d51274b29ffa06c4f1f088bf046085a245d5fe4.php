<?php

/* main.html.twig */
class __TwigTemplate_cf137dd3801e41a2cc394ab61788d66ff3a8d0e01d5ecd7013572b1ed9d5816e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e08ea3f3735f821f7ac76bcc5e79a62c7a374857c4f7b5453a53b51c90a7a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e08ea3f3735f821f7ac76bcc5e79a62c7a374857c4f7b5453a53b51c90a7a7a->enter($__internal_4e08ea3f3735f821f7ac76bcc5e79a62c7a374857c4f7b5453a53b51c90a7a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"  media=\"all\" />       
       <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/contact.css"), "html", null, true);
        echo "\"  media=\"all\" /> 
 
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
   

<title>hello</title> 
          
<!--[if IE]><link rel=\"stylesheet\" href=\"http://media3.iwc.com/site_media/chrome/css/ie_.css\"/><![endif]-->

<body>

\t
    <header style=\"position: relative; top: 0px;\">
\t<div id=\"pageHeader\" data-gtm=\"[,]\">
        <div id=\"nav\">
\t\t<ul id=\"topNav\" class=\"nav\">


\t\t\t<li class=\"ddLink\">
\t\t\t\t<a class=\"first\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Acceuil</a>
\t\t\t\t 
\t\t\t</li>
\t\t\t
\t\t\t ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                             
                             <li class=\"ddLink\">
\t\t\t\t<a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
            echo "\">Contacts</a>
\t\t\t\t 
                         </li>
                          ";
        }
        // line 48
        echo "

              ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "                <li class=\"signInRegister signInLinkL10n\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a></li>
                <li class=\"signInRegister registerLinkL10n\"> <a hred=\"#\">Connecté en tant que: ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>

              ";
        } else {
            // line 55
            echo "                <li class=\"signInRegister registerLinkL10n\"><a id=\"register_anchor\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                <li class=\"signInRegister signInLinkL10n\"><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
            
              ";
        }
        // line 59
        echo "            
\t\t\t 
\t\t</ul> 
        </div>
 \t</div>
    </header>
\t 
     

 \t<div id=\"wrapper\">
\t 
 

<div class=\"conciergeBar conciergeInternationalBar conciergeLocationBar\">
\t<div class=\"conciergeBarContentWrapper conciergeBarFloat\">
\t\t<div class=\"conciergeBarContent\">

\t\t</div>
\t</div>
    
</div>

<div class=\"container\">
                                            
                                             ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo " \t\t\t\t\t\t\t\t
\t\t\t\t
                     
                    
               </div>
\t\t\t
 



\t</div>
 
  
        </body>
</html>

";
        
        $__internal_4e08ea3f3735f821f7ac76bcc5e79a62c7a374857c4f7b5453a53b51c90a7a7a->leave($__internal_4e08ea3f3735f821f7ac76bcc5e79a62c7a374857c4f7b5453a53b51c90a7a7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02ea57df64153092a016b89255235c5b103ff116adfa9ffa8e8d3caa129fe252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ea57df64153092a016b89255235c5b103ff116adfa9ffa8e8d3caa129fe252->enter($__internal_02ea57df64153092a016b89255235c5b103ff116adfa9ffa8e8d3caa129fe252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main.html.twig"));

        
        $__internal_02ea57df64153092a016b89255235c5b103ff116adfa9ffa8e8d3caa129fe252->leave($__internal_02ea57df64153092a016b89255235c5b103ff116adfa9ffa8e8d3caa129fe252_prof);

    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d3fb749cee5c719a5eee02a6a3c95955f039acba96fa15b6ce3d971a7029235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3fb749cee5c719a5eee02a6a3c95955f039acba96fa15b6ce3d971a7029235->enter($__internal_8d3fb749cee5c719a5eee02a6a3c95955f039acba96fa15b6ce3d971a7029235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main.html.twig"));

        // line 84
        echo "                                                 ";
        
        $__internal_8d3fb749cee5c719a5eee02a6a3c95955f039acba96fa15b6ce3d971a7029235->leave($__internal_8d3fb749cee5c719a5eee02a6a3c95955f039acba96fa15b6ce3d971a7029235_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 84,  184 => 83,  173 => 5,  150 => 85,  148 => 83,  122 => 59,  116 => 56,  111 => 55,  105 => 52,  100 => 51,  98 => 50,  94 => 48,  87 => 44,  83 => 42,  81 => 41,  74 => 37,  52 => 18,  48 => 17,  43 => 15,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.css') }}\" />
\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\"  media=\"all\" />       
       <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/contact.css') }}\"  media=\"all\" /> 
 
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
   

<title>hello</title> 
          
<!--[if IE]><link rel=\"stylesheet\" href=\"http://media3.iwc.com/site_media/chrome/css/ie_.css\"/><![endif]-->

<body>

\t
    <header style=\"position: relative; top: 0px;\">
\t<div id=\"pageHeader\" data-gtm=\"[,]\">
        <div id=\"nav\">
\t\t<ul id=\"topNav\" class=\"nav\">


\t\t\t<li class=\"ddLink\">
\t\t\t\t<a class=\"first\" href=\"{{ path('fos_user_profile_show') }}\">Acceuil</a>
\t\t\t\t 
\t\t\t</li>
\t\t\t
\t\t\t {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                             
                             <li class=\"ddLink\">
\t\t\t\t<a href=\"{{ path('contact_index') }}\">Contacts</a>
\t\t\t\t 
                         </li>
                          {% endif %}


              {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <li class=\"signInRegister signInLinkL10n\"><a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a></li>
                <li class=\"signInRegister registerLinkL10n\"> <a hred=\"#\">Connecté en tant que: {{app.user.username}}</a></li>

              {% else %}
                <li class=\"signInRegister registerLinkL10n\"><a id=\"register_anchor\" href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
                <li class=\"signInRegister signInLinkL10n\"><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
            
              {% endif %}
            
\t\t\t 
\t\t</ul> 
        </div>
 \t</div>
    </header>
\t 
     

 \t<div id=\"wrapper\">
\t 
 

<div class=\"conciergeBar conciergeInternationalBar conciergeLocationBar\">
\t<div class=\"conciergeBarContentWrapper conciergeBarFloat\">
\t\t<div class=\"conciergeBarContent\">

\t\t</div>
\t</div>
    
</div>

<div class=\"container\">
                                            
                                             {% block content %}
                                                 {%endblock%}
 \t\t\t\t\t\t\t\t
\t\t\t\t
                     
                    
               </div>
\t\t\t
 



\t</div>
 
  
        </body>
</html>

", "main.html.twig", "C:\\wamp\\www\\Carnet_adresse\\app\\Resources\\views\\main.html.twig");
    }
}
