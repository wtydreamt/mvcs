<?php

/* test.html */
class __TwigTemplate_41e8c1368771267e4a59b67d6eab3bc25a0f4c9e300942e21857bad4aba144aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "test.html", 1);
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<form action=\"\" method=\"post\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>标题</td>
\t\t\t\t<td><input type=\"text\" name=\"title\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>内容</td>
\t\t\t\t<td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"><input type=\"submit\" value=\"添加\"/></td>
\t\t\t</tr>
\t\t</table>
\t</form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<form action=\"\" method=\"post\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>标题</td>
\t\t\t\t<td><input type=\"text\" name=\"title\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>内容</td>
\t\t\t\t<td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td colspan=\"2\"><input type=\"submit\" value=\"添加\"/></td>
\t\t\t</tr>
\t\t</table>
\t</form>
</body>
</html>
{% endblock %}";
    }
}
