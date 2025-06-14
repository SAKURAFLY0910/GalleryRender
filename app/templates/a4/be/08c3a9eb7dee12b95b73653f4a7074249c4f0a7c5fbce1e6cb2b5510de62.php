<?php

/* partials/preview-image.html */
class __TwigTemplate_a4be08c3a9eb7dee12b95b73653f4a7074249c4f0a7c5fbce1e6cb2b5510de62 extends Twig_Template
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
        ob_start();
        // line 2
        echo "
";
        // line 4
        $context["page"] = ((array_key_exists("p", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["p"]) ? $context["p"] : null), (isset($context["page"]) ? $context["page"] : null)))) : ((isset($context["page"]) ? $context["page"] : null)));
        // line 5
        echo "
";
        // line 7
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image"))))) {
            // line 8
            echo "\t";
            if (twig_in_filter("/", $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image"))) {
                // line 9
                echo "\t\t";
                $context["page_image"] = ("./content" . call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(("/" . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image")))), array("{{files}}" => "custom/files", "content/" => "", "./" => ""))), array("//" => "/"))));
                // line 10
                echo "\t";
            } else {
                // line 11
                echo "\t\t";
                $context["page_image"] = (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path") . "/") . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "image"))));
                // line 12
                echo "\t";
            }
            // line 13
            echo "
\t";
            // line 15
            echo "\t";
            if (((isset($context["page_image"]) ? $context["page_image"] : null) && (call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('last')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('split')->getCallable(), array((isset($context["page_image"]) ? $context["page_image"] : null), ".")))))) > 4))) {
                // line 16
                echo "\t\t";
                $context["page_image"] = ((isset($context["page_image"]) ? $context["page_image"] : null) . ".jpg");
                // line 17
                echo "\t";
            }
        }
        // line 19
        echo "
";
        // line 21
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") == "file")) {
            // line 22
            echo "\t";
            $context["url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path");
            // line 23
            echo "
";
        } elseif (((isset($context["page_image"]) ? $context["page_image"] : null) && call_user_func_array($this->env->getFunction('exists')->getCallable(), array((isset($context["page_image"]) ? $context["page_image"] : null))))) {
            // line 26
            echo "\t";
            $context["url"] = (isset($context["page_image"]) ? $context["page_image"] : null);
            // line 27
            echo "
";
        } elseif (call_user_func_array($this->env->getFunction('exists')->getCallable(), array(($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path") . "/preview.jpg")))) {
            // line 30
            echo "\t";
            $context["url"] = ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path") . "/preview.jpg");
            // line 31
            echo "
";
        } elseif ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array(call_user_func_array($this->env->getFilter('first')->getCallable(), array($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images"))))))) {
            // line 34
            echo "\t";
            $context["url"] = call_user_func_array($this->env->getFilter('first')->getCallable(), array($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "images")));
        }
        // line 36
        echo "
";
        // line 38
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "partials/preview-image.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 38,  89 => 36,  85 => 34,  81 => 31,  78 => 30,  74 => 27,  71 => 26,  67 => 23,  55 => 17,  52 => 16,  49 => 15,  40 => 11,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 77,  205 => 76,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 58,  145 => 55,  142 => 54,  139 => 52,  137 => 51,  134 => 50,  116 => 49,  113 => 47,  110 => 46,  107 => 45,  104 => 44,  101 => 43,  98 => 41,  95 => 40,  90 => 39,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 27,  64 => 22,  62 => 21,  59 => 19,  57 => 21,  54 => 19,  50 => 18,  46 => 13,  43 => 12,  41 => 14,  39 => 13,  37 => 10,  35 => 11,  33 => 10,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
