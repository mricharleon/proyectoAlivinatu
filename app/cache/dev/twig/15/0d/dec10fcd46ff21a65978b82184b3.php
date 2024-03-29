<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_150ddec10fcd46ff21a65978b82184b3 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  24 => 3,  22 => 2,  17 => 1,  192 => 28,  188 => 29,  185 => 28,  182 => 27,  178 => 30,  175 => 27,  172 => 26,  166 => 25,  159 => 26,  156 => 25,  153 => 24,  147 => 20,  143 => 21,  136 => 19,  130 => 16,  126 => 17,  124 => 16,  119 => 15,  113 => 13,  106 => 34,  102 => 32,  96 => 22,  94 => 19,  89 => 15,  86 => 14,  78 => 11,  68 => 6,  56 => 37,  54 => 11,  44 => 7,  38 => 5,  32 => 1,  375 => 135,  372 => 134,  367 => 109,  364 => 108,  359 => 84,  356 => 83,  339 => 162,  335 => 161,  330 => 159,  326 => 158,  321 => 156,  317 => 155,  312 => 153,  308 => 152,  303 => 150,  299 => 149,  294 => 147,  290 => 146,  285 => 144,  281 => 143,  275 => 140,  271 => 139,  267 => 137,  265 => 134,  240 => 111,  238 => 108,  214 => 86,  212 => 83,  207 => 80,  204 => 79,  198 => 34,  194 => 76,  191 => 75,  184 => 74,  181 => 73,  174 => 62,  171 => 61,  162 => 31,  160 => 61,  154 => 58,  149 => 55,  146 => 54,  141 => 20,  138 => 48,  133 => 51,  131 => 48,  111 => 30,  108 => 35,  95 => 21,  92 => 20,  85 => 16,  81 => 12,  77 => 14,  72 => 13,  63 => 9,  59 => 8,  55 => 7,  42 => 13,  39 => 3,  100 => 24,  91 => 18,  84 => 13,  80 => 30,  73 => 7,  69 => 12,  62 => 5,  58 => 20,  51 => 6,  47 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
