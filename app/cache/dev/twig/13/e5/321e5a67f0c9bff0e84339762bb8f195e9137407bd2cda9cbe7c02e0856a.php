<?php

/* WeddingManageBundle:Public:about.html.twig */
class __TwigTemplate_13e5321e5a67f0c9bff0e84339762bb8f195e9137407bd2cda9cbe7c02e0856a extends Twig_Template
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
    <!-- venue -->
    <legend>
        <h3 class=\"wedding\">The Venue</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/woodburn_house.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\" />
                    <br><br>
                    <legend>
                        <h4 class=\"wedding\">Woodburn Plantation</h4>
                    </legend>
                    <p style=\"font-size: 16px;\">
                        Woodburn is a graceful four-story clapboard plantation house built c.
                        1830 with a wrap-around-2-story piazza built as a summer home by Charles
                        Cotseworth Pinckney (1789-1865). The house is an excellent example of an
                        early 19th century SC Upcountry plantation house. While owned by members
                        of the wealthy Adger family of Charleston, the house was expanded to 18
                        rooms, and the farmland was increased to over 1,000 acres. The historic
                        site now consists of the house museum furnished with antebellum antiques
                        and family artifacts, situated on 10 acres of the original plantation with
                        a walking trail to the ruins of other farm outbuildings. Also on site are
                        three outbuildings, a reproduction of the Adger Victorian Carriage house
                        that contains the traveling coach of Thomas Green Clemson; a one-room c.1810
                        log house built by Robert Moorhead serving as the cookhouse; and a reproduction
                        of a slave/tenant house interpreting the life of Jane Edna Hunter, the
                        African-American activist who founded the Phyllis Wheatley Society, who was
                        born in such a house at Woodburn in 1882.
                        <br><br>
                        <span class=\"pull-right\">- pendletonhistoricfoundation.org</span>
                    </p>
                    <br><br>
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("directions");
        echo "\">
                        <button class=\"btn btn-default col-lg-12\">Get Directions Here</button>
                    </a>
                </div>
                <div class=\"col-lg-5 col-md-5 col-sm-5\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/woodburn_sign.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; min-width:100%;\" />
                    <br><br>
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/woodburn_stable_house.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; min-width:100%;\" />
                </div>
            </div>
            <br><br>
       </div>
    </div>

    <br>

    <!-- what to wear -->
    <legend class=\"col-lg-12\">
        <h3 class=\"wedding\">What to Wear</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-7 col-sm-7\">
                    <p style=\"font-size: 16px;\">
                        We have been asked what guests should wear. Here are a few examples that
                        would look good with our style wedding.
                    </p>
                    <br>
                    <div class=\"col-lg-6 col-md-6 col-sm-6\">
                        <legend><h4 class=\"wedding\">Guys</h4></legend>
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/guy1.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                        <br><br>
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/guy2.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                        <br><br>
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/guy3.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6\">
                        <legend><h4 class=\"wedding\">Girls</h4></legend>
                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/girl1.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                        <br><br><br><br>
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/girl2.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                        <br><br><br><br>
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/girl3.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-5 col-sm-5\">
                    <legend>
                        <h4 class=\"wedding\">Style &amp; Colors</h4>
                    </legend>
                    <p style=\"font-size: 16px;\">
                        The wedding will be a classy southern style wedding. To help achieve this style
                        we have chosen a magenta spring color scheme.
                    </p>
                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/mainColors.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                    <br><br>
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/wear/flowers.jpg"), "html", null, true);
        echo "\" style=\"max-width: 100%;\">
                </div>
            </div>
            <br><br>
       </div>
    </div>

    ";
        // line 101
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 101,  156 => 94,  151 => 92,  137 => 81,  132 => 79,  127 => 77,  120 => 73,  115 => 71,  110 => 69,  83 => 45,  78 => 43,  70 => 38,  42 => 13,  31 => 4,  28 => 3,);
    }
}
