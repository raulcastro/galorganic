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
        <title>Galorganic</title>
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
    					    //echo self :: getSlider();
    					    //echo self :: getIndexItems();
    					    echo self :: getProductOne();
                            echo self :: getProductTwo();
                            echo self :: getProductThree();
                            
    					    //echo self :: getIndexProductCategories();
    					    //echo self :: getIndexWelcome();
    					    //echo self :: getLatestFromBlog();
    					    echo self :: getLatestNews();
    				    break;
    				    
                    case 'products':
                        echo self::getAllProducts();
                    break;
                    
                    case 'colageno':
                        echo self::getColageno();
                    break;
                    
                    case 'contour':
                        echo self::getContour();
                    break;
                    
                    case 'dabalash':
                        echo self::getDabalash();
                    break;
                    
                    case 'about-us':
                        echo self::getAboutUs();
                    break;
                    
                    case 'contact':
                        echo self::getContact();
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
            <script src="/js/core.min.js"></script>
            <script src="/js/script.js"></script>

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
                                <a class="brand-name" href="/"><img src="/images/galorganic.png" alt="" width="182" height="53" /></a>
                            </div>
                            <!-- RD Navbar Brand-->
                        </div>
                        <div class="rd-navbar-aside-right">
                            <div class="rd-navbar-nav-wrap rd-navbar-nav-wrap-default">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li <?php if ($_GET['section'] == ""){echo ' class="active"';}?>>
                                    		<a href="/"> Información productos</a>
                                    </li>
                                    <li <?php if ($_GET['section'] == "productos"){echo ' class="active"';}?>>
                                    		<a href="/galorganic-tienda-en-linea/"> Tienda en línea</a>
                                    </li>
                                    <li <?php if ($_GET['section'] == "about"){echo ' class="active"';}?>>
                                    		<a href="/galorganic-acerca-de/"> Acerca de Galorganic</a>
                                    </li>
                                    <li <?php if ($_GET['section'] == "contacto"){echo ' class="active"';}?>>
                                    		<a href="/galorganic-contacto/">Contacto</a>
                                    </li>
                                </ul>
                             </div>
						</div>
					</div>
				</nav>
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
                        <h3 class="section-title">COLÁGENO HIDROLIZADO GALORGANIC</h3>
                        <div class="range range-60">
                            <div class="cell-md-5">
                            		<div class="row">
                            			<div class="cell-md-12 m-bottom">
                            				<img src="images/piel-de-naranja-2-2_orig.png" alt="" width="541" height="369">
                            			</div>
									<div class="cell-md-12 m-bottom">
                            				<img src="images/nail-polish-question2_orig.png" alt="" width="541" height="369">
                            			</div>	
                            			<div class="cell-md-12 m-bottom">
                            				<img src="images/consejos-para-mantener-unas-rodillas-sanas-joya-life-3_orig.png" alt="" width="541" height="369">
                            			</div>	
                            		</div>
                            </div>
                            <div class="cell-md-5">
                                <h3 class="section-title">¿Qué es el Colágeno?</h3>
                                <p class="text-bold text-gray-darker">El colágeno es la proteína más abundante de nuestro cuerpo y representa el:<br></p><br>
                                    <ul>
                                        <li>· El 80% el tejido conjuntivo (músculos, tendones, ligamentos)<br></li>
                                        <li>· El 75% de nuestra piel<br></li>
                                        <li>· El 30% de todo nuestro organismo.</li>
                                        <li>· El 80% el tejido conjuntivo (músculos, tendones, ligamentos)<br></li>
                                        <li>· El 75% de nuestra piel<br></li>
                                        <li>· El 30% de todo nuestro organismo.</li>
                                        </ul><br>
                                    
                                    
                                <h3 class="section-title">Beneficios de tomar colágeno hidrolizado</h3>
                                <p class="text-bold text-gray-darker">
                                    El fortalecimiento        arterial.<br>
                                    La reconstrucción de articulaciones.<br>
                                    Engrosamiento del cabello y las uñas.<br>
                                    Aumento de la energía.<br>
                                    Disminución de arrugas.<br>
                                    Cicatrización de Heridas y Fracturas<br>
                                    La reconstrucción de órganos: el corazón, la próstata, los pulmones, el hígado, los riñones, los vasos sanguíneos, etc.<br>
                                    Problemas Crónicos Que Puede Auxiliar Colágeno Hidrolizado
                                    Osteoporosis.<br>
                                    Hipertensión.<br>
                                    Artritis en las articulaciones.<br>
                                    Incontinencia urinaria<br>
                                    Fatiga crónica.<br>
                                    Diabetes.<br>
                                    Respiración superficial.<br>
                                    Problemas de la piel<br>
                                                    
                                    Cuando se toma regularmente, el Colágeno Hidrolizado puede aumentar la masa muscular y provocar una aceleración del metabolismo, lo que trae como consecuencia natural, la pérdida de grasa en el cuerpo. Por su conocido efecto “saciador” y su prácticamente nula composición de grasas y carbohidratos, el Colágeno Hidrolizado se considera un importante auxiliar en el control de peso.
                                    Otros testimonios mencionan una ganancia de energía, un sueño reparador, la desaparición de los problemas de la piel, disminución de la pérdida de los cabellos, mejora de la vista, aumento de la libido, desaparición de los dolores de espalda y reducción de los dolores menstruales.
                                    NO ENGORDA</p>
                                
                                    <h3 class="section-title">¿Qué Diferencia hay entre tomar pastillas de colágeno a tomarlo en polvo para bebida?</h3>
                                <p class="text-bold text-gray-darker">
                                    Es muy sencillo, para que un colágeno te haga efecto es necesario tomar mínimo 10 gramos por día, a cada cápsula le cabe un gramo, es por eso que los tratamientos en cápsula son muy poco efectivos, caros y se ven los resultados muy largo plazo, debido a que tendrías que tomar 10 cápsulas por día como mínimo y máximo 15.</p>

                                
                                
                                
                                <a class="button button-primary" href="/comprar-colageno/"> Comprar ahora</a>
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
    
     public function getProductTwo()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white text-left">
            <div class="shell">
                <div class="range range-60">
                    <div class="cell-lg-10">
                        <h3 class="section-title">CONTOUR TE AYUDA A BAJAR DE PESO</h3>
                        <div class="range range-60">
                            <div class="cell-md-5">
                            		<div class="row">
                            			<div class="cell-md-12 m-bottom">
                            				<img src="images/contour-2_orig.png" alt="" width="541" height="369">
                            			</div>
									<div class="cell-md-12 m-bottom">
                            				<img src="images/contour-baja-de-peso_orig.png" alt="" width="541" height="369">
                            			</div>	
                            			<div class="cell-md-12 m-bottom">
                            				<img src="images/contour-sin-rebote_orig.png" alt="" width="541" height="369">
                            			</div>
                                        <div class="cell-md-12 m-bottom">
                            				<img src="images/contour-1_orig.png" alt="" width="541" height="369">
                            			</div>	
                            		</div>
                            </div>
                            <div class="cell-md-5">
                                <h3 class="section-title">¿Que es Contour ?</h3>
                                <p class="text-bold text-gray-darker">Es un suplemento alimenticio 100% natural su compuesto activo es la semilla de uva y alga parda que te ayuda a bloquear la asimilación de carbohidratos y grasas simples un 50%
                                </p>
                                <h3 class="section-title">Cuantos kilos se bajan</h3>
                                <p class="text-bold text-gray-darker">Depende de cada organismo, el primer mes notas mas talla que peso porque es un mes de desintoxicación  el segundo mes mas peso que talla y los siguientes meses peso.<br>
                                    Estarás bajando al finalizar el bote que te incluye tratamiento para dos meses de 3 a 5kg mínimo
                                    2 tallas aprox.<br>
                                    Entre más tiempo lo tomes el metabolismo se acelera más y bajas más rápido.
                                </p>
                                <h3 class="section-title">¿Es necesario hacer dieta  y ejercicio?</h3>
                                <p class="text-bold text-gray-darker">No  es obligatorio llevar una dieta muy rigurosa, pero debemos estar consientes que si se recomienda bajar un poco el consumo de calorías y grasas para llegar al peso ideal más rápido con la ayuda de las pastillas, si se hace ejercicio es ideal si no de igual manera bajaras de peso pero un poco más lento.</p>
                                <h3 class="section-title">¿Hay rebote?</h3>
                                <p class="text-bold text-gray-darker">No hay rebote ni efectos secundarios ya que es un suplemento alimenticio y no dejarás de comer tus alimentos y tampoco es un medicamento que te hace eliminar la grasa si no que bloquea la asimilación de grasa y carb. Por lo que bajas de peso de manera natural.</p>
                                <h3 class="section-title">Tiempo que se puede tomar</h3>
                                <p class="text-bold text-gray-darker">Se puede tomar hasta llegar al peso ideal deseado.. (mínimo 2 meses, 1 bote para ver cambios )</p>
                                <h3 class="section-title">Personas embarazadas y lactando lo pueden tomar</h3>
                                <p class="text-bold text-gray-darker">No</p>
                                <h3 class="section-title">Otros beneficios</h3>
                                <p class="text-bold text-gray-darker">
                                    Genera saciedad conforme pase el tiempo y lo tomes.<br>
                                    Es un antioxidante<br>
                                    Así mismo, este mismo compuesto tiene la propiedad de brindar saciedad, reduciendo el consumo de alimentos, lo cual verás reflejado en una menor ingesta calórica.<br>
                                    Estimula la glándula tiroidea<br>
                                    Acelera el metabolismo.</p>
                                
                                <h3 class="section-title">Pueden tomarlo los niños</h3>
                                
                                <p class="text-bold text-gray-darker">Si tienen un problema de sobrepeso lo pueden tomar.</p>
                                <a class="button button-primary" href="/comprar-contour/"> Comprar Ahora</a>
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
    
    public function getProductThree()
    {
        ob_start();
        ?>
        <section class="section section-lg bg-white text-left">
            <div class="shell">
                <div class="range range-60">
                    <div class="cell-lg-10">
                        <h3 class="section-title">Dabalash Pestañas Extra Largas</h3>
                        <div class="range range-60">
                            <div class="cell-md-5"><img src="images/dabalash.jpg" alt="" width="541" height="369">
                            </div>
                            <div class="cell-md-5">
                                <h3 class="section-title">Dabalash Pestañas Extra Largas</h3>
                                <p>Dabalash, amplificador del crecimiento de pestañas y cejas es la última innovación en la ciencia cosmética. Su diseño y creación provienen de uno de los mejores laboratorios especializados en productos cosméticos. Esta fórmula transformara tus pestanas al máximo, dejándolas más largas, gruesas y abundantes y rellenara tus cejas.
                                    Nuestra fórmula Dabalash no irrita, ya que no contiene parabenos ni sal, los cuales son dañinos para la piel y el cabello. Contiene queratina, el cual es un ingrediente que nutre y fortalece la pestaña o la ceja. Al combinar esto con nuestro ingrediente activo, hacen que Dabalash sea único y original, marcando así la diferencia con cualquier otro producto.</p>
                                <a class="button button-primary" href="/comprar-dabalash/"> Compra Ahora</a>
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
                                <h3 class="section-title">Tienda en Linea</h3>
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
                                        <a href="single-product.html"><img src="images/s533592859111642943_p1_i4_w900.png" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Alavert Orally Disintegrating Tablets, 60 tab</a></p>
                                        <h5 class="product-price"></h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
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
    
    public function getAllProducts()
    {
        ob_start();
        ?>
        <!-- Departments-->
        <section class="section section-lg bg-white">
            <div class="shell">
                <div class="range range-60">
                    <div class="cell-md-10">
                        <h4 class="text-center text-sm-left">Tienda en Linea</h4>
                        <div class="range range-40 range-lg-60">
                            <div class="cell-xs-5 cell-sm-33 cell-md-33">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="/images/s533592859111642943_p1_i4_w900.png" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Colágeno hidrolizado (100% puro)</a></p>
                                        <h5 class="product-price">$600</h5><a class="button button-primary" href="/comprar-colageno/">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-xs-5 cell-sm-33 cell-md-33">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="/images/s533592859111642943_p2_i4_w900.png" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Contour (Baja de Peso)</a></p>
                                        <h5 class="product-price">$750</h5><a class="button button-primary" href="/comprar-contour/">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-xs-5 cell-sm-33 cell-md-33">
                                <div class="product-item">
                                    <figure>
                                        <a href="single-product.html"><img src="/images/s533592859111642943_p3_i3_w900.png" alt="" width="270" height="289" /></a>
                                    </figure>
                                    <div class="product-item-caption">
                                        <p><a href="single-product.html">Dabalash (Tus Pestañas Crecen)</a></p>
                                        <h5 class="product-price">$1,850.00</h5><a class="button button-primary" href="/comprar-dabalash/">Ver mas</a>
                                    </div>
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
    
    public function getContour()
    {
        ob_start();
        ?>
        <section class="section-lg bg-white section">
            <div class="shell">
                <div class="range range-40">
                    <div class="cell-md-5 cell-lg-3">
                        <div class="product-slider">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                                <div class="item"><img src="/images/long-hair-feature_orig.png" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/s533592859111642943_p1_i4_w900.png" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/arrugas-3_orig.png" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/nail-polish-question2_orig.png" alt="" width="365" height="464" />
                                </div>
                            </div>
                            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-slide-to-scroll="1">
                                <div class="item"><img src="/images/long-hair-feature_orig.png" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/s533592859111642943_p1_i4_w900.png" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/arrugas-3_orig.png" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/nail-polish-question2_orig.png" alt="" width="90" height="106" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-5 cell-lg-5">
                        <h3 class="section-title">Colágeno hidrolizado (100% puro)</h3>
                        <p class="large">Polvo para preparar bebida 500g.

                            Proporciona principalmente:</p>
                        <ul class="list-index">
                            <li><span class="list-index-counter"></span>Crecimiento de cabello y evita caída.</li>
                            <li><span class="list-index-counter"></span>Prevención de las arrugas y la flacidez.</li>
                            <li><span class="list-index-counter"></span>Restauración de dolor en articulaciones y huesos.</li>
                        </ul>
                        
                        <div class="range range-30">
                            <!--<div class="cell-xs-10">
                                <ul class="list-inline list-inline-xs">
                                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                                    <li><span class="icon fa-star icon-xs icon-gray"></span></li>
                                    <li class="text-bold text-gray-darker list-inline-item-offset-sm">2 customer reviews</li>
                                </ul>
                            </div>-->
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li>
                                        <input class="form-input" type="number" data-zeros="true" value="5" min="1" max="20">
                                    </li>
                                    <li class="text-bold text-gray-darker">Cantidad</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline heading-4 text-bold">
                                    
                                    <li>MXN600.00</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li class="text-bold text-gray-darker">Siguenos en</li>
                                    <li>
                                        <a class="icon icon-primary fa-facebook" href="https://www.facebook.com/Galorganic/"></a>
                                    </li>
                            
                                    <li>
                                        <a class="icon icon-primary fa-instagram" href="https://www.instagram.com/galorganic/"></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="cell-xs-10"><a class="button button-primary" href="shopping-cart.html">Comprar ahora</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-white">
            <div class="shell">
                <div class="row">
                    <!-- Isotope Content-->
                    <div class="col-lg-12">
                        <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                            <div class="row row-condensed">
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="*">
                                    <a class="media-item" data-lightgallery="item" href="/images/arrugas-3_orig.png"><img src="/images/arrugas-3_orig.png" alt="" width="368" height="324"/></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/piel-de-naranja-2-2_orig.png"><img src="/images/piel-de-naranja-2-2_orig.png" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 4">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-3-368x324_original.jpg"><img src="/images/media-3-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-4-368x324_original.jpg"><img src="/images/media-4-368x324.jpg" alt="" width="368" height="324" /></a>
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
    
    public function getColageno()
    {
        ob_start();
        ?>
        <section class="section-lg bg-white section">
            <div class="shell">
                <div class="range range-40">
                    <div class="cell-md-5 cell-lg-3">
                        <div class="product-slider">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                                <div class="item"><img src="/images/product-item-1-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-2-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-3-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-1-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                            </div>
                            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-slide-to-scroll="1">
                                <div class="item"><img src="/images/product-item-1-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-2-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-3-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-1-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-5 cell-lg-5">
                        <h3 class="section-title">Contour (Baja de Peso)</h3>
                        <p class="large">Pierde peso sin rebote.
                            Envase con 60 cápsulas, suficiente para 2 meses.<br>

                            Su principal compuesto activo a base de algas pardas y semilla de uva, actúa como bloqueador de un 58% de absorción de los carbohidratos y grasas.</p>
                        <!--<ul class="list-index">
                            <li><span class="list-index-counter"></span>Fast acting</li>
                            <li><span class="list-index-counter"></span>Non sedating</li>
                            <li><span class="list-index-counter"></span>Indoor and outdoor allergy relief</li>
                            <li><span class="list-index-counter"></span>Long lasting</li>
                        </ul>-->
                       
                        <div class="range range-30">
                            
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li>
                                        <input class="form-input" type="number" data-zeros="true" value="5" min="1" max="20">
                                    </li>
                                    <li class="text-bold text-gray-darker">Cantidad</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline heading-4 text-bold">
                                   
                                    <li>MXN750.00</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li class="text-bold text-gray-darker">siguenos en</li>
                                    <li>
                                        <a class="icon icon-primary fa-facebook" href="https://www.facebook.com/Galorganic/"></a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a class="icon icon-primary fa-instagram" href="https://www.instagram.com/galorganic/"></a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </div>
                            <div class="cell-xs-10"><a class="button button-primary" href="shopping-cart.html">Comprar ahora</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-white">
            <div class="shell">
                <div class="row">
                    <!-- Isotope Content-->
                    <div class="col-lg-12">
                        <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                            <div class="row row-condensed">
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="*">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-1-368x324_original.jpg"><img src="/images/media-1-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-2-368x324_original.jpg"><img src="/images/media-2-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 4">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-3-368x324_original.jpg"><img src="/images/media-3-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-4-368x324_original.jpg"><img src="/images/media-4-368x324.jpg" alt="" width="368" height="324" /></a>
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
    
    public function getDabalash()
    {
        ob_start();
        ?>
        <section class="section-lg bg-white section">
            <div class="shell">
                <div class="range range-40">
                    <div class="cell-md-5 cell-lg-3">
                        <div class="product-slider">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                                <div class="item"><img src="/images/product-item-1-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-2-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-3-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                                <div class="item"><img src="/images/product-item-1-365x464.jpg" alt="" width="365" height="464" />
                                </div>
                            </div>
                            <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-slide-to-scroll="1">
                                <div class="item"><img src="/images/product-item-1-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-2-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-3-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                                <div class="item"><img src="/images/product-item-1-90x106.jpg" alt="" width="90" height="106" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-5 cell-lg-5">
                        <h3 class="section-title">Dabalash (Tus Pestañas Crecen)</h3>
                        <p class="large">Tus propias pestañas y cejas crecen.<br>
                            Resultados en 4 a 6 semanas.<br>
                            Garantía de 90 días.</p>
                    
                        <div class="range range-30">
                            <div class="cell-xs-10">
                                
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li>
                                        <input class="form-input" type="number" data-zeros="true" value="5" min="1" max="20">
                                    </li>
                                    <li class="text-bold text-gray-darker">cantidad</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline heading-4 text-bold">
                                    
                                    <li>MXN1,850.00</li>
                                </ul>
                            </div>
                            <div class="cell-xs-10">
                                <ul class="list-inline">
                                    <li class="text-bold text-gray-darker">Siguenos en</li>
                                    <li>
                                        <a class="icon icon-primary fa-facebook" href="https://www.facebook.com/Galorganic/"></a>
                                    </li>
                                    
                                    <li>
                                        <a class="icon icon-primary fa-instagram" href="https://www.instagram.com/galorganic/"></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="cell-xs-10"><a class="button button-primary" href="shopping-cart.html">Comprar ahora</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-white">
            <div class="shell">
                <div class="row">
                    <!-- Isotope Content-->
                    <div class="col-lg-12">
                        <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                            <div class="row row-condensed">
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="*">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-1-368x324_original.jpg"><img src="/images/media-1-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-2-368x324_original.jpg"><img src="/images/media-2-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 4">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-3-368x324_original.jpg"><img src="/images/media-3-368x324.jpg" alt="" width="368" height="324" /></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 isotope-item" data-filter="Category 3">
                                    <a class="media-item" data-lightgallery="item" href="/images/media-4-368x324_original.jpg"><img src="/images/media-4-368x324.jpg" alt="" width="368" height="324" /></a>
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
    
    public function getAboutUs()
    {
        ob_start();
        ?>
        <!-- Why choose us-->
        <section class="section section-lg bg-white">
            <div class="shell">
                <div class="range range-30">
                    <div class="cell-md-6"><img src="/images/oficna_orig.png" alt="" width="803" height="458" />
                    </div>
                    <div class="cell-md-4">
                        <h3 class="section-title">Acerca de Sa-Galorganic</h3>
                        <p>SA-Galorganic es una empresa 100% mexicana enfocada en la distribución de productos de salud y belleza, comprometidos en brindar alta calidad y siempre cuidando el bienestar de nuestros clientes ofreciendo seguridad y confiabilidad.</p>
                        <!---<div class="range range-40">
                            <div class="cell-xs-5">
                                <div class="icon-unit">
                                    <div class="icon-unit-left"><img src="images/icon-1-47x40.png" alt="" width="47" height="40" />
                                    </div>
                                    <div class="icon-unit-body">
                                        <h5 class="text-bold">Private Prescriptions</h5>
                                        <p>Get your private prescriptions fulfilled and delivered to your door.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-xs-5">
                                <div class="icon-unit">
                                    <div class="icon-unit-left"><img src="images/icon-2-24x48.png" alt="" width="24" height="48" />
                                    </div>
                                    <div class="icon-unit-body">
                                        <h5 class="text-bold">Safe & Secure</h5>
                                        <p>Secure Order Processing Service is guaranteed!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-xs-5">
                                <div class="icon-unit">
                                    <div class="icon-unit-left"><img src="images/icon-3-41x37.png" alt="" width="41" height="37" />
                                    </div>
                                    <div class="icon-unit-body">
                                        <h5 class="text-bold">Online Doctor</h5>
                                        <p>This service is a simple way to get the prescription medicine.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-xs-5">
                                <div class="icon-unit">
                                    <div class="icon-unit-left"><img src="images/icon-4-41x36.png" alt="" width="41" height="36" />
                                    </div>
                                    <div class="icon-unit-body">
                                        <h5 class="text-bold">24 Hour BP Monitoring</h5>
                                        <p>Our members have access to 24 hour blood pressure monitoring.</p>
                                    </div>
                                </div>
                            </div>
                        </div>--->
                    </div>
                </div>
            </div>
        </section>
		<?php
        $method = ob_get_contents();
        ob_end_clean();
        return $method;
    }
    
    public function getContact()
    {
        ob_start();
        ?>
        <!-- Get in Touch-->
        <section class="section section-lg bg-white">
            <div class="shell">
               
                <div class="range range-30">
                		<div class="cell-md-5">
                        <h3 class="section-title">Contacto</h3>
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="http://livedemo00.template-help.com/wt_prod-2273/bat/rd-mailform.php" style="max-width: 584px">
                            <div class="range range-xs-right range-20 range-narrow">
                                <div class="cell-sm-5">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label" for="forms-name">Nombre</label>
                                        <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="cell-sm-5">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label" for="forms-name-2">Enter Apellid</label>
                                        <input class="form-input" id="forms-name-2" type="text" name="name" data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="cell-sm-5">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label" for="forms-phone">Telefono</label>
                                        <input class="form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                    </div>
                                </div>
                                <div class="cell-sm-5">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label" for="forms-email">Email</label>
                                        <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="cell-sm-10">
                                    <div class="form-wrap form-wrap-validation">
                                        <label class="form-label" for="forms-message">Comentario</label>
                                        <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="cell-sm-5 cell-md-3">
                                    <div class="form-button">
                                        <button class="button button-primary button-block button-square" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="cell-md-5">
                        <h4>Contactanos</h4>
                        <div class="contact-info-block">
                            <div class="range range-30 range-xs-justify">
                                <div class="cell-sm-4">
                                    <ul class="list list-contact">
                                        <li>Tel: <a class="text-bold" href="tel:#">(33) 2308 5711 </a></li>
                                        <li>Whatsapp: <a class="text-bold" href="tel:#">33 1020 1737</a></li>
                                    </ul>
                                    <p><a href="mailto:#">sagalorganic@gmail.com</a></p>
                                </div>
                                <div class="cell-sm-4">
                                    <p>Allende 95 Local A <br>Col. Centro <br>Sahuayo, Mich.<br>C.P. 59000 </p>
                                </div>
                                <!--<div class="cell-xs-10">
                                    <h5 class="text-bold">From Houston (Toolway)</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>-->
                            </div>
                        </div>
                        <div class="rd-google-map rd-google-map__model" data-zoom="12" data-y="40.643180" data-x="-73.9874068" data-styles="">
                            <ul class="map_locations">
                                <li data-y="40.643180" data-x="-73.9874068">
                                    <p></p>
                                </li>
                            </ul>
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
                        <p class="copyright">Galorganic &#169; <span class="copyright-year"></span>. <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="cell-sm-5 text-sm-right">
                        <ul class="list-inline">
                            <li>
                                <a class="icon fa-facebook" href="https://www.facebook.com/Galorganic/"></a>
                            </li>
                            <li>
                                <a class="icon fa-instagram" href="https://www.instagram.com/galorganic/"></a>
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
