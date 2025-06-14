<?php

/* partials/nav/article-nav.html */
class __TwigTemplate_1f36d1ecb2312cbfabcf5cbe221c4c4abc5939dcee62ac401dbd44c47b0d0d0b extends Twig_Template
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
        if ((((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "pagenav") && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "siblings_count") > 0)) && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug"))))) && (call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "plugins"), "pagenav"), "hide_has_children"))) || ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children_count") == 0))) && (call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "plugins"), "pagenav"), "hide_root"))) || (call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), "/")))) > 2)))) {
            // line 7
            echo "
";
            // line 9
            $context["href_base"] = call_user_func_array($this->env->getFilter('dirname')->getCallable(), array((isset($context["rootpath_page"]) ? $context["rootpath_page"] : null)));
            // line 10
            if ((call_user_func_array($this->env->getFilter('last')->getCallable(), array($this->env, (isset($context["href_base"]) ? $context["href_base"] : null))) != "/")) {
                $context["href_base"] = ((isset($context["href_base"]) ? $context["href_base"] : null) . "/");
            }
            // line 11
            echo "
";
            // line 13
            echo "<div class=article-nav>

\t";
            // line 15
            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_sibling"), 0, array(), "array"))))) {
                // line 16
                echo "\t\t";
                $context["next"] = call_user_func_array($this->env->getFunction('getSibling')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "next_sibling"), 0, array(), "array")));
                // line 17
                echo "\t\t<a href='";
                echo (((isset($context["href_base"]) ? $context["href_base"] : null) . (isset($context["next"]) ? $context["next"] : null)) . "/");
                echo "' class='next'><span>";
                echo call_user_func_array($this->env->getFilter('title')->getCallable(), array($this->env, (isset($context["next"]) ? $context["next"] : null)));
                echo "</span></a>
\t";
            }
            // line 19
            echo "
\t";
            // line 20
            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "previous_sibling"), 0, array(), "array"))))) {
                // line 21
                echo "\t\t";
                $context["previous"] = call_user_func_array($this->env->getFunction('getSibling')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "previous_sibling"), 0, array(), "array")));
                // line 22
                echo "\t\t<a href='";
                echo (((isset($context["href_base"]) ? $context["href_base"] : null) . (isset($context["previous"]) ? $context["previous"] : null)) . "/");
                echo "' class='previous'><span>";
                echo call_user_func_array($this->env->getFilter('title')->getCallable(), array($this->env, (isset($context["previous"]) ? $context["previous"] : null)));
                echo "</span></a>
\t";
            }
            // line 24
            echo "
</div>
";
        }
        // line 27
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "partials/nav/article-nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  47 => 17,  42 => 15,  123 => 47,  120 => 46,  106 => 41,  103 => 40,  100 => 38,  96 => 37,  93 => 36,  83 => 32,  80 => 30,  69 => 29,  38 => 13,  86 => 33,  76 => 27,  73 => 25,  66 => 27,  63 => 22,  58 => 20,  56 => 22,  53 => 20,  44 => 16,  36 => 10,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 106,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 82,  236 => 79,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 63,  176 => 52,  173 => 51,  170 => 49,  164 => 47,  161 => 46,  158 => 44,  148 => 41,  132 => 36,  126 => 35,  122 => 34,  105 => 30,  102 => 28,  61 => 19,  45 => 16,  22 => 2,  92 => 31,  89 => 36,  85 => 24,  81 => 31,  78 => 23,  74 => 27,  71 => 24,  67 => 23,  55 => 19,  52 => 16,  49 => 18,  40 => 13,  34 => 9,  31 => 10,  29 => 9,  26 => 7,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 45,  113 => 44,  110 => 42,  107 => 45,  104 => 44,  101 => 43,  98 => 33,  95 => 27,  90 => 34,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 20,  64 => 22,  62 => 25,  59 => 19,  57 => 18,  54 => 17,  50 => 14,  46 => 13,  43 => 15,  41 => 14,  39 => 10,  37 => 9,  35 => 11,  33 => 9,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
