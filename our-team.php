<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
?>

<!DOCTYPE html>
<html lang="en">


<!-- about16:51  -->
<head>
    <meta charset="utf-8" />
    <title>rimpido Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/rimpido/favicon.ico">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/yellow.css" />

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
    <script src="jquery.localscroll.js" type="text/javascript"></script> 
    <script src="jquery.scrollTo.js" type="text/javascript"></script>
    <!-- Lozad.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/lozad"></script>

</head>
    <script type="text/javascript">
        //for soft scroll in navigation bar with href = #
        $(document).ready(function(){
            $("a").on('click',function(event){
                if (this.hash !== ""){
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
            
            //set navigation to active  
            var element = document.getElementById("ourteam");
            element.classList.add("active");

        });
        
        //for image preloader lozard
        lozad('.lozad', {
            load: function(el) {
                el.src = el.dataset.src;
                el.onload = function() {
                    //el.classList.add('fade');
                }
            }
        }).observe();
    </script>    

<body class="double-diagonal light about-page">
    <!-- Preloader Starts -->
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"  /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <p class="separator">SEPARATOR</p>
            <span class="info">Select and scroll to see the changes</span>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/1.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/2.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/3.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" checked="checked"  /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/4.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/5.jpg" /></label>

            <hr />

            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
       <?php 
            include 'includes/index/nav-bar-main.php';
        ?>
        
        <script type="text/javascript">
            
        </script>
        <!-- Header Ends -->
        <!-- Banner Starts -->
        <section class="banner" id="top">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<?php echo $lang['our-team-title']; ?>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Breadcrumb Starts -->
					<ul class="breadcrumb">
						<?php echo $lang['our-team-nav']; ?>
					</ul>
					<!-- Breadcrumb Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
        <!-- About Section Starts -->
        <section class="about" id="ceo">
            <!-- Container Starts -->
            <div class="container">
                <!-- About Content Starts -->
                 <div class="row">
                        <!-- Image Starts -->
                        <div class="col-lg-5 col-md-12">
                            <div class="lozad">
                            <img class="img-responsive projectmanagerpicture" src="img/rimpido/sir-Jan-cover.jpg" alt="project manager">
                            </div>
                        </div>
                        <!-- Image Ends -->
                        <!-- Details Starts -->
                        <div class="col-md-12 col-lg-6 col-lg-offset-1">
                            <?php echo $lang['our-team-ceo-name']; ?>
                            <?php echo $lang['our-team-ceo-desc']; ?>
                            <!-- Social Media Starts -->
                            <div class="social-icons">
                                <ul class="social">
                                    <li>
                                        <a class="facebook" href="https://www.facebook.com/jan.schuur.7" title="facebook" target="_blank"></a>
                                    </li>
                                    <li>
                                        <a class="skype" href="www.skype.com/janduonordheide" title="skype" target="_blank"></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="https://www.linkedin.com/in/jan-schuur-b92b0232/" title="linkedin" target="_blank"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Media Ends -->
                        </div>
                    </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Project Manager Section Starts -->
        <section class="projectmanager" id="ehsexperts">
            <!-- Section Overlay Starts -->
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                   <div class="text-center top-text">
                    <?php echo $lang['ehs-expert-title']; ?>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-users" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                
                <!-- Team Members Starts -->
                <!-- FIRST ROW starts -->
                <div class="row team-members magnific-popup-gallery">
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <!-- team member starts -->
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Dr. Jan H. Schuur" href="img/rimpido/jan-schuur.jpg" width="262" height="354" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/jan-schuur.jpg" alt="team member" width="480" height="600"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                                <?php echo $lang['ehs-expert-schuur']; ?>
                        </div>
                    </div>
                        <!-- team member ends-->
                        <!-- team member starts-->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Klaus Reinhardt" href="img/rimpido/klaus-reinhardt.jpg" width="480" height="600" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/klaus-reinhardt.jpg" alt="team member" width="480" height="600"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                                <?php echo $lang['ehs-expert-reinhardt']; ?>
                        </div>
                    </div>
                        <!-- team member ends -->
                        <!-- team member starts-->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Marc Bachman" href="img/rimpido/marc-bachmann.jpg"  data-gal="magnific-pop-up[team]" width="480" height="600" class="team-member-img-wrap"><img src="img/rimpido/marc-bachmann.jpg" alt="team member" width="480" height="600"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                                <?php echo $lang['ehs-expert-bachmann']; ?>
                        </div>
                    </div>
                        <!-- team member ends -->
                        <!-- team member starts-->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Dr. Rer. Nat. Huafang Jin" href="img/rimpido/huafang-jin.jpg" width="480" height="600" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/huafang-jin.jpg" width="480" height="600" alt="team member"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                                <?php echo $lang['ehs-expert-jin']; ?>
                        </div>
                    </div>
                        <!-- team member ends -->
                    
                
                <!-- FIRST ROW ends -->
                <!-- SECOND ROW starts -->
                <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6" style="margin-top: 20px !important;">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                            <a title="Heike Harnack" href="img/rimpido/heike-harnack.jpg" width="480" height="600" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/heike-harnack.jpg" alt="team member" width="480" height="600"></a>
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                            <?php echo $lang['ehs-expert-harnack']; ?>
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                      <!--      <a title="Marc Bachman" href="img/rimpido/marc-bachmann.jpg"  data-gal="magnific-pop-up[team]" width="480" height="600" class="team-member-img-wrap"><img src="img/rimpido/marc-bachmann.jpg" alt="team member" width="480" height="600"></a>-->
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                 <!--           <div class="team-member-caption social-icons">
                                <h4>Marc Bachman</h4>
                                <h5 style="text-transform: none !important; line-height: 1.5em !important; font-style: italic !important;">Marc Bachman joined the rimpido GmbH as CFO in 2015. He gained a strong expertise in regulatory compliance and audit during his studies. Since his first day in the rimpido GmbH he has begun to work with SAP EHS and he is currently the lead developer of the Supplier SDS recording tool.</h5>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>-->
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <!-- Team Member-->
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                  <!--          <a title="Emilia Bella // Sales Manager" href="img/rimpido/huafang-jin.jpg" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/huafang-jin.jpg" width="262" height="354" alt=""></a>-->
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                  <!--          <div class="team-member-caption social-icons">
                                <h4>Dr. Rer. Nat. Huafang Jin</h4>
                                <h5 style="text-transform: none !important; line-height: 1.5em !important; font-style: italic !important;">Dr. Huafang Jin holds a Ph.D. in environmental chemistry of the University of Oldenburg, Germany. Dr. Jin joined the rimpido GmbH in 2012 on a part time basis. She took part in 3 EHS projects and the development of the supplier SDS recording tool. Futhermore she works on translation of EHS data into Chinese and the collection of EHS Data.</h5>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>-->
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                    <!-- Team Member Starts -->
                    <div class="col-xs-6 col-lg-3 col-md-3 col-sm-6">
                        <div class="lozad team-member">
                            <!-- Team Member Picture Starts -->
                        <!--    <a title="Antonio Conte // Director" href="img/rimpido/heike-harnack.jpg" width="480" height="600" data-gal="magnific-pop-up[team]" class="team-member-img-wrap"><img src="img/rimpido/heike-harnack.jpg" alt="team member" width="480" height="600"></a>-->
                            <!-- Team Member Picture Ends -->
                            <!-- Team Member Details Starts -->
                       <!--     <div class="team-member-caption social-icons">
                                <h4>Heike Harnack</h4>
                                <h5 style="text-transform: none !important; line-height: 1.5em !important; font-style: italic;">Heike Harnack joined rimpido GmbH in 2018 and works as a SAP EHS Consultant and Senior ABAP Programmer. Her skills includes exellent knowledge in EHS, MM, WM, PP, CO, BAPI and SAP Basics.</h5>
                                <ul class="list list-inline social">
                                    <li>
                                        <a href="#" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"></a>
                                    </li>
                                </ul>
                            </div>-->
                            <!-- Team Member Details Ends -->
                        </div>
                    </div>
                    <!-- Team Member Ends -->
                </div>
                <!-- SECOND ROW ends -->
                <!-- Team Members Ends -->
                    <!-- Details Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Project Manager Section Ends -->
        <!-- Team Section Starts -->
       
        <!-- Services Section Starts -->
    
        <!-- Services Section Ends -->
        <!-- Logos Section Starts -->
        <!-- Logos Section Ends -->
        <!-- Footer Section Starts -->
        <?php 
            include 'includes/index/footer.php';
        ?>
        <!-- Footer Section Ends -->
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
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>
    
            <!-- POLYFILL -->

        <script src="https://raw.githubusercontent.com/w3c/IntersectionObserver/master/polyfill/intersection-observer.js"></script>

        <!-- Lozad.js from CDN -->
        <script src="https://cdn.jsdelivr.net/npm/lozad"></script>

        <script type="text/javascript">
        
        // Initialize library to lazy load images
        /*var observer = lozad('.lozad', {
            threshold: 0.1,
            load: function(el) {
                el.src = el.getAttribute("data-src");
                el.onload = function() {
                    toastr["success"](el.localName.toUpperCase() + " " + el.getAttribute("data-index") + " lazy loaded.")
                }
            }
        })
*/
            
        lozad('.lozad', {
            load: function(el) {
                el.src = el.dataset.src;
                el.onload = function() {
                    //el.classList.add('fade');
                }
            }
        }).observe();
            
        // Picture observer
        // with default `load` method
        /*var pictureObserver = lozad('.lozad-picture', {
            threshold: 0.1
        })

        observer.observe()
        pictureObserver.observe()
*/
        </script>
    
</body>
</html>