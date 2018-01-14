<?php

/* layout.html.twig */
class __TwigTemplate_b94f627e9896de7d1b24024f2e8925f1c70bb94cc9f4e2bd48de5aeeedf05e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"author\" content=\"Group 17-3110-AN\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 11
        $this->displayBlock('banner', $context, $blocks);
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  55 => 11,  50 => 8,  44 => 13,  42 => 12,  40 => 11,  34 => 8,  29 => 6,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "D:\\XAMPP\\htdocs\\CTEC3110\\ctec3110-assignment\\sms_message_details\\app\\templates\\layout.html.twig");
    }
}
