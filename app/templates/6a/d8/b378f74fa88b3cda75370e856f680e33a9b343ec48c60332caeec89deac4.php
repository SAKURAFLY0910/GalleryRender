<?php

/* partials/module.layout.html */
class __TwigTemplate_6ad8b378f74fa88b3cda75370e856f680e33a9b343ec48c60332caeec89deac4 extends Twig_Template
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
";
        // line 3
        $context["name"] = (isset($context["module"]) ? $context["module"] : null);
        // line 4
        $context["module"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), (isset($context["module"]) ? $context["module"] : null), array(), "array");
        // line 5
        echo "
";
        // line 7
        if (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width") && ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width") != "width-default"))) {
            // line 8
            echo "\t";
            $context["width"] = $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "width");
        } elseif (($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "width") && ($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "width") != "width-default"))) {
            // line 10
            echo "  ";
            $context["width"] = $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "width");
        } else {
            // line 12
            echo "\t";
            $context["width"] = "";
        }
        // line 14
        echo "
";
        // line 16
        if ((((isset($context["width"]) ? $context["width"] : null) == "wide") || ((isset($context["name"]) ? $context["name"] : null) == "disqus"))) {
            // line 17
            echo "\t";
            $context["columns"] = "";
        } elseif (((isset($context["width"]) ? $context["width"] : null) == "narrow")) {
            // line 19
            echo "\t";
            $context["columns"] = "small-12 large-10 small-centered columns";
        } elseif (((isset($context["width"]) ? $context["width"] : null) == "narrower")) {
            // line 21
            echo "\t";
            $context["columns"] = "small-12 medium-10 large-8 small-centered columns";
        } elseif (((isset($context["width"]) ? $context["width"] : null) == "narrowest")) {
            // line 23
            echo "\t";
            $context["columns"] = "small-12 medium-9 large-6 small-centered columns";
        } else {
            // line 25
            echo "\t";
            $context["columns"] = "small-12 small-centered columns";
        }
        // line 27
        echo "
";
        // line 29
        if ((((isset($context["width"]) ? $context["width"] : null) == "wide") || ((isset($context["name"]) ? $context["name"] : null) == "disqus"))) {
            // line 30
            echo "\t<div class=module>
";
        } else {
            // line 32
            echo "\t<div class='module row'>
";
        }
        // line 34
        echo "
";
        // line 36
        ob_start();
        // line 37
        if (((isset($context["name"]) ? $context["name"] : null) == "gallery")) {
            echo "itemscope itemtype='http://schema.org/ImageGallery'";
        }
        $context["schema"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "
";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "caption"), "enabled")) {
            // line 42
            echo "\t";
            $context["caption_classes"] = $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "caption"), "align");
            // line 43
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "caption"), "hover")) {
                $context["caption_classes"] = ((isset($context["caption_classes"]) ? $context["caption_classes"] : null) . " caption-hover");
            }
        }
        // line 45
        echo "
";
        // line 47
        if ((($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "layout") == "vertical") && $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "vertical"), "horizontal_rule"))) {
            // line 48
            echo "\t";
            $context["hr"] = "hr";
        }
        // line 50
        echo "
";
        // line 56
        echo "
";
        // line 58
        ob_start();
        echo "clearfix ";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo " ";
        echo (isset($context["columns"]) ? $context["columns"] : null);
        echo " ";
        if ($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "layout")) {
            echo "layout-";
            echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "layout");
        }
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "include"), "layout");
        echo " ";
        echo $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "classes");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "include"), (isset($context["name"]) ? $context["name"] : null), array(), "array");
        echo " ";
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "classes");
        echo " ";
        echo (isset($context["caption_classes"]) ? $context["caption_classes"] : null);
        echo " ";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " title-";
        echo (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "title_size", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "title_size"), "normal"))) : ("normal"));
        echo " ";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo " ";
        echo (isset($context["hr"]) ? $context["hr"] : null);
        echo " ";
        echo (($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text_align", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "text_align"), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "context"), "text_align")))) : ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "context"), "text_align")));
        $context["module_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        $context["module_classes"] = call_user_func_array($this->env->getFilter('textAlign')->getCallable(), array(call_user_func_array($this->env->getFilter('cleanData')->getCallable(), array((isset($context["module_classes"]) ? $context["module_classes"] : null)))));
        // line 60
        echo "
";
        // line 62
        echo "<div class='";
        echo (isset($context["module_classes"]) ? $context["module_classes"] : null);
        echo "' ";
        echo (isset($context["schema"]) ? $context["schema"] : null);
        echo ">
\t";
        // line 63
        $template = $this->env->resolveTemplate((("partials/module." . (isset($context["name"]) ? $context["name"] : null)) . ".html"));
        $template->display($context);
        // line 64
        echo "\t<hr class=module-separator />
\t";
        // line 66
        echo "</div>

";
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/module.layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 64,  152 => 59,  117 => 56,  114 => 50,  108 => 47,  99 => 43,  94 => 41,  91 => 39,  48 => 17,  60 => 23,  47 => 17,  42 => 15,  123 => 47,  120 => 58,  106 => 41,  103 => 40,  100 => 38,  96 => 42,  93 => 36,  83 => 32,  80 => 30,  69 => 29,  38 => 13,  86 => 37,  76 => 27,  73 => 30,  66 => 27,  63 => 22,  58 => 20,  56 => 21,  53 => 20,  44 => 16,  36 => 10,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 106,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 82,  236 => 79,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 63,  176 => 52,  173 => 51,  170 => 66,  164 => 63,  161 => 46,  158 => 44,  148 => 41,  132 => 36,  126 => 35,  122 => 34,  105 => 45,  102 => 28,  61 => 19,  45 => 16,  22 => 3,  92 => 31,  89 => 36,  85 => 24,  81 => 34,  78 => 23,  74 => 27,  71 => 29,  67 => 23,  55 => 19,  52 => 19,  49 => 18,  40 => 13,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 69,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 62,  154 => 60,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 45,  113 => 44,  110 => 48,  107 => 45,  104 => 44,  101 => 43,  98 => 33,  95 => 27,  90 => 34,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 27,  64 => 25,  62 => 25,  59 => 19,  57 => 18,  54 => 17,  50 => 14,  46 => 16,  43 => 14,  41 => 14,  39 => 12,  37 => 9,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
