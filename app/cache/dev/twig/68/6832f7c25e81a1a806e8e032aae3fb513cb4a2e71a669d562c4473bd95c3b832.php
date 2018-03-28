<?php

/* MyAlphabusBundle:Chassis:listchassis.html.twig */
class __TwigTemplate_d7453329b4ab67dedeca2a067da01adadc6fcd4283e3b93a6811a2a5ddff1464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:Chassis:listchassis.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc2b9ad84922989ffed8572c10a84c8ac254852cbbd91bb0118fe9bcd82bb13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2b9ad84922989ffed8572c10a84c8ac254852cbbd91bb0118fe9bcd82bb13d->enter($__internal_cc2b9ad84922989ffed8572c10a84c8ac254852cbbd91bb0118fe9bcd82bb13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Chassis:listchassis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2b9ad84922989ffed8572c10a84c8ac254852cbbd91bb0118fe9bcd82bb13d->leave($__internal_cc2b9ad84922989ffed8572c10a84c8ac254852cbbd91bb0118fe9bcd82bb13d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f8e97d31d99cddb7f1b0ba1983dc3e881113c95771b09047b556f2e10c7b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f8e97d31d99cddb7f1b0ba1983dc3e881113c95771b09047b556f2e10c7b59->enter($__internal_c6f8e97d31d99cddb7f1b0ba1983dc3e881113c95771b09047b556f2e10c7b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:Chassis:listchassis";
        
        $__internal_c6f8e97d31d99cddb7f1b0ba1983dc3e881113c95771b09047b556f2e10c7b59->leave($__internal_c6f8e97d31d99cddb7f1b0ba1983dc3e881113c95771b09047b556f2e10c7b59_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f811d4af9cff9bf0ef6018d66e7d680cbcd282fa4dcae6fbd68999c261964d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f811d4af9cff9bf0ef6018d66e7d680cbcd282fa4dcae6fbd68999c261964d87->enter($__internal_f811d4af9cff9bf0ef6018d66e7d680cbcd282fa4dcae6fbd68999c261964d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Chassis:listchassis page</h1>





    <div class=\"container\">
        <h1>Enseignants</h1>
        <form style=\"margin-bottom: 10px;\" action=\"cherchassis\" method=\"GET\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par N° Chassis\" name=\"nchassis\" />
        </form>
        <form>
            <table class=\"table\">
                <thead>
                <tr>
                   
                    <th>N° Chassis</th>
                    <th>Type chassis</th>
                    <th>Date Reception</th>
                    <th>Controler</th>



                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enss"] ?? $this->getContext($context, "enss")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 33
            echo "                    <tr>
                      
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nchassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "typechassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "datereception", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "controler", array()), "html", null, true);
            echo "</td>

                        <td><a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_chassis");
        echo "\" class=\"btn btn-primary\">
                Ajouter
            </a>

        </form>
    </div>
";
        
        $__internal_f811d4af9cff9bf0ef6018d66e7d680cbcd282fa4dcae6fbd68999c261964d87->leave($__internal_f811d4af9cff9bf0ef6018d66e7d680cbcd282fa4dcae6fbd68999c261964d87_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Chassis:listchassis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  127 => 47,  119 => 44,  111 => 41,  107 => 40,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 33,  81 => 32,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MyAlphabusBundle:Chassis:listchassis{% endblock %}

{% block body %}
<h1>Welcome to the Chassis:listchassis page</h1>





    <div class=\"container\">
        <h1>Enseignants</h1>
        <form style=\"margin-bottom: 10px;\" action=\"cherchassis\" method=\"GET\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par N° Chassis\" name=\"nchassis\" />
        </form>
        <form>
            <table class=\"table\">
                <thead>
                <tr>
                   
                    <th>N° Chassis</th>
                    <th>Type chassis</th>
                    <th>Date Reception</th>
                    <th>Controler</th>



                </tr>
                </thead>
                <tbody>
                {% for st in enss %}
                    <tr>
                      
                        <td>{{ st.nchassis }}</td>
                        <td>{{ st.typechassis }}</td>
                        <td>{{ st.datereception|date('d-m-Y')  }}</td>
                        <td>{{ st.controler }}</td>

                        <td><a class=\"btn btn-success\" href=\"{{ path('edit_chassis', { 'id': st.nchassis}) }}\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"{{ path('del_chassis', { 'id': st.nchassis }) }}\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                {% else %}
                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <a href=\"{{ path('new_chassis') }}\" class=\"btn btn-primary\">
                Ajouter
            </a>

        </form>
    </div>
{% endblock %}

", "MyAlphabusBundle:Chassis:listchassis.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Chassis/listchassis.html.twig");
    }
}
