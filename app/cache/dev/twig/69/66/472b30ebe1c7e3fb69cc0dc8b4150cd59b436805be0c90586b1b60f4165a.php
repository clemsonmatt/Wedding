<?php

/* WeddingManageBundle:Public:rsvp.html.twig */
class __TwigTemplate_6966472b30ebe1c7e3fb69cc0dc8b4150cd59b436805be0c90586b1b60f4165a extends Twig_Template
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
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <br><br>
            <legend><h3 class=\"wedding\">RSVP</h3></legend>
            <center>
                <h4>
                    We look forward to celebrating with you!
                    <br>
                    Please respond by April 2015.
                </h4>
            </center>
            <br>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "response", array()), 'label');
        echo "
                    </label>
                    <div class=\"col-sm-9\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "response", array()), 'widget');
        echo "
                        <span class=\"red-error\">
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "response", array()), 'errors');
        echo "
                        </span>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                    </label>
                    <div class=\"col-sm-9\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                        <span class=\"red-error\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                        </span>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
                    </label>
                    <div class=\"col-sm-9\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                    </div>
                </div>
                <div style=\"";
        // line 48
        if ((!$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'errors'))) {
            echo "display: none;";
        }
        echo "\" id=\"rsvp-number-div\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'label');
        echo "
                        </label>
                        <div class=\"col-sm-9\">
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget');
        echo "
                            <span class=\"red-error\">
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'errors');
        echo "
                            </span>
                        </div>
                    </div>
                </div>
                <button class=\"pull-right btn btn-success\">
                    Submit RSVP
                </button>
            ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    <br><br>
    ";
        // line 68
        $this->env->loadTemplate("WeddingManageBundle:Shared:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Public:rsvp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 68,  134 => 64,  123 => 56,  118 => 54,  112 => 51,  104 => 48,  98 => 45,  92 => 42,  83 => 36,  78 => 34,  72 => 31,  62 => 24,  57 => 22,  51 => 19,  45 => 16,  31 => 4,  28 => 3,);
    }
}
