<?php
    session_start();
    require_once("index.conf");
    $language = new Language();
    $lang = $language->getLanguage(@$_POST['lang']);
?>
<!DOCTYPE html>
<html lang="en">


<!-- video-project17:05  -->
<head>
    <meta charset="utf-8" />
    <title>Rimpido GmbH - EHS Training</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/rimpido/favicon.ico">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
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

<body class="double-diagonal light portfolio-project">
    <?php include 'includes/index/preloader-and-switcher.php';?>
    
    <div class="wrapper">
        <!-- Header Starts -->
<?php include 'includes/index/nav-bar-main.php';?>

		<section class="project">
			<div class="container">
                <div class="text-center top-text " style="padding-top: 10px;">
                    <?php
                        echo $lang['training_header'];
                        echo $lang['training_sub_header'];
                    ?>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div><br>
				<div class="row">
					<!-- Project Main Content Starts -->

                    <?php
                  if($_SESSION['LANGUAGE'] == 'ar')
                  {
                    ?>
                    <div class="col-md-6">
                        <div class="project-details"><br><br>
                            <?php
                                echo $lang['training_first_content'];
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-main-content">
                            <video id="video" class="responsive-video" controls poster="img/rimpido/video/training-poster.png">
                                <source src="img/rimpido/video/Vorlage Schulung Website.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    


                    <?php
                  }
                  else
                  {
                  ?>
                  <div class="col-md-6">
                        <div class="project-main-content">
                            <video id="video" class="responsive-video" controls poster="img/rimpido/video/training-poster.png">
                                <source src="img/rimpido/video/Vorlage Schulung Website.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col-md-6">
                        <div class="project-details"><br><br>
                            <?php
                                echo $lang['training_first_content'];
                            ?>
                        </div>
                    </div>

                  <?php
                    }
                    
                    ?>
					
                    <div class="col-sm-12"><br>
                        <?php 
                            echo $lang['training_second_content'];
                        ?>
                    </div>
					<!-- Project Details Ends -->
				</div>
			</div>
		</section>
		<!-- Project Ends -->
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

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>

</body>


<!-- video-project17:31  -->
</html>