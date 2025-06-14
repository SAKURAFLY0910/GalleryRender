<?php

/* partials/module.folders.html */
class __TwigTemplate_131444024c759c6143dbbce07e5e79e89e66413bab58620f3bf871aa0ebd7938 extends Twig_Template
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
        $context["folders"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "folders");
        // line 6
        $context["assets"] = (isset($context["folder"]) ? $context["folder"] : null);
        // line 7
        $context["items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "items"), ","));
        // line 8
        $context["limit"] = $this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "limit");
        // line 9
        if ((call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["limit"]) ? $context["limit"] : null))) || ((isset($context["limit"]) ? $context["limit"] : null) < 1))) {
            $context["limit"] = 99999;
        }
        // line 10
        echo "
";
        // line 12
        $context["folders_split_view"] = (($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "enabled") && ($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") != "justified")) && ($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") != "columns"));
        // line 13
        if ((isset($context["folders_split_view"]) ? $context["folders_split_view"] : null)) {
            // line 14
            echo "\t";
            // line 15
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "invert")) {
                // line 16
                echo "\t\t";
                $context["push"] = ("medium-push-" . (12 - $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "ratio")));
                // line 17
                echo "\t\t";
                $context["pull"] = ("medium-pull-" . $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "ratio"));
                // line 18
                echo "\t";
            }
        }
        // line 20
        echo "
";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "crop"), "enabled")) {
            // line 23
            echo "\t";
            $context["crop_ratio"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "crop"), "crop"), 1, array(), "array") / $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "crop"), "crop"), 0, array(), "array")) * 100);
        }
        // line 25
        echo "
";
        // line 27
        if (($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") == "grid")) {
            // line 28
            echo "\t";
            if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "grid"), "use_width")) {
                // line 29
                echo "\t\t";
                $context["block_grid"] = array(0 => "3", 1 => "2", 2 => "1");
                // line 30
                echo "\t";
            } else {
                // line 31
                echo "\t\t";
                $context["block_grid"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "grid"), "columns"), ","));
                // line 32
                echo "\t";
            }
            // line 33
            echo "\t";
            $context["columns_limit"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array((isset($context["limit"]) ? $context["limit"] : null), $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "children_count")));
            // line 34
            echo "\t";
            $context["small_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 2, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 2, array(), "array"), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array")))) : ($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array"))), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"))), "1")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 35
            echo "\t";
            $context["medium_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array(call_user_func_array($this->env->getFilter('default')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 1, array(), "array"), $this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array")))) : ($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"))), "2")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 36
            echo "\t";
            $context["large_grid"] = call_user_func_array($this->env->getFunction('min')->getCallable(), array((($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["block_grid"]) ? $context["block_grid"] : null), 0, array(), "array"), "3"))) : ("3")), (isset($context["columns_limit"]) ? $context["columns_limit"] : null)));
            // line 37
            echo "
\t";
            // line 38
            $context["ul_open"] = (((((("<ul class='small-block-grid-" . (isset($context["small_grid"]) ? $context["small_grid"] : null)) . " medium-block-grid-") . (isset($context["medium_grid"]) ? $context["medium_grid"] : null)) . " large-block-grid-") . (isset($context["large_grid"]) ? $context["large_grid"] : null)) . " items'>");
            // line 39
            echo "\t";
            $context["li_open"] = "<li>";
            // line 40
            echo "\t";
            $context["li_close"] = "</li>";
            // line 41
            echo "\t";
            $context["ul_close"] = "</ul>";
        }
        // line 43
        echo "
";
        // line 45
        $context["sort"] = $this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "sort");
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "desc")) {
            // line 47
            echo "\t";
            $context["children"] = call_user_func_array($this->env->getFilter('reverse')->getCallable(), array($this->env, $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "children")));
        } else {
            // line 49
            echo "\t";
            $context["children"] = $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "children");
        }
        // line 51
        echo "
";
        // line 53
        if (($this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "children_count") > 0)) {
            // line 54
            echo "\t";
            echo (isset($context["ul_open"]) ? $context["ul_open"] : null);
            echo "
\t";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 56
                echo "\t";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0") < (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 57
                    echo "\t\t";
                    echo (isset($context["li_open"]) ? $context["li_open"] : null);
                    echo "

\t\t";
                    // line 60
                    echo "\t\t";
                    $context["title"] = $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
                    // line 61
                    echo "\t\t";
                    $context["title_pseudo"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["title"]) ? $context["title"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                    // line 62
                    echo "\t\t";
                    $context["label"] = $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "label");
                    // line 63
                    echo "
\t\t";
                    // line 65
                    echo "\t\t";
                    $context["date"] = (($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "date"), $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "updated")))) : ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "updated")));
                    // line 66
                    echo "\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "date_format") == "timeago")) {
                        // line 67
                        echo "\t\t\t";
                        $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "c"));
                        // line 68
                        echo "\t\t\t";
                        $context["date_class"] = "date timeago";
                        // line 69
                        echo "\t\t";
                    } else {
                        // line 70
                        echo "\t\t\t";
                        $context["date_formatted"] = call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings", array(), "any", false, true), "date_format"), "d F Y"))) : ("d F Y"))));
                        // line 71
                        echo "\t\t\t";
                        $context["date_class"] = "date";
                        // line 72
                        echo "\t\t";
                    }
                    // line 73
                    echo "\t\t";
                    $context["time_tag"] = (((((("<time itemprop=dateCreated datetime=\"" . call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "c"))) . "\" class=\"") . (isset($context["date_class"]) ? $context["date_class"] : null)) . "\">") . (isset($context["date_formatted"]) ? $context["date_formatted"] : null)) . "</time>");
                    // line 74
                    echo "
\t\t";
                    // line 75
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description"))))) {
                        // line 76
                        echo "\t\t\t";
                        $context["description"] = $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description");
                        // line 77
                        echo "\t\t\t";
                        $context["description_pseudo"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["description"]) ? $context["description"] : null), array("<a" => "<span", "</a>" => "</span>", " href=" => " data-href=", " target=" => " data-target=")));
                        // line 78
                        echo "\t\t";
                    }
                    // line 79
                    echo "
\t\t";
                    // line 81
                    echo "\t\t";
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "gallery"), "assets"))))) {
                        // line 82
                        echo "\t\t\t";
                        $context["amount"] = call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('get')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "gallery"), "assets"))), "images")));
                        // line 83
                        echo "\t\t";
                    } else {
                        // line 84
                        echo "\t\t\t";
                        $context["amount"] = call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "images")));
                        // line 85
                        echo "\t\t";
                    }
                    // line 86
                    echo "
\t\t";
                    // line 88
                    echo "\t\t";
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "folders"), "assets"))))) {
                        // line 89
                        echo "\t\t\t";
                        $context["folders_amount"] = $this->getAttribute(call_user_func_array($this->env->getFunction('get')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "folders"), "assets"))), "children_count");
                        // line 90
                        echo "\t\t";
                    } else {
                        // line 91
                        echo "\t\t\t";
                        $context["folders_amount"] = $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children_count");
                        // line 92
                        echo "\t\t";
                    }
                    // line 93
                    echo "
\t\t";
                    // line 95
                    echo "\t\t";
                    if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "tooltip"), "enabled")) {
                        // line 96
                        echo "\t\t\t";
                        $context["tooltip_items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "tooltip"), "items"), ","));
                        // line 97
                        echo "\t\t\t";
                        ob_start();
                        // line 98
                        echo "\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["tooltip_items"]) ? $context["tooltip_items"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 99
                            echo "\t\t\t\t";
                            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                echo "<span class=title>";
                                echo (isset($context["title"]) ? $context["title"] : null);
                                echo "</span>
\t\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                                // line 100
                                echo "<span class=title>";
                                echo (isset($context["label"]) ? $context["label"] : null);
                                echo "</span>
\t\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                // line 101
                                echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                echo "
\t\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "amount") && ((isset($context["amount"]) ? $context["amount"] : null) > 0))) {
                                // line 102
                                echo "<span class=amount>";
                                echo (isset($context["amount"]) ? $context["amount"] : null);
                                echo " ";
                                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["amount"]) ? $context["amount"] : null), "image", "images"));
                                echo "</span>
\t\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "folders_amount") && ((isset($context["folders_amount"]) ? $context["folders_amount"] : null) > 0))) {
                                // line 103
                                echo "<span class=folder_amount>";
                                echo (isset($context["folders_amount"]) ? $context["folders_amount"] : null);
                                echo " ";
                                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["folders_amount"]) ? $context["folders_amount"] : null), "album", "albums"));
                                echo "</span>
\t\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description")))))) {
                                // line 104
                                echo "<span class=description>";
                                echo (isset($context["description"]) ? $context["description"] : null);
                                echo "</span>
\t\t\t\t";
                            }
                            // line 106
                            echo "\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t";
                        $context["link_title_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 108
                        echo "\t\t\t";
                        $context["link_title_content"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["link_title_content"]) ? $context["link_title_content"] : null), "html"))));
                        // line 109
                        echo "\t\t\t";
                        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["link_title_content"]) ? $context["link_title_content"] : null))))) {
                            ob_start();
                            echo "title='";
                            echo (isset($context["link_title_content"]) ? $context["link_title_content"] : null);
                            echo "'";
                            $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        }
                        // line 110
                        echo "\t\t";
                    }
                    // line 111
                    echo "
\t\t";
                    // line 113
                    echo "\t\t";
                    $context["link_target"] = "";
                    // line 114
                    echo "\t\t";
                    $context["link_class"] = "";
                    // line 115
                    echo "\t\t";
                    $context["data_popup"] = false;
                    // line 116
                    echo "\t\t";
                    $context["data_popup_content"] = false;
                    // line 117
                    echo "\t\t";
                    $context["data_popup_window"] = "";
                    // line 118
                    echo "\t\t";
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "url"))))) {
                        // line 119
                        echo "\t\t\t";
                        $context["link"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "url")));
                        // line 120
                        echo "\t\t\t";
                        $context["hasExtension"] = call_user_func_array($this->env->getFunction('hasExtension')->getCallable(), array((isset($context["link"]) ? $context["link"] : null)));
                        // line 121
                        echo "
\t\t\t";
                        // line 123
                        echo "\t\t\t";
                        if (((call_user_func_array($this->env->getFilter('first')->getCallable(), array($this->env, (isset($context["link"]) ? $context["link"] : null))) != "/") && !twig_in_filter("http", (isset($context["link"]) ? $context["link"] : null)))) {
                            // line 124
                            echo "\t\t\t\t";
                            if ((isset($context["hasExtension"]) ? $context["hasExtension"] : null)) {
                                // line 125
                                echo "\t\t\t\t\t";
                                $context["link"] = ((call_user_func_array($this->env->getFilter('setpath')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "file_path"), "./")), (isset($context["rootpath"]) ? $context["rootpath"] : null))) . "/") . (isset($context["link"]) ? $context["link"] : null));
                                // line 126
                                echo "\t\t\t\t";
                            } else {
                                // line 127
                                echo "\t\t\t\t\t";
                                $context["link"] = (call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null))) . (isset($context["link"]) ? $context["link"] : null));
                                // line 128
                                echo "\t\t\t\t";
                            }
                            // line 129
                            echo "
\t\t\t";
                            // line 131
                            echo "\t\t\t";
                        } elseif ((((call_user_func_array($this->env->getFilter('first')->getCallable(), array($this->env, (isset($context["link"]) ? $context["link"] : null))) == "/") && (call_user_func_array($this->env->getFilter('last')->getCallable(), array($this->env, (isset($context["link"]) ? $context["link"] : null))) != "/")) && (!(isset($context["hasExtension"]) ? $context["hasExtension"] : null)))) {
                            // line 132
                            echo "\t\t\t\t";
                            $context["link"] = ((isset($context["link"]) ? $context["link"] : null) . "/");
                            // line 133
                            echo "\t\t\t";
                        }
                        // line 134
                        echo "
\t\t\t";
                        // line 136
                        echo "\t\t\t";
                        if (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target") && ($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target") != "auto"))) {
                            // line 137
                            echo "\t\t\t\t";
                            if (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target") == "popup")) {
                                // line 138
                                echo "\t\t\t\t\t";
                                // line 139
                                echo "\t\t\t\t\t";
                                $context["data_popup_window"] = (((($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug") . ",") . (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link", array(), "any", false, true), "width", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link", array(), "any", false, true), "width"), "600"))) : ("600"))) . ",") . (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link", array(), "any", false, true), "height", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link", array(), "any", false, true), "height"), "500"))) : ("500")));
                                // line 140
                                echo "\t\t\t\t";
                            } elseif (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target") == "x3_popup")) {
                                // line 141
                                echo "\t\t\t\t\t";
                                // line 142
                                echo "\t\t\t\t\t";
                                $context["data_popup"] = true;
                                // line 143
                                echo "\t\t\t\t\t";
                                if ($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "content")) {
                                    // line 144
                                    echo "\t\t\t\t\t\t";
                                    $context["data_popup_content"] = true;
                                    // line 145
                                    echo "\t\t\t\t\t\t";
                                    $context["link"] = "#";
                                    // line 146
                                    echo "\t\t\t\t\t";
                                }
                                // line 147
                                echo "\t\t\t\t";
                            } else {
                                // line 148
                                echo "\t\t\t\t\t";
                                $context["link_target"] = $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target");
                                // line 149
                                echo "\t\t\t\t";
                            }
                            // line 150
                            echo "\t\t\t";
                        } elseif ((twig_in_filter("http", (isset($context["link"]) ? $context["link"] : null)) || (isset($context["hasExtension"]) ? $context["hasExtension"] : null))) {
                            // line 151
                            echo "\t\t\t\t";
                            $context["link_target"] = "_blank";
                            // line 152
                            echo "\t\t\t";
                        }
                        // line 153
                        echo "
\t\t\t";
                        // line 155
                        echo "\t\t\t";
                        if ((isset($context["hasExtension"]) ? $context["hasExtension"] : null)) {
                            // line 156
                            echo "\t\t\t\t";
                            $context["link_class"] = ((isset($context["link_class"]) ? $context["link_class"] : null) . " no-ajax");
                            // line 157
                            echo "\t\t\t";
                        }
                        // line 158
                        echo "
\t\t";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "content") && ($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "target") == "x3_popup"))) {
                        // line 160
                        echo "\t\t\t";
                        $context["data_popup"] = true;
                        // line 161
                        echo "\t\t\t";
                        $context["data_popup_content"] = true;
                        // line 162
                        echo "\t\t\t";
                        $context["link"] = "#";
                        // line 163
                        echo "\t\t";
                    } else {
                        // line 164
                        echo "\t\t\t";
                        $context["link"] = call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null)));
                        // line 165
                        echo "\t\t";
                    }
                    // line 166
                    echo "
\t\t";
                    // line 168
                    echo "\t\t";
                    ob_start();
                    echo "<a href='";
                    echo (isset($context["link"]) ? $context["link"] : null);
                    echo "' class='item-link";
                    echo (isset($context["link_class"]) ? $context["link_class"] : null);
                    echo "'";
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["link_target"]) ? $context["link_target"] : null))))) {
                        echo " target=";
                        echo (isset($context["link_target"]) ? $context["link_target"] : null);
                    }
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["data_popup_window"]) ? $context["data_popup_window"] : null))))) {
                        echo " data-popup-window=\"";
                        echo (isset($context["data_popup_window"]) ? $context["data_popup_window"] : null);
                        echo "\"";
                    }
                    if ((isset($context["data_popup"]) ? $context["data_popup"] : null)) {
                        echo " data-popup";
                    }
                    if ($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "popup_class")) {
                        echo " data-popup-class=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "link"), "popup_class");
                        echo "\"";
                    }
                    if ((isset($context["data_popup_content"]) ? $context["data_popup_content"] : null)) {
                        echo " data-popup-content=\"";
                        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "content"), "html"));
                        echo "\"";
                    }
                    echo " ";
                    echo (isset($context["link_title"]) ? $context["link_title"] : null);
                    echo ">";
                    $context["href_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 169
                    echo "
\t\t";
                    // line 171
                    echo "\t\t";
                    ob_start();
                    $this->env->loadTemplate("partials/preview-image.html")->display(array_merge($context, array("page" => (isset($context["child"]) ? $context["child"] : null))));
                    $context["preview_img"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 172
                    echo "
\t\t";
                    // line 174
                    echo "\t\t";
                    if (call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["preview_img"]) ? $context["preview_img"] : null)))) {
                        $context["preview_img"] = (isset($context["preview_image"]) ? $context["preview_image"] : null);
                    }
                    // line 175
                    echo "
\t\t";
                    // line 177
                    echo "\t\t";
                    $context["preview_img_url"] = ((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["preview_img"]) ? $context["preview_img"] : null), ".")));
                    // line 178
                    echo "
\t\t";
                    // line 180
                    echo "    ";
                    if (((isset($context["preview_img"]) ? $context["preview_img"] : null) == "./app/public/images/default.png")) {
                        // line 181
                        echo "    \t";
                        $context["imgInfo"] = array(0 => 1280, 1 => 1280);
                        // line 182
                        echo "    \t";
                        $context["image_ratio"] = 100;
                        // line 183
                        echo "    \t";
                        $context["default_preview_class"] = " default-preview-image";
                        // line 184
                        echo "    ";
                    } else {
                        // line 185
                        echo "\t\t\t";
                        $context["imgInfo"] = call_user_func_array($this->env->getFunction('getimginfo')->getCallable(), array((isset($context["preview_img"]) ? $context["preview_img"] : null)));
                        // line 186
                        echo "    \t";
                        $context["image_ratio"] = ((array_key_exists("crop_ratio", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["crop_ratio"]) ? $context["crop_ratio"] : null), (((($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array"), 3))) : (3)) / (($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array"), 2))) : (2))) * 100)))) : ((((($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array"), 3))) : (3)) / (($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array"), 2))) : (2))) * 100)));
                        // line 187
                        echo "    ";
                    }
                    // line 188
                    echo "
    ";
                    // line 190
                    echo "    ";
                    ob_start();
                    // line 191
                    echo "    \t<h2 id='";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug");
                    echo "-title' data-file='";
                    echo (isset($context["preview_img"]) ? $context["preview_img"] : null);
                    echo "' class='title'>";
                    echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                    echo "</h2>
    ";
                    $context["title_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 193
                    echo "    ";
                    ob_start();
                    // line 194
                    echo "    \t<h2 id='";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug");
                    echo "-title' class='title'>";
                    echo (isset($context["label"]) ? $context["label"] : null);
                    echo "</h2>
    ";
                    $context["label_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 196
                    echo "    ";
                    ob_start();
                    // line 197
                    echo "    \t<h6 class=date>";
                    echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                    echo "</h6>
    ";
                    $context["date_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 199
                    echo "    ";
                    ob_start();
                    // line 200
                    echo "    \t";
                    if (((isset($context["amount"]) ? $context["amount"] : null) > 0)) {
                        // line 201
                        echo "    \t<h6 class=amount><span>";
                        echo (isset($context["amount"]) ? $context["amount"] : null);
                        echo " ";
                        echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["amount"]) ? $context["amount"] : null), "image", "images"));
                        echo "</span></h6>
    \t";
                    }
                    // line 203
                    echo "    ";
                    $context["amount_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 204
                    echo "    ";
                    ob_start();
                    // line 205
                    echo "    \t";
                    if (((isset($context["folders_amount"]) ? $context["folders_amount"] : null) > 0)) {
                        // line 206
                        echo "    \t<h6 class=folder_amount><span>";
                        echo (isset($context["folders_amount"]) ? $context["folders_amount"] : null);
                        echo " ";
                        echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["folders_amount"]) ? $context["folders_amount"] : null), "album", "albums"));
                        echo "</span></h6>
    \t";
                    }
                    // line 208
                    echo "    ";
                    $context["folders_amount_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 209
                    echo "    ";
                    if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description"))))) {
                        // line 210
                        echo "      ";
                        ob_start();
                        // line 211
                        echo "      \t<p>";
                        echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                        echo "</p>
      ";
                        $context["description_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 213
                        echo "    ";
                    }
                    // line 214
                    echo "    ";
                    ob_start();
                    // line 215
                    echo "    <figure>
\t\t\t<div class='img-link";
                    // line 216
                    echo (isset($context["default_preview_class"]) ? $context["default_preview_class"] : null);
                    echo "'>
\t\t\t\t<div class=image-container style='padding-bottom:";
                    // line 217
                    echo (isset($context["image_ratio"]) ? $context["image_ratio"] : null);
                    echo "%;'>
        \t<img data-src='";
                    // line 218
                    echo (isset($context["preview_img_url"]) ? $context["preview_img_url"] : null);
                    echo "' alt='";
                    echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('striptags')->getCallable(), array((isset($context["title"]) ? $context["title"] : null))), "html"));
                    echo "'>
        </div>

        ";
                    // line 221
                    if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "caption"), "enabled")) {
                        // line 222
                        echo "        \t";
                        ob_start();
                        // line 223
                        echo "\t        \t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "caption"), "items"), ",")));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 224
                            echo "\t        \t\t";
                            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                echo "<span class='title'>";
                                echo (isset($context["title_pseudo"]) ? $context["title_pseudo"] : null);
                                echo "</span>
\t        \t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                                // line 225
                                echo "<span class='title'>";
                                echo (isset($context["label"]) ? $context["label"] : null);
                                echo "</span>
\t        \t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "amount") && ((isset($context["amount"]) ? $context["amount"] : null) > 0))) {
                                // line 226
                                echo "<span class='amount'>";
                                echo (isset($context["amount"]) ? $context["amount"] : null);
                                echo " ";
                                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["amount"]) ? $context["amount"] : null), "image", "images"));
                                echo "</span>
\t        \t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "folders_amount") && ((isset($context["folders_amount"]) ? $context["folders_amount"] : null) > 0))) {
                                // line 227
                                echo "<span class='folder_amount'>";
                                echo (isset($context["folders_amount"]) ? $context["folders_amount"] : null);
                                echo " ";
                                echo call_user_func_array($this->env->getFunction('pluralize')->getCallable(), array((isset($context["folders_amount"]) ? $context["folders_amount"] : null), "album", "albums"));
                                echo "</span>
\t        \t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                // line 228
                                echo (isset($context["time_tag"]) ? $context["time_tag"] : null);
                                echo "
\t        \t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description")))))) {
                                // line 229
                                echo "<span class='description'>";
                                echo (isset($context["description_pseudo"]) ? $context["description_pseudo"] : null);
                                echo "</span>";
                            }
                            // line 230
                            echo "\t        \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 231
                        echo "        \t";
                        $context["figcaption"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 232
                        echo "        ";
                        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["figcaption"]) ? $context["figcaption"] : null))))))) {
                            echo "<figcaption>";
                            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array((isset($context["figcaption"]) ? $context["figcaption"] : null)));
                            echo "</figcaption>";
                        }
                        // line 233
                        echo "        ";
                    }
                    // line 234
                    echo "\t\t\t</div>
\t\t</figure>
\t\t";
                    $context["figure"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 237
                    echo "
\t\t";
                    // line 239
                    echo "\t\t<section data-options='w:";
                    echo $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 0, array(), "array");
                    echo ";h:";
                    echo $this->getAttribute((isset($context["imgInfo"]) ? $context["imgInfo"] : null), 1, array(), "array");
                    echo "' id=\"";
                    echo ((array_key_exists("label", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["label"]) ? $context["label"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug")))) : ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug")));
                    echo "\" aria-labelledby='";
                    echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "slug");
                    echo "-title' class='item";
                    if ((isset($context["folders_split_view"]) ? $context["folders_split_view"] : null)) {
                        echo " row";
                    }
                    echo "'>
\t\t";
                    // line 240
                    echo (isset($context["href_tag"]) ? $context["href_tag"] : null);
                    echo "

\t\t";
                    // line 243
                    echo "\t\t";
                    if ((isset($context["folders_split_view"]) ? $context["folders_split_view"] : null)) {
                        // line 244
                        echo "
\t\t";
                        // line 246
                        echo "\t\t";
                        if ($this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "invert")) {
                            // line 247
                            echo "\t\t\t";
                            $context["text_align"] = "medium-text-left";
                            // line 248
                            echo "\t\t";
                        } elseif ((!twig_in_filter("text-right", $this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "classes")) && !twig_in_filter("text-left", $this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "classes")))) {
                            // line 249
                            echo "\t\t\t";
                            $context["text_align"] = "medium-text-right";
                            // line 250
                            echo "\t\t";
                        }
                        // line 251
                        echo "
\t\t";
                        // line 253
                        echo "\t\t<div class='medium-";
                        echo $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "ratio");
                        echo " columns ";
                        echo (isset($context["push"]) ? $context["push"] : null);
                        echo " ";
                        echo (isset($context["text_align"]) ? $context["text_align"] : null);
                        echo "'>
\t\t";
                        // line 254
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 255
                            echo "\t\t\t";
                            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                                // line 256
                                echo (isset($context["label_tag"]) ? $context["label_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                // line 257
                                echo (isset($context["date_tag"]) ? $context["date_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "amount")) {
                                // line 258
                                echo (isset($context["amount_tag"]) ? $context["amount_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "folders_amount")) {
                                // line 259
                                echo (isset($context["folders_amount_tag"]) ? $context["folders_amount_tag"] : null);
                                echo "
\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description")))))) {
                                // line 260
                                echo (isset($context["description_tag"]) ? $context["description_tag"] : null);
                            }
                            // line 261
                            echo "\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 262
                        echo "\t\t</div>
\t\t<div class='medium-";
                        // line 263
                        echo (12 - $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "split"), "ratio"));
                        echo " columns ";
                        echo (isset($context["pull"]) ? $context["pull"] : null);
                        echo "'>
\t\t\t";
                        // line 264
                        echo (isset($context["figure"]) ? $context["figure"] : null);
                        echo "
\t\t</div>

\t\t";
                        // line 268
                        echo "\t\t";
                    } elseif (($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") != "justified")) {
                        // line 269
                        echo "\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 270
                            echo "\t\t\t";
                            if (((isset($context["item"]) ? $context["item"] : null) == "title")) {
                                echo (isset($context["title_tag"]) ? $context["title_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "label")) {
                                // line 271
                                echo (isset($context["label_tag"]) ? $context["label_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "date")) {
                                // line 272
                                echo (isset($context["date_tag"]) ? $context["date_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "amount")) {
                                // line 273
                                echo (isset($context["amount_tag"]) ? $context["amount_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "folders_amount")) {
                                // line 274
                                echo (isset($context["folders_amount_tag"]) ? $context["folders_amount_tag"] : null);
                                echo "
\t\t\t";
                            } elseif ((((isset($context["item"]) ? $context["item"] : null) == "description") && (!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "description")))))) {
                                // line 275
                                echo (isset($context["description_tag"]) ? $context["description_tag"] : null);
                                echo "
\t\t\t";
                            } elseif (((isset($context["item"]) ? $context["item"] : null) == "preview")) {
                                // line 276
                                echo (isset($context["figure"]) ? $context["figure"] : null);
                            }
                            // line 277
                            echo "\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 278
                        echo "
\t\t";
                        // line 280
                        echo "\t\t";
                    } else {
                        // line 281
                        echo "\t\t\t";
                        echo (isset($context["figure"]) ? $context["figure"] : null);
                        echo "
\t\t";
                    }
                    // line 283
                    echo "
\t\t</a>
\t\t</section>

\t\t";
                    // line 288
                    echo "\t\t";
                    if (((((($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") == "vertical") && $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "vertical"), "horizontal_rule")) && (!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") < (isset($context["limit"]) ? $context["limit"] : null))) || ((isset($context["folders_split_view"]) ? $context["folders_split_view"] : null) && ($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), "layout") == "grid")))) {
                        // line 289
                        echo "\t\t<hr class=hr />
\t\t";
                    }
                    // line 291
                    echo "
\t\t";
                    // line 292
                    echo (isset($context["li_close"]) ? $context["li_close"] : null);
                    echo "
\t";
                }
                // line 294
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "\t";
            echo (isset($context["ul_close"]) ? $context["ul_close"] : null);
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "partials/module.folders.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  957 => 295,  943 => 294,  938 => 292,  935 => 291,  931 => 289,  928 => 288,  922 => 283,  916 => 281,  913 => 280,  910 => 278,  904 => 277,  901 => 276,  896 => 275,  891 => 274,  886 => 273,  881 => 272,  876 => 271,  869 => 270,  864 => 269,  861 => 268,  855 => 264,  849 => 263,  846 => 262,  840 => 261,  837 => 260,  832 => 259,  827 => 258,  822 => 257,  817 => 256,  810 => 255,  806 => 254,  797 => 253,  794 => 251,  791 => 250,  788 => 249,  785 => 248,  782 => 247,  779 => 246,  776 => 244,  773 => 243,  768 => 240,  753 => 239,  750 => 237,  745 => 234,  742 => 233,  735 => 232,  732 => 231,  726 => 230,  721 => 229,  716 => 228,  708 => 227,  700 => 226,  694 => 225,  686 => 224,  681 => 223,  678 => 222,  676 => 221,  668 => 218,  664 => 217,  660 => 216,  657 => 215,  654 => 214,  651 => 213,  645 => 211,  642 => 210,  639 => 209,  636 => 208,  628 => 206,  625 => 205,  622 => 204,  619 => 203,  611 => 201,  608 => 200,  605 => 199,  599 => 197,  596 => 196,  588 => 194,  585 => 193,  575 => 191,  572 => 190,  569 => 188,  566 => 187,  563 => 186,  560 => 185,  557 => 184,  554 => 183,  551 => 182,  548 => 181,  545 => 180,  542 => 178,  539 => 177,  536 => 175,  531 => 174,  528 => 172,  523 => 171,  520 => 169,  486 => 168,  483 => 166,  480 => 165,  477 => 164,  474 => 163,  471 => 162,  468 => 161,  465 => 160,  461 => 158,  458 => 157,  455 => 156,  452 => 155,  449 => 153,  446 => 152,  443 => 151,  440 => 150,  437 => 149,  434 => 148,  431 => 147,  428 => 146,  425 => 145,  422 => 144,  419 => 143,  416 => 142,  414 => 141,  411 => 140,  408 => 139,  406 => 138,  403 => 137,  400 => 136,  397 => 134,  394 => 133,  391 => 132,  388 => 131,  385 => 129,  382 => 128,  379 => 127,  376 => 126,  370 => 124,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  349 => 116,  346 => 115,  343 => 114,  340 => 113,  337 => 111,  334 => 110,  325 => 109,  322 => 108,  319 => 107,  313 => 106,  307 => 104,  286 => 101,  272 => 99,  264 => 97,  252 => 92,  243 => 89,  240 => 88,  237 => 86,  234 => 85,  231 => 84,  228 => 83,  225 => 82,  222 => 81,  216 => 78,  213 => 77,  210 => 76,  199 => 72,  196 => 71,  190 => 69,  187 => 68,  184 => 67,  178 => 65,  175 => 63,  172 => 62,  169 => 61,  166 => 60,  160 => 57,  140 => 55,  135 => 54,  133 => 53,  130 => 51,  111 => 41,  97 => 36,  88 => 33,  373 => 125,  367 => 123,  365 => 146,  362 => 145,  359 => 143,  352 => 117,  348 => 136,  341 => 134,  335 => 132,  332 => 131,  329 => 129,  323 => 127,  320 => 126,  317 => 124,  311 => 122,  308 => 121,  305 => 119,  294 => 116,  291 => 102,  288 => 113,  280 => 100,  277 => 110,  274 => 109,  271 => 107,  265 => 105,  262 => 104,  259 => 102,  253 => 100,  250 => 99,  247 => 97,  239 => 94,  232 => 90,  229 => 89,  219 => 79,  204 => 82,  201 => 81,  192 => 77,  186 => 75,  183 => 74,  180 => 73,  156 => 62,  153 => 61,  150 => 59,  144 => 57,  141 => 56,  138 => 54,  129 => 51,  118 => 45,  115 => 43,  112 => 45,  109 => 43,  167 => 64,  152 => 59,  117 => 56,  114 => 50,  108 => 40,  99 => 43,  94 => 35,  91 => 34,  48 => 17,  60 => 23,  47 => 16,  42 => 13,  123 => 47,  120 => 46,  106 => 41,  103 => 38,  100 => 37,  96 => 42,  93 => 36,  83 => 34,  80 => 32,  69 => 29,  38 => 12,  86 => 35,  76 => 29,  73 => 28,  66 => 27,  63 => 22,  58 => 20,  56 => 20,  53 => 20,  44 => 14,  36 => 11,  27 => 6,  315 => 115,  312 => 114,  302 => 108,  299 => 103,  297 => 117,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 98,  261 => 96,  258 => 95,  255 => 93,  249 => 91,  246 => 90,  242 => 96,  236 => 93,  233 => 77,  227 => 75,  224 => 74,  193 => 70,  189 => 76,  176 => 52,  173 => 51,  170 => 66,  164 => 63,  161 => 46,  158 => 44,  148 => 41,  132 => 52,  126 => 49,  122 => 47,  105 => 39,  102 => 28,  61 => 24,  45 => 16,  22 => 3,  92 => 37,  89 => 36,  85 => 32,  81 => 34,  78 => 23,  74 => 30,  71 => 27,  67 => 23,  55 => 18,  52 => 17,  49 => 16,  40 => 12,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 75,  205 => 74,  202 => 73,  198 => 79,  195 => 78,  181 => 66,  177 => 72,  174 => 70,  171 => 69,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  157 => 56,  154 => 60,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 45,  113 => 44,  110 => 48,  107 => 45,  104 => 44,  101 => 41,  98 => 40,  95 => 39,  90 => 34,  87 => 38,  84 => 36,  82 => 31,  79 => 30,  77 => 32,  75 => 31,  72 => 29,  68 => 25,  64 => 23,  62 => 22,  59 => 20,  57 => 18,  54 => 19,  50 => 17,  46 => 15,  43 => 14,  41 => 14,  39 => 12,  37 => 10,  35 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 5,  23 => 3,  19 => 1,);
    }
}
