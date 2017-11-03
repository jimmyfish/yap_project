<?php

/* home/index.html.twig */
class __TwigTemplate_c41a2e27b65f47f9cd705c8e11c3faea3294774deb6d8ed750fc0ddc28ab6790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7027e06495b79de8b5b9ab1a995eeed8df2bbf36654bdbbe5948740cb6ffbfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7027e06495b79de8b5b9ab1a995eeed8df2bbf36654bdbbe5948740cb6ffbfd3->enter($__internal_7027e06495b79de8b5b9ab1a995eeed8df2bbf36654bdbbe5948740cb6ffbfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7027e06495b79de8b5b9ab1a995eeed8df2bbf36654bdbbe5948740cb6ffbfd3->leave($__internal_7027e06495b79de8b5b9ab1a995eeed8df2bbf36654bdbbe5948740cb6ffbfd3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_083847478d8df373b6e78d365ef9ad98d278a7a8eae52e6be13fe555bfdc2874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083847478d8df373b6e78d365ef9ad98d278a7a8eae52e6be13fe555bfdc2874->enter($__internal_083847478d8df373b6e78d365ef9ad98d278a7a8eae52e6be13fe555bfdc2874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- Banner -->

<section id=\"iq-home\" class=\"banner iq-bg iq-bg-fixed iq-box-shadow iq-over-black-90\" style=\" background: url(";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/bg-2.png);\">
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "        ";
        // line 14
        echo "        <!-- Wrapper for slides -->
        <div class=\"container\">
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-6 col-md-6\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInLeft\">
                                    SOLUSI TRANSAKSI MASA KINI
                                </h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInLeft\">Tersedia di</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li>
                                            <a href=\"#\">
                                                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Playstore_Badge.png\" alt=\"\">
                                            </a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Appstore_Badge.png\" alt=\"\"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-1 col-lg-1 col-md-1 hidden-xs\">&nbsp;</div>
                            <div class=\"col-sm-5 col-lg-5 col-md-5 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive\" data-animation=\"animated fadeInRight\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/illustration-1.png\" alt=\"#\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Banner End -->

<div class=\"main-content\">

    <!-- Feature -->

    <section id=\"about-us\" class=\"overview-block-ptb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Kartu kredit + Debit + UnikQu = YAP!</h2>
                        <div class=\"divider\"></div>
                        <p>Aplikasi YAP! merupakan salah satu produk Aplikasi dari BNI untuk kebutuhan metode pembayaran yang memungkinkan Nasabah menjadi inisiator atas transaksi di merchant hanya dengan mengambil gambar (capture) Qr-code pada merchant. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/illustration-2.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Mudah dalam penggunaannya</h4>
                        <p>Dengan menggunakan platform android dan iOS membuat semakin mudah dalam mengoperasikannya</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/illustration-3.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Terkoneksi dengan Rekening Anda</h4>
                        <p>Setiap nasabah akan melakukan verifikasi setiap rekening banknya yang akan menjadi akun dalam Aplikasi YAP!</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/illustration-4.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Aplikasi Gratis</h4>
                        <p>Setiap nasabah BCA gratis untuk mengunduh dan menggunakan aplikasi pembayaran YAP!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature END -->


    <!-- About Our App -->

    <section class=\"iq-about grey-bg iq-mtb-40\">
        <div class=\"container\">
            <div class=\"row row-eq-height\">
                <div class=\"col-sm-12 col-lg-5 col-md-5 iq-about-bg\">
                    <div class=\"iq-bg about-img popup-gallery play-video\">
                        <img class=\"img-responsive center-block\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/images/about-us.jpg\" alt=\"#\">
                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/video/01.mp4\" class=\"iq-video popup-youtube\"><i class=\"ion-ios-play-outline\"></i></a>
                        <div class=\"iq-waves\">
                            <div class=\"waves wave-1\"></div>
                            <div class=\"waves wave-2\"></div>
                            <div class=\"waves wave-3\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-lg-7 col-md-7 iq-pall-50\">
                    <h2 class=\"heading-left iq-tw-6 \">Tentang Aplikasi YAP!</h2>
                    <p>Aplikasi PAY SAJA merupakan suatu solusi metode pembayaran yang memungkinkan Nasabah menjadi inisiator atas transaksi di merchant. Metode pembayaran ini memerlukan media berupa aplikasi mobile yang dimiliki oleh nasabah dan merchant. Metode pembayaran yang digunakan saat transaksi adalah dengan menggunakan QR Code scanner. Aplikasi PAY SAJA telah disediakan dalam Android dan iOS dan setiap device harus terkoneksi dengan jaringan internet</p>
                    <a class=\"button iq-mt-15\" href=\"# \">Download Manual Book</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Our App END -->


    <!-- Special Features -->

    <section id=\"features\" class=\"overview-block-ptb iq-amazing-tab white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Beragam Kelebihan</h2>
                        <div class=\"divider\"></div>
                        <p>Berkat relasi yang terjalin baik selama bertahun-tahun dengan mitra pembayaran nasional maupun internasional, YAP! dapat menyajikan metode pembayaran terlengkap bahkan menfasilitasi transaksi dengan mata uang asing tertentu yang siap mendukung para merchant memperluas pasar serta meningkatkan pendapatan bisnisnya.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#design\" aria-controls=\"design\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-checkmark-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Widely Acceptance</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Dapat digunakan oleh seluruh nasabah BNI tanpa terkecuali</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\" >
                            <a class=\"round-right\" href=\"#resolution\" aria-controls=\"resolution\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-color-wand-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Easy</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Cara pakai yang mudah, hanya dengan Login, Scan dan Bayar</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#ready\" aria-controls=\"ready\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-copy-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Modern Lifestyle</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lifestyle masa kini yang ditandai dengan gadget minded</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 text-center hidden-sm hidden-xs\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"design\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-4.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"resolution\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"ready\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"fertures\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-2.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"face\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"codes\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#fertures\" aria-controls=\"fertures\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-photos-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Secure</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Dua lapis pengamanan : Password login dan pin transaksi</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#face\" aria-controls=\"face\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Ultimate</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Terdapat tiga sumber Dana yaitu dari Kartu Debit, Kartu Kredit dan UniQu</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#codes\" aria-controls=\"codes\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-plus-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Low Cost</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Mengurangi biaya operasional pada merchant</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Features END -->


    <!-- App Screenshots -->

    <section id=\"screenshots\" class=\"iq-app iq-bg iq-bg-fixed iq-font-white\" style=\"background: url(";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/bg-2.png);\" >
        <div class=\"container-fluid\">
            <div class=\"row row-eq-height\">
                <div class=\"col-md-6 text-left iq-ptb-80 green-bg\">
                    <div class=\"iq-app-info\">
                        <h2 class=\"heading-left iq-font-white white iq-tw-6 \">Mudah dan Praktis</h2>
                        <p class=\"\">YAP! memiliki tools terintegrasi ke e-commerce yang Anda butuhkan sebagai alat pembayaran secara online, dengan transaksi debit, kartu kredit, bahkan penarikan uang.</p>
                        <p>Teknologi kami menggabungkan rekening pedagang dan solusi pembayaran dengan integrasi paling inovatif dan langkah-langkah keamanan data sekitar. Tujuan YAP! bertransaksi adalah untuk membantu perusahaan dengan menyediakan solusi tunggal-sumber pembayaran online dan kayanan akun penjual. Pilihan paket kami dapat disesuaikan bagi bisnis untuk mencakup pemenuhan akun penjual, proses pembayaran gateway.</p>
                    </div>
                </div>
                <div class=\"col-md-6 iq-app-screen iq-ptb-80\">
                    <div class=\"home-screen-slide\">
                        <div class=\"owl-carousel popup-gallery\" data-nav-dots=\"true\" data-nav-arrow=\"false\" data-items=\"3\" data-sm-items=\"3\" data-lg-items=\"3\" data-md-items=\"2\" data-autoplay=\"false\">
                            <div class=\"item\"><a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-1.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-1.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-2.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-2.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-3.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-3.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-4.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-4.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-5.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-5.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-6.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/screen/screen-6.png\" alt=\"#\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Screenshots END -->


    <!-- Appino Great Feature -->

    <section class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Easy pay for easy life</h2>
                        <div class=\"divider\"></div>
                        <p>Memberikan kemudahan dalam menjalani hidup di era digital, tak perlu</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-1 col-md-1 iq-mr-50\">&nbsp;</div>
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-monitor-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Activation</h5>
                            <p>Aktivasi antara aplikasi dengan rekening nasabah BNI yang sangat mudah</p>
                            <span class=\"iq-big-title\">01</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re7-mt-50\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-settings\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Login</h5>
                            <p>hanya dengan menggunakan nomor rekening dan Kode Unik untuk masuk ke dalam Aplikasi</p>
                            <span class=\"iq-big-title\">02</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-social-googleplus-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Pay</h5>
                            <p>Dengan menggunakan scan QR Code membuat transaksi semakin mudah</p>
                            <span class=\"iq-big-title\">03</span>
                        </div>
                    </div>
                </div>
                ";
        // line 315
        echo "                    ";
        // line 316
        echo "                        ";
        // line 317
        echo "                            ";
        // line 318
        echo "                        ";
        // line 319
        echo "                        ";
        // line 320
        echo "                            ";
        // line 321
        echo "                            ";
        // line 322
        echo "                            ";
        // line 323
        echo "                        ";
        // line 324
        echo "                    ";
        // line 325
        echo "                ";
        // line 326
        echo "

            </div>
        </div>
    </section>

    <!-- Appino Great Feature END -->


    <!-- Amazing Feature -->

    ";
        // line 338
        echo "        ";
        // line 339
        echo "            ";
        // line 340
        echo "                ";
        // line 341
        echo "                    ";
        // line 342
        echo "                        ";
        // line 343
        echo "                        ";
        // line 344
        echo "                        ";
        // line 345
        echo "                    ";
        // line 346
        echo "                ";
        // line 347
        echo "            ";
        // line 348
        echo "            ";
        // line 349
        echo "                ";
        // line 350
        echo "                    ";
        // line 351
        echo "                        ";
        // line 352
        echo "                            ";
        // line 353
        echo "                                ";
        // line 354
        echo "                                    ";
        // line 355
        echo "                                ";
        // line 356
        echo "                                ";
        // line 357
        echo "                                    ";
        // line 358
        echo "                                        ";
        // line 359
        echo "                                        ";
        // line 360
        echo "                                    ";
        // line 361
        echo "                                    ";
        // line 362
        echo "                                ";
        // line 363
        echo "                            ";
        // line 364
        echo "                        ";
        // line 365
        echo "                        ";
        // line 366
        echo "                            ";
        // line 367
        echo "                                ";
        // line 368
        echo "                                    ";
        // line 369
        echo "                                ";
        // line 370
        echo "                                ";
        // line 371
        echo "                                    ";
        // line 372
        echo "                                        ";
        // line 373
        echo "                                        ";
        // line 374
        echo "                                    ";
        // line 375
        echo "                                    ";
        // line 376
        echo "                                ";
        // line 377
        echo "                            ";
        // line 378
        echo "                        ";
        // line 379
        echo "                        ";
        // line 380
        echo "                            ";
        // line 381
        echo "                                ";
        // line 382
        echo "                                    ";
        // line 383
        echo "                                ";
        // line 384
        echo "                                ";
        // line 385
        echo "                                    ";
        // line 386
        echo "                                        ";
        // line 387
        echo "                                        ";
        // line 388
        echo "                                    ";
        // line 389
        echo "                                    ";
        // line 390
        echo "                                ";
        // line 391
        echo "                            ";
        // line 392
        echo "                        ";
        // line 393
        echo "

                    ";
        // line 396
        echo "                ";
        // line 397
        echo "            ";
        // line 398
        echo "        ";
        // line 399
        echo "    ";
        // line 400
        echo "
    ";
        // line 402
        echo "

    ";
        // line 405
        echo "
    ";
        // line 407
        echo "        ";
        // line 408
        echo "            ";
        // line 409
        echo "                ";
        // line 410
        echo "                    ";
        // line 411
        echo "                        ";
        // line 412
        echo "                        ";
        // line 413
        echo "                        ";
        // line 414
        echo "                    ";
        // line 415
        echo "                ";
        // line 416
        echo "            ";
        // line 417
        echo "            ";
        // line 418
        echo "                ";
        // line 419
        echo "                    ";
        // line 420
        echo "                        ";
        // line 421
        echo "                        ";
        // line 422
        echo "                            ";
        // line 423
        echo "                            ";
        // line 424
        echo "                            ";
        // line 425
        echo "                                ";
        // line 426
        echo "                                ";
        // line 427
        echo "                                    ";
        // line 428
        echo "                                    ";
        // line 429
        echo "                                    ";
        // line 430
        echo "                                    ";
        // line 431
        echo "                                ";
        // line 432
        echo "                            ";
        // line 433
        echo "                        ";
        // line 434
        echo "                    ";
        // line 435
        echo "                ";
        // line 436
        echo "                ";
        // line 437
        echo "                    ";
        // line 438
        echo "                        ";
        // line 439
        echo "                        ";
        // line 440
        echo "                            ";
        // line 441
        echo "                            ";
        // line 442
        echo "                            ";
        // line 443
        echo "                                ";
        // line 444
        echo "                                ";
        // line 445
        echo "                                    ";
        // line 446
        echo "                                    ";
        // line 447
        echo "                                    ";
        // line 448
        echo "                                    ";
        // line 449
        echo "                                ";
        // line 450
        echo "                            ";
        // line 451
        echo "                        ";
        // line 452
        echo "                    ";
        // line 453
        echo "                ";
        // line 454
        echo "                ";
        // line 455
        echo "                    ";
        // line 456
        echo "                        ";
        // line 457
        echo "                        ";
        // line 458
        echo "                            ";
        // line 459
        echo "                            ";
        // line 460
        echo "                            ";
        // line 461
        echo "                                ";
        // line 462
        echo "                                ";
        // line 463
        echo "                                    ";
        // line 464
        echo "                                    ";
        // line 465
        echo "                                    ";
        // line 466
        echo "                                    ";
        // line 467
        echo "                                ";
        // line 468
        echo "                            ";
        // line 469
        echo "                        ";
        // line 470
        echo "                    ";
        // line 471
        echo "                ";
        // line 472
        echo "                ";
        // line 473
        echo "                    ";
        // line 474
        echo "                        ";
        // line 475
        echo "                        ";
        // line 476
        echo "                            ";
        // line 477
        echo "                            ";
        // line 478
        echo "                            ";
        // line 479
        echo "                                ";
        // line 480
        echo "                                ";
        // line 481
        echo "                                    ";
        // line 482
        echo "                                    ";
        // line 483
        echo "                                    ";
        // line 484
        echo "                                    ";
        // line 485
        echo "                                ";
        // line 486
        echo "                            ";
        // line 487
        echo "                        ";
        // line 488
        echo "                    ";
        // line 489
        echo "                ";
        // line 490
        echo "            ";
        // line 491
        echo "        ";
        // line 492
        echo "    ";
        // line 493
        echo "
    ";
        // line 495
        echo "

    ";
        // line 498
        echo "
    ";
        // line 500
        echo "        ";
        // line 501
        echo "            ";
        // line 502
        echo "                ";
        // line 503
        echo "                    ";
        // line 504
        echo "                        ";
        // line 505
        echo "                    ";
        // line 506
        echo "                ";
        // line 507
        echo "                ";
        // line 508
        echo "                    ";
        // line 509
        echo "                        ";
        // line 510
        echo "                    ";
        // line 511
        echo "                ";
        // line 512
        echo "                ";
        // line 513
        echo "                    ";
        // line 514
        echo "                        ";
        // line 515
        echo "                    ";
        // line 516
        echo "                ";
        // line 517
        echo "                ";
        // line 518
        echo "                    ";
        // line 519
        echo "                        ";
        // line 520
        echo "                    ";
        // line 521
        echo "                ";
        // line 522
        echo "            ";
        // line 523
        echo "        ";
        // line 524
        echo "    ";
        // line 525
        echo "
    ";
        // line 527
        echo "

    ";
        // line 530
        echo "
    ";
        // line 532
        echo "        ";
        // line 533
        echo "            ";
        // line 534
        echo "                ";
        // line 535
        echo "                    ";
        // line 536
        echo "                        ";
        // line 537
        echo "                        ";
        // line 538
        echo "                        ";
        // line 539
        echo "                    ";
        // line 540
        echo "                ";
        // line 541
        echo "            ";
        // line 542
        echo "            ";
        // line 543
        echo "                ";
        // line 544
        echo "                    ";
        // line 545
        echo "                ";
        // line 546
        echo "                ";
        // line 547
        echo "                    ";
        // line 548
        echo "                        ";
        // line 549
        echo "
                            ";
        // line 551
        echo "                                ";
        // line 552
        echo "                                    ";
        // line 553
        echo "                                    ";
        // line 554
        echo "                                ";
        // line 555
        echo "                            ";
        // line 556
        echo "                        ";
        // line 557
        echo "
                        ";
        // line 559
        echo "                            ";
        // line 560
        echo "                        ";
        // line 561
        echo "                        ";
        // line 562
        echo "                            ";
        // line 563
        echo "                                ";
        // line 564
        echo "                                    ";
        // line 565
        echo "                                    ";
        // line 566
        echo "
                                ";
        // line 568
        echo "                            ";
        // line 569
        echo "                        ";
        // line 570
        echo "                        ";
        // line 571
        echo "                            ";
        // line 572
        echo "                        ";
        // line 573
        echo "                    ";
        // line 574
        echo "                ";
        // line 575
        echo "            ";
        // line 576
        echo "        ";
        // line 577
        echo "    ";
        // line 578
        echo "
    <!-- Frequently Asked Questions END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(";
        // line 584
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/bg-3.png);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Download YAP!</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">Aplikasi YAP! telah tersedia dalam platform Android dan iOS dan setiap device harus terkoneksi dengan jaringan internet baik melalui data seluler maupun Wifi.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <a class=\"iq-mr-15\" href=\"# \"><img src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Playstore_Badge.png\" alt=\"Playstore\"></a>
                    <a class=\"iq-mr-15 re4-mt-20\" href=\"# \"><img src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/assets/img/Appstore_Badge.png\" alt=\"Appstore\"></a>
                </div>
            </div>
        </div>
    </section>

</div>

";
        
        $__internal_083847478d8df373b6e78d365ef9ad98d278a7a8eae52e6be13fe555bfdc2874->leave($__internal_083847478d8df373b6e78d365ef9ad98d278a7a8eae52e6be13fe555bfdc2874_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  961 => 598,  957 => 597,  941 => 584,  933 => 578,  931 => 577,  929 => 576,  927 => 575,  925 => 574,  923 => 573,  921 => 572,  919 => 571,  917 => 570,  915 => 569,  913 => 568,  910 => 566,  908 => 565,  906 => 564,  904 => 563,  902 => 562,  900 => 561,  898 => 560,  896 => 559,  893 => 557,  891 => 556,  889 => 555,  887 => 554,  885 => 553,  883 => 552,  881 => 551,  878 => 549,  876 => 548,  874 => 547,  872 => 546,  870 => 545,  868 => 544,  866 => 543,  864 => 542,  862 => 541,  860 => 540,  858 => 539,  856 => 538,  854 => 537,  852 => 536,  850 => 535,  848 => 534,  846 => 533,  844 => 532,  841 => 530,  837 => 527,  834 => 525,  832 => 524,  830 => 523,  828 => 522,  826 => 521,  824 => 520,  822 => 519,  820 => 518,  818 => 517,  816 => 516,  814 => 515,  812 => 514,  810 => 513,  808 => 512,  806 => 511,  804 => 510,  802 => 509,  800 => 508,  798 => 507,  796 => 506,  794 => 505,  792 => 504,  790 => 503,  788 => 502,  786 => 501,  784 => 500,  781 => 498,  777 => 495,  774 => 493,  772 => 492,  770 => 491,  768 => 490,  766 => 489,  764 => 488,  762 => 487,  760 => 486,  758 => 485,  756 => 484,  754 => 483,  752 => 482,  750 => 481,  748 => 480,  746 => 479,  744 => 478,  742 => 477,  740 => 476,  738 => 475,  736 => 474,  734 => 473,  732 => 472,  730 => 471,  728 => 470,  726 => 469,  724 => 468,  722 => 467,  720 => 466,  718 => 465,  716 => 464,  714 => 463,  712 => 462,  710 => 461,  708 => 460,  706 => 459,  704 => 458,  702 => 457,  700 => 456,  698 => 455,  696 => 454,  694 => 453,  692 => 452,  690 => 451,  688 => 450,  686 => 449,  684 => 448,  682 => 447,  680 => 446,  678 => 445,  676 => 444,  674 => 443,  672 => 442,  670 => 441,  668 => 440,  666 => 439,  664 => 438,  662 => 437,  660 => 436,  658 => 435,  656 => 434,  654 => 433,  652 => 432,  650 => 431,  648 => 430,  646 => 429,  644 => 428,  642 => 427,  640 => 426,  638 => 425,  636 => 424,  634 => 423,  632 => 422,  630 => 421,  628 => 420,  626 => 419,  624 => 418,  622 => 417,  620 => 416,  618 => 415,  616 => 414,  614 => 413,  612 => 412,  610 => 411,  608 => 410,  606 => 409,  604 => 408,  602 => 407,  599 => 405,  595 => 402,  592 => 400,  590 => 399,  588 => 398,  586 => 397,  584 => 396,  580 => 393,  578 => 392,  576 => 391,  574 => 390,  572 => 389,  570 => 388,  568 => 387,  566 => 386,  564 => 385,  562 => 384,  560 => 383,  558 => 382,  556 => 381,  554 => 380,  552 => 379,  550 => 378,  548 => 377,  546 => 376,  544 => 375,  542 => 374,  540 => 373,  538 => 372,  536 => 371,  534 => 370,  532 => 369,  530 => 368,  528 => 367,  526 => 366,  524 => 365,  522 => 364,  520 => 363,  518 => 362,  516 => 361,  514 => 360,  512 => 359,  510 => 358,  508 => 357,  506 => 356,  504 => 355,  502 => 354,  500 => 353,  498 => 352,  496 => 351,  494 => 350,  492 => 349,  490 => 348,  488 => 347,  486 => 346,  484 => 345,  482 => 344,  480 => 343,  478 => 342,  476 => 341,  474 => 340,  472 => 339,  470 => 338,  457 => 326,  455 => 325,  453 => 324,  451 => 323,  449 => 322,  447 => 321,  445 => 320,  443 => 319,  441 => 318,  439 => 317,  437 => 316,  435 => 315,  368 => 252,  362 => 251,  356 => 250,  350 => 249,  344 => 248,  338 => 247,  322 => 234,  270 => 185,  266 => 184,  262 => 183,  258 => 182,  254 => 181,  250 => 180,  172 => 105,  168 => 104,  146 => 85,  136 => 78,  126 => 71,  91 => 39,  81 => 32,  75 => 29,  58 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/layout.html.twig' %}

{% block content %}
<!-- Banner -->

<section id=\"iq-home\" class=\"banner iq-bg iq-bg-fixed iq-box-shadow iq-over-black-90\" style=\" background: url({{ app.request.basepath }}/assets/img/bg-2.png);\">
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        {#<ol class=\"carousel-indicators\">#}
            {#<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>#}
            {#<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>#}
            {#<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>#}
        {#</ol>#}
        <!-- Wrapper for slides -->
        <div class=\"container\">
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-lg-6 col-md-6\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInLeft\">
                                    SOLUSI TRANSAKSI MASA KINI
                                </h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInLeft\">Tersedia di</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li>
                                            <a href=\"#\">
                                                <img src=\"{{ app.request.basepath }}/assets/img/Playstore_Badge.png\" alt=\"\">
                                            </a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"{{ app.request.basepath }}/assets/img/Appstore_Badge.png\" alt=\"\"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-1 col-lg-1 col-md-1 hidden-xs\">&nbsp;</div>
                            <div class=\"col-sm-5 col-lg-5 col-md-5 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive\" data-animation=\"animated fadeInRight\" src=\"{{ app.request.basepath }}/assets/img/illustration-1.png\" alt=\"#\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Banner End -->

<div class=\"main-content\">

    <!-- Feature -->

    <section id=\"about-us\" class=\"overview-block-ptb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Kartu kredit + Debit + UnikQu = YAP!</h2>
                        <div class=\"divider\"></div>
                        <p>Aplikasi YAP! merupakan salah satu produk Aplikasi dari BNI untuk kebutuhan metode pembayaran yang memungkinkan Nasabah menjadi inisiator atas transaksi di merchant hanya dengan mengambil gambar (capture) Qr-code pada merchant. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"{{ app.request.basepath }}/assets/img/illustration-2.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Mudah dalam penggunaannya</h4>
                        <p>Dengan menggunakan platform android dan iOS membuat semakin mudah dalam mengoperasikannya</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"{{ app.request.basepath }}/assets/img/illustration-3.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Terkoneksi dengan Rekening Anda</h4>
                        <p>Setiap nasabah akan melakukan verifikasi setiap rekening banknya yang akan menjadi akun dalam Aplikasi YAP!</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"{{ app.request.basepath }}/assets/img/illustration-4.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Aplikasi Gratis</h4>
                        <p>Setiap nasabah BCA gratis untuk mengunduh dan menggunakan aplikasi pembayaran YAP!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature END -->


    <!-- About Our App -->

    <section class=\"iq-about grey-bg iq-mtb-40\">
        <div class=\"container\">
            <div class=\"row row-eq-height\">
                <div class=\"col-sm-12 col-lg-5 col-md-5 iq-about-bg\">
                    <div class=\"iq-bg about-img popup-gallery play-video\">
                        <img class=\"img-responsive center-block\" src=\"{{ app.request.basepath }}/assets/images/about-us.jpg\" alt=\"#\">
                        <a href=\"{{ app.request.basepath }}/assets/video/01.mp4\" class=\"iq-video popup-youtube\"><i class=\"ion-ios-play-outline\"></i></a>
                        <div class=\"iq-waves\">
                            <div class=\"waves wave-1\"></div>
                            <div class=\"waves wave-2\"></div>
                            <div class=\"waves wave-3\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-lg-7 col-md-7 iq-pall-50\">
                    <h2 class=\"heading-left iq-tw-6 \">Tentang Aplikasi YAP!</h2>
                    <p>Aplikasi PAY SAJA merupakan suatu solusi metode pembayaran yang memungkinkan Nasabah menjadi inisiator atas transaksi di merchant. Metode pembayaran ini memerlukan media berupa aplikasi mobile yang dimiliki oleh nasabah dan merchant. Metode pembayaran yang digunakan saat transaksi adalah dengan menggunakan QR Code scanner. Aplikasi PAY SAJA telah disediakan dalam Android dan iOS dan setiap device harus terkoneksi dengan jaringan internet</p>
                    <a class=\"button iq-mt-15\" href=\"# \">Download Manual Book</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Our App END -->


    <!-- Special Features -->

    <section id=\"features\" class=\"overview-block-ptb iq-amazing-tab white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Beragam Kelebihan</h2>
                        <div class=\"divider\"></div>
                        <p>Berkat relasi yang terjalin baik selama bertahun-tahun dengan mitra pembayaran nasional maupun internasional, YAP! dapat menyajikan metode pembayaran terlengkap bahkan menfasilitasi transaksi dengan mata uang asing tertentu yang siap mendukung para merchant memperluas pasar serta meningkatkan pendapatan bisnisnya.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#design\" aria-controls=\"design\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-checkmark-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Widely Acceptance</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Dapat digunakan oleh seluruh nasabah BNI tanpa terkecuali</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\" >
                            <a class=\"round-right\" href=\"#resolution\" aria-controls=\"resolution\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-color-wand-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Easy</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Cara pakai yang mudah, hanya dengan Login, Scan dan Bayar</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#ready\" aria-controls=\"ready\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-copy-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Modern Lifestyle</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lifestyle masa kini yang ditandai dengan gadget minded</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 text-center hidden-sm hidden-xs\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"design\"><img src=\"{{ app.request.basepath }}/assets/img/screen/screen-4.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"resolution\"><img src=\"{{ app.request.basepath }}/assets/img/screen/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"ready\"><img src=\"{{ app.request.basepath }}/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"fertures\"><img src=\"{{ app.request.basepath }}/assets/img/screen/screen-2.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"face\"><img src=\"{{ app.request.basepath }}/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"codes\"><img src=\"{{ app.request.basepath }}/assets/img/screen-1.png\" class=\"img-responsive center-block\" alt=\"#\"></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#fertures\" aria-controls=\"fertures\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-photos-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Secure</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Dua lapis pengamanan : Password login dan pin transaksi</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#face\" aria-controls=\"face\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Ultimate</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Terdapat tiga sumber Dana yaitu dari Kartu Debit, Kartu Kredit dan UniQu</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#codes\" aria-controls=\"codes\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-plus-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Low Cost</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Mengurangi biaya operasional pada merchant</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Features END -->


    <!-- App Screenshots -->

    <section id=\"screenshots\" class=\"iq-app iq-bg iq-bg-fixed iq-font-white\" style=\"background: url({{ app.request.basepath }}/assets/img/bg-2.png);\" >
        <div class=\"container-fluid\">
            <div class=\"row row-eq-height\">
                <div class=\"col-md-6 text-left iq-ptb-80 green-bg\">
                    <div class=\"iq-app-info\">
                        <h2 class=\"heading-left iq-font-white white iq-tw-6 \">Mudah dan Praktis</h2>
                        <p class=\"\">YAP! memiliki tools terintegrasi ke e-commerce yang Anda butuhkan sebagai alat pembayaran secara online, dengan transaksi debit, kartu kredit, bahkan penarikan uang.</p>
                        <p>Teknologi kami menggabungkan rekening pedagang dan solusi pembayaran dengan integrasi paling inovatif dan langkah-langkah keamanan data sekitar. Tujuan YAP! bertransaksi adalah untuk membantu perusahaan dengan menyediakan solusi tunggal-sumber pembayaran online dan kayanan akun penjual. Pilihan paket kami dapat disesuaikan bagi bisnis untuk mencakup pemenuhan akun penjual, proses pembayaran gateway.</p>
                    </div>
                </div>
                <div class=\"col-md-6 iq-app-screen iq-ptb-80\">
                    <div class=\"home-screen-slide\">
                        <div class=\"owl-carousel popup-gallery\" data-nav-dots=\"true\" data-nav-arrow=\"false\" data-items=\"3\" data-sm-items=\"3\" data-lg-items=\"3\" data-md-items=\"2\" data-autoplay=\"false\">
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-1.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-1.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-2.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-2.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-3.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-3.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-4.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-4.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-5.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-5.png\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"{{ app.request.basepath }}/assets/img/screen/screen-6.png\" class=\"popup-img\"><img class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/img/screen/screen-6.png\" alt=\"#\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Screenshots END -->


    <!-- Appino Great Feature -->

    <section class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Easy pay for easy life</h2>
                        <div class=\"divider\"></div>
                        <p>Memberikan kemudahan dalam menjalani hidup di era digital, tak perlu</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-1 col-md-1 iq-mr-50\">&nbsp;</div>
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-monitor-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Activation</h5>
                            <p>Aktivasi antara aplikasi dengan rekening nasabah BNI yang sangat mudah</p>
                            <span class=\"iq-big-title\">01</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re7-mt-50\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-settings\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Login</h5>
                            <p>hanya dengan menggunakan nomor rekening dan Kode Unik untuk masuk ke dalam Aplikasi</p>
                            <span class=\"iq-big-title\">02</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-social-googleplus-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Easy Pay</h5>
                            <p>Dengan menggunakan scan QR Code membuat transaksi semakin mudah</p>
                            <span class=\"iq-big-title\">03</span>
                        </div>
                    </div>
                </div>
                {#<div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">#}
                    {#<div class=\"iq-fancy-box-02 text-center\">#}
                        {#<div class=\"iq-icon\">#}
                            {#<i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>#}
                        {#</div>#}
                        {#<div class=\"fancy-content\">#}
                            {#<h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Clean Codes</h5>#}
                            {#<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>#}
                            {#<span class=\"iq-big-title\">04</span>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}


            </div>
        </div>
    </section>

    <!-- Appino Great Feature END -->


    <!-- Amazing Feature -->

    {#<section class=\"overview-block-ptb grey-bg iq-loved-customers\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-12\">#}
                    {#<div class=\"heading-title\">#}
                        {#<h2 class=\"title iq-tw-6\">Loved By Our Customers</h2>#}
                        {#<div class=\"divider\"></div>#}
                        {#<p>Our Customer are our priority. we believe in providing best services to them. </p>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-12\">#}
                    {#<div class=\"owl-carousel\" data-nav-dots=\"false\" data-nav-arrow=\"true\" data-items=\"3\" data-xs-items=\"1\" data-sm-items=\"2\" data-md-items=\"3\" data-lg-items=\"3\" data-autoplay=\"true\">#}
                        {#<div class=\"item\">#}
                            {#<div class=\"iq-client white-bg\">#}
                                {#<div class=\"client-img\">#}
                                    {#<img alt=\"#\" class=\"img-responsive img-circle\" src=\"{{ app.request.basepath }}/assets/images/testimonial/01.jpg\">#}
                                {#</div>#}
                                {#<div class=\"client-info\">#}
                                    {#<div class=\"client-name iq-mb-10\">#}
                                        {#<h5 class=\"iq-tw-6\">Jason Adams</h5>#}
                                        {#<span class=\"sub-title iq-tw-6\">CEO, Appino</span>#}
                                    {#</div>#}
                                    {#<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"item\">#}
                            {#<div class=\"iq-client white-bg\">#}
                                {#<div class=\"client-img\">#}
                                    {#<img alt=\"#\" class=\"img-responsive img-circle\" src=\"{{ app.request.basepath }}/assets/images/testimonial/02.jpg\">#}
                                {#</div>#}
                                {#<div class=\"client-info\">#}
                                    {#<div class=\"client-name iq-mb-10\">#}
                                        {#<h5 class=\"iq-tw-6\">Amy Adams</h5>#}
                                        {#<span class=\"sub-title iq-tw-6\">CEO, Appino</span>#}
                                    {#</div>#}
                                    {#<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"item\">#}
                            {#<div class=\"iq-client white-bg\">#}
                                {#<div class=\"client-img\">#}
                                    {#<img alt=\"#\" class=\"img-responsive img-circle\" src=\"{{ app.request.basepath }}/assets/images/testimonial/03.jpg\">#}
                                {#</div>#}
                                {#<div class=\"client-info\">#}
                                    {#<div class=\"client-name iq-mb-10\">#}
                                        {#<h5 class=\"iq-tw-6\">John Deo</h5>#}
                                        {#<span class=\"sub-title iq-tw-6\">CEO, Appino</span>#}
                                    {#</div>#}
                                    {#<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}


                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</section>#}

    {#<!-- Amazing Feature END -->#}


    {#<!-- Meet the Team -->#}

    {#<section id=\"team\" class=\"overview-block-ptb white-bg\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-12\">#}
                    {#<div class=\"heading-title\">#}
                        {#<h2 class=\"title iq-tw-6\">Meet the Team</h2>#}
                        {#<div class=\"divider\"></div>#}
                        {#<p>Meet the faces behind our company. Our team offers the most up-to-date, sustainable custom solutions to the problem. They work so hard to provide best to their customers.</p>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-6 col-lg-3 col-md-3\">#}
                    {#<div class=\"iq-team\">#}
                        {#<img src=\"{{ app.request.basepath }}/assets/images/team/01.jpg\" class=\"img-responsive center-block\" alt=\"#\">#}
                        {#<div class=\"iq-team-info text-center\">#}
                            {#<h4 class=\"iq-font-white iq-tw-5\">Jason Adams</h4>#}
                            {#<span class=\"team-post iq-tw-5\">UI/UX Designer</span>#}
                            {#<div class=\"share iq-mt-15\">#}
                                {#<span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>#}
                                {#<nav>#}
                                    {#<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-google\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-github\"></i></a>#}
                                {#</nav>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-sm-6 col-lg-3 col-md-3\">#}
                    {#<div class=\"iq-team re7-mt-50\">#}
                        {#<img src=\"{{ app.request.basepath }}/assets/images/team/02.jpg\" class=\"img-responsive center-block\" alt=\"#\">#}
                        {#<div class=\"iq-team-info text-center\">#}
                            {#<h4 class=\"iq-font-white iq-tw-5\">Amy Adams</h4>#}
                            {#<span class=\"team-post iq-tw-5\">UI/UX Designer</span>#}
                            {#<div class=\"share iq-mt-15\">#}
                                {#<span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>#}
                                {#<nav>#}
                                    {#<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-google\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-github\"></i></a>#}
                                {#</nav>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">#}
                    {#<div class=\"iq-team\">#}
                        {#<img src=\"{{ app.request.basepath }}/assets/images/team/03.jpg\" class=\"img-responsive center-block\" alt=\"#\">#}
                        {#<div class=\"iq-team-info text-center\">#}
                            {#<h4 class=\"iq-font-white iq-tw-5\">John Deo</h4>#}
                            {#<span class=\"team-post iq-tw-5\">UI/UX Designer</span>#}
                            {#<div class=\"share iq-mt-15\">#}
                                {#<span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>#}
                                {#<nav>#}
                                    {#<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-google\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-github\"></i></a>#}
                                {#</nav>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">#}
                    {#<div class=\"iq-team\">#}
                        {#<img src=\"{{ app.request.basepath }}/assets/images/team/04.jpg\" class=\"img-responsive center-block\" alt=\"#\">#}
                        {#<div class=\"iq-team-info text-center\">#}
                            {#<h4 class=\"iq-font-white iq-tw-5\">James Clayton</h4>#}
                            {#<span class=\"team-post iq-tw-5\">UI/UX Designer</span>#}
                            {#<div class=\"share iq-mt-15\">#}
                                {#<span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>#}
                                {#<nav>#}
                                    {#<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-google\"></i></a>#}
                                    {#<a href=\"#\"><i class=\"fa fa-github\"></i></a>#}
                                {#</nav>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</section>#}

    {#<!-- Meet the Team END -->#}


    {#<!-- Counter -->#}

    {#<div class=\"iq-ptb-70 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url({{ app.request.basepath }}/assets/images/about/04.jpg);\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">#}
                    {#<div class=\"counter\"> <i class=\"ion-ios-folder-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1540\" data-speed=\"10000\">1540</span>#}
                        {#<label class=\"iq-font-white\">Project</label>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">#}
                    {#<div class=\"counter\"> <i class=\"ion-ios-paper-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"2530\" data-speed=\"10000\">2530</span>#}
                        {#<label class=\"iq-font-white\">AWARDS</label>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">#}
                    {#<div class=\"counter\"> <i class=\"ion-ios-person-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"8120\" data-speed=\"10000\">8120</span>#}
                        {#<label class=\"iq-font-white\">HAPPY CLIENTS</label>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">#}
                    {#<div class=\"counter\"> <i class=\"ion-ios-star iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1620\" data-speed=\"10000\">1620</span>#}
                        {#<label class=\"iq-font-white\">TOTAL APP RATES</label>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}

    {#<!-- Counter END -->#}


    {#<!-- Frequently Asked Questions -->#}

    {#<section class=\"overview-block-ptb white-bg\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-12\">#}
                    {#<div class=\"heading-title\">#}
                        {#<h2 class=\"title iq-tw-6\">Frequently Asked Questions</h2>#}
                        {#<div class=\"divider\"></div>#}
                        {#<p>If you got any query? Here you go! Don't hesitate to ask any Question! We are happy to help with your questions. Here you go! Don't hesitate to ask any Question! We are happy to help with your questions.</p>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
            {#<div class=\"row\">#}
                {#<div class=\"col-sm-12 col-md-6\">#}
                    {#<img class=\"img-responsive center-block\" src=\"{{ app.request.basepath }}/assets/images/01.png\" alt=\"\">#}
                {#</div>#}
                {#<div class=\"col-sm-12 col-md-6\">#}
                    {#<div class=\"iq-accordion iq-mt-50\">#}
                        {#<div class=\"ad-block ad-active\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-infinite-outline\" aria-hidden=\"true\"></i></span>Ipsum is simply dummy the printing?</a>#}

                            {#<div class=\"ad-details\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/images/faq-1.jpg\"></div>#}
                                    {#<div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>#}
                                {#</div>#}
                            {#</div>#}
                        {#</div>#}

                        {#<div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-time-outline\" aria-hidden=\"true\"></i></span>Dummy the printing and type setting?</a>#}
                            {#<div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>#}
                        {#</div>#}
                        {#<div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-compose-outline\" aria-hidden=\"true\"></i></span>Standard dummy since the 1500s?</a>#}
                            {#<div class=\"ad-details\">#}
                                {#<div class=\"row\">#}
                                    {#<div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>#}
                                    {#<div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"{{ app.request.basepath }}/assets/images/faq-1.jpg\"></div>#}

                                {#</div>#}
                            {#</div>#}
                        {#</div>#}
                        {#<div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-loop\" aria-hidden=\"true\"></i></span>It has survived five centuries?</a>#}
                            {#<div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</section>#}

    <!-- Frequently Asked Questions END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url({{ app.request.basepath }}/assets/img/bg-3.png);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Download YAP!</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">Aplikasi YAP! telah tersedia dalam platform Android dan iOS dan setiap device harus terkoneksi dengan jaringan internet baik melalui data seluler maupun Wifi.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <a class=\"iq-mr-15\" href=\"# \"><img src=\"{{ app.request.basepath }}/assets/img/Playstore_Badge.png\" alt=\"Playstore\"></a>
                    <a class=\"iq-mr-15 re4-mt-20\" href=\"# \"><img src=\"{{ app.request.basepath }}/assets/img/Appstore_Badge.png\" alt=\"Appstore\"></a>
                </div>
            </div>
        </div>
    </section>

</div>

{% endblock %}", "home/index.html.twig", "/home/jimmy/Projects/yap_project/src/Templates/home/index.html.twig");
    }
}
