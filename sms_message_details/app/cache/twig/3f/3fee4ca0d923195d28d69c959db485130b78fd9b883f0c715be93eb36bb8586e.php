<?php

/* layout.html.twig */
class __TwigTemplate_ac699b63cb83b067777579797f9c1ac9c6d7b45ad70c8cda052e075c7fd041b9 extends Twig_Template
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
<html lang=”en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"Content-Language\" content=\"en-gb\" />
    <meta name=\"author\" content=\"Group 17-3110-AN\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 12
        $this->displayBlock('banner', $context, $blocks);
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 13
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
        return array (  61 => 13,  56 => 12,  51 => 9,  45 => 14,  43 => 13,  41 => 12,  35 => 9,  30 => 7,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\CTEC3110\\coursework\\sms_message_details\\app\\templates\\layout.html.twig");
    }
}
