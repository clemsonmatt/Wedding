<?php

/* WeddingManageBundle:Admin:index.html.twig */
class __TwigTemplate_0f9bbf0933d8411d48f8cebb43e27834f0e4c2959b0cb626e76cb532a8b9cb75 extends Twig_Template
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
    <legend class=\"col-lg-12\">
        <h3 class=\"wedding\">
            <small class=\"pull-right\">
                Yes Responses:
                ";
        // line 9
        echo twig_escape_filter($this->env, (((isset($context["yesCounter"]) ? $context["yesCounter"] : $this->getContext($context, "yesCounter")) . "/") . (isset($context["totalCounter"]) ? $context["totalCounter"] : $this->getContext($context, "totalCounter"))), "html", null, true);
        echo "
            </small>
            <small class=\"pull-right\" style=\"margin-right: 20px;\">
                Total Guests:
                ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["guestCounter"]) ? $context["guestCounter"] : $this->getContext($context, "guestCounter")), "html", null, true);
        echo "
            </small>
            Responses
        </h3>
    </legend>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table class=\"table table-bordered table-striped table-condensed\">
                <thead>
                    <th class=\"col-sm-3\">Name</th>
                    <th class=\"col-sm-2\">Phone</th>
                    <th class=\"col-sm-2\"># Attending</th>
                    <th class=\"col-sm-2\">Response</th>
                    <th class=\"col-sm-3\">Time</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rsvpResult"]) ? $context["rsvpResult"] : $this->getContext($context, "rsvpResult")));
        foreach ($context['_seq'] as $context["_key"] => $context["rsvp"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["rsvp"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["rsvp"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["rsvp"], "number", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["rsvp"], "response", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rsvp"], "createdAt", array()), "m-d-Y h:ia"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_rsvp_edit", array("rsvp" => $this->getAttribute($context["rsvp"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_rsvp_remove", array("rsvp" => $this->getAttribute($context["rsvp"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rsvp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>
        </div>
    </div>
    <br><br>
";
    }

    public function getTemplateName()
    {
        return "WeddingManageBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  102 => 44,  94 => 39,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  70 => 32,  66 => 31,  45 => 13,  38 => 9,  31 => 4,  28 => 3,);
    }
}
