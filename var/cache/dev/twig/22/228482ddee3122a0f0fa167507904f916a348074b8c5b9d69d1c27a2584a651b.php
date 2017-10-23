<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96060d2035f15ad19b389e78d90cce7e7f3ff6d1a309af49d90499ce8f014042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96060d2035f15ad19b389e78d90cce7e7f3ff6d1a309af49d90499ce8f014042->enter($__internal_96060d2035f15ad19b389e78d90cce7e7f3ff6d1a309af49d90499ce8f014042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1f25581526507db29a21582e0f06e67c6a8449c503d5eec00f5c9401c1cf245f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f25581526507db29a21582e0f06e67c6a8449c503d5eec00f5c9401c1cf245f->enter($__internal_1f25581526507db29a21582e0f06e67c6a8449c503d5eec00f5c9401c1cf245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96060d2035f15ad19b389e78d90cce7e7f3ff6d1a309af49d90499ce8f014042->leave($__internal_96060d2035f15ad19b389e78d90cce7e7f3ff6d1a309af49d90499ce8f014042_prof);

        
        $__internal_1f25581526507db29a21582e0f06e67c6a8449c503d5eec00f5c9401c1cf245f->leave($__internal_1f25581526507db29a21582e0f06e67c6a8449c503d5eec00f5c9401c1cf245f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c247e354e76fc59a1ccef2e3bbdf41927115182b68bf1e023bd8886ce47b2b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c247e354e76fc59a1ccef2e3bbdf41927115182b68bf1e023bd8886ce47b2b78->enter($__internal_c247e354e76fc59a1ccef2e3bbdf41927115182b68bf1e023bd8886ce47b2b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4d3e4b43b8231c16b7a4063a79d0f76202abe42c271675d72799707d99df0c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3e4b43b8231c16b7a4063a79d0f76202abe42c271675d72799707d99df0c61->enter($__internal_4d3e4b43b8231c16b7a4063a79d0f76202abe42c271675d72799707d99df0c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4d3e4b43b8231c16b7a4063a79d0f76202abe42c271675d72799707d99df0c61->leave($__internal_4d3e4b43b8231c16b7a4063a79d0f76202abe42c271675d72799707d99df0c61_prof);

        
        $__internal_c247e354e76fc59a1ccef2e3bbdf41927115182b68bf1e023bd8886ce47b2b78->leave($__internal_c247e354e76fc59a1ccef2e3bbdf41927115182b68bf1e023bd8886ce47b2b78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/wilder10/PhpstormProjects/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
