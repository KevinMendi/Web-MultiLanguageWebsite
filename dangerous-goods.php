<?php
    session_start();
    require_once("index.conf");
    $language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
?>
<!DOCTYPE html>
<html lang="en">


<!-- portfolio-4-columns17:04  -->
<head>
    <meta charset="utf-8" />
    <title>Rimpido GmbH - DG Training </title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>
   <script type="text/javascript">
    $(document).ready(function(){
        var element = document.getElementById("services");
        element.classList.add("active");
    });
    </script>

<body class="double-diagonal light portfolio-page">
    <!-- Preloader Starts -->
<?php include 'includes/index/preloader-and-switcher.php';?>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
       <?php include 'includes/index/nav-bar-main.php';?>
        <!-- Header Ends -->
        <!-- Banner Starts -->
        <section class="banner">
    
    </section>
    <!-- Banner Ends -->
    <!-- Portfolio Section Starts -->
        <section class="portfolio" >
            <!-- Container Starts -->
            <div class="container" >
                <div class="filtr-container" style="margin-top: 50px; ">
                        <!-- Project Starts -->
                        <?php
                            echo $lang['dg_sub_header'];
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                              
                               <div class="magnific-popup-gallery">
                                    <!-- Thumbnail Starts -->

                                    <figure class="thumbnail thumbnail__portfolio">
                                        <a class="image-wrap" href="img/rimpido/training.jpg" data-gal="magnific-pop-up[image]" title="Image project"><img class="img-responsive" src="img/rimpido/training.jpg" alt="Image Project" /><span class="zoom-icon"></span></a>
                                    </figure>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                    echo $lang['dg_first_content'];
                                ?>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                              <?php 
                                echo $lang['dg_second_content'];
                              ?>
                            </div>
                            <div class="col-md-4">
                               <?php
                                    echo $lang['dg_third_content'];
                               ?>
                            </div>
                              <div class="col-md-4"><br>
                                <?php
                                    echo $lang['dg_fourth_content'];
                                ?>
                            </div>
                        </div><br>
                    </div>
                </div>
            <!-- Container End  s -->
        </section>
        <!-- Portfolio Section Ends -->
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
  <script src="js/plugins/jquery.filterizr.js"></script>
  <script src="js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>

</body>


<!-- portfolio-4-columns17:04  -->
</html>