<?php

/* layouts/layout.html.twig */
class __TwigTemplate_65b2c656ae6ad545ea1a04563f6738d50f04969b6d6c295ce2951ccbc37a0251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30d4cd252327eb366ba2b5094835bf8dfcdaf808cc4b1f50b1c559ff6dbca301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d4cd252327eb366ba2b5094835bf8dfcdaf808cc4b1f50b1c559ff6dbca301->enter($__internal_30d4cd252327eb366ba2b5094835bf8dfcdaf808cc4b1f50b1c559ff6dbca301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Appino - Responsive App Landing Page\" />
    <meta name=\"author\" content=\"iqonicthemes.in\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />

    <title>Appino - Responsive App Landing Page</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/images/favicon.ico\" />

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;Raleway:300,400,500,600,700,800,900\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">

    <!-- owl-carousel -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/owl-carousel/owl.carousel.css\" />

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/font-awesome.css\" />

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/magnific-popup/magnific-popup.css\" />

    <!-- Animate -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/animate.css\" />

    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/ionicons.min.css\">

    <!-- Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/style.css\">

    <!-- Responsive -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/responsive.css\">

    <!-- Style customizer (Remove these two lines please) -->
    ";
        // line 46
        echo "    ";
        // line 47
        echo "
    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/custom.css\" />

</head>

<body>

<!-- loading -->

<div id=\"loading\" class=\"green-bg\">
    <div id=\"loading-center\">
        <div class=\"boxLoading\"></div>
    </div>
</div>

<!-- loading End -->


<!-- Header -->

<header id=\"header-wrap\" data-spy=\"affix\" data-offset-top=\"55\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">
                            <img src=\"img/logo-4.png\" alt=\"logo\">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\" id=\"top-menu\">
                            <li class=\"active\"><a href=\"#iq-home\">Home</a></li>
                            <li><a href=\"#about-us\">About Us</a></li>
                            <li><a href=\"#features\">Features</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Header End -->

";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "


<div class=\"footer\">
    <!-- Subscribe Our Newsletter -->
    <section class=\"overview-block-ptb iq-newsletter iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/banner/bg.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Subscribe Our Newsletter</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">Subscribe to our newsletter and don’t miss new arrivals, the latest update and special offers from Appino!</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <form class=\"form-inline\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputName2\" placeholder=\"Enter Your Email Here\">
                        </div>
                        <a class=\"button bt-white iq-ml-25\" href=\"# \">subscribe</a>
                    </form>
                    <div class=\"newsletter-phone iq-mt-50 wow fadeInUp\" data-wow-duration=\"1s\">
                        <img class=\"img-responsive center-block\" src=\"images/02.png\" alt=\"#\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Our Newsletter END -->


    <!-- Address -->

    <section class=\"iq-our-info white-bg overview-block-ptb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-location-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Address</h4>
                        <span class=\"lead iq-tw-6\">1234 North Avenue Luke Lane, South Bend, IN 360001</span>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-telephone-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Phone</h4>
                        <span class=\"lead iq-tw-6\">+0123 456 789</span>
                        <p>Mon-Fri 8:00am - 8:00pm</p>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-email-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Mail</h4>
                        <span class=\"lead iq-tw-6\">support@appino.com</span>
                        <p>24 X 7 online support</p>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <ul class=\"info-share\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Address END -->


    <!-- MAP Info -->

    <div class=\"iq-map\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921\" style=\"border:0\" allowfullscreen></iframe>
    </div>

    <!-- MAP Info END -->


    <!-- Get in Touch -->

    <section id=\"contact-us\" class=\"iq-our-touch\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"iq-get-in iq-pall-40 white-bg\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"heading-title iq-mb-60\">
                                    <h2 class=\"title iq-tw-6\">Get in Touch</h2>
                                    <div class=\"divider\"></div>
                                    <p>Do you have a question for us? we'd love to here from you and we would be happy to answer your questions. Reach out to us and we'll respond as soon as we can.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div id=\"formmessage\">Success/Error Message Goes Here</div>
                            <form class=\"form-horizontal\" id=\"contactform\" method=\"post\" action=\"../php/contact-form.php\">
                                <div class=\"contact-form\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"section-field\">
                                            <input id=\"name\" type=\"text\" placeholder=\"Name*\" name=\"name\">
                                        </div>
                                        <div class=\"section-field\">
                                            <input type=\"email\" placeholder=\"Email*\" name=\"email\">
                                        </div>
                                        <div class=\"section-field\">
                                            <input type=\"text\" placeholder=\"Phone*\" name=\"phone\">
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"section-field textarea\">
                                            <textarea class=\"input-message\" placeholder=\"Comment*\" rows=\"7\" name=\"message\"></textarea>
                                        </div>
                                        <input type=\"hidden\" name=\"action\" value=\"sendEmail\" />
                                        <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button pull-right iq-mt-40\">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <div id=\"ajaxloader\" style=\"display:none\"><img class=\"center-block mt-30 mb-30\" src=\"images/ajax-loader.gif\" alt=\"\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get in Touch END -->


    <!-- Footer -->

    <footer class=\"iq-footer white-bg text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"footer-info iq-mt-50 iq-mb-30\">
                        <img id=\"logo_img\" class=\"img-responsive center-block iq-mb-10 wow zoomIn\" data-wow-duration=\"1s\" src=\"images/logo-footer.png\" alt=\"\">
                        <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"footer-copyright iq-ptb-20\">Copyright @ <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href=\"#\" class=\"text-green\">Appino.</a> All Rights Reserved </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer END -->

</div>

<!-- back-to-top -->

<div id=\"back-to-top\">
    <a class=\"top\" id=\"top\" href=\"#top\"> <i class=\"ion-ios-upload-outline\"></i> </a>
</div>

<!-- back-to-top End -->


<!-- style-customizer -->

<div class=\"iq-customizer closed\">
    <div class=\"buy-button\"> <a class=\"opener\" href=\"#\"><i class=\"fa fa-spinner fa-spin\"></i></a> </div>
    <div class=\"clearfix content-chooser\">
        <h3 class=\"iq-font-black\">Appino Awesome Color</h3>
        <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
        <ul class=\"iq-colorChange clearfix\">
            <li class=\"color-1 selected\" data-style=\"color-1\"></li>
            <li class=\"color-2\" data-style=\"color-2\"></li>
            <li class=\"color-3\" data-style=\"color-3\"></li>
            <li class=\"color-4\" data-style=\"color-4\"></li>
            <li class=\"color-5\" data-style=\"color-5\"></li>
            <li class=\"color-6\" data-style=\"color-6\"></li>
            <li class=\"color-7\" data-style=\"color-7\"></li>
            <li class=\"color-8\" data-style=\"color-8\"></li>
        </ul>
        <a target=\"_blank\" class=\"button\" href=\"\">purchase now</a>
    </div>
</div>

<!-- style-customizer END -->


<!-- jQuery -->
<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.min.js\"></script>

<!-- bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

<!-- owl-carousel -->
<script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/owl-carousel/owl.carousel.min.js\"></script>

<!-- Counter -->
<script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/counter/jquery.countTo.js\"></script>

<!-- Jquery Appear -->
<script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.appear.js\"></script>

<!-- Magnific Popup -->
<script type=\"text/javascript\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/magnific-popup/jquery.magnific-popup.min.js\"></script>

<!-- Retina -->
<script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/retina.min.js\"></script>

<!-- wow -->
<script type=\"text/javascript\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/wow.min.js\"></script>

<!-- Countdown -->
<script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.countdown.min.js\"></script>

<!-- Custom -->
<script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/custom.js\"></script>

<!-- Style Customizer -->
<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/style-customizer.js\"></script>


</body>

</html>
";
        
        $__internal_30d4cd252327eb366ba2b5094835bf8dfcdaf808cc4b1f50b1c559ff6dbca301->leave($__internal_30d4cd252327eb366ba2b5094835bf8dfcdaf808cc4b1f50b1c559ff6dbca301_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e8f9252f50bf134f8152da2609f3a3219e012074eaf6f263aa6033d3bfbc696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8f9252f50bf134f8152da2609f3a3219e012074eaf6f263aa6033d3bfbc696->enter($__internal_5e8f9252f50bf134f8152da2609f3a3219e012074eaf6f263aa6033d3bfbc696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5e8f9252f50bf134f8152da2609f3a3219e012074eaf6f263aa6033d3bfbc696->leave($__internal_5e8f9252f50bf134f8152da2609f3a3219e012074eaf6f263aa6033d3bfbc696_prof);

    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 102,  415 => 329,  409 => 326,  403 => 323,  397 => 320,  391 => 317,  385 => 314,  379 => 311,  373 => 308,  367 => 305,  361 => 302,  355 => 299,  157 => 103,  155 => 102,  99 => 49,  95 => 47,  93 => 46,  87 => 42,  81 => 39,  75 => 36,  69 => 33,  63 => 30,  57 => 27,  51 => 24,  39 => 15,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Appino - Responsive App Landing Page\" />
    <meta name=\"author\" content=\"iqonicthemes.in\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />

    <title>Appino - Responsive App Landing Page</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ app.request.basepath }}/assets/images/favicon.ico\" />

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;Raleway:300,400,500,600,700,800,900\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css\">

    <!-- owl-carousel -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ app.request.basepath }}/assets/css/owl-carousel/owl.carousel.css\" />

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ app.request.basepath }}/assets/css/font-awesome.css\" />

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ app.request.basepath }}/assets/css/magnific-popup/magnific-popup.css\" />

    <!-- Animate -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ app.request.basepath }}/assets/css/animate.css\" />

    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/ionicons.min.css\">

    <!-- Style -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/style.css\">

    <!-- Responsive -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/responsive.css\">

    <!-- Style customizer (Remove these two lines please) -->
    {#<link rel=\"stylesheet\" href=\"#\" data-style=\"styles\">#}
    {#<link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/style-customizer.css\" />#}

    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/custom.css\" />

</head>

<body>

<!-- loading -->

<div id=\"loading\" class=\"green-bg\">
    <div id=\"loading-center\">
        <div class=\"boxLoading\"></div>
    </div>
</div>

<!-- loading End -->


<!-- Header -->

<header id=\"header-wrap\" data-spy=\"affix\" data-offset-top=\"55\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <nav class=\"navbar navbar-default\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">
                            <img src=\"img/logo-4.png\" alt=\"logo\">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-right\" id=\"top-menu\">
                            <li class=\"active\"><a href=\"#iq-home\">Home</a></li>
                            <li><a href=\"#about-us\">About Us</a></li>
                            <li><a href=\"#features\">Features</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Header End -->

{% block content %}{% endblock %}



<div class=\"footer\">
    <!-- Subscribe Our Newsletter -->
    <section class=\"overview-block-ptb iq-newsletter iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/banner/bg.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Subscribe Our Newsletter</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">Subscribe to our newsletter and don’t miss new arrivals, the latest update and special offers from Appino!</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <form class=\"form-inline\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"exampleInputName2\" placeholder=\"Enter Your Email Here\">
                        </div>
                        <a class=\"button bt-white iq-ml-25\" href=\"# \">subscribe</a>
                    </form>
                    <div class=\"newsletter-phone iq-mt-50 wow fadeInUp\" data-wow-duration=\"1s\">
                        <img class=\"img-responsive center-block\" src=\"images/02.png\" alt=\"#\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Our Newsletter END -->


    <!-- Address -->

    <section class=\"iq-our-info white-bg overview-block-ptb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-location-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Address</h4>
                        <span class=\"lead iq-tw-6\">1234 North Avenue Luke Lane, South Bend, IN 360001</span>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-telephone-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Phone</h4>
                        <span class=\"lead iq-tw-6\">+0123 456 789</span>
                        <p>Mon-Fri 8:00am - 8:00pm</p>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"iq-info-box text-center iq-pt-50\">
                        <div class=\"info-icon green-bg\"><i class=\"ion-ios-email-outline\" aria-hidden=\"true\"></i></div>
                        <h4 class=\"iq-tw-6 iq-mt-25 iq-mb-15\">Mail</h4>
                        <span class=\"lead iq-tw-6\">support@appino.com</span>
                        <p>24 X 7 online support</p>
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <ul class=\"info-share\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Address END -->


    <!-- MAP Info -->

    <div class=\"iq-map\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921\" style=\"border:0\" allowfullscreen></iframe>
    </div>

    <!-- MAP Info END -->


    <!-- Get in Touch -->

    <section id=\"contact-us\" class=\"iq-our-touch\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"iq-get-in iq-pall-40 white-bg\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"heading-title iq-mb-60\">
                                    <h2 class=\"title iq-tw-6\">Get in Touch</h2>
                                    <div class=\"divider\"></div>
                                    <p>Do you have a question for us? we'd love to here from you and we would be happy to answer your questions. Reach out to us and we'll respond as soon as we can.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div id=\"formmessage\">Success/Error Message Goes Here</div>
                            <form class=\"form-horizontal\" id=\"contactform\" method=\"post\" action=\"../php/contact-form.php\">
                                <div class=\"contact-form\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"section-field\">
                                            <input id=\"name\" type=\"text\" placeholder=\"Name*\" name=\"name\">
                                        </div>
                                        <div class=\"section-field\">
                                            <input type=\"email\" placeholder=\"Email*\" name=\"email\">
                                        </div>
                                        <div class=\"section-field\">
                                            <input type=\"text\" placeholder=\"Phone*\" name=\"phone\">
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"section-field textarea\">
                                            <textarea class=\"input-message\" placeholder=\"Comment*\" rows=\"7\" name=\"message\"></textarea>
                                        </div>
                                        <input type=\"hidden\" name=\"action\" value=\"sendEmail\" />
                                        <button id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"button pull-right iq-mt-40\">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <div id=\"ajaxloader\" style=\"display:none\"><img class=\"center-block mt-30 mb-30\" src=\"images/ajax-loader.gif\" alt=\"\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get in Touch END -->


    <!-- Footer -->

    <footer class=\"iq-footer white-bg text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"footer-info iq-mt-50 iq-mb-30\">
                        <img id=\"logo_img\" class=\"img-responsive center-block iq-mb-10 wow zoomIn\" data-wow-duration=\"1s\" src=\"images/logo-footer.png\" alt=\"\">
                        <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"footer-copyright iq-ptb-20\">Copyright @ <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href=\"#\" class=\"text-green\">Appino.</a> All Rights Reserved </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer END -->

</div>

<!-- back-to-top -->

<div id=\"back-to-top\">
    <a class=\"top\" id=\"top\" href=\"#top\"> <i class=\"ion-ios-upload-outline\"></i> </a>
</div>

<!-- back-to-top End -->


<!-- style-customizer -->

<div class=\"iq-customizer closed\">
    <div class=\"buy-button\"> <a class=\"opener\" href=\"#\"><i class=\"fa fa-spinner fa-spin\"></i></a> </div>
    <div class=\"clearfix content-chooser\">
        <h3 class=\"iq-font-black\">Appino Awesome Color</h3>
        <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
        <ul class=\"iq-colorChange clearfix\">
            <li class=\"color-1 selected\" data-style=\"color-1\"></li>
            <li class=\"color-2\" data-style=\"color-2\"></li>
            <li class=\"color-3\" data-style=\"color-3\"></li>
            <li class=\"color-4\" data-style=\"color-4\"></li>
            <li class=\"color-5\" data-style=\"color-5\"></li>
            <li class=\"color-6\" data-style=\"color-6\"></li>
            <li class=\"color-7\" data-style=\"color-7\"></li>
            <li class=\"color-8\" data-style=\"color-8\"></li>
        </ul>
        <a target=\"_blank\" class=\"button\" href=\"\">purchase now</a>
    </div>
</div>

<!-- style-customizer END -->


<!-- jQuery -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/jquery.min.js\"></script>

<!-- bootstrap -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/bootstrap.min.js\"></script>

<!-- owl-carousel -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/owl-carousel/owl.carousel.min.js\"></script>

<!-- Counter -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/counter/jquery.countTo.js\"></script>

<!-- Jquery Appear -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/jquery.appear.js\"></script>

<!-- Magnific Popup -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/magnific-popup/jquery.magnific-popup.min.js\"></script>

<!-- Retina -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/retina.min.js\"></script>

<!-- wow -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/wow.min.js\"></script>

<!-- Countdown -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/jquery.countdown.min.js\"></script>

<!-- Custom -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/custom.js\"></script>

<!-- Style Customizer -->
<script type=\"text/javascript\" src=\"{{ app.request.basepath }}/assets/js/style-customizer.js\"></script>


</body>

</html>
", "layouts/layout.html.twig", "/home/jimmy/Projects/yap_project/src/Templates/layouts/layout.html.twig");
    }
}
