<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2ca679dbc89ba6b4dd4cb827b48574e99e551b6ea47862a952161b2c4e7bee9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7bc06128e1aee91bc5f0f8761e3742724dd0ee855eb270413fdbdac345b26234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc06128e1aee91bc5f0f8761e3742724dd0ee855eb270413fdbdac345b26234->enter($__internal_7bc06128e1aee91bc5f0f8761e3742724dd0ee855eb270413fdbdac345b26234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc06128e1aee91bc5f0f8761e3742724dd0ee855eb270413fdbdac345b26234->leave($__internal_7bc06128e1aee91bc5f0f8761e3742724dd0ee855eb270413fdbdac345b26234_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f657e8ebd639cc0f21c8ec22ed3cc9e4641980b896aa5d524e50fff435f2b7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f657e8ebd639cc0f21c8ec22ed3cc9e4641980b896aa5d524e50fff435f2b7b2->enter($__internal_f657e8ebd639cc0f21c8ec22ed3cc9e4641980b896aa5d524e50fff435f2b7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f657e8ebd639cc0f21c8ec22ed3cc9e4641980b896aa5d524e50fff435f2b7b2->leave($__internal_f657e8ebd639cc0f21c8ec22ed3cc9e4641980b896aa5d524e50fff435f2b7b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37b9868207aa6cee52d2b0dfd20f5500af2775860867af262a5909313577bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b9868207aa6cee52d2b0dfd20f5500af2775860867af262a5909313577bd9c->enter($__internal_37b9868207aa6cee52d2b0dfd20f5500af2775860867af262a5909313577bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_37b9868207aa6cee52d2b0dfd20f5500af2775860867af262a5909313577bd9c->leave($__internal_37b9868207aa6cee52d2b0dfd20f5500af2775860867af262a5909313577bd9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd4e270b8cdf562226c3b93dacdd3c01974d2ea2b238b7fcbb0e7391d1a43ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4e270b8cdf562226c3b93dacdd3c01974d2ea2b238b7fcbb0e7391d1a43ded->enter($__internal_dd4e270b8cdf562226c3b93dacdd3c01974d2ea2b238b7fcbb0e7391d1a43ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dd4e270b8cdf562226c3b93dacdd3c01974d2ea2b238b7fcbb0e7391d1a43ded->leave($__internal_dd4e270b8cdf562226c3b93dacdd3c01974d2ea2b238b7fcbb0e7391d1a43ded_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/jimmy/Projects/yap_project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
