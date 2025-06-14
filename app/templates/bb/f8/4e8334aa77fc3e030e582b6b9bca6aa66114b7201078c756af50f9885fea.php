<?php

/* partials/head.html */
class __TwigTemplate_bbf84e8334aa77fc3e030e582b6b9bca6aa66114b7201078c756af50f9885fea extends Twig_Template
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
        echo "<html class=\"no-js\">
";
        // line 2
        $context["page_title_stripped"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('striptags')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null))), "html"))));
        // line 3
        $context["page_description_stripped"] = call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('striptags')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null))), "html"))));
        // line 4
        echo "<head>

  ";
        // line 7
        echo "  <meta charset=\"utf-8\">
  <title>";
        // line 8
        echo (isset($context["page_title_stripped"]) ? $context["page_title_stripped"] : null);
        echo "</title>
  ";
        // line 9
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null))))) {
            // line 10
            echo "  <meta name=\"description\" content=\"";
            echo (isset($context["page_description_stripped"]) ? $context["page_description_stripped"] : null);
            echo "\">
  ";
        }
        // line 12
        echo "
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"canonical\" href=\"";
        // line 14
        echo (isset($context["absolutepath_page"]) ? $context["absolutepath_page"] : null);
        echo "\">

  ";
        // line 17
        echo "  <link rel=\"dns-prefetch\" href=\"//auth.photo.gallery\">
  ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo "<link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        }
        // line 19
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files")) {
            echo "<link rel=\"dns-prefetch\" href=\"";
            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('lower')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_files"))), "/")), "http:")), "https:"));
            echo "\">";
        }
        // line 20
        echo "
  ";
        // line 22
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_author"))))) {
            echo "<link rel=\"author\" href=\"https://plus.google.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_author");
            echo "\">";
        }
        // line 23
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_publisher"))))) {
            echo "<link rel=\"publisher\" href=\"https://plus.google.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_publisher");
            echo "\">";
        }
        // line 24
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_site_verification"))))) {
            echo "<meta name=\"google-site-verification\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "google_site_verification");
            echo "\">";
        }
        // line 25
        echo "
  ";
        // line 27
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "twitter_username"))))) {
            echo "<meta name=\"twitter:site\" content=\"@";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "twitter_username");
            echo "\">";
        }
        // line 28
        echo "
  ";
        // line 30
        echo "  <meta property=\"og:title\" content=\"";
        echo (isset($context["page_title_stripped"]) ? $context["page_title_stripped"] : null);
        echo "\">
  ";
        // line 31
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["page_description"]) ? $context["page_description"] : null))))) {
            echo "<meta property=\"og:description\" content=\"";
            echo (isset($context["page_description_stripped"]) ? $context["page_description_stripped"] : null);
            echo "\">";
        }
        // line 32
        echo "  <meta property=\"og:url\" content=\"";
        echo (isset($context["absolutepath_page"]) ? $context["absolutepath_page"] : null);
        echo "\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:updated_time\" content=\"";
        // line 34
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "updated");
        echo "\">
  ";
        // line 35
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "facebook_author"))))) {
            echo "<meta property=\"article:author\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "facebook_author");
            echo "\">";
        }
        // line 36
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "facebook_publisher"))))) {
            echo "<meta property=\"article:publisher\" content=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "facebook_publisher");
            echo "\">";
        }
        // line 37
        echo "  <meta property=\"og:image\" content=\"";
        echo (isset($context["preview_image_full"]) ? $context["preview_image_full"] : null);
        echo "\">

  ";
        // line 40
        echo "  ";
        $context["favicon"] = call_user_func_array($this->env->getFunction('firstImage')->getCallable(), array("./content/custom/favicon"));
        // line 41
        echo "  ";
        if ((isset($context["favicon"]) ? $context["favicon"] : null)) {
            // line 42
            echo "  <link rel=\"icon\" href=\"";
            echo (isset($context["assetspath"]) ? $context["assetspath"] : null);
            echo call_user_func_array($this->env->getFunction('firstImage')->getCallable(), array("./content/custom/favicon"));
            echo "\">
  ";
        }
        // line 44
        echo "
  ";
        // line 46
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "feed")) {
            // line 47
            echo "  <link href=\"";
            echo (isset($context["absolutepath"]) ? $context["absolutepath"] : null);
            echo "/feed/\" type=\"application/atom+xml\" rel=\"alternate\" title=\"Atom Feed\">
  ";
        }
        // line 49
        echo "
  ";
        // line 51
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            // line 52
            echo "<script>
var css_counter = 0;
function imagevue_(){
\tcss_counter ++;
\tif(css_counter === 1) imagevue();
};
function cssFail(){
\tcss_counter --;
\tvar l = document.createElement('link');
\tl.onload = imagevue_;
\tl.rel = 'stylesheet';
\tl.id = '";
            // line 63
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "skin");
            echo "';
\tl.href = '";
            // line 64
            echo (isset($context["rootpath"]) ? $context["rootpath"] : null);
            echo "/app/public/css/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
            echo "/x3.skin.";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "skin");
            echo ".css';
\tdocument.getElementsByTagName('head')[0].appendChild(l);
}
</script>
  ";
        }
        // line 69
        echo "
  ";
        // line 71
        echo "  <link rel=\"stylesheet\" id=";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "skin");
        echo " href=\"";
        echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
        echo "/css/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
        echo "/x3.skin.";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "skin");
        echo ".css\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo " onerror=\"cssFail();\"";
        }
        echo ">

\t";
        // line 74
        echo "\t";
        if (((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "font"), "font")))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "font"), "font") != "none"))) {
            // line 75
            echo "\t<link rel=stylesheet href=\"https://fonts.googleapis.com/css?family=";
            echo call_user_func_array($this->env->getFilter('getfontstring')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "font", array(), "any", false, true), "font", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "font", array(), "any", false, true), "font"), "Lato:400,700,900,400italic,700italic,900italic"))) : ("Lato:400,700,900,400italic,700italic,900italic"))));
            echo "\">
\t";
        }
        // line 77
        echo "
\t";
        // line 79
        echo "\t";
        echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('removeComments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "head")))));
        echo "

\t";
        // line 82
        echo "  <style id=\"default-fonts\"><!-- body,h1,h2,h3,h4,h5,h6 {font-family: \"Helvetica Neue\",Helvetica,Roboto,Arial,sans-serif;} --></style>

  ";
        // line 85
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "css"))))) {
            // line 86
            echo "  <style id=\"custom-css\"><!-- ";
            echo call_user_func_array($this->env->getFilter('minify')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "css")));
            echo " --></style>
  ";
        }
        // line 88
        echo "
  ";
        // line 90
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "logo_css"))))) {
            // line 91
            echo "  <style id=\"logo\"><!-- ";
            echo call_user_func_array($this->env->getFilter('minify')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "logo_css")));
            echo " --></style>
  ";
        }
        // line 93
        echo "
  ";
        // line 95
        echo "  ";
        $context["custom_css_files"] = call_user_func_array($this->env->getFunction('x3_glob')->getCallable(), array("./content/custom/files/css/*include*.css", (("<link rel=\"stylesheet\" id=\"custom_css_{{index}}\" href=\"" . (isset($context["assetspath"]) ? $context["assetspath"] : null)) . "/content/custom/files/css/{{basename}}\">")));
        // line 96
        echo "  ";
        if ((isset($context["custom_css_files"]) ? $context["custom_css_files"] : null)) {
            echo (isset($context["custom_css_files"]) ? $context["custom_css_files"] : null);
        }
        // line 97
        echo "
  ";
        // line 99
        echo "  <style id=\"x3app\"></style>

</head>

";
        // line 103
        $context["layout"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "layout", array(), "any", false, true), "layout", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style", array(), "any", false, true), "layout", array(), "any", false, true), "layout"), "topbar-float"))) : ("topbar-float"));
        // line 104
        if (twig_in_filter("topbar", (isset($context["layout"]) ? $context["layout"] : null))) {
            $context["fixed"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "layout"), "fixed");
        }
        // line 105
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "layout"), "wide")) {
            $context["wide"] = "wide";
        }
        // line 106
        $context["data_layout"] = call_user_func_array($this->env->getFilter('cleanData')->getCallable(), array((((((((((((((((((($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "include"), "body") . " ") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "body")) . " ") . (isset($context["layout"]) ? $context["layout"] : null)) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "skin")) . " ") . (isset($context["fixed"]) ? $context["fixed"] : null)) . " ") . (isset($context["wide"]) ? $context["wide"] : null)) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "style"), "skin"), "clear")) . " x3-") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name")) . " slug-") . call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('lower')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug"), "/")))), "index"))) . " page-") . call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('lower')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), "/")))), array("/" => "-"))), "index")))));
        // line 107
        echo "
<body class=\"fa-loading initializing ";
        // line 108
        echo (isset($context["data_layout"]) ? $context["data_layout"] : null);
        echo "\" data-include=\"";
        echo call_user_func_array($this->env->getFilter('cleanData')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "include"), "body")));
        echo "\">
<div class=x3-loader title=loading></div>
<div class=sb-site-container>
  <div>

    ";
        // line 114
        echo "    ";
        $this->env->loadTemplate("partials/nav/header.html")->display($context);
        // line 115
        echo "
  \t<main class=\"main\" id=\"content\">";
    }

    public function getTemplateName()
    {
        return "partials/head.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 115,  312 => 114,  302 => 108,  299 => 107,  297 => 106,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 96,  270 => 95,  267 => 93,  261 => 91,  258 => 90,  255 => 88,  249 => 86,  246 => 85,  242 => 82,  236 => 79,  233 => 77,  227 => 75,  224 => 74,  193 => 64,  189 => 63,  176 => 52,  173 => 51,  170 => 49,  164 => 47,  161 => 46,  158 => 44,  148 => 41,  132 => 36,  126 => 35,  122 => 34,  105 => 30,  102 => 28,  61 => 19,  45 => 12,  22 => 2,  92 => 25,  89 => 36,  85 => 24,  81 => 31,  78 => 23,  74 => 27,  71 => 22,  67 => 23,  55 => 17,  52 => 16,  49 => 14,  40 => 11,  34 => 9,  31 => 8,  29 => 7,  26 => 4,  24 => 3,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 71,  205 => 69,  202 => 75,  198 => 72,  195 => 70,  181 => 69,  177 => 67,  174 => 66,  171 => 65,  168 => 64,  165 => 63,  162 => 62,  159 => 61,  157 => 60,  154 => 59,  151 => 42,  145 => 40,  142 => 54,  139 => 37,  137 => 51,  134 => 50,  116 => 32,  113 => 47,  110 => 31,  107 => 45,  104 => 44,  101 => 43,  98 => 41,  95 => 27,  90 => 39,  87 => 38,  84 => 36,  82 => 35,  79 => 33,  77 => 32,  75 => 31,  72 => 29,  68 => 20,  64 => 22,  62 => 21,  59 => 19,  57 => 18,  54 => 17,  50 => 18,  46 => 13,  43 => 12,  41 => 14,  39 => 10,  37 => 9,  35 => 11,  33 => 8,  30 => 7,  28 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
