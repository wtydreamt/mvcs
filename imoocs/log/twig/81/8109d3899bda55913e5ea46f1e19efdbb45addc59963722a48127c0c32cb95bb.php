<?php

/* layout.html */
class __TwigTemplate_2ccfc04d14d3bd4ca01a043578902f2115999a383fa81154f619ac2ae0de9091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<body>
\t\t<header>
\t\t<div style=\"border:1px red solid;weigth:100%; height:10%\">这是头部</div>
\t\t</header>
\t\t<content>
\t\t\t";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 9
        echo "\t\t</content>
\t\t<footer>
\t\t<div>这是尾部</div>
\t\t</footer>
\t</body>
</html>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  30 => 9,  28 => 7,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
\t<body>
\t\t<header>
\t\t<div style=\"border:1px red solid;weigth:100%; height:10%\">这是头部</div>
\t\t</header>
\t\t<content>
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</content>
\t\t<footer>
\t\t<div>这是尾部</div>
\t\t</footer>
\t</body>
</html>";
    }
}
