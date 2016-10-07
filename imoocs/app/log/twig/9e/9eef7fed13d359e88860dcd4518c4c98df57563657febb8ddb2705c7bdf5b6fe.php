<?php

/* index.html */
class __TwigTemplate_e57564c136b3bdcf75de92f3837bb10799935da365b713db9092800b97b0e34a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<a style=\"display:block\" href=\"/index/add\">添加</a>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "<div style=\"border:1px red solid;height:140px;width:140px;float:left;margin-right:50px\">
\t<h>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</h>
\t<p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
\t<a href=\"/index/show\">查看</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<a style=\"display:block\" href=\"/index/add\">添加</a>
{% for val in data %}
<div style=\"border:1px red solid;height:140px;width:140px;float:left;margin-right:50px\">
\t<h>{{ val.title }}</h>
\t<p>{{ val.content }}</p>
\t<a href=\"/index/show\">查看</a>
</div>
{% endfor %}
{% endblock %}";
    }
}
