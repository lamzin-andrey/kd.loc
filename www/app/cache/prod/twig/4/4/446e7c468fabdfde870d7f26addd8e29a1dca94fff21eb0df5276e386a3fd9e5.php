<?php

/* StudyAppStudyAppBundle:Default:member_page.html.twig */
class __TwigTemplate_446e7c468fabdfde870d7f26addd8e29a1dca94fff21eb0df5276e386a3fd9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudyAppStudyAppBundle::layout.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/bootstrap-glyphicons.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/studyappstudyapp/css/commentlist.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script>
 \tvar totalPages = '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pages_total"]) ? $context["pages_total"] : null), "html", null, true);
        echo "';
</script>\t
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        $this->loadTemplate("StudyAppStudyAppBundle:Default:article.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 18)->display($context);
        // line 19
        echo "\t";
        $this->loadTemplate("StudyAppCommentBundle:Default:list.html.twig", "StudyAppStudyAppBundle:Default:member_page.html.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "StudyAppStudyAppBundle:Default:member_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  65 => 18,  62 => 17,  55 => 11,  50 => 9,  47 => 8,  41 => 5,  37 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
