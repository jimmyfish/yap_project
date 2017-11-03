<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_219e182815712706c6c30fdc6aa61e14d97e507e1a76d5f81d2bc07b34b8a027 extends Twig_Template
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
        $__internal_40c84121d938ead01d8e5656228613c1cabe86ece64a59277494d021e667fc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c84121d938ead01d8e5656228613c1cabe86ece64a59277494d021e667fc57->enter($__internal_40c84121d938ead01d8e5656228613c1cabe86ece64a59277494d021e667fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c84121d938ead01d8e5656228613c1cabe86ece64a59277494d021e667fc57->leave($__internal_40c84121d938ead01d8e5656228613c1cabe86ece64a59277494d021e667fc57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_905e37b5a550ff831c2a28e32dbc7a01c96122f0d047a51d0e5b9f8ff9a557a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905e37b5a550ff831c2a28e32dbc7a01c96122f0d047a51d0e5b9f8ff9a557a3->enter($__internal_905e37b5a550ff831c2a28e32dbc7a01c96122f0d047a51d0e5b9f8ff9a557a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_905e37b5a550ff831c2a28e32dbc7a01c96122f0d047a51d0e5b9f8ff9a557a3->leave($__internal_905e37b5a550ff831c2a28e32dbc7a01c96122f0d047a51d0e5b9f8ff9a557a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e51c833a5b45f2a047892a6008fdcc1fd3bae3e949ea05ae0806aad543282ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e51c833a5b45f2a047892a6008fdcc1fd3bae3e949ea05ae0806aad543282ad->enter($__internal_3e51c833a5b45f2a047892a6008fdcc1fd3bae3e949ea05ae0806aad543282ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e51c833a5b45f2a047892a6008fdcc1fd3bae3e949ea05ae0806aad543282ad->leave($__internal_3e51c833a5b45f2a047892a6008fdcc1fd3bae3e949ea05ae0806aad543282ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7086b7de2b0b5f9db3ce377ee1c9568f44420b0d28544accd5ce2283d9232fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7086b7de2b0b5f9db3ce377ee1c9568f44420b0d28544accd5ce2283d9232fe4->enter($__internal_7086b7de2b0b5f9db3ce377ee1c9568f44420b0d28544accd5ce2283d9232fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7086b7de2b0b5f9db3ce377ee1c9568f44420b0d28544accd5ce2283d9232fe4->leave($__internal_7086b7de2b0b5f9db3ce377ee1c9568f44420b0d28544accd5ce2283d9232fe4_prof);

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
