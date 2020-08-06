<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Home:: Welcome to Rimpido GmbH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/rimpido/favicon.ico">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/yellow.css" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/navigation.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
</head>
    <script type="text/javascript">
    $(document).ready(function(){
        var element = document.getElementById("startpage");
        element.classList.add("active");
    });
    </script>
<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <?php include 'includes/index/preloader-and-switcher.php';?>
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php 
            include 'includes/index/nav-bar-main.php';
        ?>
        <!-- Header Ends -->
        <!-- Main Slider Section Starts -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container dark-slider" data-alias="vimeo-hero" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_kenburns" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="img/rimpido/index/rimpido1.jpg" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="img/rimpido/index/rimpido1.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">rimpido GmbH
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                                <?php echo $lang['banner_1']; ?>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target"><?php echo $lang['learn_about_us']; ?></a></div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2" data-transition="zoomin" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="img/rimpido/index/rimpido3.jpg" data-rotate="0" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="img/rimpido/index/rimpido3.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;"><?php echo $lang['optimize']; ?>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><?php echo $lang['banner_2']; ?>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#about" class="custom-button slider-button scroll-to-target"><?php echo $lang['learn_about_us']; ?></a></div>
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>About</span> Us</h1>
                    <h4>Who We Are</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">We are <strong>rimpido GmbH</strong></h3>
                        <hr>
                        <p>
                           The rimpido GmbH offers a worldwide SAP consulting for the SAP module Environment, Health & Safety (SAP EHS) for medium and large enterprises. We have many years of experience in the implementation and regular maintenance of SAP EHS Systems 
                        </p>
                        <!-- Tabs Heading Starts -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                            <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                        </ul>
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>To serve our customers to the best by delivering Affordable, Effective, and Innovative business solutions.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>We provide top- notch yet affordable business solution. We are mindful of ethics while being cost effective.</p>
                            </div>
                            
                        </div>
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="about.html">Learn more about us</a>
                    </div>
                    <div class="col-md-6 col-lg-6 about-right-side">
                        <div class="full-image-container hovered">
                            <img class="img-responsive hidden-xs" src="img/rimpido/index/about-us-bleed.jpg" alt="">
                            <div class="full-image-overlay">
                                <h3>Why <strong>Choose Us</strong></h3>
                                <ul class="list-why-choose-us">
                                    <li>We offer a wide range of services</li>
                                    <li>We provide top- notch yet affordable business solution</li>
                                    <li>We build well- optimized websites</li>
                                    <li>We offer a worldwide SAP consultion SAP consultation for SAP Module Environment, Healthy & Safety (SAP EHS) for medium and large enterprises</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section class="services" id="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Our</span> Services</h1>
                    <h4>What We Doing</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-leaf" data-headline="EHS Implementation"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-leaf">
                            <h2>EHS Implementation</h2>
                            <p>We have extensive experience in the introduction/implementtion of SAP EHS modules and the migration to ECC 6</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-anchor" data-headline="EHS Support"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-anchor">
                            <h2>EHS Support</h2>
                            <p>We take care of regular modification of documents and data structures to the ongoing changes in the chemicals legislation.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="Phrase Library"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>Phrase Library</h2>
                            <p>The EHS product safety also includes the collection and management of the necessary data on substances </p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->
                    
                                        
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-support" data-headline="Training"></span>
                        <!-- Service Item Cover Ends -->
                        <div class="services-box-item-content fa fa-support">
                            <h2>Training</h2>
                            <p>We offer trainings on inquiry to all areas of SAP EH&S.<br><br></p>
                        </div>
                    </div>
                    <!-- Service Item Ends -->

                    
                   

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-file-pdf-o" data-headline="Chemistry Service Portal"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-file-pdf-o">
                            <h2>Chemistry Service Portal</h2>
                            <p>We can help you to get information about the transport of substances, preparations, and objects classified as dangerous goods.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="Substance Volume Tracking"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>Substance Volume Tracking</h2>
                            <p>REACH and TSCA are two typical regulations for chemicals, that implement standard volume notification requirements</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-cogs" data-headline="EHS Manual"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-cogs">
                            <h2>EHS Manual</h2>
                            <p> The book explains step by step how you can work with SAP EHSM modules. Processes and Functions of SAP EHS are explained </p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->
                    
                      <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="EH&S Tools"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>EH&S Tools</h2>
                            <p>Recording tool for supplier SDB’s / hazardous substances, DYN-WWI Tool for dynamic control and management of bulk generations, Managing of SAP EH&S expert bulk runs.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->
                    
                    
                     <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-comments-o" data-headline="38.3 Certification"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-comments-o">
                            <h2>38.3 Certification</h2>
                            <p>Transporting lithium batteries is subject to international regulation which may vary if the batteries are transported via sea, air, or road</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <!-- SURE MEETING THE SAP STANDARDS -->
          <!-- Blog Section Starts -->
        <section class="blog">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>SURE MEETING THE <span>SAP EHS</span> STANDARDS</h1>
                    <h4 style="text-transform:initial;">As a company, you are bound to legal requirements regarding environmental protection, occupational safety to comply with waste and hazardous materials. <br><br>
                    With SAP Environment, Health & Safety (SAP EHS), They regulate all areas of responsibility, to meet the national and international standards of environmental protection, occupational safety, occupational medicine, management of hazardous substances, hazardous waste management and management in your company. We can help you with both the <a href="services-implementation.php" class="sap_standards">implementation of SAP EHS code</a> as well as <a href="services-support.php" class="sap_standards">adjustments and updates </a>offer to existing SAP EHS systems extensive advice and assistance. <br><br>
                    By the <a href="services-manual.php" class="sap_standards">long experience</a><a href="#" class="sap_standards"> of our employees</a>, we can offer you a solution of best practice that is truly customized for your SAP EHS Installation. Of course, every order will be executed in accordance with our internal qulity standards with the utmost care and reliability.<br><br>
                    Furthermore with our new <a href="services-phrasencatalog.php" class="sap_standards">phrase library system,</a> we can provide you support in translation and in matching your phrases for the SAP EHS system and provide a platform for exchanging phrases. Additionally, you can also adapt other areas of the SAP EHS system as property trees with the <a href="services-phrasencatalog.php" class="sap_standards">phrase library system</a> more comfortable and faster. 
                    </h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-comments" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
            </div>
        </section>
        <!-- Blog Section Ends -->
        <!-- Testimonials Section Starts -->
        <section class="testimonials">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span style="text-transform:lowercase;">rimpido</span><span> GmbH</span> Customer</h1>
                        <h4>Testimonials</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Blockquotes Starts -->
                    <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper For Sliders Starts -->
                        <!-- Indicators Starts -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                        </ol>
                        <!-- Indicators Ends -->
                        <div class="carousel-inner">
                            <!-- Quote #1 Starts -->
                            <div class="item active">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="img/testimonial/client1.jpg" alt="client">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu nt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat</p>
                                    <h5>Jessamine Joy S. Cena</h5>
                                    <h6>Junior Programmer</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #1 Ends -->
                            <!-- Quote #2 Starts -->
                            <div class="item">
                                <blockquote>
                                    <img class="img-circle img-responsive" src="img/testimonial/client2.jpg" alt="client">
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                                    <h5>Kevin Mendi</h5>
                                    <h6>Manager - Rimpido Pacific Inc</h6>
                                </blockquote>
                            </div>
                            <!-- Quote #2 Ends -->
                        </div>
                        <!-- Wrapper For Sliders Ends -->
                    </div>
                    <!-- Blockquotes Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Testimonials Section Ends -->
        <!-- Logos Section Starts -->
<!--        <section class="logos">
            <div class="container">
                <div class="text-center top-text">
                        <h1><span>Our Partners</span></h1>
                    </div>
                <ul class="bxslider" id="bxslider">-->
                    <!-- Logos Items Starts -->
<!--                    <li><img id="3docean" src="includes/partners/larnyard.png" alt="3docean"></li>
                    <li><img id="activeden" src="includes/partners/logo-proveho.png" alt="activeden"></li>
                    <li><img id="audiojungle" src="includes/partners/larnyard.png" alt="audiojungle"></li>
                    <li><img id="codecanyon" src="includes/partners/logo-proveho.png" alt="codecanyon"></li>
                    <li><img id="graphicriver" src="includes/partners/larnyard.png" alt="graphicriver"></li>
                    <li><img id="photodune" src="includes/partners/logo-proveho.png" alt="photodune"></li>
                    <li><img id="themeforest" src="includes/partners/larnyard.png" alt="themeforest"></li>-->
                    <!-- Logos Items Ends -->
<!--                </ul>
            </div>
        </section>-->
        <!-- Logos Section Ends -->
        <!-- FOOTER -->
        <?php include 'includes/index/footer.php'; ?>
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/jquery.bxslider.min.js"></script>
    <script src="js/plugins/jquery.filterizr.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider Extensions -->

    <script src="js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>
	
</body>

</html>