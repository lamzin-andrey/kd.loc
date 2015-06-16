<?php

/* StudyAppSecurityBundle:Default:login.html.twig */
class __TwigTemplate_b2b9f5ff929a60a92159915e05f73de3b0fc27143a7bd51293c24b100f91faf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/authpage.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/signin.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<form class=\"form-authpage form-signin\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
\t<p class=\"bg-danger text-danger ";
        // line 11
        if ( !(isset($context["error"]) ? $context["error"] : null)) {
            echo " hide ";
        }
        echo " pad-15\" id=\"errorsarea\">
\t\t";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 13
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "
\t\t";
        }
        // line 15
        echo "\t</p>
\t<h2 class=\"form-signin-heading\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
        echo "</h2>

<label for=\"username\" class=\"sr-only\">Username:</label>
<input type=\"text\" name=\"_username\" id=\"username\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        echo "\" required autofocus >
<label for=\"password\" class=\"sr-only\">Password:</label>
<input type=\"password\" name=\"_password\" id=\"password\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Password", array(), "messages");
        echo "\" required>
\t
<input type=\"hidden\" name=\"_target_path\"  value=\"/\">
<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"  value=\"";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sign in", array(), "messages");
        echo "\">
<div class=\"fb-login-link\">
\t<a  href=\"https://www.facebook.com/dialog/oauth?client_id=";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["facebook_client_id"]) ? $context["facebook_client_id"] : null), "html", null, true);
        echo "&redirect_uri=http://";
        echo twig_escape_filter($this->env, (isset($context["host"]) ? $context["host"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["oauth_facebook_route"]) ? $context["oauth_facebook_route"] : null), "html", null, true);
        echo "&response_type=token\" >
\t\t<i class=\"icon-large icon-facebook\"></i> <span>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Facebook login", array(), "messages");
        echo "</span>
\t</a>
</div>

</form>
";
    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  99 => 26,  94 => 24,  88 => 21,  83 => 19,  77 => 16,  74 => 15,  68 => 13,  66 => 12,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
