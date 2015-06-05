<?php

/* WeddingManageBundle:Shared:nav.html.twig */
class __TwigTemplate_ffd6d3151385990e0531fdf270986bbafe42918913476fcff1a1562779a88056 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container_old\">
        <div class=\"navbar-header color-white\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand custom-font\" href=\"#\" style=\"color: #fff;\">Matthew &amp; Caitlyn</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            ";
        // line 13
        $context["primaryNavigation"] = $this->env->getExtension('knp_menu')->get("WeddingManageBundle:Builder:mainMenu");
        // line 14
        echo "            ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["primaryNavigation"]) ? $context["primaryNavigation"] : $this->getContext($context, "primaryNavigation")), array("style" => "nav"));
        echo "
        </div>
    </div>
</nav>
<br><br>
";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Shared:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  33 => 13,  19 => 1,);
    }
}
