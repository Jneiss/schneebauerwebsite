<?php

/* partials/base.html.twig */
class __TwigTemplate_3333ce5a284f1dad118f7ef3ab414bed81411c6bcb9a2701c20481beb6564351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "    </head>

      <body>

        ";
        // line 53
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "
       

        <!-- One -->
            <section id=\"one\" class=\"wrapper major-pad\">
                <div class=\"inner\">
                    <section class=\"spotlight\">
                        <div class=\"content\">
                            <h2>Libero bibendum nullam vitae magna sed veroeros</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id interdum magna, ultricies aliquet curabitur sed metus pellentesque, ornare sapien quis.</p>
                        </div>
                        <span class=\"image\"><img src=\"images/pic07.jpg\" alt=\"\" /></span>
                    </section>
                </div>
            </section>

        <!-- Two -->
            <section id=\"two\" class=\"wrapper content-pad\">
                <div class=\"inner\">
                    <div class=\"features\">
                        <section class=\"content\">
                            <span class=\"icon-wrapper major\"><span class=\"icon fa-pencil\"></span></span>
                            <h3>Praesent sed donec</h3>
                            <p>Proin consequat luctus elit, nec blandit tellus ut volutpat magna. mi euismod elementum lectus et consequat etiam lorem etiam sed tempus. Feugiat veroeros lorem ipsum dolor.</p>
                        </section>
                        <section class=\"content\">
                            <span class=\"icon-wrapper major\"><span class=\"icon fa-paper-plane\"></span></span>
                            <h3>Commodo mollis</h3>
                            <p>Pellentesque, ornare sapien quis, tristique ante. Proin nec facilisis odio. Integer elementum nunc nec leo interdum, non tristique eros laoreet. Integer vitae erat suscipit commodo.</p>
                        </section>
                        <section class=\"content\">
                            <span class=\"icon-wrapper major\"><span class=\"icon fa-cloud\"></span></span>
                            <h3>Magnis curabitur</h3>
                            <p>Duis vulputate sit amet metus quis facilisis. Sed dapibus neque erat fringilla tincidunt. Nullam sapien et sapien, iaculis ac varius ultrices nec metus. Aenean ultricies magna.</p>
                        </section>
                    </div>
                </div>
            </section>

        <!-- Three -->
            <section id=\"three\" class=\"wrapper style2\">
                <div class=\"inner\">
                    <h2>Etiam sed tellus</h2>
                    <div class=\"posts\">
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic01.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Congue portitor</h3>
                                <p>Aenean ultricies magna non sapien rhoncus, ac ullamcorper lorem convallis. Quisque at venenatis nisi, amet finibus mauris. Sed sodales ultricies eros, sit amet sodales sapien.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic02.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Duis nisl euismod</h3>
                                <p>Ultrices nec metus. Aenean ultricies magna et sapien rhoncus ac ullamcorper lorem convallis. Quisque at venenatis nisi amet finibus mauris. Sed sodales ultricies magna etiam.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic03.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Elementum auctor</h3>
                                <p>Quis interdum. Lorem quis lacus justo. Sed libero condimentum vehicula sem vel, mattis amet mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi aliquam aenean.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic04.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Urna vel lacinia</h3>
                                <p>Integer vel tincidunt lacus. Nulla augue nunc, eleifend quis leo ac, maximus interdum tellus. Etiam at vestibulum felis, id efficitur risus. Praesent ac nulla ex. Duis elementum.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic05.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Neque et suscipit</h3>
                                <p>Libero condimentum, vehicula sem vel, mattis mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi in aliquam est. Aenean dapibus porttitor nulla ultrices venenatis.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class=\"post\">
                            <span class=\"image\"><img src=\"images/pic06.jpg\" alt=\"\" /></span>
                            <div class=\"content\">
                                <h3>Vestibulum placerat</h3>
                                <p>Tristique tellus et ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent mauris risus, pellentesque eu leo non, tincidunt.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">More</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

        <!-- Contact -->
            <section id=\"contact\" class=\"wrapper split\">
                <div class=\"inner\">
                    <section>
                        <h2>Send us a message</h2>
                        <form method=\"post\" action=\"#\">
                            <div class=\"row uniform\">
                                <div class=\"6u 12u\$(large) 6u(medium) 12u\$(xsmall)\">
                                    <label for=\"name\">Name</label>
                                    <input type=\"text\" name=\"name\" id=\"name\" />
                                </div>
                                <div class=\"6u\$ 12u\$(large) 6u\$(medium) 12u\$(xsmall)\">
                                    <label for=\"email\">Email</label>
                                    <input type=\"email\" name=\"email\" id=\"email\" />
                                </div>
                                <div class=\"12u\$\">
                                    <label for=\"message\">Message</label>
                                    <textarea name=\"message\" id=\"message\" rows=\"5\"></textarea>
                                </div>
                                <div class=\"12u\$\">
                                    <ul class=\"actions\">
                                        <li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
                                        <li><input type=\"reset\" value=\"Reset\" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section>
                        <h2>Other ways to reach us</h2>
                        <ul class=\"bulleted-icons\">
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-envelope\"></span></span>
                                <h3>Email</h3>
                                <p><a href=\"#\">information@untitled.tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-twitter\"></span></span>
                                <h3>Twitter</h3>
                                <p><a href=\"#\">twitter.com/untitled-tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-phone\"></span></span>
                                <h3>Phone</h3>
                                <p>(800) 555-0000</p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-facebook\"></span></span>
                                <h3>Facebook</h3>
                                <p><a href=\"#\">facebook.com/untitled-tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-home\"></span></span>
                                <h3>Mailing Address</h3>
                                <p>1234 Fictional Avenue<br />
                                Nashville, TN 00000<br />
                                United States
                                </p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-linkedin\"></span></span>
                                <h3>LinkedIn</h3>
                                <p><a href=\"#\">linkedin.com/untitled-tld</a></p>
                            </li>
                        </ul>
                    </section>
                </div>
            </section>

        <!-- Footer -->
            <footer id=\"footer\">
                <div class=\"inner\">
                    <p class=\"copyright\">&copy; Untitled Corp. All rights reserved. Lorem ipsum dolor sit amet feugiat tempus aliquam.</p>
                    <ul class=\"menu\">
                        <li><a href=\"#\">Terms<span> of Use</span></a></li>
                        <li><a href=\"#\">Privacy<span> Policy</span></a></li>
                        <li><a href=\"#\">Legal<span> Information</span></a></li>
                    </ul>
                </div>
            </footer>

    </body>
    ";
        // line 244
        $this->displayBlock('bottom', $context, $blocks);
        // line 245
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/main.css", 1 => 101), "method");
        // line 22
        echo "             ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            echo " 
                ";
            // line 23
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/ie8.css", 1 => 102), "method");
            // line 24
            echo "            ";
        }
        // line 25
        echo "            ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            echo " 
                ";
            // line 26
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/ie9.css", 1 => 103), "method");
            // line 27
            echo "            ";
        }
        // line 28
        echo "            <noscript>";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/noscript.css", 1 => 103), "method");
        echo "</noscript>
            ";
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/app.css", 1 => 100), "method");
        // line 31
        echo "
            ";
        // line 32
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 105), "method");
        // line 37
        echo "
            ";
        // line 38
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.dropotron.min.js", 1 => 104), "method");
        // line 39
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.scrollex.min.js", 1 => 103), "method");
        // line 40
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/skel.min.js", 1 => 102), "method");
        // line 41
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/util.js", 1 => 101), "method");
        // line 42
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/main.js"), "method");
        // line 43
        echo "
            ";
        // line 44
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 244
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 244,  364 => 44,  361 => 43,  358 => 42,  355 => 41,  352 => 40,  349 => 39,  347 => 38,  344 => 37,  341 => 36,  338 => 35,  332 => 32,  329 => 31,  326 => 30,  321 => 28,  318 => 27,  316 => 26,  311 => 25,  308 => 24,  306 => 23,  301 => 22,  298 => 21,  295 => 20,  290 => 46,  288 => 35,  285 => 34,  283 => 20,  274 => 18,  268 => 16,  262 => 14,  259 => 13,  253 => 11,  247 => 9,  245 => 8,  240 => 5,  237 => 4,  233 => 245,  231 => 244,  39 => 54,  36 => 53,  30 => 48,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.add('theme://css/main.css',101) %}*/
/*              {% if browser.getBrowser == 'msie' and browser.getVersion == 8%} */
/*                 {% do assets.add('theme://css/ie8.css',102) %}*/
/*             {% endif %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion == 9%} */
/*                 {% do assets.add('theme://css/ie9.css',103) %}*/
/*             {% endif %}*/
/*             <noscript>{% do assets.add('theme://css/noscript.css',103) %}</noscript>*/
/*             {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/app.css',100) %}*/
/* */
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 105) %}*/
/* */
/*             {% do assets.add('theme://js/jquery.dropotron.min.js', 104) %}*/
/*             {% do assets.add('theme://js/jquery.scrollex.min.js',103) %}*/
/*             {% do assets.add('theme://js/skel.min.js',102) %}*/
/*             {% do assets.add('theme://js/util.js',101) %}*/
/*             {% do assets.add('theme://js/main.js') %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*         {% endblock head %}*/
/*     </head>*/
/* */
/*       <body>*/
/* */
/*         {# include the header + navigation #}*/
/*         {% include 'partials/header.html.twig' %}*/
/* */
/*        */
/* */
/*         <!-- One -->*/
/*             <section id="one" class="wrapper major-pad">*/
/*                 <div class="inner">*/
/*                     <section class="spotlight">*/
/*                         <div class="content">*/
/*                             <h2>Libero bibendum nullam vitae magna sed veroeros</h2>*/
/*                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id interdum magna, ultricies aliquet curabitur sed metus pellentesque, ornare sapien quis.</p>*/
/*                         </div>*/
/*                         <span class="image"><img src="images/pic07.jpg" alt="" /></span>*/
/*                     </section>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         <!-- Two -->*/
/*             <section id="two" class="wrapper content-pad">*/
/*                 <div class="inner">*/
/*                     <div class="features">*/
/*                         <section class="content">*/
/*                             <span class="icon-wrapper major"><span class="icon fa-pencil"></span></span>*/
/*                             <h3>Praesent sed donec</h3>*/
/*                             <p>Proin consequat luctus elit, nec blandit tellus ut volutpat magna. mi euismod elementum lectus et consequat etiam lorem etiam sed tempus. Feugiat veroeros lorem ipsum dolor.</p>*/
/*                         </section>*/
/*                         <section class="content">*/
/*                             <span class="icon-wrapper major"><span class="icon fa-paper-plane"></span></span>*/
/*                             <h3>Commodo mollis</h3>*/
/*                             <p>Pellentesque, ornare sapien quis, tristique ante. Proin nec facilisis odio. Integer elementum nunc nec leo interdum, non tristique eros laoreet. Integer vitae erat suscipit commodo.</p>*/
/*                         </section>*/
/*                         <section class="content">*/
/*                             <span class="icon-wrapper major"><span class="icon fa-cloud"></span></span>*/
/*                             <h3>Magnis curabitur</h3>*/
/*                             <p>Duis vulputate sit amet metus quis facilisis. Sed dapibus neque erat fringilla tincidunt. Nullam sapien et sapien, iaculis ac varius ultrices nec metus. Aenean ultricies magna.</p>*/
/*                         </section>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         <!-- Three -->*/
/*             <section id="three" class="wrapper style2">*/
/*                 <div class="inner">*/
/*                     <h2>Etiam sed tellus</h2>*/
/*                     <div class="posts">*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic01.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Congue portitor</h3>*/
/*                                 <p>Aenean ultricies magna non sapien rhoncus, ac ullamcorper lorem convallis. Quisque at venenatis nisi, amet finibus mauris. Sed sodales ultricies eros, sit amet sodales sapien.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic02.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Duis nisl euismod</h3>*/
/*                                 <p>Ultrices nec metus. Aenean ultricies magna et sapien rhoncus ac ullamcorper lorem convallis. Quisque at venenatis nisi amet finibus mauris. Sed sodales ultricies magna etiam.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic03.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Elementum auctor</h3>*/
/*                                 <p>Quis interdum. Lorem quis lacus justo. Sed libero condimentum vehicula sem vel, mattis amet mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi aliquam aenean.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic04.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Urna vel lacinia</h3>*/
/*                                 <p>Integer vel tincidunt lacus. Nulla augue nunc, eleifend quis leo ac, maximus interdum tellus. Etiam at vestibulum felis, id efficitur risus. Praesent ac nulla ex. Duis elementum.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic05.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Neque et suscipit</h3>*/
/*                                 <p>Libero condimentum, vehicula sem vel, mattis mauris. Nullam lacinia sit amet felis vel vestibulum. Morbi in aliquam est. Aenean dapibus porttitor nulla ultrices venenatis.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                         <section class="post">*/
/*                             <span class="image"><img src="images/pic06.jpg" alt="" /></span>*/
/*                             <div class="content">*/
/*                                 <h3>Vestibulum placerat</h3>*/
/*                                 <p>Tristique tellus et ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent mauris risus, pellentesque eu leo non, tincidunt.</p>*/
/*                                 <ul class="actions">*/
/*                                     <li><a href="#" class="button">More</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </section>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         <!-- Contact -->*/
/*             <section id="contact" class="wrapper split">*/
/*                 <div class="inner">*/
/*                     <section>*/
/*                         <h2>Send us a message</h2>*/
/*                         <form method="post" action="#">*/
/*                             <div class="row uniform">*/
/*                                 <div class="6u 12u$(large) 6u(medium) 12u$(xsmall)">*/
/*                                     <label for="name">Name</label>*/
/*                                     <input type="text" name="name" id="name" />*/
/*                                 </div>*/
/*                                 <div class="6u$ 12u$(large) 6u$(medium) 12u$(xsmall)">*/
/*                                     <label for="email">Email</label>*/
/*                                     <input type="email" name="email" id="email" />*/
/*                                 </div>*/
/*                                 <div class="12u$">*/
/*                                     <label for="message">Message</label>*/
/*                                     <textarea name="message" id="message" rows="5"></textarea>*/
/*                                 </div>*/
/*                                 <div class="12u$">*/
/*                                     <ul class="actions">*/
/*                                         <li><input type="submit" value="Send Message" class="special" /></li>*/
/*                                         <li><input type="reset" value="Reset" /></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </section>*/
/*                     <section>*/
/*                         <h2>Other ways to reach us</h2>*/
/*                         <ul class="bulleted-icons">*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-envelope"></span></span>*/
/*                                 <h3>Email</h3>*/
/*                                 <p><a href="#">information@untitled.tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-twitter"></span></span>*/
/*                                 <h3>Twitter</h3>*/
/*                                 <p><a href="#">twitter.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-phone"></span></span>*/
/*                                 <h3>Phone</h3>*/
/*                                 <p>(800) 555-0000</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-facebook"></span></span>*/
/*                                 <h3>Facebook</h3>*/
/*                                 <p><a href="#">facebook.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-home"></span></span>*/
/*                                 <h3>Mailing Address</h3>*/
/*                                 <p>1234 Fictional Avenue<br />*/
/*                                 Nashville, TN 00000<br />*/
/*                                 United States*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-linkedin"></span></span>*/
/*                                 <h3>LinkedIn</h3>*/
/*                                 <p><a href="#">linkedin.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </section>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         <!-- Footer -->*/
/*             <footer id="footer">*/
/*                 <div class="inner">*/
/*                     <p class="copyright">&copy; Untitled Corp. All rights reserved. Lorem ipsum dolor sit amet feugiat tempus aliquam.</p>*/
/*                     <ul class="menu">*/
/*                         <li><a href="#">Terms<span> of Use</span></a></li>*/
/*                         <li><a href="#">Privacy<span> Policy</span></a></li>*/
/*                         <li><a href="#">Legal<span> Information</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </footer>*/
/* */
/*     </body>*/
/*     {% block bottom %}{% endblock %}*/
/* </html>*/
