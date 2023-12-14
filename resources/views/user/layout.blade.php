<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js has-loader">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home | Multi-Host</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/ico">

    <!-- CSS Stylesheets -->
    <link id="default-css" rel="stylesheet" href="{{ asset('assets1/style.css') }}" type="text/css">

    <link id="shortcodes-css" rel="stylesheet" href="{{ asset('assets1/css/shortcodes.css') }}" type="text/css">
    <link id="responsive-css" rel="stylesheet" href="{{ asset('assets1/css/responsive.css') }}" type="text/css">
    <link id="skin-css" rel="stylesheet" href="{{ asset('assets1/skins/electricblue/style.css') }}" type="text/css">

    <!-- Additional Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets1/css/component.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets1/css/prettyPhoto.css') }}" type="text/css">
    <link href="{{ asset('assets1/css/pace-theme-loading-bar.css') }}" rel="stylesheet" media="all" />

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets1/css/font-awesome.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('assets1/js/layerslider/css/layerslider.css') }}" type="text/css">

    <script type="text/javascript" src="{{ asset('assets1/js/modernizr-2.6.2.min.js') }}"></script>


    <!-- Core CSS -->


</head>

<body class="page-template-tpl-fullwidth-php">
    <!-- **Wrapper** -->
    <div class="wrapper">

        <div id="loader-wrapper">
            <div class="loader">
                <!-- the component -->
                <div class="pre-loader"></div>
            </div>
        </div>

        <!-- **Header Top Bar** -->
        <div id="bbar-wrapper">
            <div class="container">
                <div class="column dt-sc-one-half first">
                    <p class="contact"> Call-us on : <span>845.180.1530</span> </p>
                </div>

                <div class="column dt-sc-one-half alignright">
                    <div class="buttons">
                        <a href="login-page.html" title="">Login <i class="fa fa-caret-right"></i></a>
                        <a href="register.html" title="">Register <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div> <!-- **Header Top Bar Ends** -->

        <!-- **Header Wrapper** -->
        <div id="header-wrapper">
            <!-- **Header** -->
            <header id="header" class="header5">
                <div class="container">
                    <!-- **Logo** -->
                    <div id="logo">
                        <a href="index.html"> <img src="{{asset ('assets1/images/logo.png')}}" alt="logo"> </a>
                    </div><!-- **Logo Ends** -->

                    <!-- **Main-Menu Navigation** -->
                    <div id="primary-menu">
                        <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span>
                        </div>
                        <nav id="main-menu">
                            <ul id="menu-main-menu" class="menu">
                                <li class="menu-item-simple-parent menu-item-depth-0"> <a
                                        href="/user" title=""> <span class="menu-icon fa fa-home"> </span> Beranda
                                    </a>
                                </li>

                                <li class="menu-item-simple-parent menu-item-depth-0"> <a href="/tentang-kami" title="">
                                        <span class="menu-icon fa fa-book"> </span> Tentang Kami </a>
                                </li>
                                <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title="">
                                        <span class="menu-icon fa fa-book"> </span> Berita </a>
                                </li>

                                <li class="menu-item-simple-parent menu-item-depth-0"> <a href="contact.html" title="">
                                        <span class="menu-icon fa fa-envelope"> </span> Informasi </a>
                                    <ul class="sub-menu">
                                        <li> <a href="contact.html" title=""> FAQ</a> </li>
                                        <li> <a href="contact2.html" title=""> Informasi Packing </a> </li>
                                    </ul>
                                </li>
                                <li class="menu-item-simple-parent menu-item-depth-0"> <a href="about.html" title="">
                                        <span class="menu-icon fa fa-book"> </span> Kontak </a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!-- **Main-Menu Navigation Ends** -->
                </div>
            </header> <!-- **Header Ends** -->
        </div> <!-- **Header Wrapper Ends** -->

 <!-- **Main** -->

            {{-- slider --}}





<div id="main">

    <!-- **Slider Section** -->
    <div id="slider">

        <div id="layerslider_6" class="ls-wp-container"
            style=" width:100%; height:600px; max-width:1920px; margin:0 auto; margin-bottom: 0;">

            <div class="ls-slide slide1" data-ls="slidedelay:10000;transition2d:4;">
                <img src="{{ asset('assets1/images/slider/layerslider/blank.gif')}}"
                    data-src="http://via.placeholder.com/1920x600" class="ls-bg" alt="Slide background" />

            </div>

            <div class="ls-slide slide2" data-ls="slidedelay:10000;transition2d:4;">
                <img src="{{ asset('assets1/images/slider/layerslider/blank.gif')}}"
                    data-src="http://via.placeholder.com/1920x600" class="ls-bg" alt="Slide background" />

                <img class="ls-l" style="top:0px;left:610px;z-index:0;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:1000;" src="images/slider/layerslider/blank.gif"
                    data-src="http://via.placeholder.com/939x600/000" alt="">
                <p class="ls-l"
                    style="top:290px;left:640px;z-index:3 display:block;width:520px;height:5px;border-bottom:1px solid #fff;background:#ffffff;white-space: nowrap;"
                    data-ls="delayin:2500;"> <br></p>
                <img class="ls-l" style="top:330px;left:645px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:4000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon11.png" alt="">
                <img class="ls-l" style="top:330px;left:840px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:5000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon2.png" alt="">

                <div class="ls-l"
                    style="top:465px;left:1035px;z-index:3;font-family:'Ubuntu';font-size:20px;color:#ffffff;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-50;durationin:2000;delayin:6500;">
                    <div class="round-list"> <i class="fa fa-circle-o" style="color:#da4b27"> </i> VPS Hosting
                    </div>
                </div>

                <img class="ls-l" style="top:330px;left:1030px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:50;delayin:6000;" src="images/slider/layerslider/blank.gif"
                    data-src="images/slider/layerslider/icon3.png" alt="">
                <div class="ls-l"
                    style="top:465px;left:825px;z-index:3;font-family:'Ubuntu';font-size:20px;color:#ffffff;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-50;durationin:2000;delayin:5500;">
                    <div class="round-list"> <i class="fa fa-circle-o" style="color:#da4b27"> </i> Dedicated
                        Hosting </div>
                </div>
            </div>

            <div class="ls-slide slide3" data-ls="slidedelay:10000;transition2d:4;">
                <img src="images/slider/layerslider/blank.gif" data-src="http://via.placeholder.com/1920x600"
                    class="ls-bg" alt="Slide background" />
                <div class="ls-l"
                    style="top:100px;left:30px;font-weight:700; z-index:5;padding-left:640px;font-family:'Ubuntu', 'Open Sans', sans-serif;font-size:40px;line-height:46px;color:#101017;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-100;durationin:2500;delayin:1000;transformoriginin:left 50% 0;offsetxout:0;rotateyout:-90;transformoriginout:left 50% 0;">
                    High <span style="color:#3575b9;">Performance</span> Servers</div>
                <div class="ls-l"
                    style="top:165px;left:920px;font-weight:100; z-index:3;font-family:'Ubuntu', sans-serif;font-size:30px;line-height:26px;color:#101017;white-space: nowrap;"
                    data-ls="offsetxin:-100;durationin:2000;delayin:1500;">@</div>
                <div class="ls-l"
                    style="top:210px;left:820px;font-weight:100; z-index:3;font-family:'Ubuntu', sans-serif;font-size:30px;line-height:26px;color:#3575b9;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:100;durationin:2000;delayin:2000;">Unbeatable Price</div>
                <div class="ls-l"
                    style="top:265px;left:715px; border: 1px solid; font-family: 'Ubuntu', sans-serif; float: left; position: relative; width: 100%; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; -ms-border-radius: 5px; -o-border-radius: 5px; border-color: #3575b9; width:440px;height:155px;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:3000;">
                    <div class="dt-sc-promo-box"></div>
                </div>

                <div class="ls-l"
                    style="top:285px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;width:520px;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:3500;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9">Domain Hosting</span> </div>

                <div class="ls-l"
                    style="top:315px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:4000;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> Hosting Space</span> </div>

                <div class="ls-l"
                    style="top:345px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:4500;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> File Transfer</span> </div>

                <div class="ls-l"
                    style="top:375px;left:741px;color: #020203; float: left; line-height: 28px; text-transform: capitalize; ;font-family:'Ubuntu';font-size:16px;white-space: nowrap;"
                    data-ls="delayin:5000;"><i style="color:#3575b9" class="fa fa-arrow-circle-o-right"> </i>
                    Unlimited <span style="color:#3575b9"> Email Accounts</span> </div>

                <p class="ls-l"
                    style="top:300px;left:352px;font-weight:400; z-index:5;padding-left:640px;font-family:'Ubuntu', 'Open Sans', sans-serif;font-size:50px;line-height:46px;color:#3575b9;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:-100;durationin:1500;delayin:5000;transformoriginin:left 50% 0;offsetxout:0;rotateyout:-90;transformoriginout:left 50% 0;">
                    $2.50*</p>
                <div class="ls-l"
                    style="top:360px;left:1000px;font-weight:100; z-index:3;font-family:'Ubuntu';font-size:24px;line-height:26px;color:#020203;white-space: nowrap;"
                    data-ls="offsetxin:700;durationin:1500;delayin:5500;">Per Month</div>
                <div class="ls-l"
                    style="top:435px;left:850px;font-weight:100; z-index:3;font-family:'Ubuntu';font-size:14px;line-height:26px;color:#020203;white-space: nowrap;"
                    data-ls="offsetxin:100;delayin:6500;">*Offer for a limited period</div>
                <div class="ls-l" style="top:0px;left:0px;white-space: nowrap;"></div>

                <div class="ls-l ls-button" style="top:470px;left:807px;white-space: nowrap;"
                    data-ls="offsetxin:0;offsetyin:100;delayin:7000;">
                    <a href="#" class="dt-sc-button ico-button"> <span> View Plans </span> <i
                            class="ico-btn-image icon-eye"></i></a>

                </div>

                <p class="ls-l"
                    style="top:266px;left:970px;width:1px;height:155px;background:#3575b9;white-space: nowrap;"
                    data-ls="delayin:5000;"> </p>

            </div>
        </div>
    </div>
</div>





            <!-- **Slider Section - End** -->
            <!-- **Content Main** -->


            <section class="content-main">
                <div class="dt-sc-hr-invisible"></div>
                <div class="dt-sc-hr-invisible-small"></div>
                <div class="dt-sc-clear"></div>

                <div class="fullwidth-section">
                    <div class="fullwidth-bg">
                        <div class="container">

                            <div class="dt-sc-tabs-container type2">
                                <ul class="dt-sc-tabs">
                                    <li class="current"><a href="#">Cek Resi</a></li>
                                    <li><a href="#">Cek Tarif</a></li>
                                </ul>

                                <div class="dt-sc-tabs-content">
                                    <div class="dt-sc-hr-invisible"></div>
                                    <div class="dt-sc-clear"></div>

                                    <form class="search-form domain-search" name="frmDomainSearch1">
                                        <div class="dt-sc-fullwidth">
                                            <div class="dt-sc-four-fifth column first">
                                                <input type="text" placeholder="Looking for Domains?" value=""
                                                    name="domainsearch1">
                                            </div>

                                            <div class="dt-sc-one-fifth column">
                                                <input type="submit" class="dt-sc-button medium" name="button1"
                                                    value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="dt-sc-tabs-content">
                                    <div class="dt-sc-hr-invisible"></div>
                                    <div class="dt-sc-clear"></div>

                                    <form class="search-form domain-search" name="frmDomainSearch2">
                                        <div class="dt-sc-fullwidth">
                                            <div class="dt-sc-fullwidth column">
                                                <input type="text" placeholder="Looking for Domains?" value=""
                                                    name="domainsearch2">
                                            </div>
                                            <div class="dt-sc-one-fourth column">
                                                <select class="domains" name="domains1">
                                                    <option>.com (From $3 / Year)</option>
                                                    <option>.info (From $3 / Year)</option>
                                                    <option>.net (From $3 / Year)</option>
                                                    <option>.org (From $3 / Year)</option>
                                                </select>
                                            </div>
                                            <div class="dt-sc-one-fourth column">
                                                <select class="domains" name="domains2">
                                                    <option>.com (From $3 / Year)</option>
                                                    <option>.info (From $3 / Year)</option>
                                                    <option>.net (From $3 / Year)</option>
                                                    <option>.org (From $3 / Year)</option>
                                                </select>
                                            </div>
                                            <div class="dt-sc-one-fifth column">
                                                <input type="submit" class="dt-sc-button medium" name="button2"
                                                    value="Search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fitur cek resi --}}
            </section>



            <!-- **Content Main Ends** -->

            {{-- Button Navigasi Lebih Bagus --}}


            {{-- <div class="fullwidth-section">
            <div class="fullwidth-bg">
                <div class="container">
                    <div class="column dt-sc-one-half first">
                        <h2 class="hr-border-title"><span>Horizontal Tabs</span></h2>
                        <div class="dt-sc-tabs-container">
                            <ul class="dt-sc-tabs-frame">
                                <li><a href="#" class="current">What is Lorem Ipsum?</a></li>
                                <li><a href="#" title="">Why do we use it?</a></li>
                            </ul>

                            <div class="dt-sc-tabs-frame-content" style="display: block;">
                                <p>Lorem ipsum&nbsp;Morbi euismod diam eu arcu volutpat ut adipiscing sem auctor.
                                    Vivamus adipiscing lobortis sagittis. Nullam tempus mauris dolor, ac malesuada arcu.
                                </p>
                            </div>

                            <div class="dt-sc-tabs-frame-content" style="display: none;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dolor quam,
                                    tincidunt in sollicitudin sit amet, volutpat sed velit. Nullam non neque ipsum..</p>
                            </div>

                        </div>
                    </div>
                </div> --}}


            {{-- Horizontal taba End --}}





            {{-- content penghargaan --}}

            <div class="fullwidth-section">
                <div class="fullwidth-bg">
                    <div class="container">
                        <div class="dt-sc-hr-invisible-medium"></div>
                        <div class="dt-sc-clear"></div>
                        <h2 class="hr-border-title"><span>Penghargaan</span></h2>

                        <div class="carousel-wrapper">
                            <div class="carousel-arrows">
                                <a href="#" title class="prev-arrow"> <span class="fa fa-chevron-left"> </span> </a>
                                <a href="#" title class="next-arrow"> <span class="fa fa-chevron-right"> </span> </a>
                            </div>

                            <ul class="portfolio-carousel carousel_items">
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                                <li class="portfolio dt-sc-one-third column">
                                    <div class="portfolio-thumb">
                                        <img src="http://placehold.it/1170x780" alt="gallery-thumb1">
                                        <div class="image-overlay">
                                            <a href="http://placehold.it/1170x780" data-gal="prettyPhoto[gallery]" title
                                                class="link"> <span class="fa fa-plus"> </span> </a>
                                            <a href="https://wedesignthemes.com" target="_blank" title class="zoom">
                                                <span class="fa fa-link"> </span> </a>
                                        </div>
                                    </div>
                                    <div class="portfolio-detail">
                                        <h3> <a href="portfolio-single.html" title> Red Wings </a> </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- end content penghargaan --}}




            <div class="content-main">
                <div class="fullwidth-section">
                    <div class="fullwidth-bg">
                        <div class="dt-sc-hr-invisible-medium"></div>
                        <div class="dt-sc-clear"></div>

                        <h2 class="hr-border-title center"><span>Produk Yang kami Tawarkan</span>
                        </h2>

                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="dt-sc-clear"></div>
                        <div class="container">


                            <div class="column dt-sc-one-third no-space box-item">
                                <div class="dt-sc-box-content first">
                                    <div class="dt-sc-box-overlay1">
                                        <h2><span class="fa fa-globe"></span>Website Hosting</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec
                                            sagittis sem nibh id elit.</p>
                                        <ul class="dt-sc-fancy-list arrow">
                                            <li>Advanced SAN based storage</li>
                                            <li>Fully Managed Support</li>
                                            <li>Powered by NetApp, Virtuozzo & CentOS</li>
                                        </ul>
                                        <div class="aligncenter">
                                            <a href="#" title class="dt-sc-button small">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column dt-sc-one-third no-space box-item">
                                <div class="dt-sc-box-content">
                                    <div class="dt-sc-box-overlay2">
                                        <h2><span class="fa fa-tachometer"></span>VPS Hosting</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec
                                            sagittis sem nibh id elit.</p>
                                        <ul class="dt-sc-fancy-list arrow">
                                            <li>Advanced SAN based storage</li>
                                            <li>Fully Managed Support</li>
                                            <li>Powered by NetApp, Virtuozzo & CentOS</li>
                                        </ul>
                                        <div class="aligncenter">
                                            <a href="#" title class="dt-sc-button small">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column dt-sc-one-third no-space box-item">
                                <div class="dt-sc-box-content">
                                    <div class="dt-sc-box-overlay3">
                                        <h2><span class="fa fa-th"></span>Grid Web Hosting</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec
                                            sagittis sem nibh id elit.</p>
                                        <ul class="dt-sc-fancy-list arrow">
                                            <li>Advanced SAN based storage</li>
                                            <li>Fully Managed Support</li>
                                            <li>Powered by NetApp, Virtuozzo & CentOS</li>
                                        </ul>
                                        <div class="aligncenter">
                                            <a href="#" title class="dt-sc-button small">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Opsi 2  Produk Layanan--}}

            {{-- <div class="content-full-width" id="primary">
                <div class="fullwidth-section">
                    <div class="fullwidth-bg">
                        <div class="container">
                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="dt-sc-hr-invisible-medium"></div>
                            <div class="dt-sc-clear"></div>

                            <h2 class="hr-border-title center"><span>Produk Yang kami Tawarkan</span>
                            </h2>

                            <div class="dt-sc-hr-invisible-small"></div>
                            <div class="dt-sc-clear"></div>

                            <div class="column dt-sc-one-third  first">
                                <div class="ico-content-wrapper type2">
                                    <div class="ico-content">
                                        <span class="fa fa-truck"></span>
                                        <h3>Instant Setup</h3>
                                        <p>APM Logistics, jasa pengiriman darat terlengkap di Indonesia
                                            dengan
                                            armada dan tim profesional. Lebih dari 20 cabang dan 200
                                            agen
                                            tersebar
                                            di seluruh Indonesia. Cocok untuk pengiriman barang dalam
                                            jumlah
                                            besar
                                            antar kota atau provinsi, baik dalam satu pulau maupun antar
                                            pulau,
                                            dengan harga yang terjangkau. Estimasi pengiriman cepat
                                            tergantung
                                            kapasitas perusahaan. APM Logistics menjamin pengiriman
                                            darat
                                            tepat
                                            waktu dan terjangkau. Ekspedisi dan pengiriman cargo via
                                            darat?
                                            Pilih
                                            APM Logistics.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="column dt-sc-one-third">
                                <div class="ico-content-wrapper type2">
                                    <div class="ico-content">
                                        <span class="fa fa-hdd-o"></span>
                                        <h3>Better Backup</h3>
                                        <p>We denounce with righteous indignation and dislike men who
                                            are so
                                            beguiled and
                                            demoralized by the charms of pleasure of the moment, so
                                            blinded
                                            by desire.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="column dt-sc-one-third">
                                <div class="ico-content-wrapper type2">
                                    <div class="ico-content">
                                        <span class="fa fa-bolt"></span>
                                        <h3>Reliable Speed</h3>
                                        <p>We denounce with righteous indignation and dislike men who
                                            are so
                                            beguiled and
                                            demoralized by the charms of pleasure of the moment, so
                                            blinded
                                            by desire.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="dt-sc-hr-invisible-large"></div>
                            <div class="dt-sc-clear"></div>

                        </div>
                    </div>
                </div> --}}

            <!-- **WHY APM** -->

            <div class="fullwidth-bg">
                <div class="container">

                    <div class="dt-sc-hr-invisible"></div>
                    <h2 class="hr-border-title center"><span>Kenapa Harus APM?<span></h2>
                    <div class="dt-sc-clear"></div>



                    <div class="dt-sc-hr-invisible-small"></div>
                    <div class="dt-sc-clear"></div>

                    <div class="column dt-sc-one-half first">
                        <div class="ico-content  type4">
                            <div class="icon"> <span class="fa fa-line-chart"> </span> </div>
                            <h3><a target="_blank" href="#"> Make more traffic to your site with SEO
                                </a></h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>

                        <div class="ico-content  type4">
                            <div class="icon"> <span class="fa fa-hand-o-up"> </span> </div>
                            <h3><a target="_blank" href="#"> Easy One click submission to the Search
                                    Engines </a></h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>

                        <div class="ico-content  type4">
                            <div class="icon"> <span class="fa fa-trophy"> </span> </div>
                            <h3><a target="_blank" href="#"> Boost your page and search rankings
                                </a>
                            </h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>
                    </div>

                    <div class="column dt-sc-one-half">
                        <div class="ico-content  type4">
                            <div class="icon"> <span> <img alt="small-ico-pic1"
                                        src="{{ asset('assets1/images/small-ico-pic1.png')}}">
                                </span>
                            </div>
                            <h3><a target="_blank" href="#"> Make more traffic to your site with SEO
                                </a></h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>

                        <div class="ico-content  type4">
                            <div class="icon"> <span> <img alt="small-ico-pic2"
                                        src="{{ asset('assets1/images/small-ico-pic2.png')}}">
                                </span>
                            </div>
                            <h3><a target="_blank" href="#"> Easy One click submission to the Search
                                    Engines </a></h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>

                        <div class="ico-content  type4">
                            <div class="icon"> <span> <img alt="small-ico-pic3"
                                        src="{{ asset('assets1/images/small-ico-pic3.png')}}">
                                </span>
                            </div>
                            <h3><a target="_blank" href="#"> Boost your page and search rankings
                                </a>
                            </h3>
                            <p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed
                                aliquet auguevelit.</p>
                        </div>
                    </div>
                </div>

                <div class="partner-carousel-wrapper">
                    <div class="container">
                        <div class="dt-sc-hr-invisible"></div>
                        <h2 class="hr-border-title center"><span>Media Partner<span></h2>
                        <div class="dt-sc-clear"></div>
                        <ul class="partner-carousel">
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" style="height: 80px;"
                                        alt="client1">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" style="height: 80px;"
                                        alt="client1">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" alt="client3"
                                        style="height: 80px;">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" alt="client4"
                                        style="height: 80px;">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" alt="client5"
                                        style="height: 80px;">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" alt="client6"
                                        style="height: 80px;">
                                </a> </li>
                            <li> <a href="#" title=""> <img src="http://placehold.it/150x50" alt="client7"
                                        style="height: 80px;">
                                </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="dt-sc-hr-invisible-small"></div>
                <div class="dt-sc-clear"></div>
                <div class="dt-sc-hr-invisible-small"></div>
                <div class="dt-sc-clear"></div>

                <!-- **Partner Carousel Wrapper Ends** -->

            </div> <!-- **Main Ends** -->








            <!-- **Footer** -->
            <footer id="footer">
                <div class="container">
                    <div class="column dt-sc-one-fourth first">
                        <aside class="widget textwidget">
                            <h3 class="widgettitle">Text Widget<span></span></h3>
                            <p><strong>MultiHost</strong> helps you to quickly and easily build
                                incredible websites with
                                WordPress. <br> <br> Proin gravida nibh vel velit auctor aliquet.
                                Aenean
                                sollicitudin, lorem
                                quis bibendum auctor, nisi elit consequat ipsum, nec sagittis. </p>
                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_links">
                            <h3 class="widgettitle">Links<span></span></h3>
                            <ul>
                                <li><a href="#" title="">Customer Support</a></li>
                                <li><a href="#" title="">Documentation</a></li>
                                <li><a href="#" title="">Resources</a></li>
                                <li><a href="#" title="">General FAQs</a></li>
                                <li><a href="#" title="">Shortcodes</a></li>
                                <li><a href="#" title="">Theme Help Videos</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_recent_entries">
                            <h3 class="widgettitle">Latest Posts<span></span></h3>
                            <ul>
                                <li>
                                    <h4 class="entry-title"><a href="">Raven's Hello World !</a>
                                    </h4>
                                    <p class="show-meta">
                                        <span class="date-info"><i class="fa fa-clock-o"></i>29 Apr
                                            2013</span>
                                        <a class="comments" href="#"><i class="fa fa-comment"></i>14
                                            Comments</a>
                                    </p>
                                </li>

                                <li>
                                    <h4 class="entry-title"><a href="">Our Celebration</a></h4>
                                    <p class="show-meta">
                                        <span class="date-info"><i class="fa fa-clock-o"></i>29 Apr
                                            2013</span>
                                        <a class="comments" href="#"><i class="fa fa-comment"></i>14
                                            Comments</a>
                                    </p>
                                </li>

                                <li>
                                    <h4 class="entry-title"><a href="">The Real Steel</a></h4>
                                    <p class="show-meta">
                                        <span class="date-info"><i class="fa fa-clock-o"></i>29 Apr
                                            2013</span>
                                        <a class="comments" href="#"><i class="fa fa-comment"></i>14
                                            Comments</a>
                                    </p>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_newsletter">
                            <h3 class="widgettitle">Newsletter<span></span></h3>
                            <p>Your about us information would fit here nicely.</p>
                            <form name="frmnewsletter" class="newsletter-form" action="php/subscribe.php" method="post">
                                <input type="email" required="" placeholder="Your Email ID" name="mc_email">
                                <input type="submit" value="Submit" class="dt-sc-button" name="btnsubscribe">
                            </form>
                            <div id="ajax_subscribe_msg"></div>
                        </aside>

                        <div class="widget textwidget">
                            <ul class="dt-sc-social-icons">
                                <li class="facebook"><a class="fa fa-facebook" href="#"></a></li>
                                <li class="google"><a class="fa fa-google-plus" href="#"> </a></li>
                                <li class="twitter"><a class="fa fa-twitter" href="#"></a></li>
                                <li class="linkedin"><a class="fa fa-linkedin" href="#"></a></li>
                                <li class="dribbble"><a class="fa fa-dribbble" href="#"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="copyright">
                    <div class="container">
                        <p> Copyright &copy; 2014, developed by <a href="">BuddhaThemes</a>. All
                            rights
                            reserved. </p>
                    </div>
                </div>
            </footer> <!-- **Footer Ends** -->

        </div> <!-- **Wrapper Ends** -->

        <!-- **jQuery** -->

        <script src="{{ asset('assets1/js/jquery.js') }}"></script>
        <script src="{{ asset('assets1/js/jquery-migrate-1.2.1.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets1/js/pace.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets1/js/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.dlmenu.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/inview.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.tabs.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.tipTip.minified.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.viewport.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.donutchart.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.ui.totop.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/twitter/jquery.tweet.min.js') }}">
        </script>

        <script type="text/javascript" src="{{ asset('assets1/js/jquery-easing-1.3.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.isotope.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.prettyPhoto.js') }}">
        </script>

        <script type="text/javascript" src="{{ asset('assets1/js/jquery.carouFredSel-6.2.0-packed.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.fitvids.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.bxslider.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets1/js/jquery.parallax-1.1.3.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets1/js/jquery.animateNumber.min.js') }}">
        </script>

        <script src="{{ asset('assets1/js/jquery.validate.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets1/js/custom.js') }}"></script>

        <script src="{{ asset('assets1/js/layerslider/js/greensock.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets1/js/layerslider/js/layerslider.transitions.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets1/js/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"
            type="text/javascript">
        </script>

        <script type="text/javascript">
            var lsjQuery = jQuery;

        </script>

        <script type="text/javascript">
            lsjQuery(document).ready(function () {
                if (typeof lsjQuery.fn.layerSlider == "undefined") {
                    lsShowNotice('layerslider_6', 'jquery');
                } else {
                    lsjQuery("#layerslider_6").layerSlider({
                        responsiveUnder: 1170,
                        layersContainer: 1170,
                        pauseOnHover: false,
                        forceLoopNum: false,
                        autoPlayVideos: false,
                        skinsPath: 'js/layerslider/skins/'
                    })
                }
            });

            jQuery(window).load(function () {

                //PAGE SLIDER...
                if (jQuery('.left-slide').length) {
                    jQuery('.left-slide').each(function () {
                        var $this = jQuery(this).find('.page-slider');
                        $this.carouFredSel({
                            responsive: true,
                            auto: false,
                            width: '100%',
                            height: 'auto',
                            scroll: {
                                fx: "cover-fade",
                                duration: 800
                            },
                            items: {
                                width: $this.find("li").width(),
                                height: 'auto',
                                visible: {
                                    min: 1,
                                    max: 1
                                }
                            },
                            pagination: {
                                container: ".left-slide-nav-links",
                                anchorBuilder: false
                            }
                        });
                    });
                }

            });

        </script>


</body>

</html>
