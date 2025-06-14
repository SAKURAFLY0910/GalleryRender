<?php

/* page.json */
class __TwigTemplate_49d65bffffd87e628a7a552f93c3be20e2d4570147fc3b6e4fb2136cebdfd3e7 extends Twig_Template
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
        // line 5
        $context["baseurl"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        // line 6
        echo "
";
        // line 8
        $context["absolutepath"] = call_user_func_array($this->env->getFilter('addprotocol')->getCallable(), array((isset($context["baseurl"]) ? $context["baseurl"] : null)));
        // line 9
        $context["rootpath"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["baseurl"]) ? $context["baseurl"] : null), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "domain_name") => "")));
        // line 10
        $context["assetspath"] = call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files"), "/")), (isset($context["rootpath"]) ? $context["rootpath"] : null)));
        // line 11
        $context["absolutepath_page"] = call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), (isset($context["absolutepath"]) ? $context["absolutepath"] : null)));
        // line 12
        $context["rootpath_page"] = call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null)));
        // line 13
        echo "
";
        // line 15
        ob_start();
        $this->env->loadTemplate("partials/preview-image.html")->display($context);
        $context["preview_image"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        if (call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null)))) {
            $context["preview_image"] = call_user_func_array($this->env->getFunction('get_default_preview_image')->getCallable(), array());
        }
        // line 17
        echo "
";
        // line 19
        $context["preview_image_full"] = (call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files"), "/")), (isset($context["absolutepath"]) ? $context["absolutepath"] : null))) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null), ".")));
        // line 20
        echo "
";
        // line 22
        $context["page_title"] = "";
        // line 23
        $context["page_description"] = "";
        // line 24
        echo "
";
        // line 26
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") == "file")) {
            // line 27
            echo "
\t";
            // line 29
            echo "\t";
            $context["dirname"] = call_user_func_array($this->env->getFilter('dirname')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink")));
            // line 30
            echo "\t";
            if ((((isset($context["dirname"]) ? $context["dirname"] : null) == ".") || call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["dirname"]) ? $context["dirname"] : null))))) {
                $context["dirname"] = "/";
            }
            // line 31
            echo "\t";
            $context["parent"] = call_user_func_array($this->env->getFunction('get')->getCallable(), array((isset($context["dirname"]) ? $context["dirname"] : null)));
            // line 32
            echo "
\t";
            // line 34
            echo "\t";
            $context["this"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path");
            // line 35
            echo "\t";
            $context["image_description"] = "";
            // line 36
            echo "\t";
            $context["file_index"] = 0;
            // line 37
            echo "\t";
            $context["myimage"] = "";
            // line 38
            echo "
\t";
            // line 40
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "images"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "\t\t";
                if (((isset($context["this"]) ? $context["this"] : null) == $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"))) {
                    // line 42
                    echo "
\t\t\t";
                    // line 44
                    echo "\t    ";
                    $context["page_title"] = call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array(call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "title"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "title_include"), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"))), "<a><span><em><i><b><strong><small><s><mark>")), array("{file_name}" => call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")))), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name")));
                    // line 45
                    echo "\t\t\t";
                    $context["image_description"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array(call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "description"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "description_include"), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"))), "<a><span><em><i><b><strong><small><s><br><mark><img><kbd><code><button>")), array("{file_name}" => call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))));
                    // line 46
                    echo "\t\t\t";
                    $context["page_description"] = ((array_key_exists("image_description", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null), (((isset($context["page_title"]) ? $context["page_title"] : null) . " | ") . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "title"))))) : ((((isset($context["page_title"]) ? $context["page_title"] : null) . " | ") . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "title"))));
                    // line 47
                    echo "\t\t\t";
                    $context["file_index"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0");
                    // line 48
                    echo "\t\t\t";
                    $context["myimage"] = (isset($context["image"]) ? $context["image"] : null);
                    // line 49
                    echo "
\t\t";
                }
                // line 51
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
\t";
            // line 54
            echo "\t";
            $context["template"] = "partials/file.html";
            // line 55
            echo "
";
        } else {
            // line 58
            echo "\t";
            $context["page_title"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
            // line 59
            echo "\t";
            $context["page_description"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description");
            // line 60
            echo "\t";
            $context["template"] = "partials/content.html";
        }
        // line 62
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 65
        ob_start();
        ob_start();
        $template = $this->env->resolveTemplate((isset($context["template"]) ? $context["template"] : null));
        $template->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo call_user_func_array($this->env->getFunction('pageJson')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null), (isset($context["page_description"]) ? $context["page_description"] : null), (isset($context["content"]) ? $context["content"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), (isset($context["preview_image_full"]) ? $context["preview_image_full"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path")));
    }

    public function getTemplateName()
    {
        return "page.json";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 66,  180 => 65,  176 => 62,  172 => 60,  169 => 59,  166 => 58,  162 => 55,  159 => 54,  156 => 52,  142 => 51,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  126 => 45,  123 => 44,  120 => 42,  117 => 41,  99 => 40,  96 => 38,  93 => 37,  90 => 36,  87 => 35,  84 => 34,  81 => 32,  78 => 31,  73 => 30,  70 => 29,  67 => 27,  65 => 26,  62 => 24,  60 => 23,  58 => 22,  55 => 20,  53 => 19,  50 => 17,  46 => 16,  42 => 15,  39 => 13,  37 => 12,  35 => 11,  33 => 10,  31 => 9,  29 => 8,  26 => 6,  24 => 5,  21 => 2,  19 => 1,);
    }
}
