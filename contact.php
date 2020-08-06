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
    <title>Contact Us:: Welcome to Rimpido GmbH</title>
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

<body class="double-diagonal light">
    <!-- Preloader Starts -->
    
    <?php include 'includes/index/preloader-and-switcher.php'; ?>
    <!-- Preloader Ends -->
    <?php 
            include 'includes/index/nav-bar-main.php';
        ?>
        <!-- Header Ends -->
        <!-- Contact Section Starts -->
    
        <section class="services ">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text " style="padding-top: 50px;">
                    <h1><span>CONTACT US</span> </h1>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-fax" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <br>
                <!-- Divider Ends -->
                    
                <div class="col-lg-3">
                <div class="card">
                        
                        <div class="body"> 
                        <strong style="color:orange;"><h2>KONTAKT</h2></strong>
                            <hr>
                            <p style="color:orange; font-size:20px;"> rimpido GmbH</p>
                            <p>Reiherstieg 40 <br><br>
                            21244 Buchholz i.d.N. (bei Hamburg)<br><br>
                            <br>
                            <b>Tel.</b> + 49 (0) 4181 - 1386 456<br>
                            <b>Fax.</b> + 49 (0) 4181 - 1386 457<br>
                            <b>Email: </b> info@rimpido.com
                        </div>
                </div>
                </div>
                
                <div class="col-lg-9" style="float:right;">
                    <div class="card">
                        <span>
                         <h3 style="color:orange;"><strong>Inhaltlich Verantwortlich:</strong></h3>
                        </span>
                        <div class="services-pre-content">
                <p>Phone:<br>
we are reachable from 8:30 am to 5:00 pm under the following number<br><br>

Tel: +49 (0) 4181/1386 456<br><br>
Fax:<br>
please send your faxes to

Fax: +49 (0) 4181/1386 457<br><br>


Letters:<br>
You can send your letters to this address

Reiherstieg 40 at 21244 Buchholz in the nordheide<br><br>


E-mail:<br>
If you want us to write a mail you can contact us at the following e-mail address

<a href="mailto:info@rimpido.com">info@rimpido.com</a></p><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ends -->
        <!-- Contact Form Section Starts -->
        <!-- Contact Form Section Ends -->
		<!-- Logos Section Starts -->
        <!-- Logos Section Ends -->
        <!-- Footer Section Starts -->
    <?php include 'includes/index/footer.php'; ?>
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAFnEvJfyoQ8unR5hK1u87h73EdYP46-hE"></script>
	
    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>

</body>


<!-- contact18:00  -->
</html>