<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/Framework/Tools.php';

class Layout_View
{
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;
    }
    
    /**
     * function printHTMLPage
     *
     * Prints the content of the whole website
     *
     * @param head 		(string) Is the head of the HTML structure
     * @param header 	(string) Is the menu and logo section
     * @param bodyType	(string) Is for CSS purposes
     * @param body		(string) Content of the website
     *
     */
    
    public function printHTMLPage($section)
    {
        ?>
    <!DOCTYPE html>
    <html class="wide wow-animation" lang="en">

    <head>
        <!-- Site Title-->
        <title>Home</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <?php 
            echo self::getCommonStyle();
            ?>
    </head>

    <body>
        <!-- Page-->
        <div class="text-left page">
            <!-- Page preloader-->
            <div class="page-loader">
                <div>
                    <div class="page-loader-body">
                        <div id="ballsWaveG">
                            <div class="ballsWaveG" id="ballsWaveG_1"> </div>
                            <div class="ballsWaveG" id="ballsWaveG_2"></div>
                            <div class="ballsWaveG" id="ballsWaveG_3"></div>
                            <div class="ballsWaveG" id="ballsWaveG_4"></div>
                            <div class="ballsWaveG" id="ballsWaveG_5"></div>
                            <div class="ballsWaveG" id="ballsWaveG_6"></div>
                            <div class="ballsWaveG" id="ballsWaveG_7"></div>
                            <div class="ballsWaveG" id="ballsWaveG_8"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                echo self::getCommonHeader();
                ?>
            <!--========================================================
                                  CONTENT
                =========================================================-->
            <?php
    			    switch ($section) 
    			    {    
                    case 'index':
    					    echo self :: getSlider();
    					    echo self :: getIndexItems();
    					    echo self :: getProductOne();
    					    echo self :: getIndexProductCategories();
    					    echo self :: getIndexWelcome();
    					    echo self :: getLatestFromBlog();
    					    echo self :: getLatestNews();
    				    break;
        				
    				    default:
    				    break;
    			    }
                ?>
                <?php
                    echo self::getFooter(); 
                ?>
        </div>
        <?php
			echo self::getCommonScripts();
			echo self::getGoogleAnalytics()
			?>
            <!-- <div id="getSize"><p>W: <span></span></p><p>H: <span></span></p></div> -->
    </body>

    </html>
    <?php
    }
    
    public function getCommonStyle()
    {
        ob_start();
        ?>
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,400i,700">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/style.css">
        <?php
        $style = ob_get_contents();
        ob_end_clean();
        return $style;
    }
    
    public function getCommonScripts()
    {
        ob_start();
        ?>
            <!--[if lt IE 9]>
            <html class="lt-ie9">
            <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
                    <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                         alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
                </a>
            </div>
            <script src="js/html5shiv.js"></script>
            <![endif]-->
            <!-- Javascript-->
            <script src="js/core.min.js"></script>
            <script src="js/script.js"></script>

            <?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getGoogleAnalytics()
	{
		ob_start();
		?>
                <?php 
		$google = ob_get_contents();
		ob_end_clean();
		return $google;
	}
    public function getCommonHeader()
    {
        ob_start();
        ?>
        <!-- Page Header-->
        <header class="page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="49px" data-lg-stick-up-offset="46px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
                    <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span>
                    </div>
                    
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand">
                                <a class="brand-name" href="index.html"><img src="images/galorganic.png" alt="" width="182" height="53" /></a>
                            </div>
                            <!-- RD Navbar Brand-->
                            
                        </div>
                        <div class="rd-navbar-aside-right">
                            
                            <div class="rd-navbar-nav-wrap rd-navbar-nav-wrap-default">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html"> Información productos</a></li>
                                    <li><a href="services.html"> Tienda en línea</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="careers.html">Careers </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html"> Acerca de Galorganic</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="single-service.html">Single Service</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.html">Contacto</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="categories.html">Categories</a></li>
                                            <li><a href="products.html">Products</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="shopping-cart.html">Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="news.html">News</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="news-page.html">News Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="index.html#">Pages</a>
                                        <!-- RD Navbar Megamenu-->
                                        <!--<ul class="rd-navbar-megamenu">
                                            <li class="rd-navbar-megamenu-item">
                                                <div class="rd-navbar-megamenu-item-inner">
                                                    <h6 class="rd-navbar-megamenu-title">Pages 1</h6>
                                                    <div class="rd-navbar-megamenu-divider"></div>
                                                    <ul>
                                                        <li><a href="media.html">Media</a></li>
                                                        <li><a href="media-grid.html">Media grid</a></li>
                                                        <li><a href="log-in.html">Log In</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="search-results.html">Search results</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="rd-navbar-megamenu-item">
                                                <div class="rd-navbar-megamenu-item-inner">
                                                    <h6 class="rd-navbar-megamenu-title">Pages 2</h6>
                                                    <div class="rd-navbar-megamenu-divider"></div>
                                                    <ul>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="503-page.html">503</a></li>
                                                        <li><a href="404-page.html">404</a></li>
                                                        <li><a href="site-map.html">Site Map</a></li>
                                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                        <li><a href="maintenance.html">Maintenance</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="rd-navbar-megamenu-item">
                                                <div class="rd-navbar-megamenu-item-inner">
                                                    <h6 class="rd-navbar-megamenu-title">elements</h6>
                                                    <div class="rd-navbar-megamenu-divider"></div>
                                                    <ul>
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="tabs-and-accordions.html">Tabs and accordions</a></li>
                                                        <li><a href="progress-bars.html">Progress Bars</a></li>
                                                        <li><a href="forms.html">Forms</a></li>
                                                        <li><a href="tables.html">Tables</a></li>
                                                        <li><a href="grid.html">Grid</a></li>
                                                        <li><a href="buttons.html">Buttons</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>--->
                                <!--<div class="rd-navbar-call">
                                    <!--<div class="unit-link-with-icon unit unit-spacing-xs unit-horizontal">
                                        <div class="unit-left"><span class="icon icon-md-big icon-secondary mdi-phone"></span></div>
                                        <div class="unit-body"><a href="tel:#">1-800-700-6200</a></div>
                                    </div>
                                </div>-->
                                    
                           
                                </ul>
                                </nav>
                                        
                                </div>
                                </div>
                            </div>
                        </div>
                         
                                
        </header>
        <?php
        $header = ob_get_contents();
        ob_end_clean();
        return $header;
    }
    
    public function getSlider()
    {
        ob_start();
        ?>
        <!-- Swiper-->
        <section class="swiper-main-wrap wow fadeIn">
            <div class="swiper-container swiper-slider" data-index-bullet="true" data-clickable="true" data-custom-pagination="#swiper-pagination-index" data-slide-effect="fade" data-autoplay="4000" data-simulate-touch="false">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/slide-01.jpg">
                        <div class="swiper-slide-caption">
                            <div class="section-lg">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Get Your FLU Shot Today</h1>
                                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                                        <li>
                                            <h3>Free with most insurance</h3>
                                        </li>
                                        <li>
                                            <h3>No appointment necessary</h3>
                                        </li>
                                    </ul><a class="button button-primary" href="contacts.html" data-caption-animate="fadeInUp" data-caption-delay="450">See Flu Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slide-02.jpg">
                        <div class="swiper-slide-caption">
                            <div class="section-lg">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Affordable Lab Tests</h1>
                                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                                        <li>
                                            <h3>Comprehensive information on your health</h3>
                                        </li>
                                        <li>
                                            <h3>Only high-quality equipment</h3>
                                        </li>
                                    </ul><a class="button button-primary" href="contacts.html" data-caption-animate="fadeInUp" data-caption-delay="450">See Flu Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slide-03.jpg">
                        <div class="swiper-slide-caption">
                            <div class="section-lg">
                                <div class="container">
                                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Buy Medicine Online</h1>
                                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                                        <li>
                                            <h3>The easiest way to order what you need</h3>
                                        </li>
                                        <li>
                                            <h3>Free delivery for regular customers</h3>
                                        </li>
                                    </ul><a class="button button-primary" href="contacts.html" data-caption-animate="fadeInUp" data-caption-delay="450">See Flu Map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-index" id="swiper-pagination-index"></div>
        </section>
        <?php
        $slider = ob_get_contents();
        ob_end_clean();
        return $slider;
    }
    
    public function getIndexItems()
    {
        ob_start();
        ?>
        <!-- Opening Hours-->
        <section class="section section-lg bg-white section-after-swiper-modern section-full-width">
            <div class="shell">
                <div class="range range-30 block-classic-wrap">
                    <div class="cell-sm-5 cell-lg-3 reveal-sm-flex">
                        <div class="block-classic block-classic-bg-image">
                            <div class="block-classic-title">
                                <h3>Opening Hours</h3>
                            </div>
                            <ul class="list large">
                                <li>Weekdays <span>8.00 – 20.00</span></li>
                                <li>Saturday <span>9.30 – 17.30</span></li>
                                <li>Sunday <span>9.30 – 15.00</span></li>
                            </ul>
                            <p class="text-gray-darker"><span class="heading-5">John Smith </span> <span class="text-bold">Head pharmacist</span>
                            </p>
                            <div class="block-classic-link"><span class="icon mdi-phone"></span><a class="text-bold" href="tel:#">1-800-700-6200</a></div>
                        </div>
                    </div>
                    <div class="cell-sm-5 cell-lg-3 reveal-sm-flex">
                        <div class="block-classic block-classic-secondaty">
                            <div class="block-classic-title">
                                <h3>Search for Advice </h3>
                            </div>
                            <p>Search our drug information guide for helpful advice on some of the most commonly prescribed medications.</p>
                            <form class="form-search rd-search" action="search-results.html" method="GET">
                                <div class="form-wrap form-wrap-validation">
                                    <label class="form-label" for="forms-search">Search by drug name</label>
                                    <input class="form-input" id="forms-search" type="text" name="s" autocomplete="off">
                                    <button class="button-search icon fl-bigmug-line-search74" type="submit"></button>
                                </div>
                                <div class="button-block">
                                    <button class="heading-5 text-bold" type="submit">Advanced search<span class="icon fa-angle-right"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cell-lg-4 reveal-md-flex">
                        <div class="block-classic">
                            <div class="block-classic-title">
                                <h3 class="text-secondary text-center text-lg-left">Refill Prescriptions</h3>
                            </div>
                            <form class="rd-mailform block-center" data-form-output="form-output-global" data-form-type="contact" method="post" action="http://livedemo00.template-help.com/wt_prod-2273/bat/rd-mailform.php" style="max-width: 584px">
                                <div class="range range-xs-center range-20 range-narrow">
                                    <div class="cell-sm-10">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label" for="text-1">Enter your prescription number</label>
                                            <input class="form-input form-input-gray" id="text-1" type="text" name="text" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="cell-sm-10">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label" for="text-2">Transfer prescriptions</label>
                                            <input class="form-input form-input-gray" id="text-2" type="text" name="text" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="cell-sm-7">
                                        <div class="form-wrap form-wrap-validation">
                                            <label class="form-label" for="text-3">Manage & refill  your prescription</label>
                                            <input class="form-input form-input-gray" id="text-3" type="text" name="text" data-constraints="@Required">
                                        </div>
                                    </div>
                                    <div class="cell-sm-3">
                                        <div class="form-button">
                                            <button class="button button-primary button-block" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getIndexProductCategories()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white section-full-width">
            <div class="shell">
                <div class="range range-30">
                    <div class="cell-lg-8">
                        <div class="box text-center text-sm-left">
                            <div class="box-left">
                                <h3 class="section-title">Product Categories</h3>
                            </div>
                            <div class="box-right">
                                <div class="owl-outer-navigation" id="owl-carousel-nav-1">
                                    <div class="owl-arrow owl-arrow-prev fa-angle-left"></div>
                                    <div class="owl-arrow owl-arrow-next fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel" data-items="1" data-xs-items="2" data-sm-items="3" data-md-items="3" data-lg-items="4" data-stage-padding="0" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav-1">
                            <div class="item wow fadeInUp" data-wow-delay=".4s">
                                <div class="thumb-default">
                                    <a href="products.html"><img src="images/product-1-270x289.jpg" alt="" width="270" height="289" /></a>
                                    <div class="thumb-default-caption">
                                        <h5 class="thumb-default-title"><span>01.</span><a href="products.html"> Bath & Shower Products</a></h5>
                                        <p>Discover our eco-friendly and natural bath and shower products made from organic ingredients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay=".6s">
                                <div class="thumb-default">
                                    <a href="products.html"><img src="images/product-2-270x289.jpg" alt="" width="270" height="289" /></a>
                                    <div class="thumb-default-caption">
                                        <h5 class="thumb-default-title"><span>02.</span><a href="products.html"> Beauty Acessories</a></h5>
                                        <p>It’s time to take care of yourself, in addition to medicines get your beauty and wellness essentials.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay=".8s">
                                <div class="thumb-default">
                                    <a href="products.html"><img src="images/product-3-270x289.jpg" alt="" width="270" height="289" /></a>
                                    <div class="thumb-default-caption">
                                        <h5 class="thumb-default-title"><span>03.</span><a href="products.html">Hands & Nails Care</a></h5>
                                        <p>Shop from a wide range of hand care creams and nail treatments designed with essential ingredients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="1s">
                                <div class="thumb-default">
                                    <a href="products.html"><img src="images/product-4-270x289.jpg" alt="" width="270" height="289" /></a>
                                    <div class="thumb-default-caption">
                                        <h5 class="thumb-default-title"><span>04.</span><a href="products.html"> Hair Care Products</a></h5>
                                        <p>We have a great selection of shampoos, conditioners, deep conditioners and other treatments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb-default">
                                    <a href="products.html"><img src="images/product-5-270x289.jpg" alt="" width="270" height="289" /></a>
                                    <div class="thumb-default-caption">
                                        <h5 class="thumb-default-title"><span>05.</span><a href="products.html"> Foot & Leg Care</a></h5>
                                        <p>Our pharmacy offers a wide range of products for your feet and legs to keep them hydrated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-lg-2 wow fadeIn" data-wow-delay="1.2s">
                        <div class="aside-info aside-info-style-1 aside-info-solo">
                            <div class="aside-info-item">
                                <ul>
                                    <li><a href="index.html#">Medical Supplies </a></li>
                                    <li><a href="index.html#">Health Concerns</a></li>
                                    <li><a href="index.html#">Personal Care </a></li>
                                    <li><a href="index.html#">Diet & Fitness</a></li>
                                    <li><a href="index.html#">Vitamins</a></li>
                                    <li><a href="index.html#">Baby & Child Care </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getProductOne()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white text-left">
            <div class="shell">
                <div class="range range-60">
                    <div class="cell-lg-10">
                        <div class="range range-60">
                            <div class="cell-md-5"><img src="images/single-service-1-541x369.jpg" alt="" width="541" height="369">
                            </div>
                            <div class="cell-md-5">
                                <h3 class="section-title">wellness65+</h3>
                                <p>Wellness65+ offers 20% off the entire store on the first Wednesday of every month. If you are age 65, or know someone who is, enroll for free and plan ahead to purchase your non-prescription items once a month on Wellness65+ Wednesdays. Ready to join for free? Just click on the button at the bottom of the post.</p>
                                <p class="text-bold text-gray-darker">Readers know that you can score great deals and even free items when you follow the sales and use coupons at Pharmacy. In addition to the 20% discount for seniors, Pharmacy also offers more perks for becoming a member of their Wellness65+ program.</p><a class="button button-primary" href="#"> book this service</a>
                            </div>
                        </div>
                    </div>
                    <div class="cell-lg-2">
                        <div class="range range-50">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getIndexWelcome()
    {
        ob_start();
        ?>
        <section class="section section-full-width section-lg bg-gray-lighter">
            <div class="shell">
                <div class="range range-30 range-lg-justify">
                    <div class="cell-lg-4">
                        <div class="range range-30">
                            <div class="cell-sm-5">
                                <div class="block-services-classic">
                                    <div class="block-services-icon"><img src="images/icon-1.png" alt=""></div>
                                    <h4 class="block-services-title"><a href="single-service.html">Online Pharmacy</a></h4>
                                    <p>We offer the best and the safest pharmacy products online.</p>
                                </div>
                            </div>
                            <div class="cell-sm-5">
                                <div class="block-services-classic">
                                    <div class="block-services-icon"><img src="images/icon-2.png" alt=""></div>
                                    <h4 class="block-services-title"><a href="single-service.html">Expert Advice</a></h4>
                                    <p>Our professional team is always available to help.</p>
                                </div>
                            </div>
                            <div class="cell-sm-5">
                                <div class="block-services-classic">
                                    <div class="block-services-icon"><img src="images/icon-3.png" alt=""></div>
                                    <h4 class="block-services-title"><a href="single-service.html">Flu Vaccinations </a></h4>
                                    <p>Please feel free to stop by for a vaccination anytime.</p>
                                </div>
                            </div>
                            <div class="cell-sm-5">
                                <div class="block-services-classic">
                                    <div class="block-services-icon"><img src="images/icon-4.png" alt=""></div>
                                    <h4 class="block-services-title"><a href="single-service.html">Online Doctor</a></h4>
                                    <p>This service is a simple way to get the prescription medicine. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-lg-5">
                        <div class="about-unit">
                            <h3 class="section-title about-unit-title wow fadeInUp" data-wow-delay=".4s">welcome to Pharmacy!</h3>
                            <p class="wow fadeInUp about-unit-text" data-wow-delay=".5s">Our Pharmacy offers the very best prices on medicines and pharmaceutical products, coupled with a fantastic service. We stock a great range of branded and non-branded products, ensuring you great value for money when you buy from our online chemist. We offer quick delivery and a simple payment procedure to take the hassle out of buying.</p>
                            <div class="about-unit-quote">
                                <div class="about-unit-quote-left wow fadeIn" data-wow-delay=".8s"><img src="images/doctor-01-240x298.jpg" alt="" width="240" height="298" />
                                </div>
                                <div class="about-unit-quote-body">
                                    <div class="about-unit-quote-content">
                                        <div class="about-unit-quote-content-left wow fadeIn" data-wow-delay="1.2s"><span>“</span></div>
                                        <div class="about-unit-quote-content-body wow fadeIn" data-wow-delay="1.3s">
                                            <p>We believe in delivering the highest level of customer service and in ensuring the health and safety of each and every patient who visits our site. Our goal is to combine the convenience and discretion of an online pharmacy and doctor service. </p>
                                        </div>
                                    </div>
                                    <h4 class="about-unit-quote-title wow fadeInUp" data-wow-delay=".9s">John Smith</h4>
                                    <p class="about-unit-quote-cite wow fadeInUp" data-wow-delay="1s">Head pharmacist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getFeaturedProducts()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white section-full-width">
            <div class="shell">
                <div class="range range-30">
                    <div class="cell-lg-8">
                        <div class="box text-center text-sm-left">
                            <div class="box-left">
                                <h3 class="section-title">Featured Products</h3>
                            </div>
                            <div class="box-right">
                                <div class="owl-outer-navigation" id="owl-carousel-nav-2">
                                    <div class="owl-arrow owl-arrow-prev fa-angle-left"></div>
                                    <div class="owl-arrow owl-arrow-next fa-angle-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel" data-items="1" data-xs-items="2" data-sm-items="3" data-md-items="3" data-lg-items="4" data-stage-padding="0" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav-2">
                            <div class="item wow fadeInUp" data-wow-delay=".4s">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="images/product-item-1-270x289.jpg" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Alavert Orally Disintegrating Tablets, 60 tab</a></p>
                                        <h5 class="product-price">$24.98</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay=".6s">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="images/product-item-2-270x289.jpg" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Centrum Flavor Burst Chews, Mixed Fruit, 60 ea</a></p>
                                        <h5 class="product-price">$8.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay=".8s">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="images/product-item-3-270x289.jpg" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Depend for Women All in One Kit with Briefs and Underwear</a></p>
                                        <h5 class="product-price">$4.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="1s">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="images/product-item-4-270x289.jpg" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Arm & Hammer Antiperspirant/ Deodorant, Invisible Solid, Fresh</a></p>
                                        <h5 class="product-price">$3.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-lg-2 wow fadeIn" data-wow-delay="1.2s">
                        <div class="demo-image-block">
                            <a class="demo-image-block-link" href="single-service.html"><img src="images/about-02-270x527.jpg" alt="" width="270" height="527" />
                                <div class="demo-image-block-link-text"><span class="heading-3">Automated Courtesy Refills</span><span class="heading-5">Sign up & we`ll refill your prescriptions</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getLatestFromBlog()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white wow fadeIn">
            <div class="shell">
                <div class="range range-40">
                    <div class="cell-xs-10 text-center text-md-left">
                        <h3 class="section-title">Latest From The Blog</h3>
                    </div>
                    <div class="cell-md-5">
                        <div class="post-classic">
                            <figure class="post-classic-image">
                                <a href="news-page.html"><img src="images/post-classic-1-420x238.jpg" alt="" width="420" height="238" /></a>
                            </figure>
                            <div class="post-classic-caption">
                                <p class="date">June 25, 2018</p>
                                <h4 class="post-classic-title"><a href="news-page.html">Get vaccinated when traveling</a></h4>
                                <p>When traveling to different countries, you may be exposed to diseases so it’s important to protect yourself from diseases like hepatitis and typhoid when... </p>
                                <div class="post-classic-author">
                                    <p>by <a href="index.html#">John Smith</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-5">
                        <div class="post-classic">
                            <figure class="post-classic-image">
                                <a href="news-page.html"><img src="images/post-classic-2-420x238.jpg" alt="" width="420" height="238" /></a>
                            </figure>
                            <div class="post-classic-caption">
                                <p class="date">June 25, 2018</p>
                                <h4 class="post-classic-title"><a href="news-page.html">Can diabetics eat sugar?</a></h4>
                                <p>Having diabetes doesn’t mean having to follow a completely sugar-free diet. People with diabetes should eat a healthy, balanced diet. You should still be able to... </p>
                                <div class="post-classic-author">
                                    <p>by <a href="index.html#">John Smith</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getLatestNews()
    {
        ob_start();
        ?>
        <section class="section section-md section-full-width bg-secondary context-dark pre-footer">
            <div class="shell">
                <div class="range range-40">
                    <div class="cell-lg-3 cell-sm-5">
                        <div style="max-width: 294px">
                            <h5 class="section-title">Contact Information</h5>
                            <ul class="list list-lg">
                                <li>
                                    <div class="unit unit-spacing-xs unit-horizontal unit-custom unit-top">
                                        <div class="unit-left">
                                            <p class="large">Phone:</p>
                                        </div>
                                        <div class="unit-body"><a class="link-footer large text-spacing-75 font-sec" href="tel:#"></a>(33) 2308 5711</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs unit-horizontal unit-custom unit-top">
                                        <div class="unit-left">
                                            <p class="large">E-mail:</p>
                                        </div>
                                        <div class="unit-body" style="position: relative; top: -1px"><a class="link-footer large" href="mailto:#">sagalorganic@gmail.com</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs unit-horizontal">
                                        <div class="unit-left">
                                            <p class="large">Address: </p>
                                        </div>
                                        <div class="unit-body"><a class="link-footer" href="index.html#">Allende 95 Local A
                                            Col. Centro
                                            Sahuayo, Mich.
                                            C.P. 59000</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cell-lg-3 cell-sm-5">
                        <div style="max-width: 283px">
                            <h5 class="section-title">CONTACTO</h5>
                            <ul class="list list-lg">
                                <li><article class="news-mini">
                                        <p class="text-bold">Envío a domicilio gratis.</p>
                                        <p class="news-mini-title"><a href="news-page.html">¿Dudas?</a><br>Whatsapp 33 1020 1737</p>
                                    </article>
                                    <article class="news-mini">
                                        <p class="text-bold"></p>
                                        <p class="news-mini-title"><a href="news-page.html"></a><br></p>
                                    </article>
                                </li>
                                <li>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="cell-lg-4">
                        <div>
                            <h5 class="section-title">GALORGANIC</h5>
                            <p class="text-secondary-light">"SA-Galorganic es una empresa 100% mexicana enfocada en la distribución de productos de salud y belleza, comprometidos en brindar alta calidad y siempre cuidando el bienestar de nuestros clientes ofreciendo seguridad y confiabilidad." </p><a class="button button-primary" href="products.html">Visit our store</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getFooter()
    {
        ob_start();
        ?>
        <footer class="page-footer-full section section-full-width">
            <div class="shell">
                <div class="range range-15">
                    <div class="cell-sm-5">
                        <p class="copyright">Galorganic &#169; <span class="copyright-year"></span>. <a href="privacy-policy.html">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="cell-sm-5 text-sm-right">
                        <ul class="list-inline">
                            <li>
                                <a class="icon fa-facebook" href="index.html#"></a>
                            </li>
                            <li>
                                <a class="icon fa-twitter" href="index.html#"></a>
                            </li>
                            <li>
                                <a class="icon fa-google-plus" href="index.html#"></a>
                            </li>
                            <li>
                                <a class="icon fa-pinterest-p" href="index.html#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <?php
        $footer = ob_get_contents();
        ob_end_clean();
        return $footer;
    }
    
    public function myMethod()
    {
        ob_start();
        ?>
		<?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
}
