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
        return array (  42 => 13,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  17 => 1,  187 => 32,  181 => 27,  177 => 28,  174 => 27,  171 => 26,  161 => 29,  158 => 26,  146 => 20,  142 => 21,  140 => 20,  125 => 17,  123 => 16,  118 => 15,  107 => 33,  105 => 32,  101 => 30,  99 => 24,  95 => 22,  93 => 19,  90 => 18,  85 => 14,  83 => 13,  80 => 12,  72 => 7,  61 => 5,  55 => 35,  53 => 11,  46 => 8,  43 => 7,  41 => 6,  333 => 125,  330 => 124,  322 => 98,  317 => 74,  314 => 73,  297 => 152,  293 => 151,  288 => 149,  284 => 148,  279 => 146,  275 => 145,  270 => 143,  266 => 142,  261 => 140,  257 => 139,  252 => 137,  248 => 136,  243 => 134,  233 => 130,  229 => 129,  225 => 127,  223 => 124,  198 => 101,  196 => 98,  172 => 76,  170 => 73,  165 => 25,  162 => 69,  155 => 25,  152 => 24,  143 => 62,  141 => 57,  135 => 19,  130 => 51,  127 => 50,  122 => 45,  119 => 44,  114 => 47,  112 => 13,  92 => 26,  89 => 25,  81 => 20,  76 => 17,  73 => 16,  66 => 12,  62 => 11,  57 => 10,  54 => 9,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  597 => 484,  569 => 459,  549 => 442,  529 => 425,  498 => 397,  470 => 372,  441 => 346,  422 => 330,  403 => 314,  384 => 298,  352 => 269,  325 => 99,  296 => 219,  277 => 203,  258 => 187,  239 => 133,  207 => 142,  178 => 116,  149 => 90,  129 => 16,  110 => 57,  88 => 15,  77 => 11,  74 => 28,  69 => 510,  67 => 6,  63 => 26,  60 => 25,  49 => 17,  37 => 5,  31 => 1,  28 => 3,);
    }
}
