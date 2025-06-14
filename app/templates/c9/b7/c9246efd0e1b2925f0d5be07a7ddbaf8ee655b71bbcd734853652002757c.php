<?php

/* partials/module.context.html */
class __TwigTemplate_c9b7c9246efd0e1b2925f0d5be07a7ddbaf8ee655b71bbcd734853652002757c extends Twig_Template
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
        echo "
";
        // line 5
        $context["p"] = (isset($context["page"]) ? $context["page"] : null);
        // line 6
        $context["context"] = $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "context");
        // line 7
        $context["page_description"] = $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "description");
        // line 8
        $context["content"] = call_user_func_array($this->env->getFilter('escapecode')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(((((call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "include"), "content_prepend"))) . " ") . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "content")) . " ") . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "include"), "content_append")))), array("{{files}}" => ((isset($context["assetspath"]) ? $context["assetspath"] : null) . "/content/custom/files"), "[contact]" => "<form data-abide class=\"contactform\"><div><input required type=\"text\" name=\"name\" placeholder=\"Name\"></div><div><input required type=\"email\" name=\"email\" placeholder=\"Email\"></div><div><textarea required rows=6 name=\"message\" placeholder=\"What&#39;s up?\"></textarea></div><button type=\"submit\">Send</button></form>")))))));
        // line 9
        echo "
";
        // line 11
        $context["date"] = (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "date", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "date"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "updated")))) : ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "updated")));
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "date_format") == "timeago")) {
            // line 13
            echo "\t";
            $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "d F Y"));
            // line 14
            echo "\t";
            $context["date_class"] = "date timeago";
        } else {
            // line 16
            echo "\t";
            $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format"), "d F Y"))) : ("d F Y"))));
            // line 17
            echo "\t";
            $context["date_class"] = "date";
        }
        // line 19
        $context["time_tag"] = (((((("<time itemprop=dateCreated datetime=\"" . call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "c"))) . "\" class=\"") . (isset($context["date_class"]) ? $context["date_class"] : null)) . "\">") . (isset($context["date_formatted"]) ? $context["date_formatted"] : null)) . "</time>");
        // line 20
        echo "
";
        // line 23
        $context["items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "items"), ","));
        // line 24
        echo "
";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "
\t";
            // line 29
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                // line 30
                echo "\t<h1 class='title style-icon'><span>";
                echo (isset($context["page_title"]) ? $context["page_title"] : null);
                echo "</span></h1>
\t";
            }
            // line 32
            echo "
\t";
            // line 34
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                // line 35
                echo "\t<h1 class='title'><span>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "label");
                echo "</span></h1>
\t";
            }
            // line 37
            echo "
\t";
            // line 39
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "amount")) {
                // line 40
                echo "\t";
                $context["amount"] = call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images")));
                // line 41
                echo "\t<h6 class=amount><span>";
                echo (isset($context["amount"]) ? $context["amount"] : null);
                echo " ";
                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["amount"]) ? $context["amount"] : null), "image", "images"));
                echo "</span></h6>
\t";
            }
            // line 43
            echo "
\t";
            // line 45
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "folders_amount")) {
                // line 46
                echo "\t";
                $context["folders_amount"] = $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "children_count");
                // line 47
                echo "\t<h6 class=folder_amount><span>";
                echo (isset($context["folders_amount"]) ? $context["folders_amount"] : null);
                echo " ";
                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["folders_amount"]) ? $context["folders_amount"] : null), "album", "albums"));
                echo "</span></h6>
\t";
            }
            // line 49
            echo "
\t";
            // line 51
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                // line 52
                echo "\t<h6 class=date>";
                echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                echo "</h6>
\t";
            }
            // line 54
            echo "
\t";
            // line 56
            echo "\t";
            if ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null)))))) {
                // line 57
                echo "\t<h2 class=subheader>";
                echo (isset($context["page_description"]) ? $context["page_description"] : null);
                echo "</h2>
\t";
            }
            // line 59
            echo "
\t";
            // line 61
            echo "\t";
            if (((isset($context["item"]) ? $context["item"] : null) == "preview")) {
                // line 62
                echo "
\t";
                // line 64
                echo "\t";
                if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "crop"), "enabled")) {
                    // line 65
                    echo "\t\t";
                    $context["crop_ratio"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "crop"), "crop"), 1, array(), "array") / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "crop"), "crop"), 0, array(), "array")) * 100);
                    // line 66
                    echo "\t";
                }
                // line 67
                echo "
\t";
                // line 69
                echo "\t";
                $context["preview_image_url"] = ((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null), ".")));
                // line 70
                echo "
\t";
                // line 72
                echo "  ";
                if (((isset($context["preview_img"]) ? $context["preview_img"] : null) == "./app/public/images/default.png")) {
                    // line 73
                    echo "  \t";
                    $context["imgInfo"] = array(0 => 1280, 1 => 1280);
                    // line 74
                    echo "  \t";
                    $context["image_ratio"] = 100;
                    // line 75
                    echo "  ";
                } else {
                    // line 76
                    echo "\t\t";
                    $context["imgInfo"] = call_user_func_array($this->env->getFunction('getimginfo')->getCallable(), array((isset($context["preview_image"]) ? $context["preview_image"] : null)));
                    // line 77
                    echo "\t\t";
                    $context["image_ratio"] = ((array_key_exists("crop_ratio", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["crop_ratio"]) ? $context["crop_ratio"] : null), (($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array") / $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array")) * 100)))) : ((($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array") / $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array")) * 100)));
                    // line 78
                    echo "  ";
                }
                // line 79
                echo "
\t";
                // line 81
                echo "\t<div class='preview-image x-frame-medium-up images'>
\t\t<a class='img-link item-link item popup' data-options='w:";
                // line 82
                echo $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array");
                echo ";h:";
                echo $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array");
                echo "' href='.' data-popup-href='";
                echo (isset($context["preview_image_url"]) ? $context["preview_image_url"] : null);
                echo "' data-image='";
                echo (isset($context["preview_image_url"]) ? $context["preview_image_url"] : null);
                echo "'";
                if ((isset($context["crop_ratio"]) ? $context["crop_ratio"] : null)) {
                    echo " data-crop=true";
                }
                echo ">
\t\t\t<figure>
\t\t\t\t<div class='image-container' style='padding-bottom:";
                // line 84
                echo (isset($context["image_ratio"]) ? $context["image_ratio"] : null);
                echo "%;'>
\t\t\t\t\t<img data-src='";
                // line 85
                echo (isset($context["preview_image_url"]) ? $context["preview_image_url"] : null);
                echo "' alt=''>
\t\t\t\t</div>

\t\t\t";
                // line 89
                echo "\t\t\t";
                if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "caption"), "enabled")) {
                    // line 90
                    echo "        <figcaption>

        \t";
                    // line 93
                    echo "\t\t\t\t\t";
                    $context["caption_items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "caption"), "items"), ","));
                    // line 94
                    echo "
        \t";
                    // line 96
                    echo "        \t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["caption_items"]) ? $context["caption_items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 97
                        echo "
        \t\t";
                        // line 99
                        echo "        \t\t";
                        if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                            // line 100
                            echo "        \t\t<span class='title'>";
                            echo call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                            echo "</span>
        \t\t";
                        }
                        // line 102
                        echo "
        \t\t";
                        // line 104
                        echo "        \t\t";
                        if (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                            // line 105
                            echo "        \t\t<span class='title'>";
                            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "label");
                            echo "</span>
        \t\t";
                        }
                        // line 107
                        echo "
        \t\t";
                        // line 109
                        echo "        \t\t";
                        if (((isset($context["item"]) ? $context["item"] : null) == "amount")) {
                            // line 110
                            echo "\t\t\t\t\t\t";
                            $context["amount"] = call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images")));
                            // line 111
                            echo "        \t\t<span class='amount'>";
                            echo (isset($context["amount"]) ? $context["amount"] : null);
                            echo " ";
                            echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["amount"]) ? $context["amount"] : null), "image", "images"));
                            echo "</span>
        \t\t";
                        }
                        // line 113
                        echo "
        \t\t";
                        // line 115
                        echo "        \t\t";
                        if (((isset($context["item"]) ? $context["item"] : null) == "folders_amount")) {
                            // line 116
                            echo "        \t\t";
                            $context["folders_amount"] = $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "children_count");
                            // line 117
                            echo "        \t\t<span class='folder_amount'>";
                            echo (isset($context["folders_amount"]) ? $context["folders_amount"] : null);
                            echo " ";
                            echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["folders_amount"]) ? $context["folders_amount"] : null), "album", "albums"));
                            echo "</span>
        \t\t";
                        }
                        // line 119
                        echo "
        \t\t";
                        // line 121
                        echo "        \t\t";
                        if (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                            // line 122
                            echo "\t\t\t\t\t\t\t";
                            echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                            echo "
        \t\t";
                        }
                        // line 124
                        echo "
        \t\t";
                        // line 126
                        echo "        \t\t";
                        if ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null)))))) {
                            // line 127
                            echo "        \t\t\t<span class='description'>";
                            echo call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                            echo "</span>
        \t\t";
                        }
                        // line 129
                        echo "
        \t\t";
                        // line 131
                        echo "        \t\t";
                        if ((((isset($context["item"]) ? $context["item"] : null) == "content") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["content"]) ? $context["content"] : null)))))) {
                            // line 132
                            echo "        \t\t\t<span class='content'>";
                            echo (isset($context["content"]) ? $context["content"] : null);
                            echo "</span>
        \t\t";
                        }
                        // line 134
                        echo "
        \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "        </figcaption>
      ";
                }
                // line 138
                echo "
\t\t\t</figure>
\t\t</a>
\t</div>
\t";
            }
            // line 143
            echo "
\t";
            // line 145
            echo "\t";
            if ((((isset($context["item"]) ? $context["item"] : null) == "content") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["content"]) ? $context["content"] : null)))))) {
                // line 146
                echo "\t\t";
                // line 148
                echo "\t\t<div class='content'>";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "</div>
\t";
            }
            // line 150
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/module.context.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 150,  367 => 148,  365 => 146,  362 => 145,  359 => 143,  352 => 138,  348 => 136,  341 => 134,  335 => 132,  332 => 131,  329 => 129,  323 => 127,  320 => 126,  317 => 124,  311 => 122,  308 => 121,  305 => 119,  294 => 116,  291 => 115,  288 => 113,  280 => 111,  277 => 110,  274 => 109,  271 => 107,  265 => 105,  262 => 104,  259 => 102,  253 => 100,  250 => 99,  247 => 97,  239 => 94,  232 => 90,  229 => 89,  219 => 84,  204 => 82,  201 => 81,  192 => 77,  186 => 75,  183 => 74,  180 => 73,  156 => 62,  153 => 61,  150 => 59,  144 => 57,  141 => 56,  138 => 54,  129 => 51,  118 => 47,  115 => 46,  112 => 45,  109 => 43,  167 => 64,  152 => 59,  117 => 56,  114 => 50,  108 => 47,  99 => 43,  94 => 41,  91 => 39,  48 => 17,  60 => 23,  47 => 16,  42 => 15,  123 => 47,  120 => 58,  106 => 41,  103 => 40,  100 => 38,  96 => 42,  93 => 36,  83 => 34,  80 => 32,  69 => 29,  38 => 12,  86 => 35,  76 => 27,  73 => 30,  66 => 27,  63 => 22,  58 => 20,  56 => 20,  53 => 20,  44 => 16,  36 => 11,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 117,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 96,  236 => 93,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 76,  176 => 52,  173 => 51,  170 => 66,  164 => 63,  161 => 46,  158 => 44,  148 => 41,  132 => 52,  126 => 49,  122 => 34,  105 => 45,  102 => 28,  61 => 24,  45 => 16,  22 => 3,  92 => 37,  89 => 36,  85 => 24,  81 => 34,  78 => 23,  74 => 30,  71 => 29,  67 => 23,  55 => 19,  52 => 19,  49 => 18,  40 => 13,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 79,  195 => 78,  181 => 69,  177 => 72,  174 => 70,  171 => 69,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  157 => 62,  154 => 60,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 45,  113 => 44,  110 => 48,  107 => 45,  104 => 44,  101 => 41,  98 => 40,  95 => 39,  90 => 34,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 27,  64 => 26,  62 => 25,  59 => 23,  57 => 18,  54 => 19,  50 => 17,  46 => 16,  43 => 14,  41 => 14,  39 => 12,  37 => 9,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 5,  23 => 3,  19 => 1,);
    }
}
