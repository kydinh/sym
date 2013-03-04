<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_20a9c88dca9a8f61cdfd301e8209cea5 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  42 => 12,  24 => 2,  1188 => 329,  1182 => 328,  1176 => 327,  1170 => 326,  1164 => 325,  1158 => 324,  1152 => 323,  1146 => 322,  1140 => 321,  1124 => 315,  1117 => 314,  1115 => 313,  1112 => 312,  1089 => 308,  1064 => 307,  1062 => 306,  1059 => 305,  1047 => 300,  1042 => 299,  1040 => 298,  1037 => 297,  1028 => 291,  1022 => 289,  1019 => 288,  1014 => 287,  1012 => 286,  1009 => 285,  1002 => 280,  993 => 278,  989 => 277,  986 => 276,  983 => 275,  981 => 274,  978 => 273,  970 => 269,  968 => 268,  965 => 267,  958 => 262,  955 => 261,  947 => 256,  943 => 255,  939 => 254,  936 => 253,  934 => 252,  931 => 251,  923 => 247,  921 => 243,  919 => 242,  916 => 241,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  864 => 224,  862 => 223,  859 => 222,  851 => 216,  848 => 215,  846 => 214,  843 => 213,  835 => 209,  832 => 208,  830 => 207,  827 => 206,  819 => 202,  816 => 201,  814 => 200,  811 => 199,  803 => 195,  800 => 194,  798 => 193,  795 => 192,  787 => 188,  784 => 187,  782 => 186,  779 => 185,  771 => 181,  768 => 180,  766 => 179,  763 => 178,  755 => 174,  753 => 173,  750 => 172,  742 => 168,  739 => 167,  737 => 166,  734 => 165,  726 => 161,  723 => 160,  721 => 159,  719 => 158,  716 => 157,  709 => 152,  699 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  278 => 8,  272 => 6,  269 => 5,  267 => 4,  264 => 3,  260 => 329,  258 => 328,  256 => 327,  254 => 326,  252 => 325,  250 => 324,  248 => 323,  246 => 322,  244 => 321,  241 => 320,  238 => 318,  236 => 312,  233 => 311,  231 => 305,  228 => 304,  226 => 297,  223 => 296,  220 => 294,  218 => 285,  215 => 284,  213 => 273,  210 => 272,  208 => 267,  205 => 266,  202 => 264,  200 => 261,  197 => 260,  195 => 251,  192 => 250,  190 => 241,  187 => 240,  184 => 238,  182 => 222,  179 => 221,  176 => 219,  174 => 213,  171 => 212,  169 => 206,  166 => 205,  164 => 199,  161 => 198,  159 => 192,  156 => 191,  154 => 185,  151 => 184,  149 => 178,  146 => 177,  144 => 172,  141 => 171,  139 => 165,  136 => 164,  134 => 157,  131 => 156,  129 => 145,  126 => 144,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  114 => 108,  111 => 107,  109 => 102,  106 => 101,  101 => 86,  99 => 68,  96 => 67,  94 => 57,  91 => 35,  89 => 47,  79 => 29,  74 => 20,  71 => 19,  69 => 13,  61 => 2,  108 => 33,  104 => 87,  102 => 30,  90 => 27,  87 => 26,  84 => 41,  81 => 40,  72 => 18,  67 => 16,  59 => 13,  56 => 12,  33 => 4,  30 => 5,  52 => 13,  48 => 11,  43 => 9,  37 => 7,  26 => 3,  19 => 1,  98 => 29,  93 => 28,  88 => 6,  78 => 40,  46 => 14,  44 => 9,  40 => 8,  36 => 5,  32 => 6,  27 => 4,  22 => 2,  64 => 3,  58 => 14,  55 => 12,  50 => 15,  34 => 4,  31 => 5,  86 => 46,  80 => 41,  76 => 31,  70 => 26,  66 => 25,  62 => 24,  57 => 15,  53 => 11,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 4,);
    }
}
