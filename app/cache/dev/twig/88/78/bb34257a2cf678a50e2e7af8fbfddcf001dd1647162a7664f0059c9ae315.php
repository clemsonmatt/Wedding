<?php

/* WeddingManageBundle:Public:contact.html.twig */
class __TwigTemplate_8878bb34257a2cf678a50e2e7af8fbfddcf001dd1647162a7664f0059c9ae315 extends Twig_Template
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
        <h3 class=\"wedding\">Contact Us</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-xs-5 col-xs-offset-1\">
            <div class=\"row\">
                <center>
                    <h2 class=\"wedding\">Matt</h2>
                </center>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/CaylxFarm/matt.jpg"), "html", null, true);
        echo "\" class=\"pull-right\" style=\"max-width: 60%; border-radius: 50%;\">
                </div>
                <div class=\"col-xs-6\">
                    <br>
                    <address>
                        <strong class=\"wedding\">Matthew Ellis</strong><br>
                        <a href=\"mailto:#\">mellis0292@gmail.com</a><br>
                        <abbr title=\"Matt's Phone\">P:</abbr> (864) 247-9619
                    </address>
                </div>
            </div>
        </div>
        <div class=\"col-xs-5\">
            <div class=\"row\">
                <center>
                    <h2 class=\"wedding\">Caitlyn</h2>
                </center>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/cait.jpg"), "html", null, true);
        echo "\" class=\"pull-right\" style=\"max-width: 60%; border-radius: 50%;\">
                </div>
                <div class=\"col-xs-6\">
                    <br>
                    <address>
                        <strong class=\"wedding\">Caitlyn Dickerson</strong><br>
                        <a href=\"mailto:#\">caitdson7851@gmail.com</a><br>
                        <abbr title=\"Caitlyn's Phone\">P:</abbr> (864) 723-0881
                    </address>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    ";
        // line 51
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  69 => 37,  46 => 17,  31 => 4,  28 => 3,);
    }
}
