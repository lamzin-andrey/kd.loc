<?php

/* StudyAppStudyAppBundle::layout.html.twig */
class __TwigTemplate_f9fb56e633100afcc67fa416494f085fbb76cbb452fcd363e844aee4ad98f0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<title>Simple Application Simfony 2</title>
\t";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "\t        
</head>
<body>
";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 53
        echo "<div class=\"container\">
    <div class=\"row row-offcanvas row-offcanvas-right\">
     <div class=\"col-xs-12\">
";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "\t</div>
\t</div>
\t</div>
</body>
</html>
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/pagination.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/offcanvas.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/app.css"), "html", null, true);
        echo "\">
\t";
    }

    // line 13
    public function block_javascript($context, array $blocks = array())
    {
        // line 14
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/js/app.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        // line 23
        if ( !(isset($context["is_auth"]) ? $context["is_auth"] : null)) {
            // line 24
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
            echo "</a>
\t    </div>
\t    <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("study_app_signup");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sign Up", array(), "messages");
            echo "</a></li>
          </ul>
        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        } else {
            // line 37
            echo "<nav class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
        <a class=\"navbar-brand white\" href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("study_app_home");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Simple Application Example", array(), "messages");
            echo "</a>
    </div>
    <div id=\"navbar\" class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("profile");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Change Profile", array(), "messages");
            echo "</a></li>
      <li><a href=\"#\" id=\"menu-add-comment\">";
            // line 45
            echo $this->env->getExtension('translator')->getTranslator()->trans("Comment", array(), "messages");
            echo "</a></li>
      <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
    </ul>
    </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
";
        }
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  160 => 46,  156 => 45,  150 => 44,  141 => 40,  136 => 37,  125 => 31,  116 => 27,  111 => 24,  109 => 23,  106 => 22,  100 => 17,  96 => 16,  92 => 15,  87 => 14,  84 => 13,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  61 => 7,  58 => 6,  49 => 58,  47 => 56,  42 => 53,  40 => 22,  35 => 19,  32 => 13,  30 => 6,  23 => 1,);
    }
}
