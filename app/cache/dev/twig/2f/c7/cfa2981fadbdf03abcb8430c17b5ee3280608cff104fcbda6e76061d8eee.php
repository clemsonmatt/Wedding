<?php

/* WeddingManageBundle:Public:photos.html.twig */
class __TwigTemplate_2fc7cfa2981fadbdf03abcb8430c17b5ee3280608cff104fcbda6e76061d8eee extends Twig_Template
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
        <h3 class=\"wedding\">Photos</h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/_MG_01821.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; min-width:100%;\">
                    <br><br>
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10419989_10204048758523872_6319229801201567911_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%\">
                    <br><br>
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10285571_10203792136311936_6197629849014949910_o.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                    <br><br>
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10525640_801063266594502_2960486832347654402_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                    <br><br>
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10527280_801063409927821_3014548725756844610_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                    <br><br>
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10352041_801063799927782_3833748641520563581_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                    <br><br><br>
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10557372_801063286594500_5403811196931979753_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/CaylxFarm/_MG_00781.jpg"), "html", null, true);
        echo "\" style=\"min-width:100%; max-width:100%;\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/_MG_0151.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; min-width:100%;\">
                            <br><br><br><br><br>
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/1964922_10203792137031954_3687111331355368928_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                            <br><br><br><br><br>
                            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10525799_801063596594469_1850917265913054926_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/CaylxFarm/_MG_03621.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%; min-width:100%;\">
                            <br><br>
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/281912_801063706594458_2472665165241254492_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                            <br><br>
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10401425_801063293261166_8067253563881523342_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\" style=\"margin-top:56px;\">
                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10505552_801063579927804_8325451025699915168_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10492617_801063163261179_6801124576986579448_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                        </div>
                        <div class=\"col-sm-6\">
                            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10424344_801063763261119_3136742194700504279_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class=\"row\">
                <div class=\"col-sm-8\" style=\"margin-top:40px;\">
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10380644_799065786794250_5794756032262806041_o.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                </div>
                <div class=\"col-sm-4\">
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/Engagement/10553456_801063703261125_3441167364110786362_n.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;\">
                </div>
            </div>
            <br><br>
       </div>
    </div>
    <br><br>
    ";
        // line 78
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 78,  154 => 71,  148 => 68,  137 => 60,  131 => 57,  122 => 51,  114 => 46,  109 => 44,  104 => 42,  98 => 39,  93 => 37,  88 => 35,  79 => 29,  71 => 24,  66 => 22,  61 => 20,  56 => 18,  51 => 16,  46 => 14,  41 => 12,  31 => 4,  28 => 3,);
    }
}
