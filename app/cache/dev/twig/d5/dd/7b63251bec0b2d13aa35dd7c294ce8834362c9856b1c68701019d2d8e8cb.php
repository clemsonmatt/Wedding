<?php

/* WeddingManageBundle:Shared:layout.html.twig */
class __TwigTemplate_d5dd7b63251bec0b2d13aa35dd7c294ce8834362c9856b1c68701019d2d8e8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'allContent' => array($this, 'block_allContent'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <script src=\"//use.fonticons.com/2d2cc9ab.js\"></script>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>


        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap -->
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>

    ";
        // line 27
        echo "    <body>
        <div id=\"wrapper\">

    <div id=\"bg\">
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/weddingmanage/images/_MG_01661.jpg"), "html", null, true);
        echo "\">
    </div>
            ";
        // line 33
        $this->env->loadTemplate("WeddingManageBundle:Shared:nav.html.twig")->display($context);
        // line 34
        echo "
            <div id=\"page-wrapper\">

                ";
        // line 37
        $this->displayBlock('allContent', $context, $blocks);
        // line 61
        echo "            </div>
        </div>

        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>

";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Matt &amp; Caitlyn Wedding";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "329c1f8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_329c1f8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/329c1f8_bootstrap_1.css");
            // line 21
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "329c1f8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_329c1f8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/329c1f8_custom_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "329c1f8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_329c1f8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/329c1f8.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "        ";
    }

    // line 37
    public function block_allContent($context, array $blocks = array())
    {
        // line 38
        echo "                    <div class=\"container\" style=\"background-color: #fff;\">
                        ";
        // line 39
        $context["flashTypes"] = array(0 => "info", 1 => "notice", 2 => "warning", 3 => "error", 4 => "success");
        // line 40
        echo "                            ";
        $context["flashTypeMap"] = array("info" => "info", "notice" => "info", "warning" => "warning", "error" => "danger", "success" => "success");
        // line 47
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashTypes"]) ? $context["flashTypes"] : $this->getContext($context, "flashTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["flashType"]) {
            // line 48
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["flashType"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 49
                echo "                                    <div class=\"hidden-print alert alert-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashTypeMap"]) ? $context["flashTypeMap"] : $this->getContext($context, "flashTypeMap")), $context["flashType"], array(), "array"), "html", null, true);
                echo "\">
                                        <strong>
                                            ";
                // line 51
                echo $context["flashMessage"];
                echo "
                                        </strong>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "                    </div>
                ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "                        ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "            <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <!-- Include all JavaScripts, compiled by Assetic -->
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 70
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3f150f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3f150f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3f150f_custom_1.js");
            // line 73
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "e3f150f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e3f150f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e3f150f.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 75
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Shared:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 75,  205 => 73,  201 => 70,  196 => 68,  191 => 66,  188 => 65,  185 => 64,  181 => 58,  178 => 57,  173 => 59,  171 => 57,  168 => 56,  162 => 55,  152 => 51,  146 => 49,  141 => 48,  136 => 47,  133 => 40,  131 => 39,  128 => 38,  125 => 37,  121 => 23,  101 => 21,  97 => 17,  92 => 16,  89 => 15,  83 => 13,  76 => 77,  74 => 64,  69 => 61,  67 => 37,  62 => 34,  60 => 33,  55 => 31,  49 => 27,  45 => 24,  43 => 15,  38 => 13,  24 => 1,);
    }
}
