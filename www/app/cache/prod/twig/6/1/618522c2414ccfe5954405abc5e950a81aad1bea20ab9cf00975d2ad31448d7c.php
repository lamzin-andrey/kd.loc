<?php

/* StudyAppStudyAppBundle:Default:anonymous_page.html.twig */
class __TwigTemplate_618522c2414ccfe5954405abc5e950a81aad1bea20ab9cf00975d2ad31448d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("StudyAppSecurityBundle:Default:login.html.twig", "StudyAppStudyAppBundle:Default:anonymous_page.html.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:anonymous_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
