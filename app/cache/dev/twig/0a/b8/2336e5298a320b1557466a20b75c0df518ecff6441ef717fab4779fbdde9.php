<?php

/* WeddingManageBundle:Admin:rsvp.html.twig */
class __TwigTemplate_0ab82336e5298a320b1557466a20b75c0df518ecff6441ef717fab4779fbdde9 extends Twig_Template
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
    <div class=\"col-sm-12\">
        <legend>
            <h3 class=\"wedding\">
                Edit Response
            </h3>
        </legend>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <button class=\"btn btn-success\">
                Save RSVP
            </button>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <br>
    </div>
    <br><br>
";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Admin:rsvp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
