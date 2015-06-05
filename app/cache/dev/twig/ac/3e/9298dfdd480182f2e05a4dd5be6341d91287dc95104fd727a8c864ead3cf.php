<?php

/* WeddingManageBundle:Shared:footer.html.twig */
class __TwigTemplate_ac3e9298dfdd480182f2e05a4dd5be6341d91287dc95104fd727a8c864ead3cf extends Twig_Template
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
        echo "<hr>
<div class=\"row\">
    <div class=\"col-sm-4\">
        <br>
        <center>
            <p style=\"margin-top:5px;\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" style=\"color:#333333;\">
                    Contact Us
                </a>
                &nbsp; | &nbsp;
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("rsvp");
        echo "\" style=\"color:#333333;\">
                    RSVP
                </a>
                &nbsp; | &nbsp;
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("directions");
        echo "\" style=\"color:#333333;\">
                    Directions
                </a>
            </p>
        </center>
    </div>
    <div class=\"col-sm-4\">
        <center>
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/matt_cait_logo2.fw.png"), "html", null, true);
        echo "\" style=\"max-width:50%; padding-top:0px; padding-bottom:15px;\" />
        </center>
    </div>
    <div class=\"col-sm-4\">
        <br>
        <center>
            <p style=\"margin-top:5px;\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\" style=\"color:#333333;\">
                    Login
                </a>
                &nbsp; | &nbsp;
                Ellis &copy; <?php echo date('Y') ?>
            </p>
        </center>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Shared:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  52 => 23,  41 => 15,  34 => 11,  27 => 7,  19 => 1,);
    }
}
