<?php

/* WeddingManageBundle:Public:registries.html.twig */
class __TwigTemplate_141e626c8335e1b11f457baec884dd6c44791946163e124aab1fa2ab46c56651 extends Twig_Template
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
        <h3 class=\"wedding\">Registries</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-lg-1 col-md-1 col-sm-1\"></div>
        <div class=\"col-lg-5 col-md-5 col-sm-5\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/bed-bath-and-beyond-registry-logo.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <h4 class=\"wedding\">Bed Bath &amp; Beyond</h4>
            Appliances, cookware, and bedding for our home.
            <br><br>
            <a href=\"http://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&registryId=541525920&pwsurl=\" target=\"_blank\">View registry</a>
            <br>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-lg-1 col-md-1 col-sm-1\"></div>
        <div class=\"col-lg-5 col-md-5 col-sm-5\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/amazon_logo.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6\">
            <h4 class=\"wedding\">Amazon</h4>
            A wide variety of items for us.
            <br><br>
            <a href=\"http://www.amazon.com/registry/wedding/21F6D9WDX847Q\" target=\"_blank\">View registry</a>
            <br>
        </div>
    </div>
    <br><br>
    ";
        // line 36
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:registries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 36,  57 => 25,  40 => 11,  31 => 4,  28 => 3,);
    }
}
