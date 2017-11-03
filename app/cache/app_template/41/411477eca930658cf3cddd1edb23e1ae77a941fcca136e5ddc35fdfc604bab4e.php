<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a51a835cdb0eb1f2419771a46095f6c6ef7e6f7c93458cc8f48e313ce7ca6d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4005d2f13b440091f8ce70c925b244b95190f655866c43ff6e06c11d6503923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4005d2f13b440091f8ce70c925b244b95190f655866c43ff6e06c11d6503923->enter($__internal_f4005d2f13b440091f8ce70c925b244b95190f655866c43ff6e06c11d6503923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4005d2f13b440091f8ce70c925b244b95190f655866c43ff6e06c11d6503923->leave($__internal_f4005d2f13b440091f8ce70c925b244b95190f655866c43ff6e06c11d6503923_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92bb5942e174ab04f16e832f6cf2f65880ba785e2b55162809852ed3b8e581c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bb5942e174ab04f16e832f6cf2f65880ba785e2b55162809852ed3b8e581c7->enter($__internal_92bb5942e174ab04f16e832f6cf2f65880ba785e2b55162809852ed3b8e581c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92bb5942e174ab04f16e832f6cf2f65880ba785e2b55162809852ed3b8e581c7->leave($__internal_92bb5942e174ab04f16e832f6cf2f65880ba785e2b55162809852ed3b8e581c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92a48abf92240eb3fc784d989ffed4641faa2ee83552e3ece5a5bc420e2f1854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a48abf92240eb3fc784d989ffed4641faa2ee83552e3ece5a5bc420e2f1854->enter($__internal_92a48abf92240eb3fc784d989ffed4641faa2ee83552e3ece5a5bc420e2f1854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92a48abf92240eb3fc784d989ffed4641faa2ee83552e3ece5a5bc420e2f1854->leave($__internal_92a48abf92240eb3fc784d989ffed4641faa2ee83552e3ece5a5bc420e2f1854_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1453a3da0e7e565e1ad36464febcbd2bf8748690f600fab92efda1a1e80f3b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1453a3da0e7e565e1ad36464febcbd2bf8748690f600fab92efda1a1e80f3b6c->enter($__internal_1453a3da0e7e565e1ad36464febcbd2bf8748690f600fab92efda1a1e80f3b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1453a3da0e7e565e1ad36464febcbd2bf8748690f600fab92efda1a1e80f3b6c->leave($__internal_1453a3da0e7e565e1ad36464febcbd2bf8748690f600fab92efda1a1e80f3b6c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/jimmy/Projects/yap_project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
