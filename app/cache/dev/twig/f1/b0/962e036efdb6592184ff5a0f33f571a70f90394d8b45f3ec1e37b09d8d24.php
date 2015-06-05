<?php

/* WeddingManageBundle:Public:index.html.twig */
class __TwigTemplate_f1b0962e036efdb6592184ff5a0f33f571a70f90394d8b45f3ec1e37b09d8d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WeddingManageBundle:Shared:layout.html.twig");

        $this->blocks = array(
            'allContent' => array($this, 'block_allContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WeddingManageBundle:Shared:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_allContent($context, array $blocks = array())
    {
        // line 4
        echo "<center>
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/intro2.fw.png"), "html", null, true);
        echo "\" style=\"max-width:100%; margin-top:0%;\" />
</center>
";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}
