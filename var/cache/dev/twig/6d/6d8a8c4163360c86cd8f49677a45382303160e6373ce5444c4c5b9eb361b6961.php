<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70871d918b1d194b2f798cee682203da4a937c9adf36f36f922afc4e0e885f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70871d918b1d194b2f798cee682203da4a937c9adf36f36f922afc4e0e885f8->enter($__internal_d70871d918b1d194b2f798cee682203da4a937c9adf36f36f922afc4e0e885f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a4239c8acba26b2371258c1260d5288710f2746e107f283f348ab6ac1aa3c23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4239c8acba26b2371258c1260d5288710f2746e107f283f348ab6ac1aa3c23a->enter($__internal_a4239c8acba26b2371258c1260d5288710f2746e107f283f348ab6ac1aa3c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d70871d918b1d194b2f798cee682203da4a937c9adf36f36f922afc4e0e885f8->leave($__internal_d70871d918b1d194b2f798cee682203da4a937c9adf36f36f922afc4e0e885f8_prof);

        
        $__internal_a4239c8acba26b2371258c1260d5288710f2746e107f283f348ab6ac1aa3c23a->leave($__internal_a4239c8acba26b2371258c1260d5288710f2746e107f283f348ab6ac1aa3c23a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf086a8befe877212f8fae3a7cee3335331689d96f21ae2e327b6a6dac83fd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf086a8befe877212f8fae3a7cee3335331689d96f21ae2e327b6a6dac83fd2e->enter($__internal_bf086a8befe877212f8fae3a7cee3335331689d96f21ae2e327b6a6dac83fd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c4be2b953f7472cd810caee55b1764db37fb8648b3e86739814e1d20d85ff2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4be2b953f7472cd810caee55b1764db37fb8648b3e86739814e1d20d85ff2f->enter($__internal_7c4be2b953f7472cd810caee55b1764db37fb8648b3e86739814e1d20d85ff2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7c4be2b953f7472cd810caee55b1764db37fb8648b3e86739814e1d20d85ff2f->leave($__internal_7c4be2b953f7472cd810caee55b1764db37fb8648b3e86739814e1d20d85ff2f_prof);

        
        $__internal_bf086a8befe877212f8fae3a7cee3335331689d96f21ae2e327b6a6dac83fd2e->leave($__internal_bf086a8befe877212f8fae3a7cee3335331689d96f21ae2e327b6a6dac83fd2e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4726fc7be4ee13ec7be2c9f91ea141e77b35b46e695c003f02b7ddd6a18b9f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4726fc7be4ee13ec7be2c9f91ea141e77b35b46e695c003f02b7ddd6a18b9f8c->enter($__internal_4726fc7be4ee13ec7be2c9f91ea141e77b35b46e695c003f02b7ddd6a18b9f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d71c0d70d7e6b982912e105d6917b722545e7a90f7fa81149e8717c3539c703f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71c0d70d7e6b982912e105d6917b722545e7a90f7fa81149e8717c3539c703f->enter($__internal_d71c0d70d7e6b982912e105d6917b722545e7a90f7fa81149e8717c3539c703f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d71c0d70d7e6b982912e105d6917b722545e7a90f7fa81149e8717c3539c703f->leave($__internal_d71c0d70d7e6b982912e105d6917b722545e7a90f7fa81149e8717c3539c703f_prof);

        
        $__internal_4726fc7be4ee13ec7be2c9f91ea141e77b35b46e695c003f02b7ddd6a18b9f8c->leave($__internal_4726fc7be4ee13ec7be2c9f91ea141e77b35b46e695c003f02b7ddd6a18b9f8c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff6900a4b981ff3f74fbab478c19951b4274e7bc871a5eaff4bbbe4f31877a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6900a4b981ff3f74fbab478c19951b4274e7bc871a5eaff4bbbe4f31877a80->enter($__internal_ff6900a4b981ff3f74fbab478c19951b4274e7bc871a5eaff4bbbe4f31877a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72b560ac821b3c009d10b6c3c62d53a016c94775374cbae6422fc5997b386ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b560ac821b3c009d10b6c3c62d53a016c94775374cbae6422fc5997b386ef7->enter($__internal_72b560ac821b3c009d10b6c3c62d53a016c94775374cbae6422fc5997b386ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72b560ac821b3c009d10b6c3c62d53a016c94775374cbae6422fc5997b386ef7->leave($__internal_72b560ac821b3c009d10b6c3c62d53a016c94775374cbae6422fc5997b386ef7_prof);

        
        $__internal_ff6900a4b981ff3f74fbab478c19951b4274e7bc871a5eaff4bbbe4f31877a80->leave($__internal_ff6900a4b981ff3f74fbab478c19951b4274e7bc871a5eaff4bbbe4f31877a80_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80e60d92d80d84101274a5a748f3f816e785f0a03ab8cf6bb591ebbcc37816b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e60d92d80d84101274a5a748f3f816e785f0a03ab8cf6bb591ebbcc37816b8->enter($__internal_80e60d92d80d84101274a5a748f3f816e785f0a03ab8cf6bb591ebbcc37816b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f60196a3b303e62aba45eb793d2f66bd647aa8a49715f5021ba9143f04ab536e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60196a3b303e62aba45eb793d2f66bd647aa8a49715f5021ba9143f04ab536e->enter($__internal_f60196a3b303e62aba45eb793d2f66bd647aa8a49715f5021ba9143f04ab536e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f60196a3b303e62aba45eb793d2f66bd647aa8a49715f5021ba9143f04ab536e->leave($__internal_f60196a3b303e62aba45eb793d2f66bd647aa8a49715f5021ba9143f04ab536e_prof);

        
        $__internal_80e60d92d80d84101274a5a748f3f816e785f0a03ab8cf6bb591ebbcc37816b8->leave($__internal_80e60d92d80d84101274a5a748f3f816e785f0a03ab8cf6bb591ebbcc37816b8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/wilder10/PhpstormProjects/flyaround/app/Resources/views/base.html.twig");
    }
}
