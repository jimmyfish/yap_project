<?php

/* home/index.html.twig */
class __TwigTemplate_c602e22651ed9b1d799ff5428b7681bac200c657041d893c4ad15b7fd131de6e extends Twig_Template
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
        $__internal_a79ac5f84ba50deee7eedf5fb445efa451aaec7922251e07dca60d3129be784b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79ac5f84ba50deee7eedf5fb445efa451aaec7922251e07dca60d3129be784b->enter($__internal_a79ac5f84ba50deee7eedf5fb445efa451aaec7922251e07dca60d3129be784b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79ac5f84ba50deee7eedf5fb445efa451aaec7922251e07dca60d3129be784b->leave($__internal_a79ac5f84ba50deee7eedf5fb445efa451aaec7922251e07dca60d3129be784b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2dd80f6e477c0541b6dc912e70f9b663041c1ac0caee13feff0552607359c449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd80f6e477c0541b6dc912e70f9b663041c1ac0caee13feff0552607359c449->enter($__internal_2dd80f6e477c0541b6dc912e70f9b663041c1ac0caee13feff0552607359c449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<!-- Banner -->

<section id=\"iq-home\" class=\"banner iq-bg iq-bg-fixed iq-box-shadow iq-over-black-90\" style=\" background: url(images/banner/bg.jpg);\">
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"container\">
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInLeft\">
                                    <small class=\"iq-font-white iq-tw-5\"> <strong class=\"iq-font-white\">&#9679;</strong> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInLeft\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive\" data-animation=\"animated fadeInRight\" src=\"images/banner/01.png\" alt=\"#\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-left\">
                                    <img class=\"img-responsive center-block\" data-animation=\"animated fadeInLeft\" src=\"images/banner/01.png\" alt=\"#\">
                                </div>
                            </div>
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInRight\"><small class=\"iq-font-white iq-tw-5\"><b class=\"iq-font-white\">&#9679;</b> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInRight\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated bounceInLeft\"><small class=\"iq-font-white iq-tw-5\"><b class=\"iq-font-white\">&#9679;</b> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated bounceInRight\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated bounceInRight\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive center-block\" data-animation=\"animated rotateInDownRight\" src=\"images/banner/01.png\" alt=\"#\">
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
                        <h2 class=\"title iq-tw-6\">Amazing Features</h2>
                        <div class=\"divider\"></div>
                        <p>We've been working really hard to improve the appino with this amazing new features that you aked for! Check out the appino’s new  amazing features. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon1.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Easy to Customize</h4>
                        <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon2.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Multipurpose layout</h4>
                        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon3.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Unique Design</h4>
                        <p>Dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum is simplytypesetting industry.</p>
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
                        <img class=\"img-responsive center-block\" src=\"images/about-us.jpg\" alt=\"#\">
                        <a href=\"video/01.mp4\" class=\"iq-video popup-youtube\"><i class=\"ion-ios-play-outline\"></i></a>
                        <div class=\"iq-waves\">
                            <div class=\"waves wave-1\"></div>
                            <div class=\"waves wave-2\"></div>
                            <div class=\"waves wave-3\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-lg-7 col-md-7 iq-pall-50\">
                    <h2 class=\"heading-left iq-tw-6 \">About Our App</h2>
                    <div class=\"lead iq-tw-6 iq-mb-20\">This Appino application delivers the most trusted services for your bussiness to succeed in the global app environment.</div>
                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, naking this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                    <a class=\"button iq-mt-15\" href=\"# \">Download</a>
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
                        <h2 class=\"title iq-tw-6\">Special Features</h2>
                        <div class=\"divider\"></div>
                        <p>Appino is launch with everything you need. We've got a lot of amaing and cool features. so here we go,  with unlimited features. go and check out!</p>
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
                                    <h4 class=\"iq-tw-6\">Responsive Design</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\" >
                            <a class=\"round-right\" href=\"#resolution\" aria-controls=\"resolution\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-color-wand-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Easy to Use</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#ready\" aria-controls=\"ready\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-copy-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Well Documentation</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 text-center hidden-sm hidden-xs\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"design\"><img src=\"images/screenshots/01.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"resolution\"><img src=\"images/screenshots/02.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"ready\"><img src=\"images/screenshots/03.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"fertures\"><img src=\"images/screenshots/04.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"face\"><img src=\"images/screenshots/05.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"codes\"><img src=\"images/screenshots/06.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#fertures\" aria-controls=\"fertures\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-photos-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Perfect Showcase</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#face\" aria-controls=\"face\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Unlimited Features</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#codes\" aria-controls=\"codes\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-plus-outline\"></i>
                                    <h4 class=\"iq-tw-6\">And Many More</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
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

    <section id=\"screenshots\" class=\"iq-app iq-bg iq-bg-fixed iq-font-white\" style=\"background: url(images/banner/bg.jpg);\" >
        <div class=\"container-fluid\">
            <div class=\"row row-eq-height\">
                <div class=\"col-md-6 text-left iq-ptb-80 green-bg\">
                    <div class=\"iq-app-info\">
                        <h2 class=\"heading-left iq-font-white white iq-tw-6 \">App Screenshots</h2>
                        <div class=\"lead iq-tw-6 iq-mb-20\">Appino is here with its best screenshot, from this photo gallery you can get idea about this application.</div>
                        <h4 class=\"iq-mt-50 iq-font-white iq-tw-6 iq-mb-15\">Awesome Design</h4>
                        <p class=\"\">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, Lorem Ipsum is simply dummy text of the printing and typesetting indus</p>
                    </div>
                </div>
                <div class=\"col-md-6 iq-app-screen iq-ptb-80\">
                    <div class=\"home-screen-slide\">
                        <div class=\"owl-carousel popup-gallery\" data-nav-dots=\"true\" data-nav-arrow=\"false\" data-items=\"3\" data-sm-items=\"3\" data-lg-items=\"3\" data-md-items=\"2\" data-autoplay=\"false\">
                            <div class=\"item\"><a href=\"images/screenshots/01.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/01.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/02.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/02.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/03.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/03.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/04.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/04.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/05.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/05.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/06.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/06.jpg\" alt=\"#\"></a></div>
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
                        <h2 class=\"title iq-tw-6\">How It Work?</h2>
                        <div class=\"divider\"></div>
                        <p>Appino is available with new technology and new creative ideas, which works with high resolutions. There is many more features available with different and unique work.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-monitor-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">High Resolution</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Color Schemes</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Google Fonts</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <span class=\"iq-big-title\">03</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Clean Codes</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <span class=\"iq-big-title\">04</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Appino Great Feature END -->


    <!-- Amazing Feature -->

    <section class=\"overview-block-ptb grey-bg iq-loved-customers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Loved By Our Customers</h2>
                        <div class=\"divider\"></div>
                        <p>Our Customer are our priority. we believe in providing best services to them. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"owl-carousel\" data-nav-dots=\"false\" data-nav-arrow=\"true\" data-items=\"3\" data-xs-items=\"1\" data-sm-items=\"2\" data-md-items=\"3\" data-lg-items=\"3\" data-autoplay=\"true\">
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/01.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">Jason Adams</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/02.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">Amy Adams</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/03.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">John Deo</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amazing Feature END -->


    <!-- Meet the Team -->

    <section id=\"team\" class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Meet the Team</h2>
                        <div class=\"divider\"></div>
                        <p>Meet the faces behind our company. Our team offers the most up-to-date, sustainable custom solutions to the problem. They work so hard to provide best to their customers.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/01.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">Jason Adams</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-team re7-mt-50\">
                        <img src=\"images/team/02.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">Amy Adams</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/03.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">John Deo</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/04.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">James Clayton</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team END -->


    <!-- Counter -->

    <div class=\"iq-ptb-70 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/about/04.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">
                    <div class=\"counter\"> <i class=\"ion-ios-folder-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1540\" data-speed=\"10000\">1540</span>
                        <label class=\"iq-font-white\">Project</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">
                    <div class=\"counter\"> <i class=\"ion-ios-paper-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"2530\" data-speed=\"10000\">2530</span>
                        <label class=\"iq-font-white\">AWARDS</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">
                    <div class=\"counter\"> <i class=\"ion-ios-person-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"8120\" data-speed=\"10000\">8120</span>
                        <label class=\"iq-font-white\">HAPPY CLIENTS</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">
                    <div class=\"counter\"> <i class=\"ion-ios-star iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1620\" data-speed=\"10000\">1620</span>
                        <label class=\"iq-font-white\">TOTAL APP RATES</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Frequently Asked Questions</h2>
                        <div class=\"divider\"></div>
                        <p>If you got any query? Here you go! Don't hesitate to ask any Question! We are happy to help with your questions. Here you go! Don't hesitate to ask any Question! We are happy to help with your questions.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <img class=\"img-responsive center-block\" src=\"images/01.png\" alt=\"\">
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"iq-accordion iq-mt-50\">
                        <div class=\"ad-block ad-active\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-infinite-outline\" aria-hidden=\"true\"></i></span>Ipsum is simply dummy the printing?</a>

                            <div class=\"ad-details\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"images/faq-1.jpg\"></div>
                                    <div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-time-outline\" aria-hidden=\"true\"></i></span>Dummy the printing and type setting?</a>
                            <div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                        </div>
                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-compose-outline\" aria-hidden=\"true\"></i></span>Standard dummy since the 1500s?</a>
                            <div class=\"ad-details\">
                                <div class=\"row\">
                                    <div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                                    <div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"images/faq-1.jpg\"></div>

                                </div>
                            </div>
                        </div>
                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-loop\" aria-hidden=\"true\"></i></span>It has survived five centuries?</a>
                            <div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/about/04.jpg);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Download App</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <a class=\"button button-icon iq-mr-15\" href=\"# \"> <i class=\"ion-social-apple\"></i> App Store</a>
                    <a class=\"button button-icon iq-mr-15 re4-mt-20\" href=\"# \"> <i class=\"ion-social-android\"></i> Google Play</a>
                    <a class=\"button button-icon re7-mt-30 re4-mt-20\" href=\"# \"> <i class=\"ion-social-windows\"></i> Windows Store</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions END -->


    <!-- Affordable Price -->

    <section id=\"pricing\" class=\"overview-block-ptb grey-bg iq-price-table\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Price</h2>
                        <div class=\"divider\"></div>
                        <p>We're here with best pricing offers. Get start your business with our awesome pricing plan. Here is affordable prices available. Go with your choice and enjoy the services.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>19<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">BASIC</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re7-mt-50\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>29<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">STANDARD</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re-mt-30 wow flipInY\" data-wow-duration=\"1s\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>49<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">ADVANCE</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re-mt-30\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>99<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">UNLIMITED</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affordable Price END -->

    <!-- Latest Blog Post -->

    <section id=\"blog\" class=\"overview-block-ptb white-bg iq-blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Latest Blog Post</h2>
                        <div class=\"divider\"></div>
                        <p>We have completely updated our work, making it much easier for you to find the information you need. Check out the recently updated work and learn more about application.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/01.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/02.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/03.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-center\">
                    <a class=\"button iq-mt-50\" href=\"blog-2-columns.html\">Go To Blog</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Post END -->


    <!-- Clients -->

    <div class=\"iq-our-clients white-bg iq-ptb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"owl-carousel\" data-nav-dots=\"false\" data-nav-arrow=\"true\" data-items=\"5\" data-sm-items=\"3\" data-lg-items=\"5\" data-md-items=\"4\" data-autoplay=\"true\">
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/01.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/02.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/03.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/04.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/05.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/06.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/07.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/08.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/09.png\" alt=\"#\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients END -->

</div>

";
        
        $__internal_2dd80f6e477c0541b6dc912e70f9b663041c1ac0caee13feff0552607359c449->leave($__internal_2dd80f6e477c0541b6dc912e70f9b663041c1ac0caee13feff0552607359c449_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

<section id=\"iq-home\" class=\"banner iq-bg iq-bg-fixed iq-box-shadow iq-over-black-90\" style=\" background: url(images/banner/bg.jpg);\">
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"container\">
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInLeft\">
                                    <small class=\"iq-font-white iq-tw-5\"> <strong class=\"iq-font-white\">&#9679;</strong> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInLeft\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive\" data-animation=\"animated fadeInRight\" src=\"images/banner/01.png\" alt=\"#\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-left\">
                                    <img class=\"img-responsive center-block\" data-animation=\"animated fadeInLeft\" src=\"images/banner/01.png\" alt=\"#\">
                                </div>
                            </div>
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated fadeInRight\"><small class=\"iq-font-white iq-tw-5\"><b class=\"iq-font-white\">&#9679;</b> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated fadeInRight\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated fadeInUp\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"banner-text\">
                        <div class=\"row\">
                            <div class=\"col-sm-8 col-lg-8 col-md-8\">
                                <h1 class=\"iq-font-white iq-tw-8\" data-animation=\"animated bounceInLeft\"><small class=\"iq-font-white iq-tw-5\"><b class=\"iq-font-white\">&#9679;</b> Appino provide amazing & outstanding feature</small>AWESOME MOBILE APP</h1>
                                <div class=\"link\">
                                    <h5 class=\"iq-font-white\" data-animation=\"animated bounceInRight\">Free Download Here</h5>
                                    <ul class=\"list-inline\" data-animation=\"animated bounceInRight\">
                                        <li><a href=\"#\"><i class=\"ion-social-apple\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-android\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"ion-social-windows\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-lg-4 col-md-4 hidden-xs\">
                                <div class=\"img-one pull-right\">
                                    <img class=\"img-responsive center-block\" data-animation=\"animated rotateInDownRight\" src=\"images/banner/01.png\" alt=\"#\">
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
                        <h2 class=\"title iq-tw-6\">Amazing Features</h2>
                        <div class=\"divider\"></div>
                        <p>We've been working really hard to improve the appino with this amazing new features that you aked for! Check out the appino’s new  amazing features. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon1.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Easy to Customize</h4>
                        <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon2.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Multipurpose layout</h4>
                        <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-fancy-box text-left\">
                        <img src=\"images/services/icon3.png\" alt=\"#\">
                        <h4 class=\"iq-tw-6\">Unique Design</h4>
                        <p>Dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum is simplytypesetting industry.</p>
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
                        <img class=\"img-responsive center-block\" src=\"images/about-us.jpg\" alt=\"#\">
                        <a href=\"video/01.mp4\" class=\"iq-video popup-youtube\"><i class=\"ion-ios-play-outline\"></i></a>
                        <div class=\"iq-waves\">
                            <div class=\"waves wave-1\"></div>
                            <div class=\"waves wave-2\"></div>
                            <div class=\"waves wave-3\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-lg-7 col-md-7 iq-pall-50\">
                    <h2 class=\"heading-left iq-tw-6 \">About Our App</h2>
                    <div class=\"lead iq-tw-6 iq-mb-20\">This Appino application delivers the most trusted services for your bussiness to succeed in the global app environment.</div>
                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, naking this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                    <a class=\"button iq-mt-15\" href=\"# \">Download</a>
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
                        <h2 class=\"title iq-tw-6\">Special Features</h2>
                        <div class=\"divider\"></div>
                        <p>Appino is launch with everything you need. We've got a lot of amaing and cool features. so here we go,  with unlimited features. go and check out!</p>
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
                                    <h4 class=\"iq-tw-6\">Responsive Design</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\" >
                            <a class=\"round-right\" href=\"#resolution\" aria-controls=\"resolution\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-color-wand-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Easy to Use</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInLeft\" data-wow-duration=\"1s\">
                            <a class=\"round-right\" href=\"#ready\" aria-controls=\"ready\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01 text-right\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-copy-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Well Documentation</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4 text-center hidden-sm hidden-xs\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"design\"><img src=\"images/screenshots/01.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"resolution\"><img src=\"images/screenshots/02.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"ready\"><img src=\"images/screenshots/03.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"fertures\"><img src=\"images/screenshots/04.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"face\"><img src=\"images/screenshots/05.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"codes\"><img src=\"images/screenshots/06.jpg\" class=\"img-responsive center-block\" alt=\"#\"></div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4 col-lg-4\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#fertures\" aria-controls=\"fertures\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-photos-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Perfect Showcase</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#face\" aria-controls=\"face\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                                    <h4 class=\"iq-tw-6\">Unlimited Features</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role=\"presentation\" class=\"wow fadeInRight\" data-wow-duration=\"1s\">
                            <a href=\"#codes\" aria-controls=\"codes\" role=\"tab\" data-toggle=\"tab\">
                                <div class=\"iq-fancy-box-01\">
                                    <i aria-hidden=\"true\" class=\"ion-ios-plus-outline\"></i>
                                    <h4 class=\"iq-tw-6\">And Many More</h4>
                                    <div class=\"fancy-content-01\">
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing sed do eiusmod empor incididunt</p>
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

    <section id=\"screenshots\" class=\"iq-app iq-bg iq-bg-fixed iq-font-white\" style=\"background: url(images/banner/bg.jpg);\" >
        <div class=\"container-fluid\">
            <div class=\"row row-eq-height\">
                <div class=\"col-md-6 text-left iq-ptb-80 green-bg\">
                    <div class=\"iq-app-info\">
                        <h2 class=\"heading-left iq-font-white white iq-tw-6 \">App Screenshots</h2>
                        <div class=\"lead iq-tw-6 iq-mb-20\">Appino is here with its best screenshot, from this photo gallery you can get idea about this application.</div>
                        <h4 class=\"iq-mt-50 iq-font-white iq-tw-6 iq-mb-15\">Awesome Design</h4>
                        <p class=\"\">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, Lorem Ipsum is simply dummy text of the printing and typesetting indus</p>
                    </div>
                </div>
                <div class=\"col-md-6 iq-app-screen iq-ptb-80\">
                    <div class=\"home-screen-slide\">
                        <div class=\"owl-carousel popup-gallery\" data-nav-dots=\"true\" data-nav-arrow=\"false\" data-items=\"3\" data-sm-items=\"3\" data-lg-items=\"3\" data-md-items=\"2\" data-autoplay=\"false\">
                            <div class=\"item\"><a href=\"images/screenshots/01.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/01.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/02.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/02.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/03.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/03.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/04.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/04.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/05.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/05.jpg\" alt=\"#\"></a></div>
                            <div class=\"item\"><a href=\"images/screenshots/06.jpg\" class=\"popup-img\"><img class=\"img-responsive\" src=\"images/screenshots/06.jpg\" alt=\"#\"></a></div>
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
                        <h2 class=\"title iq-tw-6\">How It Work?</h2>
                        <div class=\"divider\"></div>
                        <p>Appino is available with new technology and new creative ideas, which works with high resolutions. There is many more features available with different and unique work.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-monitor-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">High Resolution</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Color Schemes</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Google Fonts</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <span class=\"iq-big-title\">03</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-fancy-box-02 text-center\">
                        <div class=\"iq-icon\">
                            <i aria-hidden=\"true\" class=\"ion-ios-heart-outline\"></i>
                        </div>
                        <div class=\"fancy-content\">
                            <h5 class=\"iq-tw-6 iq-pt-20 iq-pb-10\">Clean Codes</h5>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <span class=\"iq-big-title\">04</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Appino Great Feature END -->


    <!-- Amazing Feature -->

    <section class=\"overview-block-ptb grey-bg iq-loved-customers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Loved By Our Customers</h2>
                        <div class=\"divider\"></div>
                        <p>Our Customer are our priority. we believe in providing best services to them. </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"owl-carousel\" data-nav-dots=\"false\" data-nav-arrow=\"true\" data-items=\"3\" data-xs-items=\"1\" data-sm-items=\"2\" data-md-items=\"3\" data-lg-items=\"3\" data-autoplay=\"true\">
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/01.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">Jason Adams</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/02.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">Amy Adams</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"iq-client white-bg\">
                                <div class=\"client-img\">
                                    <img alt=\"#\" class=\"img-responsive img-circle\" src=\"images/testimonial/03.jpg\">
                                </div>
                                <div class=\"client-info\">
                                    <div class=\"client-name iq-mb-10\">
                                        <h5 class=\"iq-tw-6\">John Deo</h5>
                                        <span class=\"sub-title iq-tw-6\">CEO, Appino</span>
                                    </div>
                                    <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amazing Feature END -->


    <!-- Meet the Team -->

    <section id=\"team\" class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Meet the Team</h2>
                        <div class=\"divider\"></div>
                        <p>Meet the faces behind our company. Our team offers the most up-to-date, sustainable custom solutions to the problem. They work so hard to provide best to their customers.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/01.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">Jason Adams</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3\">
                    <div class=\"iq-team re7-mt-50\">
                        <img src=\"images/team/02.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">Amy Adams</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/03.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">John Deo</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-lg-3 col-md-3 re-mt-30\">
                    <div class=\"iq-team\">
                        <img src=\"images/team/04.jpg\" class=\"img-responsive center-block\" alt=\"#\">
                        <div class=\"iq-team-info text-center\">
                            <h4 class=\"iq-font-white iq-tw-5\">James Clayton</h4>
                            <span class=\"team-post iq-tw-5\">UI/UX Designer</span>
                            <div class=\"share iq-mt-15\">
                                <span> <i class=\"fa fa-share-alt iq-mr-10\" aria-hidden=\"true\"></i> Share With</span>
                                <nav>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-google\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-github\"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team END -->


    <!-- Counter -->

    <div class=\"iq-ptb-70 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/about/04.jpg);\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">
                    <div class=\"counter\"> <i class=\"ion-ios-folder-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1540\" data-speed=\"10000\">1540</span>
                        <label class=\"iq-font-white\">Project</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center\">
                    <div class=\"counter\"> <i class=\"ion-ios-paper-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"2530\" data-speed=\"10000\">2530</span>
                        <label class=\"iq-font-white\">AWARDS</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">
                    <div class=\"counter\"> <i class=\"ion-ios-person-outline iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"8120\" data-speed=\"10000\">8120</span>
                        <label class=\"iq-font-white\">HAPPY CLIENTS</label>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50\">
                    <div class=\"counter\"> <i class=\"ion-ios-star iq-font-white\" aria-hidden=\"true\"></i> <span class=\"timer iq-tw-6 iq-font-black\" data-to=\"1620\" data-speed=\"10000\">1620</span>
                        <label class=\"iq-font-white\">TOTAL APP RATES</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb white-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Frequently Asked Questions</h2>
                        <div class=\"divider\"></div>
                        <p>If you got any query? Here you go! Don't hesitate to ask any Question! We are happy to help with your questions. Here you go! Don't hesitate to ask any Question! We are happy to help with your questions.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <img class=\"img-responsive center-block\" src=\"images/01.png\" alt=\"\">
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"iq-accordion iq-mt-50\">
                        <div class=\"ad-block ad-active\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-infinite-outline\" aria-hidden=\"true\"></i></span>Ipsum is simply dummy the printing?</a>

                            <div class=\"ad-details\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"images/faq-1.jpg\"></div>
                                    <div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-time-outline\" aria-hidden=\"true\"></i></span>Dummy the printing and type setting?</a>
                            <div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                        </div>
                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-compose-outline\" aria-hidden=\"true\"></i></span>Standard dummy since the 1500s?</a>
                            <div class=\"ad-details\">
                                <div class=\"row\">
                                    <div class=\"col-sm-9\"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                                    <div class=\"col-sm-3\"><img alt=\"#\" class=\"img-responsive\" src=\"images/faq-1.jpg\"></div>

                                </div>
                            </div>
                        </div>
                        <div class=\"ad-block\"> <a href=\"#\" class=\"ad-title iq-tw-6 iq-font-grey\"> <span class=\"ad-icon\"><i class=\"ion-ios-loop\" aria-hidden=\"true\"></i></span>It has survived five centuries?</a>
                            <div class=\"ad-details\">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions END -->


    <!-- Frequently Asked Questions -->

    <section class=\"overview-block-ptb iq-bg iq-bg-fixed iq-over-black-80\" style=\"background: url(images/about/04.jpg);\" >
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title iq-mb-40\">
                        <h2 class=\"title iq-tw-6 iq-font-white\">Download App</h2>
                        <div class=\"divider white\"></div>
                        <p class=\"iq-font-white\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <a class=\"button button-icon iq-mr-15\" href=\"# \"> <i class=\"ion-social-apple\"></i> App Store</a>
                    <a class=\"button button-icon iq-mr-15 re4-mt-20\" href=\"# \"> <i class=\"ion-social-android\"></i> Google Play</a>
                    <a class=\"button button-icon re7-mt-30 re4-mt-20\" href=\"# \"> <i class=\"ion-social-windows\"></i> Windows Store</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions END -->


    <!-- Affordable Price -->

    <section id=\"pricing\" class=\"overview-block-ptb grey-bg iq-price-table\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Price</h2>
                        <div class=\"divider\"></div>
                        <p>We're here with best pricing offers. Get start your business with our awesome pricing plan. Here is affordable prices available. Go with your choice and enjoy the services.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>19<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">BASIC</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re7-mt-50\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>29<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">STANDARD</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re-mt-30 wow flipInY\" data-wow-duration=\"1s\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>49<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">ADVANCE</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3 re-mt-30\">
                    <div class=\"iq-pricing text-center\">
                        <div class=\"price-title green-bg \">
                            <h1 class=\"iq-font-white iq-tw-7\"><small>\$</small>99<small>/Month</small></h1>
                            <span class=\"text-uppercase iq-tw-6 iq-font-white\">UNLIMITED</span>
                        </div>
                        <ul>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <div class=\"price-footer\">
                            <a class=\"button\" href=\"# \">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affordable Price END -->

    <!-- Latest Blog Post -->

    <section id=\"blog\" class=\"overview-block-ptb white-bg iq-blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"heading-title\">
                        <h2 class=\"title iq-tw-6\">Latest Blog Post</h2>
                        <div class=\"divider\"></div>
                        <p>We have completely updated our work, making it much easier for you to find the information you need. Check out the recently updated work and learn more about application.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-4\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/01.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/02.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-4 re-mt-30\">
                    <div class=\"iq-blog-box\">
                        <div class=\"iq-blog-image clearfix\">
                            <img class=\"img-responsive center-block\" src=\"images/blog/03.jpg\" alt=\"#\">
                        </div>
                        <div class=\"iq-blog-detail\">
                            <div class=\"blog-title\"> <a href=\"blog-single.html\"><h5 class=\"iq-tw-6\">Blogpost With Image</h5> </a> </div>
                            <div class=\"iq-blog-meta\">
                                <ul class=\"list-inline\">
                                    <li><a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> 12 Aug 2017</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> 5</a></li>
                                </ul>
                            </div>
                            <div class=\"blog-content\">
                                <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                            </div>
                            <div class=\"blog-button\">
                                <a href=\"#\" class=\"pull-left iq-tw-6 iq-user\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> Tom Tilak</a>
                                <a href=\"#\" class=\"pull-right iq-tw-6\">Read More <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-center\">
                    <a class=\"button iq-mt-50\" href=\"blog-2-columns.html\">Go To Blog</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Post END -->


    <!-- Clients -->

    <div class=\"iq-our-clients white-bg iq-ptb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"owl-carousel\" data-nav-dots=\"false\" data-nav-arrow=\"true\" data-items=\"5\" data-sm-items=\"3\" data-lg-items=\"5\" data-md-items=\"4\" data-autoplay=\"true\">
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/01.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/02.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/03.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/04.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/05.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/06.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/07.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/08.png\" alt=\"#\"></div>
                        <div class=\"item\"> <img class=\"img-responsive center-block\" src=\"images/clients/gray/09.png\" alt=\"#\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients END -->

</div>

{% endblock %}", "home/index.html.twig", "/home/jimmy/Projects/yap_project/src/Templates/home/index.html.twig");
    }
}
