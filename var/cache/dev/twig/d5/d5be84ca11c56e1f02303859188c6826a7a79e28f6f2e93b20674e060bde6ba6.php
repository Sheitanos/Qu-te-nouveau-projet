<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_b5d687918a4edad21b986f7533d811f66be4500201e9d70e6710ab2970007705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d687918a4edad21b986f7533d811f66be4500201e9d70e6710ab2970007705->enter($__internal_b5d687918a4edad21b986f7533d811f66be4500201e9d70e6710ab2970007705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_42bd6ce144cc23f3d0b18a124e184ba09b946f166e6a5ef6c27dbc44caf94418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bd6ce144cc23f3d0b18a124e184ba09b946f166e6a5ef6c27dbc44caf94418->enter($__internal_42bd6ce144cc23f3d0b18a124e184ba09b946f166e6a5ef6c27dbc44caf94418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d687918a4edad21b986f7533d811f66be4500201e9d70e6710ab2970007705->leave($__internal_b5d687918a4edad21b986f7533d811f66be4500201e9d70e6710ab2970007705_prof);

        
        $__internal_42bd6ce144cc23f3d0b18a124e184ba09b946f166e6a5ef6c27dbc44caf94418->leave($__internal_42bd6ce144cc23f3d0b18a124e184ba09b946f166e6a5ef6c27dbc44caf94418_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb7f08cf2ba9d2e5c468759526cd904433da84bea85c08ab6ea59974cf6a253c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7f08cf2ba9d2e5c468759526cd904433da84bea85c08ab6ea59974cf6a253c->enter($__internal_cb7f08cf2ba9d2e5c468759526cd904433da84bea85c08ab6ea59974cf6a253c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4c1151e53cd0a88e91b15bfdd20f09f5c57e86c70ad11c47c3214fc714aad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1151e53cd0a88e91b15bfdd20f09f5c57e86c70ad11c47c3214fc714aad7f->enter($__internal_f4c1151e53cd0a88e91b15bfdd20f09f5c57e86c70ad11c47c3214fc714aad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f4c1151e53cd0a88e91b15bfdd20f09f5c57e86c70ad11c47c3214fc714aad7f->leave($__internal_f4c1151e53cd0a88e91b15bfdd20f09f5c57e86c70ad11c47c3214fc714aad7f_prof);

        
        $__internal_cb7f08cf2ba9d2e5c468759526cd904433da84bea85c08ab6ea59974cf6a253c->leave($__internal_cb7f08cf2ba9d2e5c468759526cd904433da84bea85c08ab6ea59974cf6a253c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78f07c1257dc23b11620ed082dcac5695dbfd80802892bfdfc7d72fb3cf0918b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f07c1257dc23b11620ed082dcac5695dbfd80802892bfdfc7d72fb3cf0918b->enter($__internal_78f07c1257dc23b11620ed082dcac5695dbfd80802892bfdfc7d72fb3cf0918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b29848db8196121e5358ad2c1ecf2ce137e16cfdbbed7f43c2f09cf3594c937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b29848db8196121e5358ad2c1ecf2ce137e16cfdbbed7f43c2f09cf3594c937->enter($__internal_2b29848db8196121e5358ad2c1ecf2ce137e16cfdbbed7f43c2f09cf3594c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2b29848db8196121e5358ad2c1ecf2ce137e16cfdbbed7f43c2f09cf3594c937->leave($__internal_2b29848db8196121e5358ad2c1ecf2ce137e16cfdbbed7f43c2f09cf3594c937_prof);

        
        $__internal_78f07c1257dc23b11620ed082dcac5695dbfd80802892bfdfc7d72fb3cf0918b->leave($__internal_78f07c1257dc23b11620ed082dcac5695dbfd80802892bfdfc7d72fb3cf0918b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_555dcd7410b4a1e1c70fd53ae58c07d50bc24537d3adccbdbaaee19d7fc9f180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555dcd7410b4a1e1c70fd53ae58c07d50bc24537d3adccbdbaaee19d7fc9f180->enter($__internal_555dcd7410b4a1e1c70fd53ae58c07d50bc24537d3adccbdbaaee19d7fc9f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b9670048e32c2c4e693b905ca460c12fb63f6be686b0219fdc08332c39ae551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9670048e32c2c4e693b905ca460c12fb63f6be686b0219fdc08332c39ae551->enter($__internal_0b9670048e32c2c4e693b905ca460c12fb63f6be686b0219fdc08332c39ae551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0b9670048e32c2c4e693b905ca460c12fb63f6be686b0219fdc08332c39ae551->leave($__internal_0b9670048e32c2c4e693b905ca460c12fb63f6be686b0219fdc08332c39ae551_prof);

        
        $__internal_555dcd7410b4a1e1c70fd53ae58c07d50bc24537d3adccbdbaaee19d7fc9f180->leave($__internal_555dcd7410b4a1e1c70fd53ae58c07d50bc24537d3adccbdbaaee19d7fc9f180_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/home/wilder10/PhpstormProjects/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
