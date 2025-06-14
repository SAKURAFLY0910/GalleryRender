<?php

/* page.html */
class __TwigTemplate_cc29202264ab201d0d43a63882c31b1c06ae7e7992a5c371c52f885633d0acfa extends Twig_Template
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
        echo "<!doctype html>
<!-- X3 website by www.photo.gallery -->
";
        // line 3
        ob_start();
        // line 4
        echo "
";
        // line 7
        $context["baseurl"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        // line 8
        echo "
";
        // line 10
        $context["absolutepath"] = call_user_func_array($this->env->getFilter('addprotocol')->getCallable(), array((isset($context["baseurl"]) ? $context["baseurl"] : null)));
        // line 11
        $context["rootpath"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["baseurl"]) ? $context["baseurl"] : null), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "domain_name") => "")));
        // line 12
        $context["assetspath"] = call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files"), "/")), (isset($context["rootpath"]) ? $context["rootpath"] : null)));
        // line 13
        $context["absolutepath_page"] = call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), (isset($context["absolutepath"]) ? $context["absolutepath"] : null)));
        // line 14
        $context["rootpath_page"] = call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null)));
        // line 15
        echo "
";
        // line 17
        ob_start();
        $this->env->loadTemplate("partials/preview-image.html")->display($context);
        $context["preview_image"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        if (call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null)))) {
            $context["preview_image"] = call_user_func_array($this->env->getFunction('get_default_preview_image')->getCallable(), array());
        }
        // line 19
        echo "
";
        // line 21
        $context["preview_image_full"] = (call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files"), "/")), (isset($context["absolutepath"]) ? $context["absolutepath"] : null))) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null), ".")));
        // line 22
        echo "
";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            // line 25
            echo "\t";
            $context["cdn_core"] = "https://d30xwzl2pxzvti.cloudfront.net";
        } else {
            // line 27
            echo "\t";
            $context["cdn_core"] = ((isset($context["rootpath"]) ? $context["rootpath"] : null) . "/app/public");
        }
        // line 29
        echo "
";
        // line 31
        $context["page_title"] = "";
        // line 32
        $context["page_description"] = "";
        // line 33
        echo "
";
        // line 35
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name") == "file")) {
            // line 36
            echo "
\t";
            // line 38
            echo "\t";
            $context["dirname"] = call_user_func_array($this->env->getFilter('dirname')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink")));
            // line 39
            echo "\t";
            if ((((isset($context["dirname"]) ? $context["dirname"] : null) == ".") || call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["dirname"]) ? $context["dirname"] : null))))) {
                $context["dirname"] = "/";
            }
            // line 40
            echo "\t";
            $context["parent"] = call_user_func_array($this->env->getFunction('get')->getCallable(), array((isset($context["dirname"]) ? $context["dirname"] : null)));
            // line 41
            echo "
\t";
            // line 43
            echo "\t";
            $context["this"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path");
            // line 44
            echo "\t";
            $context["image_description"] = "";
            // line 45
            echo "\t";
            $context["file_index"] = 0;
            // line 46
            echo "\t";
            $context["myimage"] = "";
            // line 47
            echo "
\t";
            // line 49
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
                // line 50
                echo "
\t\t";
                // line 51
                if (((isset($context["this"]) ? $context["this"] : null) == $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url"))) {
                    // line 52
                    echo "
\t\t\t";
                    // line 54
                    echo "\t\t\t";
                    if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "link")) {
                        // line 55
                        echo "\t\t\t\t";
                        echo call_user_func_array($this->env->getFunction('redirect')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "link")));
                        echo "

\t\t\t";
                        // line 58
                        echo "\t\t\t";
                    } else {
                        // line 59
                        echo "
\t\t\t\t";
                        // line 60
                        $context["folder_path"] = (((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "file_path"), "."))) . "/");
                        // line 61
                        echo "\t      ";
                        $context["page_title"] = call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array(call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "title"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "title_include"), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"))), "<a><span><em><i><b><strong><small><s><mark>")), array("{file_name}" => call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"), "{path}" => (isset($context["folder_path"]) ? $context["folder_path"] : null), "{image_path}" => ((isset($context["folder_path"]) ? $context["folder_path"] : null) . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))))), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name")));
                        // line 62
                        echo "\t\t\t\t";
                        $context["image_description"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array(call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "description"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "image"), "description_include"), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"))), "<a><span><em><i><b><strong><small><s><br><mark><img><kbd><code><button>")), array("{file_name}" => call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"))), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"), "{path}" => (isset($context["folder_path"]) ? $context["folder_path"] : null), "{image_path}" => ((isset($context["folder_path"]) ? $context["folder_path"] : null) . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")))));
                        // line 63
                        echo "\t\t\t\t";
                        $context["page_description"] = ((array_key_exists("image_description", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null), (((isset($context["page_title"]) ? $context["page_title"] : null) . " | ") . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "title"))))) : ((((isset($context["page_title"]) ? $context["page_title"] : null) . " | ") . $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "title"))));
                        // line 64
                        echo "\t\t\t\t";
                        $context["file_index"] = $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0");
                        // line 65
                        echo "\t\t\t\t";
                        $context["myimage"] = (isset($context["image"]) ? $context["image"] : null);
                        // line 66
                        echo "\t\t\t";
                    }
                    // line 67
                    echo "
\t\t";
                }
                // line 69
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
            // line 70
            echo "
\t";
            // line 72
            echo "\t";
            $context["template"] = "partials/file.html";
        } else {
            // line 75
            echo "\t";
            $context["page_title"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
            // line 76
            echo "\t";
            $context["page_description"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description");
            // line 77
            echo "\t";
            $context["template"] = "partials/content.html";
        }
        // line 79
        echo "
";
        // line 81
        $this->env->loadTemplate("partials/head.html")->display($context);
        // line 82
        $template = $this->env->resolveTemplate((isset($context["template"]) ? $context["template"] : null));
        $template->display($context);
        // line 83
        $this->env->loadTemplate("partials/footer.html")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 85
        echo "
<!-- X3 website by www.photo.gallery -->";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 77,  205 => 76,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 58,  145 => 55,  142 => 54,  139 => 52,  137 => 51,  134 => 50,  116 => 49,  113 => 47,  110 => 46,  107 => 45,  104 => 44,  101 => 43,  98 => 41,  95 => 40,  90 => 39,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 27,  64 => 25,  62 => 24,  59 => 22,  57 => 21,  54 => 19,  50 => 18,  46 => 17,  43 => 15,  41 => 14,  39 => 13,  37 => 12,  35 => 11,  33 => 10,  30 => 8,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
