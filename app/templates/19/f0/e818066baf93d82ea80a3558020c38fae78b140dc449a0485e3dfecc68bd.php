<?php

/* partials/content.html */
class __TwigTemplate_19f0e818066baf93d82ea80a3558020c38fae78b140dc449a0485e3dfecc68bd extends Twig_Template
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
        $this->env->loadTemplate("partials/nav/article-nav.html")->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
        // line 2
        echo "
";
        // line 4
        $context["layout"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "layout");
        // line 6
        $context["items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "items"), ","));
        // line 7
        echo "
";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "disqus_shortname") && $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "disqus"))) {
            $context["items"] = call_user_func_array($this->env->getFilter('merge')->getCallable(), array((isset($context["items"]) ? $context["items"] : null), array(0 => "disqus")));
        }
        // line 10
        echo "
";
        // line 12
        $context["container"] = "partials/module.layout.html";
        // line 13
        echo "
";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "folders"), "assets") && call_user_func_array($this->env->getFunction('exists')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "folders"), "assets"), "/")))))) {
            // line 16
            echo "\t";
            $context["folder"] = call_user_func_array($this->env->getFunction('get')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "folders"), "assets"), "/"))));
        } else {
            // line 18
            echo "\t";
            $context["folder"] = (isset($context["page"]) ? $context["page"] : null);
        }
        // line 20
        echo "
";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "assets") && call_user_func_array($this->env->getFunction('exists')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "assets"), "/")))))) {
            // line 23
            echo "\t";
            $context["gallery"] = call_user_func_array($this->env->getFunction('get')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "assets"), "/"))));
        } else {
            // line 25
            echo "\t";
            $context["gallery"] = (isset($context["page"]) ? $context["page"] : null);
        }
        // line 27
        echo "
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if ((!$this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), (isset($context["module"]) ? $context["module"] : null), array(), "array"), "hide"))) {
                // line 30
                echo "
\t";
                // line 32
                echo "\t";
                if (((isset($context["module"]) ? $context["module"] : null) == "context")) {
                    // line 33
                    echo "\t";
                    $template = $this->env->resolveTemplate((isset($context["container"]) ? $context["container"] : null));
                    $template->display(array_merge($context, array("module" => (isset($context["module"]) ? $context["module"] : null), "default" => true)));
                    // line 34
                    echo "
\t";
                    // line 36
                    echo "\t";
                } elseif ((((isset($context["module"]) ? $context["module"] : null) == "folders") && ($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "children_count") > 0))) {
                    // line 37
                    echo "\t";
                    $template = $this->env->resolveTemplate((isset($context["container"]) ? $context["container"] : null));
                    $template->display(array_merge($context, array("module" => (isset($context["module"]) ? $context["module"] : null), "default" => true, "class" => "images")));
                    // line 38
                    echo "
\t";
                    // line 40
                    echo "\t";
                } elseif ((((isset($context["module"]) ? $context["module"] : null) == "gallery") && (((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"))) > 0) || $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "embed")) || (call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "video"))) > 0)))) {
                    // line 41
                    echo "\t\t";
                    $template = $this->env->resolveTemplate((isset($context["container"]) ? $context["container"] : null));
                    $template->display(array_merge($context, array("module" => (isset($context["module"]) ? $context["module"] : null), "default" => true, "class" => "images")));
                    // line 42
                    echo "
\t";
                    // line 44
                    echo "\t";
                } elseif (((isset($context["module"]) ? $context["module"] : null) == "disqus")) {
                    // line 45
                    echo "\t";
                    $template = $this->env->resolveTemplate((isset($context["container"]) ? $context["container"] : null));
                    $template->display(array_merge($context, array("module" => (isset($context["module"]) ? $context["module"] : null), "default" => false)));
                    // line 46
                    echo "\t";
                }
                // line 47
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  120 => 46,  106 => 41,  103 => 40,  100 => 38,  96 => 37,  93 => 36,  83 => 32,  80 => 30,  69 => 29,  38 => 12,  86 => 33,  76 => 26,  73 => 25,  66 => 27,  63 => 19,  58 => 23,  56 => 22,  53 => 20,  44 => 12,  36 => 10,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 106,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 82,  236 => 79,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 63,  176 => 52,  173 => 51,  170 => 49,  164 => 47,  161 => 46,  158 => 44,  148 => 41,  132 => 36,  126 => 35,  122 => 34,  105 => 30,  102 => 28,  61 => 19,  45 => 16,  22 => 2,  92 => 31,  89 => 36,  85 => 24,  81 => 31,  78 => 23,  74 => 27,  71 => 24,  67 => 23,  55 => 17,  52 => 16,  49 => 18,  40 => 13,  34 => 9,  31 => 9,  29 => 7,  26 => 6,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 45,  113 => 44,  110 => 42,  107 => 45,  104 => 44,  101 => 43,  98 => 33,  95 => 27,  90 => 34,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 20,  64 => 22,  62 => 25,  59 => 19,  57 => 18,  54 => 17,  50 => 14,  46 => 13,  43 => 15,  41 => 14,  39 => 10,  37 => 9,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
