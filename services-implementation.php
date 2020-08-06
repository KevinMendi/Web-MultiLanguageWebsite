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
    <title>Rimpido GmbH - EHS Implementation</title>
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
    <style type="text/css">
        
         .nested-list ul li p{
            font-size: 18px;
        }

        .services-content h4 {
            text-transform: none;
        }
        body.dark .services-content ul li{
            color:#eee;
        }
        body.dark .nested-list ul li{
            color:#eee;
        }
       .services-pre-content p{
        color: #555;
        text-transform: none;
        font-family: "Raleway", sans-serif;
        font-size: 18px;
        }
        .services-content ul li 
        {
        font-size: 18px;
        }
        .services-content ul li{
            color: #555;
        }

    </style>

</head>
    <script type="text/javascript">
    $(document).ready(function(){
        var element = document.getElementById("services");
        element.classList.add("active");
    });
    </script>

<body class="double-diagonal light about-page" onload="">
    <!-- Preloader Starts -->
<?php include 'includes/index/preloader-and-switcher.php';?>

    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        
        <?php include 'includes/index/nav-bar-main.php';?>  

        <!-- Services Section Starts -->
        <section class="services ">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center top-text " style="padding-top: 50px;">
                            <?php echo $lang['implementation_header']; 
                                echo $lang['implementation_sub_header'];
                            ?>
                        </div>
                        <div class="divider text-center">
                            <span class="outer-line"></span>
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <div class="services-pre-content">
                            <?php
                                echo $lang['implementation_pre_content'];
                            ?>
                        </div>
                    </div>
                
                    <div class="col-md-12"> 
                        <div class="services-content">
                            <?php
                                echo $lang['implementation_content'];
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section Ends -->
    
     
        <!-- Footer Section Starts -->
    <?php include 'includes/index/footer.php';?>
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
</body>


<!-- about17:04  -->
</html>