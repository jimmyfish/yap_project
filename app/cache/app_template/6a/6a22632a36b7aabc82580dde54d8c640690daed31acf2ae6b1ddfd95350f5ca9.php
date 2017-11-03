<?php

/* layouts/layout.html.twig */
class __TwigTemplate_c72a954eb584eb855a319bc1d7277f7f5549ae95dd0c4f492af5669aedaad3d6 extends Twig_Template
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
        $__internal_1117cd9033f8ee31f006eb904517f020196e48bb974e620171c70c7ad6253cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1117cd9033f8ee31f006eb904517f020196e48bb974e620171c70c7ad6253cc2->enter($__internal_1117cd9033f8ee31f006eb904517f020196e48bb974e620171c70c7ad6253cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/css/bootstrap.min.css\">

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
                            <span><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Logo_YAP.png\" alt=\"logo\"></span>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <span><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Logo_BNI.png\" alt=\"logo\"></span>
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
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "


<div class=\"footer\">

    <footer class=\"iq-footer white-bg text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"footer-info iq-mt-50 iq-mb-30\">
                        <img id=\"logo_img\" class=\"img-responsive center-block iq-mb-10 wow zoomIn\" data-wow-duration=\"1s\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/images/logo-footer.png\" alt=\"\">
                        <p>Menjadi yang terdepan di ranah pembayaran online untuk segmen membawa motivasi baru bagi YAP! untuk mengembangkan bisnisnya lebih luas lagi dan menjangkau konsumen. novasi tanpa batas adalah komitmen YAP! untuk terus menjadi perusahaan pembayaran terdepan, dapat diandalkan dan terus dapat berperan dalam memajukan ekonomi indonesia.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"footer-copyright iq-ptb-20\">&copy; Hak Cipta <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> PT. Bank Negara Indonesia (Persero), Tbk.</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer END -->

</div>

<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.min.js\"></script>

<!-- bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

<!-- owl-carousel -->
<script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/owl-carousel/owl.carousel.min.js\"></script>

<!-- Counter -->
<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/counter/jquery.countTo.js\"></script>

<!-- Jquery Appear -->
<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.appear.js\"></script>

<!-- Magnific Popup -->
<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/magnific-popup/jquery.magnific-popup.min.js\"></script>

<!-- Retina -->
<script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/retina.min.js\"></script>

<!-- wow -->
<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/wow.min.js\"></script>

<!-- Countdown -->
<script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/jquery.countdown.min.js\"></script>

<!-- Custom -->
<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/custom.js\"></script>

<!-- Style Customizer -->
<script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/js/style-customizer.js\"></script>


</body>

</html>
";
        
        $__internal_1117cd9033f8ee31f006eb904517f020196e48bb974e620171c70c7ad6253cc2->leave($__internal_1117cd9033f8ee31f006eb904517f020196e48bb974e620171c70c7ad6253cc2_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_61d461412d75194596013cab6e5bb27a73da484f5c8c5c9772146295bef87f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d461412d75194596013cab6e5bb27a73da484f5c8c5c9772146295bef87f1d->enter($__internal_61d461412d75194596013cab6e5bb27a73da484f5c8c5c9772146295bef87f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_61d461412d75194596013cab6e5bb27a73da484f5c8c5c9772146295bef87f1d->leave($__internal_61d461412d75194596013cab6e5bb27a73da484f5c8c5c9772146295bef87f1d_prof);

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
        return array (  276 => 106,  262 => 164,  256 => 161,  250 => 158,  244 => 155,  238 => 152,  232 => 149,  226 => 146,  220 => 143,  214 => 140,  208 => 137,  202 => 134,  182 => 117,  170 => 107,  168 => 106,  145 => 86,  138 => 82,  102 => 49,  98 => 47,  96 => 46,  90 => 42,  84 => 39,  78 => 36,  72 => 33,  66 => 30,  60 => 27,  54 => 24,  48 => 21,  39 => 15,  23 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ app.request.basepath }}/assets/css/bootstrap.min.css\">

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
                            <span><img src=\"{{ app.request.basepath }}/assets/img/Logo_YAP.png\" alt=\"logo\"></span>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <span><img src=\"{{ app.request.basepath }}/assets/img/Logo_BNI.png\" alt=\"logo\"></span>
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

    <footer class=\"iq-footer white-bg text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
                    <div class=\"footer-info iq-mt-50 iq-mb-30\">
                        <img id=\"logo_img\" class=\"img-responsive center-block iq-mb-10 wow zoomIn\" data-wow-duration=\"1s\" src=\"{{ app.request.basepath }}/assets/images/logo-footer.png\" alt=\"\">
                        <p>Menjadi yang terdepan di ranah pembayaran online untuk segmen membawa motivasi baru bagi YAP! untuk mengembangkan bisnisnya lebih luas lagi dan menjangkau konsumen. novasi tanpa batas adalah komitmen YAP! untuk terus menjadi perusahaan pembayaran terdepan, dapat diandalkan dan terus dapat berperan dalam memajukan ekonomi indonesia.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"footer-copyright iq-ptb-20\">&copy; Hak Cipta <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> PT. Bank Negara Indonesia (Persero), Tbk.</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer END -->

</div>

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
