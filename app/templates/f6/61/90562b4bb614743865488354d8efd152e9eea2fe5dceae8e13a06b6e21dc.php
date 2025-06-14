<?php

/* partials/module.gallery.html */
class __TwigTemplate_f66190562b4bb614743865488354d8efd152e9eea2fe5dceae8e13a06b6e21dc extends Twig_Template
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
        $context["settings"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery");
        // line 6
        $context["items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "items"), ","));
        // line 7
        $context["limit"] = $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "limit");
        // line 8
        $context["folder_path"] = (((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "file_path"), "."))) . "/");
        // line 9
        if ((call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["limit"]) ? $context["limit"] : null))) || ((isset($context["limit"]) ? $context["limit"] : null) < 1))) {
            $context["limit"] = 99999;
        }
        // line 10
        echo "
";
        // line 12
        if ((((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "video"))) > 0) && !twig_in_filter("hide-video", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes"))) && !twig_in_filter("video-bottom", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes")))) {
            // line 13
            echo "\t";
            $this->env->loadTemplate("partials/module.video.html")->display($context);
            // line 14
            echo "\t";
            if ((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"))) > 0)) {
                // line 15
                echo "\t\t<hr class=hr />
\t";
            }
        }
        // line 18
        echo "
";
        // line 20
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "crop"), "enabled") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "justified")) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "columns"))) {
            // line 21
            echo "\t";
            $context["crop_ratio"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "crop"), "crop"), 1, array(), "array") / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "crop"), "crop"), 0, array(), "array")) * 100);
        }
        // line 23
        echo "
";
        // line 25
        $context["gallery_split_view"] = (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "enabled") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "justified")) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "columns"));
        // line 26
        if ((isset($context["gallery_split_view"]) ? $context["gallery_split_view"] : null)) {
            // line 27
            echo "\t";
            // line 28
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "invert")) {
                // line 29
                echo "\t\t";
                $context["push"] = ("medium-push-" . (12 - $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "ratio")));
                // line 30
                echo "\t\t";
                $context["pull"] = ("medium-pull-" . $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "ratio"));
                // line 31
                echo "\t";
            }
        }
        // line 33
        echo "
";
        // line 35
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") == "grid")) {
            // line 36
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid"), "use_width")) {
                // line 37
                echo "\t\t";
                $context["block_grid"] = array(0 => "3", 1 => "2", 2 => "1");
                // line 38
                echo "\t";
            } else {
                // line 39
                echo "\t\t";
                $context["block_grid"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid"), "columns"), ","));
                // line 40
                echo "\t";
            }
            // line 41
            echo "\t";
            $context["columns_limit"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array((isset($context["limit"]) ? $context["limit"] : null), call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images")))));
            // line 42
            echo "\t";
            $context["small_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 2, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 2, array(), "array"), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array")))) : ($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array"))), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"))), "1")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 43
            echo "\t";
            $context["medium_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array"), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array")))) : ($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"))), "2")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 44
            echo "\t";
            $context["large_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"), "3"))) : ("3")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 45
            echo "
\t";
            // line 46
            $context["ul_open"] = (((((("<ul class='small-block-grid-" . (isset($context["small_grid"]) ? $context["small_grid"] : null)) . " medium-block-grid-") . (isset($context["medium_grid"]) ? $context["medium_grid"] : null)) . " large-block-grid-") . (isset($context["large_grid"]) ? $context["large_grid"] : null)) . " items'>");
            // line 47
            echo "\t";
            $context["li_open"] = "<li>";
            // line 48
            echo "\t";
            $context["li_close"] = "</li>";
            // line 49
            echo "\t";
            $context["ul_close"] = "</ul>";
        }
        // line 51
        echo "
";
        // line 53
        if ((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"))) > 0)) {
            // line 54
            echo "
";
            // line 56
            $context["myimages"] = $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images");
            // line 57
            echo "
";
            // line 59
            if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort") != "shuffle") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sortby") != "shuffle"))) {
                // line 60
                echo "
\t";
                // line 62
                echo "\t";
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sortby") == "title")) {
                    // line 63
                    echo "\t\t";
                    $context["myimages"] = call_user_func_array($this->env->getFunction('sortby')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"), "title", "file_name"));
                    // line 64
                    echo "\t";
                } elseif (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sortby") == "date")) {
                    // line 65
                    echo "\t\t";
                    $context["myimages"] = call_user_func_array($this->env->getFunction('sortbydate')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"), "date"));
                    // line 66
                    echo "\t";
                } elseif (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sortby") == "custom")) {
                    // line 67
                    echo "\t\t";
                    $context["myimages"] = call_user_func_array($this->env->getFunction('sortby')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"), "index"));
                    // line 68
                    echo "\t";
                }
                // line 69
                echo "
\t";
                // line 71
                echo "\t";
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sort") == "desc")) {
                    // line 72
                    echo "\t\t";
                    $context["myimages"] = call_user_func_array($this->env->getFilter('reverse')->getCallable(), array($this->env, (isset($context["myimages"]) ? $context["myimages"] : null)));
                    // line 73
                    echo "\t";
                }
            }
            // line 75
            echo "
";
            // line 76
            echo (isset($context["ul_open"]) ? $context["ul_open"] : null);
            echo "

";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["myimages"]) ? $context["myimages"] : null));
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
                // line 80
                echo "
";
                // line 82
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") < (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 83
                    echo "
\t";
                    // line 85
                    echo "\t";
                    $context["url"] = ((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array((($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "file_path") . "/") . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")), ".")));
                    // line 86
                    echo "\t";
                    $context["image_link"] = (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "link", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "link"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "link")))) : ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "link")));
                    // line 87
                    echo "\t";
                    $context["link_target"] = (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "target", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "target"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "link_target")))) : ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "link_target")));
                    // line 88
                    echo "\t";
                    $context["name_no_ext"] = call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")));
                    // line 89
                    echo "
\t";
                    // line 91
                    echo "\t";
                    if ((isset($context["image_link"]) ? $context["image_link"] : null)) {
                        // line 92
                        echo "\t\t";
                        $context["link_href"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["image_link"]) ? $context["image_link"] : null), array("{file_name}" => (isset($context["name_no_ext"]) ? $context["name_no_ext"] : null), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"), "{path}" => (isset($context["folder_path"]) ? $context["folder_path"] : null), "{image_path}" => ((isset($context["folder_path"]) ? $context["folder_path"] : null) . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")), "{{files}}" => ((isset($context["assetspath"]) ? $context["assetspath"] : null) . "/content/custom/files"))));
                        // line 93
                        echo "
\t\t";
                        // line 95
                        echo "\t\t";
                        if ((call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["link_target"]) ? $context["link_target"] : null))) || ((isset($context["link_target"]) ? $context["link_target"] : null) == "auto"))) {
                            // line 96
                            echo "\t\t\t";
                            if (((0 === strpos(call_user_func_array($this->env->getFilter('lower')->getCallable(), array($this->env, (isset($context["link_href"]) ? $context["link_href"] : null))), "http")) || call_user_func_array($this->env->getFunction('hasExtension')->getCallable(), array((isset($context["link_href"]) ? $context["link_href"] : null))))) {
                                // line 97
                                echo "\t\t\t\t";
                                $context["link_target"] = " target=_blank";
                                // line 98
                                echo "\t\t\t";
                            } else {
                                // line 99
                                echo "\t\t\t\t";
                                $context["link_target"] = "";
                                // line 100
                                echo "\t\t\t";
                            }
                            // line 101
                            echo "
\t\t";
                            // line 103
                            echo "\t\t";
                        } elseif (((isset($context["link_target"]) ? $context["link_target"] : null) == "popup")) {
                            // line 104
                            echo "\t\t\t";
                            $context["link_target"] = ((((((" data-popup-window=\"" . call_user_func_array($this->env->getFilter('replace')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"), array(" " => "-")))) . ",") . $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "popup_width")) . ",") . $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "popup_height")) . "\"");
                            // line 105
                            echo "
\t\t";
                            // line 107
                            echo "\t\t";
                        } elseif (((isset($context["link_target"]) ? $context["link_target"] : null) == "_blank")) {
                            // line 108
                            echo "\t\t\t";
                            $context["link_target"] = " target=_blank";
                            // line 109
                            echo "
\t\t";
                            // line 111
                            echo "\t\t";
                        } elseif (((isset($context["link_target"]) ? $context["link_target"] : null) == "x3_popup")) {
                            // line 112
                            echo "\t\t\t";
                            $context["link_target"] = " data-popup";
                            // line 113
                            echo "
\t\t";
                            // line 115
                            echo "\t\t";
                        } else {
                            // line 116
                            echo "\t\t\t";
                            $context["link_target"] = "";
                            // line 117
                            echo "\t\t";
                        }
                        // line 118
                        echo "
\t";
                        // line 120
                        echo "\t";
                    } else {
                        // line 121
                        echo "\t\t";
                        $context["link_href"] = ((call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null))) . call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["name_no_ext"]) ? $context["name_no_ext"] : null), array(" " => "_")))) . "/");
                        // line 122
                        echo "\t\t";
                        $context["link_target"] = "";
                        // line 123
                        echo "\t";
                    }
                    // line 124
                    echo "
\t";
                    // line 126
                    echo "\t";
                    $context["title"] = call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array(call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "title"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "title_include"))), "<a><span><em><i><b><strong><small><s><mark>")), array("{file_name}" => (isset($context["name_no_ext"]) ? $context["name_no_ext"] : null), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"), "{path}" => (isset($context["folder_path"]) ? $context["folder_path"] : null), "{image_path}" => ((isset($context["folder_path"]) ? $context["folder_path"] : null) . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")), "{{files}}" => ((isset($context["assetspath"]) ? $context["assetspath"] : null) . "/content/custom/files")))), $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name")));
                    // line 127
                    echo "\t";
                    $context["title_pseudo"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["title"]) ? $context["title"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                    // line 128
                    echo "
\t";
                    // line 130
                    echo "\t";
                    $context["image_description"] = call_user_func_array($this->env->getFunction('getDefault')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "description"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "description"), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "image"), "description_include")));
                    // line 131
                    echo "\t";
                    if (call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null)))) {
                        // line 132
                        echo "\t\t";
                        $context["description"] = "";
                        // line 133
                        echo "\t\t";
                        $context["description_pseudo"] = "";
                        // line 134
                        echo "\t";
                    } else {
                        // line 135
                        echo "\t\t";
                        $context["description"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('striptags')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null), "<a><span><em><i><b><strong><small><s><br><mark><img><kbd><code><button>")), array("{file_name}" => (isset($context["name_no_ext"]) ? $context["name_no_ext"] : null), "{file_name_ext}" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name"), "{path}" => (isset($context["folder_path"]) ? $context["folder_path"] : null), "{image_path}" => ((isset($context["folder_path"]) ? $context["folder_path"] : null) . $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file_name")), "{{files}}" => ((isset($context["assetspath"]) ? $context["assetspath"] : null) . "/content/custom/files"))));
                        // line 136
                        echo "\t\t";
                        $context["description_pseudo"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["description"]) ? $context["description"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                        // line 137
                        echo "\t";
                    }
                    // line 138
                    echo "
\t";
                    // line 140
                    echo "\t";
                    $context["date"] = $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "date");
                    // line 141
                    echo "\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "date_format") == "timeago")) {
                        // line 142
                        echo "\t\t";
                        $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "d F Y"));
                        // line 143
                        echo "\t\t";
                        $context["date_class"] = "date timeago";
                        // line 144
                        echo "\t";
                    } else {
                        // line 145
                        echo "\t\t";
                        $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format"), "d F Y"))) : ("d F Y"))));
                        // line 146
                        echo "\t\t";
                        $context["date_class"] = "date";
                        // line 147
                        echo "\t";
                    }
                    // line 148
                    echo "\t";
                    $context["time_tag"] = (((((("<time itemprop=dateCreated datetime=\"" . call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "c"))) . "\" class=\"") . (isset($context["date_class"]) ? $context["date_class"] : null)) . "\">") . (isset($context["date_formatted"]) ? $context["date_formatted"] : null)) . "</time>");
                    // line 149
                    echo "
\t";
                    // line 151
                    echo "\t";
                    $context["image_ratio"] = ((array_key_exists("crop_ratio", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["crop_ratio"]) ? $context["crop_ratio"] : null), (($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height") / $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width")) * 100)))) : ((($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height") / $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width")) * 100)));
                    // line 152
                    echo "
\t";
                    // line 154
                    echo "\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tooltip"), "enabled")) {
                        // line 155
                        echo "\t\t";
                        $context["tooltip_items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tooltip"), "items"), ","));
                        // line 156
                        echo "\t\t";
                        ob_start();
                        // line 157
                        echo "\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["tooltip_items"]) ? $context["tooltip_items"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 158
                            echo "\t\t\t";
                            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                echo "<span class=title>";
                                echo (isset($context["title"]) ? $context["title"] : null);
                                echo "</span>
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                // line 159
                                echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                echo "
\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["description"]) ? $context["description"] : null)))))) {
                                // line 160
                                echo "<span class=description>";
                                echo (isset($context["description"]) ? $context["description"] : null);
                                echo "</span>";
                            }
                            // line 161
                            echo "\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 162
                        echo "\t\t";
                        $context["link_title_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 163
                        echo "\t\t";
                        $context["link_title_content"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["link_title_content"]) ? $context["link_title_content"] : null), "html"))));
                        // line 164
                        echo "\t\t";
                        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["link_title_content"]) ? $context["link_title_content"] : null))))) {
                            ob_start();
                            echo "title='";
                            echo (isset($context["link_title_content"]) ? $context["link_title_content"] : null);
                            echo "'";
                            $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        }
                        // line 165
                        echo "\t";
                    }
                    // line 166
                    echo "
\t";
                    // line 168
                    echo "\t";
                    ob_start();
                    // line 169
                    echo "\t";
                    if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "slideshow")) {
                        // line 170
                        echo "\t<figure>
\t\t\t<div class='image-container' style='padding-bottom:";
                        // line 171
                        echo (isset($context["image_ratio"]) ? $context["image_ratio"] : null);
                        echo "%;'>
\t\t\t\t<img data-src='";
                        // line 172
                        echo (isset($context["url"]) ? $context["url"] : null);
                        echo "' alt='";
                        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('striptags')->getCallable(), array((isset($context["title"]) ? $context["title"] : null))), "html"));
                        echo "' itemprop='thumbnail'>
\t\t\t</div>

\t\t";
                        // line 176
                        echo "\t\t";
                        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "caption"), "enabled")) {
                            // line 177
                            echo "
\t\t\t";
                            // line 179
                            echo "\t\t\t";
                            ob_start();
                            // line 180
                            echo "\t\t\t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "caption"), "items"), ",")));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 181
                                echo "\t\t\t\t\t";
                                if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                    echo "<span class='title'>";
                                    echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                                    echo "</span>
\t\t\t\t\t";
                                } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                    // line 182
                                    echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                    echo "
\t\t\t\t\t";
                                } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["description_pseudo"]) ? $context["description_pseudo"] : null)))))) {
                                    // line 183
                                    echo "<span class='description'>";
                                    echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                                    echo "</span>";
                                }
                                // line 184
                                echo "\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 185
                            echo "\t\t\t";
                            $context["figcaption_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 186
                            echo "\t\t\t";
                            $context["figcaption_content"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["figcaption_content"]) ? $context["figcaption_content"] : null)));
                            // line 187
                            echo "
\t\t\t";
                            // line 189
                            echo "\t\t\t";
                            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["figcaption_content"]) ? $context["figcaption_content"] : null))))) {
                                // line 190
                                echo "\t\t\t\t<figcaption itemprop='caption description'>";
                                echo (isset($context["figcaption_content"]) ? $context["figcaption_content"] : null);
                                echo "</figcaption>
\t\t\t";
                            }
                            // line 192
                            echo "
  \t";
                        }
                        // line 194
                        echo "\t</figure>
\t";
                    }
                    // line 196
                    echo "\t";
                    $context["figure"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 197
                    echo "
\t";
                    // line 199
                    echo "\t";
                    ob_start();
                    // line 200
                    echo "
\t\t";
                    // line 201
                    echo (isset($context["li_open"]) ? $context["li_open"] : null);
                    echo "

\t\t";
                    // line 204
                    echo "\t\t";
                    $context["anchor_class"] = "item img-link item-link";
                    // line 205
                    echo "\t\t";
                    if ((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popup"), "enabled") && call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["image_link"]) ? $context["image_link"] : null)))) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "slideshow"))) {
                        // line 206
                        echo "\t\t\t";
                        $context["anchor_class"] = ((isset($context["anchor_class"]) ? $context["anchor_class"] : null) . " x3-popup");
                        // line 207
                        echo "\t\t";
                    }
                    // line 208
                    echo "\t\t";
                    if ((isset($context["gallery_split_view"]) ? $context["gallery_split_view"] : null)) {
                        // line 209
                        echo "\t\t\t";
                        $context["anchor_class"] = ((isset($context["anchor_class"]) ? $context["anchor_class"] : null) . " row");
                        // line 210
                        echo "\t\t";
                    }
                    // line 211
                    echo "
\t\t";
                    // line 213
                    echo "\t\t";
                    $context["exif"] = "";
                    // line 214
                    echo "\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popup"), "caption"), "exif") && $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"))) {
                        // line 215
                        echo "\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"));
                        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["val"]) ? $context["val"] : null))))) {
                                // line 216
                                echo "\t\t    ";
                                $context["exif"] = (((((isset($context["exif"]) ? $context["exif"] : null) . (isset($context["key"]) ? $context["key"] : null)) . ":") . (isset($context["val"]) ? $context["val"] : null)) . ";");
                                // line 217
                                echo "\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 218
                        echo "\t\t\t";
                        if ((isset($context["exif"]) ? $context["exif"] : null)) {
                            // line 219
                            echo "\t\t\t\t";
                            $context["exif"] = (("data-exif=\"" . (isset($context["exif"]) ? $context["exif"] : null)) . "\"");
                            // line 220
                            echo "\t\t\t";
                        }
                        // line 221
                        echo "\t\t";
                    }
                    // line 222
                    echo "
\t\t";
                    // line 224
                    echo "\t\t<a class='";
                    echo (isset($context["anchor_class"]) ? $context["anchor_class"] : null);
                    echo "' ";
                    echo (isset($context["exif"]) ? $context["exif"] : null);
                    echo " data-options='w:";
                    echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width");
                    echo ";h:";
                    echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height");
                    echo "' data-image='";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "' data-title='";
                    echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["title"]) ? $context["title"] : null), "html"));
                    echo "' data-description='";
                    echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["description"]) ? $context["description"] : null), "html"));
                    echo "' data-date='";
                    echo (isset($context["date_formatted"]) ? $context["date_formatted"] : null);
                    echo "' href='";
                    echo (isset($context["link_href"]) ? $context["link_href"] : null);
                    echo "'";
                    echo (isset($context["link_target"]) ? $context["link_target"] : null);
                    echo " id='";
                    echo call_user_func_array($this->env->getFilter('replace')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "name"), array(" " => "-")));
                    echo "' ";
                    echo (isset($context["link_title"]) ? $context["link_title"] : null);
                    echo " itemprop='associatedMedia' itemscope itemtype='http://schema.org/ImageObject'>

\t\t";
                    // line 227
                    echo "\t\t";
                    if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") == "slideshow")) {
                        // line 228
                        echo "\t\t\t<span itemprop='caption description' data-image='";
                        echo (isset($context["url"]) ? $context["url"] : null);
                        echo "'>
\t\t\t";
                        // line 229
                        if (call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["description"]) ? $context["description"] : null)))) {
                            // line 230
                            echo "\t\t\t\t";
                            echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                            echo "
\t\t\t";
                        } else {
                            // line 232
                            echo "\t\t\t\t<strong>";
                            echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                            echo "</strong>&nbsp; — &nbsp;";
                            echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                            echo "
\t\t\t";
                        }
                        // line 234
                        echo "\t\t\t</span>
\t\t";
                    } else {
                        // line 236
                        echo "
\t\t";
                        // line 238
                        echo "\t\t";
                        if ((isset($context["gallery_split_view"]) ? $context["gallery_split_view"] : null)) {
                            // line 239
                            echo "
\t\t";
                            // line 241
                            echo "\t\t";
                            if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "invert")) {
                                // line 242
                                echo "\t\t\t";
                                $context["text_align"] = "medium-text-left";
                                // line 243
                                echo "\t\t";
                            } elseif ((!twig_in_filter("text-right", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes")) && !twig_in_filter("text-left", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes")))) {
                                // line 244
                                echo "\t\t\t";
                                $context["text_align"] = "medium-text-right";
                                // line 245
                                echo "\t\t";
                            }
                            // line 246
                            echo "
\t\t";
                            // line 248
                            echo "\t\t<div class='medium-";
                            echo $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "ratio");
                            echo " columns ";
                            echo (isset($context["push"]) ? $context["push"] : null);
                            echo " ";
                            echo (isset($context["text_align"]) ? $context["text_align"] : null);
                            echo "'>
\t\t\t";
                            // line 249
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 250
                                echo "\t\t\t\t";
                                if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                    // line 251
                                    echo "\t\t\t\t\t<h2 class='title' itemprop='caption'>";
                                    echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                                    echo "</h2>
\t\t\t\t";
                                } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["description"]) ? $context["description"] : null)))))) {
                                    // line 253
                                    echo "\t\t\t\t<p itemprop='description'>";
                                    echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                                    echo "</p>
\t\t\t\t";
                                } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                    // line 255
                                    echo "\t\t\t\t\t<h6 class=date>";
                                    echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                    echo "</h6>
\t\t\t\t";
                                }
                                // line 257
                                echo "\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 258
                            echo "
\t\t\t";
                            // line 260
                            echo "\t\t\t";
                            // line 270
                            echo "
\t\t</div>
\t\t<div class='medium-";
                            // line 272
                            echo (12 - $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "split"), "ratio"));
                            echo " columns ";
                            echo (isset($context["pull"]) ? $context["pull"] : null);
                            echo "'>
\t\t\t";
                            // line 273
                            echo (isset($context["figure"]) ? $context["figure"] : null);
                            echo "
\t\t</div>

\t\t";
                            // line 277
                            echo "\t\t";
                        } elseif (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") != "justified")) {
                            // line 278
                            echo "\t\t\t";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 279
                                echo "\t\t\t\t";
                                if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                    // line 280
                                    echo "\t\t\t\t\t<h2 class='title' itemprop='caption'>";
                                    echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                                    echo "</h2>
\t\t\t\t";
                                } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["description"]) ? $context["description"] : null)))))) {
                                    // line 282
                                    echo "\t\t\t\t\t<p itemprop='description'>";
                                    echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                                    echo "</p>
\t\t\t\t";
                                } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                    // line 284
                                    echo "\t\t\t\t\t<h6 class=date>";
                                    echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                    echo "</h6>
\t\t\t\t";
                                } elseif (((isset($context["item"]) ? $context["item"] : null) == "preview")) {
                                    // line 286
                                    echo "\t\t\t\t\t";
                                    echo (isset($context["figure"]) ? $context["figure"] : null);
                                    echo "
\t\t\t\t";
                                }
                                // line 288
                                echo "\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 289
                            echo "
\t\t";
                            // line 291
                            echo "\t\t";
                        } else {
                            // line 292
                            echo "\t\t\t";
                            echo (isset($context["figure"]) ? $context["figure"] : null);
                            echo "
\t\t";
                        }
                        // line 294
                        echo "
\t\t";
                    }
                    // line 296
                    echo "
\t\t</a>

\t\t";
                    // line 299
                    if ((((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout") == "vertical")) && $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "vertical"), "horizontal_rule"))) {
                        // line 300
                        echo "\t\t\t<hr class=hr />
\t\t";
                    }
                    // line 302
                    echo "
\t\t";
                    // line 303
                    echo (isset($context["li_close"]) ? $context["li_close"] : null);
                    echo "

\t";
                    $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 306
                    echo "
\t";
                    // line 308
                    echo "\t";
                    if ((twig_in_filter("landscape", (isset($context["module_classes"]) ? $context["module_classes"] : null)) || twig_in_filter("portrait", (isset($context["module_classes"]) ? $context["module_classes"] : null)))) {
                        // line 309
                        echo "\t\t";
                        if ((twig_in_filter("landscape", (isset($context["module_classes"]) ? $context["module_classes"] : null)) && ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width") > $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height")))) {
                            // line 310
                            echo "\t\t\t";
                            echo (isset($context["item"]) ? $context["item"] : null);
                            echo "
\t\t";
                        } elseif ((twig_in_filter("portrait", (isset($context["module_classes"]) ? $context["module_classes"] : null)) && ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "height") > $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "width")))) {
                            // line 312
                            echo "\t\t\t";
                            echo (isset($context["item"]) ? $context["item"] : null);
                            echo "
\t\t";
                        }
                        // line 314
                        echo "\t";
                    } else {
                        // line 315
                        echo "\t\t";
                        echo (isset($context["item"]) ? $context["item"] : null);
                        echo "
\t";
                    }
                    // line 317
                    echo "
";
                }
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
            // line 320
            echo (isset($context["ul_close"]) ? $context["ul_close"] : null);
            echo "
";
        }
        // line 322
        echo "
";
        // line 324
        if ((((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "video"))) > 0) && !twig_in_filter("hide-video", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes"))) && twig_in_filter("video-bottom", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "classes")))) {
            // line 325
            echo "\t";
            if ((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "images"))) > 0)) {
                echo "<hr class=hr />";
            }
            // line 326
            echo "\t";
            $this->env->loadTemplate("partials/module.video.html")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "partials/module.gallery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  884 => 324,  860 => 317,  854 => 315,  851 => 314,  845 => 312,  839 => 310,  836 => 309,  833 => 308,  830 => 306,  824 => 303,  821 => 302,  815 => 299,  800 => 292,  770 => 282,  764 => 280,  761 => 279,  756 => 278,  747 => 273,  741 => 272,  737 => 270,  720 => 255,  714 => 253,  705 => 250,  701 => 249,  692 => 248,  689 => 246,  683 => 244,  680 => 243,  677 => 242,  674 => 241,  671 => 239,  665 => 236,  661 => 234,  653 => 232,  647 => 230,  640 => 228,  637 => 227,  609 => 224,  606 => 222,  603 => 221,  600 => 220,  597 => 219,  594 => 218,  587 => 217,  584 => 216,  578 => 215,  543 => 201,  540 => 200,  537 => 199,  534 => 197,  527 => 194,  517 => 190,  514 => 189,  511 => 187,  508 => 186,  505 => 185,  499 => 184,  494 => 183,  489 => 182,  481 => 181,  476 => 180,  473 => 179,  470 => 177,  467 => 176,  459 => 172,  409 => 159,  401 => 158,  396 => 157,  393 => 156,  390 => 155,  387 => 154,  384 => 152,  381 => 151,  378 => 149,  375 => 148,  372 => 147,  369 => 146,  366 => 145,  363 => 144,  360 => 143,  357 => 142,  354 => 141,  351 => 140,  345 => 137,  342 => 136,  339 => 135,  336 => 134,  333 => 133,  330 => 132,  327 => 131,  324 => 130,  321 => 128,  318 => 127,  309 => 123,  306 => 122,  303 => 121,  300 => 120,  285 => 113,  282 => 112,  279 => 111,  276 => 109,  211 => 82,  191 => 79,  179 => 73,  155 => 64,  149 => 62,  146 => 60,  136 => 54,  131 => 51,  127 => 49,  124 => 48,  121 => 47,  119 => 46,  65 => 25,  957 => 295,  943 => 294,  938 => 292,  935 => 291,  931 => 289,  928 => 288,  922 => 283,  916 => 281,  913 => 280,  910 => 278,  904 => 277,  901 => 276,  896 => 275,  891 => 326,  886 => 325,  881 => 322,  876 => 320,  869 => 270,  864 => 269,  861 => 268,  855 => 264,  849 => 263,  846 => 262,  840 => 261,  837 => 260,  832 => 259,  827 => 258,  822 => 257,  817 => 300,  810 => 296,  806 => 294,  797 => 291,  794 => 289,  791 => 250,  788 => 288,  785 => 248,  782 => 286,  779 => 246,  776 => 284,  773 => 243,  768 => 240,  753 => 277,  750 => 237,  745 => 234,  742 => 233,  735 => 260,  732 => 258,  726 => 257,  721 => 229,  716 => 228,  708 => 251,  700 => 226,  694 => 225,  686 => 245,  681 => 223,  678 => 222,  676 => 221,  668 => 238,  664 => 217,  660 => 216,  657 => 215,  654 => 214,  651 => 213,  645 => 229,  642 => 210,  639 => 209,  636 => 208,  628 => 206,  625 => 205,  622 => 204,  619 => 203,  611 => 201,  608 => 200,  605 => 199,  599 => 197,  596 => 196,  588 => 194,  585 => 193,  575 => 214,  572 => 213,  569 => 211,  566 => 210,  563 => 209,  560 => 208,  557 => 207,  554 => 206,  551 => 205,  548 => 204,  545 => 180,  542 => 178,  539 => 177,  536 => 175,  531 => 196,  528 => 172,  523 => 192,  520 => 169,  486 => 168,  483 => 166,  480 => 165,  477 => 164,  474 => 163,  471 => 162,  468 => 161,  465 => 160,  461 => 158,  458 => 157,  455 => 171,  452 => 170,  449 => 169,  446 => 168,  443 => 166,  440 => 165,  437 => 149,  434 => 148,  431 => 164,  428 => 163,  425 => 162,  422 => 144,  419 => 161,  416 => 142,  414 => 160,  411 => 140,  408 => 139,  406 => 138,  403 => 137,  400 => 136,  397 => 134,  394 => 133,  391 => 132,  388 => 131,  385 => 129,  382 => 128,  379 => 127,  376 => 126,  370 => 124,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  349 => 116,  346 => 115,  343 => 114,  340 => 113,  337 => 111,  334 => 110,  325 => 109,  322 => 108,  319 => 107,  313 => 106,  307 => 104,  286 => 101,  272 => 99,  264 => 104,  252 => 99,  243 => 96,  240 => 95,  237 => 93,  234 => 92,  231 => 91,  228 => 89,  225 => 88,  222 => 87,  216 => 85,  213 => 83,  210 => 76,  199 => 72,  196 => 71,  190 => 69,  187 => 68,  184 => 67,  178 => 65,  175 => 63,  172 => 62,  169 => 61,  166 => 60,  160 => 57,  140 => 55,  135 => 54,  133 => 53,  130 => 51,  111 => 41,  97 => 36,  88 => 33,  373 => 125,  367 => 123,  365 => 146,  362 => 145,  359 => 143,  352 => 117,  348 => 138,  341 => 134,  335 => 132,  332 => 131,  329 => 129,  323 => 127,  320 => 126,  317 => 124,  311 => 122,  308 => 121,  305 => 119,  294 => 117,  291 => 116,  288 => 115,  280 => 100,  277 => 110,  274 => 109,  271 => 107,  265 => 105,  262 => 104,  259 => 102,  253 => 100,  250 => 99,  247 => 97,  239 => 94,  232 => 90,  229 => 89,  219 => 86,  204 => 82,  201 => 81,  192 => 77,  186 => 76,  183 => 75,  180 => 73,  156 => 62,  153 => 61,  150 => 59,  144 => 59,  141 => 57,  138 => 54,  129 => 51,  118 => 45,  115 => 43,  112 => 45,  109 => 43,  167 => 68,  152 => 63,  117 => 56,  114 => 50,  108 => 40,  99 => 43,  94 => 35,  91 => 34,  48 => 15,  60 => 23,  47 => 16,  42 => 13,  123 => 47,  120 => 46,  106 => 41,  103 => 38,  100 => 37,  96 => 42,  93 => 36,  83 => 34,  80 => 31,  69 => 27,  38 => 12,  86 => 35,  76 => 29,  73 => 28,  66 => 27,  63 => 22,  58 => 21,  56 => 20,  53 => 18,  44 => 14,  36 => 11,  27 => 6,  315 => 126,  312 => 124,  302 => 108,  299 => 103,  297 => 118,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 108,  270 => 107,  267 => 105,  261 => 103,  258 => 101,  255 => 100,  249 => 98,  246 => 97,  242 => 96,  236 => 93,  233 => 77,  227 => 75,  224 => 74,  193 => 70,  189 => 76,  176 => 72,  173 => 71,  170 => 69,  164 => 67,  161 => 66,  158 => 65,  148 => 41,  132 => 52,  126 => 49,  122 => 47,  105 => 39,  102 => 28,  61 => 24,  45 => 14,  22 => 3,  92 => 37,  89 => 36,  85 => 32,  81 => 34,  78 => 23,  74 => 29,  71 => 28,  67 => 26,  55 => 18,  52 => 17,  49 => 16,  40 => 12,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 80,  205 => 74,  202 => 73,  198 => 79,  195 => 78,  181 => 66,  177 => 72,  174 => 70,  171 => 69,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  157 => 56,  154 => 60,  151 => 42,  145 => 40,  142 => 54,  139 => 56,  137 => 51,  134 => 53,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  95 => 38,  90 => 34,  87 => 35,  84 => 33,  82 => 31,  79 => 30,  77 => 30,  75 => 31,  72 => 29,  68 => 25,  64 => 23,  62 => 23,  59 => 20,  57 => 18,  54 => 19,  50 => 17,  46 => 15,  43 => 14,  41 => 14,  39 => 12,  37 => 10,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 5,  23 => 3,  19 => 1,);
    }
}
