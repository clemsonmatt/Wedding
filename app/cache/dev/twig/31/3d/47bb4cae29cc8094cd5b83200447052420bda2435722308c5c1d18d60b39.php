<?php

/* WeddingManageBundle:Public:honeymoon.html.twig */
class __TwigTemplate_313d47bb4cae29cc8094cd5b83200447052420bda2435722308c5c1d18d60b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WeddingManageBundle:Shared:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <br><br>
    <legend>
        <h3 class=\"wedding\">The Honeymoon</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-sm-8\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/fort-myers-beach-marina-aerial2.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
            <br><br>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/FortMyersBeachFLHP.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                </div>
                <div class=\"col-sm-6\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/disney-logo.png"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/CinderellaCastleFireworks1.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
        </div>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/fort-myers-fl.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%; min-width: 100%;\">
            <br><br>
        </div>
        <div class=\"col-sm-7\">
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/walt-disney-world.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%; min-width: 100%;\">
        </div>
    </div>
    <br><br>
    ";
        // line 36
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:honeymoon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  76 => 32,  69 => 28,  60 => 22,  52 => 17,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
