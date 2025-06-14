<?php

/* partials/nav/header.html */
class __TwigTemplate_bd8ee613027334a20b8eb96b1844a765626cad4d28ba598d0fa3e5133f53d8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<header class=header>

\t\t";
        // line 5
        echo "\t\t";
        $context["logo_title"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "logo", array(), "any", false, true), "title", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "logo", array(), "any", false, true), "title"), "Logo Here"))) : ("Logo Here"));
        // line 6
        echo "
\t\t";
        // line 8
        echo "\t\t";
        ob_start();
        // line 9
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "logo"), "use_image")) {
            // line 10
            echo "\t\t\t\t<img src='";
            echo ((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFunction('firstImage')->getCallable(), array("./content/custom/logo")));
            echo "' alt='";
            echo (isset($context["logo_title"]) ? $context["logo_title"] : null);
            echo "' />
\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t";
            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["logo_title"]) ? $context["logo_title"] : null)));
            echo "
\t  \t";
        }
        // line 14
        echo "  \t";
        $context["logo_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
  \t";
        // line 17
        echo "  \t";
        // line 18
        echo "  \t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "logo"), "use_image")) {
            $context["logo_classes"] = " logo-image";
        }
        // line 19
        echo "
\t\t";
        // line 21
        echo "\t\t<div class=nav-wrapper>
\t\t\t<nav class=nav>
\t\t\t\t<div>
\t\t\t\t";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "logo"), "enabled")) {
            // line 25
            echo "\t\t\t\t\t";
            $context["logo_link"] = ((call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "logo"), "link")))) ? (((isset($context["rootpath"]) ? $context["rootpath"] : null) . "/")) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "logo"), "link")));
            // line 26
            echo "\t\t\t\t\t<a href=\"";
            echo (isset($context["logo_link"]) ? $context["logo_link"] : null);
            echo "\" class='logo ";
            echo (isset($context["logo_classes"]) ? $context["logo_classes"] : null);
            echo "'>";
            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["logo_content"]) ? $context["logo_content"] : null)));
            echo "</a>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</div>
\t\t\t\t<ul class='menu slim'>
\t\t\t\t\t";
        // line 30
        if ((!$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "menu_disabled"))) {
            // line 31
            echo "\t\t\t\t\t\t";
            echo call_user_func_array($this->env->getFunction('getMenu')->getCallable(), array());
            echo "
\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

</header>";
    }

    public function getTemplateName()
    {
        return "partials/nav/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 26,  73 => 25,  66 => 21,  63 => 19,  58 => 18,  56 => 17,  53 => 15,  44 => 12,  36 => 10,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 106,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 82,  236 => 79,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 63,  176 => 52,  173 => 51,  170 => 49,  164 => 47,  161 => 46,  158 => 44,  148 => 41,  132 => 36,  126 => 35,  122 => 34,  105 => 30,  102 => 28,  61 => 19,  45 => 12,  22 => 2,  92 => 31,  89 => 36,  85 => 24,  81 => 31,  78 => 23,  74 => 27,  71 => 24,  67 => 23,  55 => 17,  52 => 16,  49 => 14,  40 => 11,  34 => 9,  31 => 8,  29 => 7,  26 => 4,  24 => 5,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 32,  113 => 47,  110 => 31,  107 => 45,  104 => 44,  101 => 43,  98 => 33,  95 => 27,  90 => 30,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 20,  64 => 22,  62 => 21,  59 => 19,  57 => 18,  54 => 17,  50 => 14,  46 => 13,  43 => 12,  41 => 14,  39 => 10,  37 => 9,  35 => 11,  33 => 9,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
