<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_f8042249f9942919505026a57f31b3bacb0c351af28ba702a68e959840b7aabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8042249f9942919505026a57f31b3bacb0c351af28ba702a68e959840b7aabd->enter($__internal_f8042249f9942919505026a57f31b3bacb0c351af28ba702a68e959840b7aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4ddf9d2aa07176bb88db8fbc0443a61bfde89e7d31ce14ec2b6420a16eabe78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddf9d2aa07176bb88db8fbc0443a61bfde89e7d31ce14ec2b6420a16eabe78f->enter($__internal_4ddf9d2aa07176bb88db8fbc0443a61bfde89e7d31ce14ec2b6420a16eabe78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8042249f9942919505026a57f31b3bacb0c351af28ba702a68e959840b7aabd->leave($__internal_f8042249f9942919505026a57f31b3bacb0c351af28ba702a68e959840b7aabd_prof);

        
        $__internal_4ddf9d2aa07176bb88db8fbc0443a61bfde89e7d31ce14ec2b6420a16eabe78f->leave($__internal_4ddf9d2aa07176bb88db8fbc0443a61bfde89e7d31ce14ec2b6420a16eabe78f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c2e2ba6a7e5d2d6292223fafa0949f7f738c855554d4748504a0947b69539b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2e2ba6a7e5d2d6292223fafa0949f7f738c855554d4748504a0947b69539b0->enter($__internal_4c2e2ba6a7e5d2d6292223fafa0949f7f738c855554d4748504a0947b69539b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_157f4d0d17538842ab43919a5f0c5cf832d02fdcaee27969db41076eca828af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157f4d0d17538842ab43919a5f0c5cf832d02fdcaee27969db41076eca828af1->enter($__internal_157f4d0d17538842ab43919a5f0c5cf832d02fdcaee27969db41076eca828af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_157f4d0d17538842ab43919a5f0c5cf832d02fdcaee27969db41076eca828af1->leave($__internal_157f4d0d17538842ab43919a5f0c5cf832d02fdcaee27969db41076eca828af1_prof);

        
        $__internal_4c2e2ba6a7e5d2d6292223fafa0949f7f738c855554d4748504a0947b69539b0->leave($__internal_4c2e2ba6a7e5d2d6292223fafa0949f7f738c855554d4748504a0947b69539b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_825b83d298928cff5d1daa4bf174af2af8034b7535ccd717edb54cc30a13af77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825b83d298928cff5d1daa4bf174af2af8034b7535ccd717edb54cc30a13af77->enter($__internal_825b83d298928cff5d1daa4bf174af2af8034b7535ccd717edb54cc30a13af77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ba840bfb3cfe24cccfeb938676b63fe547ac7c29243bfc804391568ecbfdcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba840bfb3cfe24cccfeb938676b63fe547ac7c29243bfc804391568ecbfdcfe->enter($__internal_5ba840bfb3cfe24cccfeb938676b63fe547ac7c29243bfc804391568ecbfdcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ba840bfb3cfe24cccfeb938676b63fe547ac7c29243bfc804391568ecbfdcfe->leave($__internal_5ba840bfb3cfe24cccfeb938676b63fe547ac7c29243bfc804391568ecbfdcfe_prof);

        
        $__internal_825b83d298928cff5d1daa4bf174af2af8034b7535ccd717edb54cc30a13af77->leave($__internal_825b83d298928cff5d1daa4bf174af2af8034b7535ccd717edb54cc30a13af77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1aa95c3f1f6343cdab0a51bacc5d9fa757a88eb426c8d9bc32f97c33a9fdc92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa95c3f1f6343cdab0a51bacc5d9fa757a88eb426c8d9bc32f97c33a9fdc92d->enter($__internal_1aa95c3f1f6343cdab0a51bacc5d9fa757a88eb426c8d9bc32f97c33a9fdc92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5efd81f2f20af35286b9de3f2d8c5337bb11af796d2cf2fcd3bef0b8e2bd695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5efd81f2f20af35286b9de3f2d8c5337bb11af796d2cf2fcd3bef0b8e2bd695->enter($__internal_f5efd81f2f20af35286b9de3f2d8c5337bb11af796d2cf2fcd3bef0b8e2bd695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5efd81f2f20af35286b9de3f2d8c5337bb11af796d2cf2fcd3bef0b8e2bd695->leave($__internal_f5efd81f2f20af35286b9de3f2d8c5337bb11af796d2cf2fcd3bef0b8e2bd695_prof);

        
        $__internal_1aa95c3f1f6343cdab0a51bacc5d9fa757a88eb426c8d9bc32f97c33a9fdc92d->leave($__internal_1aa95c3f1f6343cdab0a51bacc5d9fa757a88eb426c8d9bc32f97c33a9fdc92d_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/wilder10/PhpstormProjects/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
