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
    <title>Rimpido GmbH - Phrase Catalog</title>
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
        
        #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 50px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

@media only screen and (max-width: 700px){
 .close {
  position: absolute;
  top: 60px;
  right: 25px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;

}
}
    </style>

</head>
    <script type="text/javascript">
    $(document).ready(function(){
        var element = document.getElementById("services");
        element.classList.add("active");
    });
    </script>

<body class="double-diagonal light about-page">
    <!-- Preloader Starts -->
    <?php include 'includes/index/preloader-and-switcher.php';?>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php include 'includes/index/nav-bar-main.php';?>
        <!-- Header Ends -->
        
	
        <!-- About Section Starts -->
        <section class="about" style="padding-top: 50px;">
            <!-- Container Starts -->
            <div class="container">
                <!-- About Content Starts -->
                <div class="row about-content">

                  <?php
                  if($_SESSION['LANGUAGE'] == 'ar')
                  {
                  ?>
                  <!-- Image About Us Starts -->
                     <div class="col-md-4 col-lg-4 about-right-side">
                         <img id="myImg" class="img-responsive" src="img/rimpido/phrasenkatalog.png" alt="" >   
                     </div>
                     <div class="col-sm-12 col-md-8 col-lg-8 about-left-side">
                        <?php
                          echo $lang['phrase_first_sub_header'];
                        ?>
                        <hr>
                        <?php
                          echo $lang['phrase_first_content'];
                        ?>
                       
                     </div>
          

                  <?php
                  }
                  else
                  {
                  ?>
                  <div class="col-sm-12 col-md-8 col-lg-8 about-left-side">
                        <?php
                          echo $lang['phrase_first_sub_header'];
                        ?>
                        <hr>
                        <?php
                          echo $lang['phrase_first_content'];
                        ?>
                       
                    </div>
          <!-- Image About Us Starts -->
                     <div class="col-md-4 col-lg-4 about-right-side">
                         <img id="myImg" class="img-responsive" src="img/rimpido/phrasenkatalog.png" alt="" >   
                     </div>

                  <?php
                  }
                  ?>
                    
                    <div class="col-md-12" style="margin-top:30px;">
                        <?php echo $lang['phrase_second_sub_header']; 
                              echo $lang['phrase_second_contetnt']

                        ?>
                        
                    </div>
					<!-- Image About Us Ends -->
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
 <div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">X</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
       
        <!-- Testimonials Section Starts -->
        
        <!-- Logos Section Ends -->
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
<script>

    function closeModal()
    {
        modal.style.display = "none";
    }
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

/*// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";

}*/
</script>

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