<?php

/* partials/footer.html */
class __TwigTemplate_76bfd9be1a42cb5872013f94b2c2c526c2f5589af4f3adf0516b3657b1687302 extends Twig_Template
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
        echo "</main>
</div>
</div>

<footer class=\"footer\">

\t";
        // line 8
        echo "\t";
        echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('removeComments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "footer"))), array("{{copy}}" => (((((("<p>&copy; " . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year")) . " <a href=\"") . (isset($context["rootpath"]) ? $context["rootpath"] : null)) . "/\">") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url")) . "</a></p>"))))));
        echo "

\t";
        // line 12
        echo "\t<p class=\"x3-footer-link\">X3 ";
        echo call_user_func_array($this->env->getFunction('random')->getCallable(), array($this->env, array(0 => "Photo Gallery Website", 1 => "Photography Website", 2 => "Image Gallery CMS", 3 => "Website for Photographers", 4 => "Online Portfolio")));
        echo " by <a href=\"https://www.photo.gallery\">www.photo.gallery</a></p>
</footer>

";
        // line 16
        echo "<script>
var x3_settings = ";
        // line 17
        echo call_user_func_array($this->env->getFunction('jsonSettings')->getCallable(), array((isset($context["page"]) ? $context["page"] : null)));
        echo ";
var x3_page = ";
        // line 18
        echo call_user_func_array($this->env->getFunction('pageJson')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null), (isset($context["page_description"]) ? $context["page_description"] : null), "", $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), (isset($context["preview_image_full"]) ? $context["preview_image_full"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path")));
        echo ";
";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            // line 20
            echo "function jsFail(){
\tvar s = document.createElement('script');
\ts.type = 'text/javascript';
\ts.onload = imagevue_;
\ts.src = '";
            // line 24
            echo (isset($context["rootpath"]) ? $context["rootpath"] : null);
            echo "/app/public/js/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
            echo "/x3.min.js';
\tdocument.getElementsByTagName('head')[0].appendChild(s);
}
";
        }
        // line 28
        echo "</script>

";
        // line 31
        echo "<script src=\"";
        echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
        echo "/js/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
        echo "/x3.min.js\" async";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo " onerror=\"jsFail()\"";
        }
        echo " onload=\"imagevue";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo "_";
        }
        echo "();\"></script>

";
        // line 34
        $context["custom_js_files"] = call_user_func_array($this->env->getFunction('x3_glob')->getCallable(), array("./content/custom/files/javascript/*include*.js", (("<script id=\"custom_javascript_{{index}}\" src=\"" . (isset($context["assetspath"]) ? $context["assetspath"] : null)) . "/content/custom/files/javascript/{{basename}}\"></script>")));
        // line 35
        if ((isset($context["custom_js_files"]) ? $context["custom_js_files"] : null)) {
            echo (isset($context["custom_js_files"]) ? $context["custom_js_files"] : null);
        }
        // line 36
        echo "
";
        // line 38
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "js"))))))) {
            // line 39
            echo "<script id=\"custom-javascript\">";
            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "js")));
            echo "</script>
";
        }
        // line 41
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  884 => 324,  860 => 317,  854 => 315,  851 => 314,  845 => 312,  839 => 310,  836 => 309,  833 => 308,  830 => 306,  824 => 303,  821 => 302,  815 => 299,  800 => 292,  770 => 282,  764 => 280,  761 => 279,  756 => 278,  747 => 273,  741 => 272,  737 => 270,  720 => 255,  714 => 253,  705 => 250,  701 => 249,  692 => 248,  689 => 246,  683 => 244,  680 => 243,  677 => 242,  674 => 241,  671 => 239,  665 => 236,  661 => 234,  653 => 232,  647 => 230,  640 => 228,  637 => 227,  609 => 224,  606 => 222,  603 => 221,  600 => 220,  597 => 219,  594 => 218,  587 => 217,  584 => 216,  578 => 215,  543 => 201,  540 => 200,  537 => 199,  534 => 197,  527 => 194,  517 => 190,  514 => 189,  511 => 187,  508 => 186,  505 => 185,  499 => 184,  494 => 183,  489 => 182,  481 => 181,  476 => 180,  473 => 179,  470 => 177,  467 => 176,  459 => 172,  409 => 159,  401 => 158,  396 => 157,  393 => 156,  390 => 155,  387 => 154,  384 => 152,  381 => 151,  378 => 149,  375 => 148,  372 => 147,  369 => 146,  366 => 145,  363 => 144,  360 => 143,  357 => 142,  354 => 141,  351 => 140,  345 => 137,  342 => 136,  339 => 135,  336 => 134,  333 => 133,  330 => 132,  327 => 131,  324 => 130,  321 => 128,  318 => 127,  309 => 123,  306 => 122,  303 => 121,  300 => 120,  285 => 113,  282 => 112,  279 => 111,  276 => 109,  211 => 82,  191 => 79,  179 => 73,  155 => 64,  149 => 62,  146 => 60,  136 => 54,  131 => 51,  127 => 49,  124 => 48,  121 => 47,  119 => 46,  65 => 25,  957 => 295,  943 => 294,  938 => 292,  935 => 291,  931 => 289,  928 => 288,  922 => 283,  916 => 281,  913 => 280,  910 => 278,  904 => 277,  901 => 276,  896 => 275,  891 => 326,  886 => 325,  881 => 322,  876 => 320,  869 => 270,  864 => 269,  861 => 268,  855 => 264,  849 => 263,  846 => 262,  840 => 261,  837 => 260,  832 => 259,  827 => 258,  822 => 257,  817 => 300,  810 => 296,  806 => 294,  797 => 291,  794 => 289,  791 => 250,  788 => 288,  785 => 248,  782 => 286,  779 => 246,  776 => 284,  773 => 243,  768 => 240,  753 => 277,  750 => 237,  745 => 234,  742 => 233,  735 => 260,  732 => 258,  726 => 257,  721 => 229,  716 => 228,  708 => 251,  700 => 226,  694 => 225,  686 => 245,  681 => 223,  678 => 222,  676 => 221,  668 => 238,  664 => 217,  660 => 216,  657 => 215,  654 => 214,  651 => 213,  645 => 229,  642 => 210,  639 => 209,  636 => 208,  628 => 206,  625 => 205,  622 => 204,  619 => 203,  611 => 201,  608 => 200,  605 => 199,  599 => 197,  596 => 196,  588 => 194,  585 => 193,  575 => 214,  572 => 213,  569 => 211,  566 => 210,  563 => 209,  560 => 208,  557 => 207,  554 => 206,  551 => 205,  548 => 204,  545 => 180,  542 => 178,  539 => 177,  536 => 175,  531 => 196,  528 => 172,  523 => 192,  520 => 169,  486 => 168,  483 => 166,  480 => 165,  477 => 164,  474 => 163,  471 => 162,  468 => 161,  465 => 160,  461 => 158,  458 => 157,  455 => 171,  452 => 170,  449 => 169,  446 => 168,  443 => 166,  440 => 165,  437 => 149,  434 => 148,  431 => 164,  428 => 163,  425 => 162,  422 => 144,  419 => 161,  416 => 142,  414 => 160,  411 => 140,  408 => 139,  406 => 138,  403 => 137,  400 => 136,  397 => 134,  394 => 133,  391 => 132,  388 => 131,  385 => 129,  382 => 128,  379 => 127,  376 => 126,  370 => 124,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  349 => 116,  346 => 115,  343 => 114,  340 => 113,  337 => 111,  334 => 110,  325 => 109,  322 => 108,  319 => 107,  313 => 106,  307 => 104,  286 => 101,  272 => 99,  264 => 104,  252 => 99,  243 => 96,  240 => 95,  237 => 93,  234 => 92,  231 => 91,  228 => 89,  225 => 88,  222 => 87,  216 => 85,  213 => 83,  210 => 76,  199 => 72,  196 => 71,  190 => 69,  187 => 68,  184 => 67,  178 => 65,  175 => 63,  172 => 62,  169 => 61,  166 => 60,  160 => 57,  140 => 55,  135 => 54,  133 => 53,  130 => 51,  111 => 41,  97 => 38,  88 => 34,  373 => 125,  367 => 123,  365 => 146,  362 => 145,  359 => 143,  352 => 117,  348 => 138,  341 => 134,  335 => 132,  332 => 131,  329 => 129,  323 => 127,  320 => 126,  317 => 124,  311 => 122,  308 => 121,  305 => 119,  294 => 117,  291 => 116,  288 => 115,  280 => 100,  277 => 110,  274 => 109,  271 => 107,  265 => 105,  262 => 104,  259 => 102,  253 => 100,  250 => 99,  247 => 97,  239 => 94,  232 => 90,  229 => 89,  219 => 86,  204 => 82,  201 => 81,  192 => 77,  186 => 76,  183 => 75,  180 => 73,  156 => 62,  153 => 61,  150 => 59,  144 => 59,  141 => 57,  138 => 54,  129 => 51,  118 => 45,  115 => 43,  112 => 45,  109 => 43,  167 => 68,  152 => 63,  117 => 56,  114 => 50,  108 => 40,  99 => 39,  94 => 36,  91 => 34,  48 => 15,  60 => 23,  47 => 18,  42 => 13,  123 => 47,  120 => 46,  106 => 41,  103 => 38,  100 => 37,  96 => 42,  93 => 36,  83 => 34,  80 => 31,  69 => 27,  38 => 12,  86 => 35,  76 => 29,  73 => 28,  66 => 27,  63 => 22,  58 => 21,  56 => 20,  53 => 20,  44 => 14,  36 => 11,  27 => 8,  315 => 126,  312 => 124,  302 => 108,  299 => 103,  297 => 118,  293 => 105,  289 => 104,  287 => 103,  281 => 99,  278 => 97,  273 => 108,  270 => 107,  267 => 105,  261 => 103,  258 => 101,  255 => 100,  249 => 98,  246 => 97,  242 => 96,  236 => 93,  233 => 77,  227 => 75,  224 => 74,  193 => 70,  189 => 76,  176 => 72,  173 => 71,  170 => 69,  164 => 67,  161 => 66,  158 => 65,  148 => 41,  132 => 52,  126 => 49,  122 => 47,  105 => 41,  102 => 28,  61 => 24,  45 => 14,  22 => 3,  92 => 37,  89 => 36,  85 => 32,  81 => 34,  78 => 23,  74 => 29,  71 => 28,  67 => 26,  55 => 18,  52 => 17,  49 => 16,  40 => 16,  34 => 9,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  223 => 85,  220 => 83,  217 => 82,  215 => 81,  212 => 79,  208 => 80,  205 => 74,  202 => 73,  198 => 79,  195 => 78,  181 => 66,  177 => 72,  174 => 70,  171 => 69,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  157 => 56,  154 => 60,  151 => 42,  145 => 40,  142 => 54,  139 => 56,  137 => 51,  134 => 53,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  95 => 38,  90 => 35,  87 => 35,  84 => 33,  82 => 31,  79 => 30,  77 => 30,  75 => 31,  72 => 31,  68 => 28,  64 => 23,  62 => 23,  59 => 24,  57 => 18,  54 => 19,  50 => 17,  46 => 15,  43 => 17,  41 => 14,  39 => 12,  37 => 10,  35 => 10,  33 => 12,  30 => 8,  28 => 7,  25 => 5,  23 => 3,  19 => 1,);
    }
}
