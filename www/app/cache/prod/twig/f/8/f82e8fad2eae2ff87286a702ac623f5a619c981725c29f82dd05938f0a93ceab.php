<?php

/* StudyAppSecurityBundle:Default:fb_login.html.twig */
class __TwigTemplate_f82e8fad2eae2ff87286a702ac623f5a619c981725c29f82dd05938f0a93ceab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppSecurityBundle:Default:fb_login.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"bg-success pad-15\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please wait, you are will redirected", array(), "messages");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "StudyAppSecurityBundle:Default:fb_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
