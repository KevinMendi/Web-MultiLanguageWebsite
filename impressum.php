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
    <title>Impressum:: Welcome to Rimpido GmbH</title>
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
    
    <style type="text/css">
        .sap_standards:hover{
            color: white;
            transition: all 0.5s ease-in !important;
        }
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

<body class="double-diagonal light">
    <!-- Preloader Starts -->
    <?php include 'includes/index/preloader-and-switcher.php';?>
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php 
            include 'includes/index/nav-bar-main.php';
        ?>
        <!-- Header Ends -->
        <!-- Banner Starts -->
		<!-- Banner Ends -->
        <!-- Section Terms of Services Starts -->
           
        <!-- Services Section Starts -->
        <section class="services ">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text " style="padding-top: 50px;">
                    <h1><span>IMPRESSUM</span> </h1>
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
                            <b>Tel.</b> + 49 (0) 4181 - 1386 456
                            <b>Fax.</b> + 49 (0) 4181 - 1386 457
                            <b>Email: </b> info@rimpido.com
                        </div>
                </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="card">
                        <span>
                         <h3 style="color:orange;"><strong>Inhaltlich Verantwortlich:</strong></h3>
                        </span>
                        <div class="services-pre-content">
                <p>Im Sinne geltender Rechtsvorschriften und Gesetze ist der Geschäftsführer Dr. Jan H. Schuur inhaltlich verantwortlich für die Inhalte dieser Webseite und weiterer Services der rimpido GmbH. Dies erstreckt sich nicht auf Fremdlinks (s.u.).</p><br>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="card">
                        <span>
                         <h3><strong style="color:orange;">Copyright und Urheberrecht:</strong></h3>
                        </span>
                        <div class="services-pre-content">
                            <p>Inhalte und Gestaltung dieser Seiten unterliegen dem Schutz des Urheberrechts und anderer Gesetze zum Schutz geistigen Eigentums. Die Nachrichten sind ausschließlich zur Persönlichen Information bestimmt. Jede weiter gehende Verwendung, insbesondere Speicherung in Datenbanken, Veröffentlichung, Vervielfältigung, jede Form gewerblicher Nutzung sowie die Weitergabe an Dritte - auch in Teilen oder in veränderter Form - ist ohne eine ausdrückliche Zustimmung des Autors nicht gestattet. Die Verwendung, Speicherung, Vervielfältigung und Weitergabe von Inhalten dieser Website kann nur mit dem Einverständnis des Autors bzw. des Rechteinhabers erfolgen.<br></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="card">
                        <span>
                         <h3><strong style="color:orange;">Haftungsausschluss:</strong></h3>
                        </span>
                        <div class="services-pre-content">
                            <p>Die bereitgestellten Informationen auf diesen Webseiten wurden sorgfältig geprüft und werden in unregelmäßigen Abständen aktualisiert. Jedoch kann keine Garantie dafür übernommen werden, dass alle Angaben zu jeder Zeit vollständig richtig und in letzter Aktualität dargestellt werden. Es können auch alle Angaben auf unseren Seiten ohne vorherige Ankündigung geändert entfernt oder ergänzt werden. Dies gilt insbesondere für alle Verbindungen "Links" zu anderen Webseiten, auf die direkt oder indirekt verwiesen wird.<br></p>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-12">
                    <div class="card">
                        <span>
                         <h3><strong style="color:orange;">Links:</strong></h3>
                        </span>
                        <div class="services-pre-content">
                            <p>
                            Mit dem Urteil vom 12. Mai 1998 hat das Landgericht Hamburg entschieden, dass man durch die Einbringung eines Links die Inhalte der gelinkten Seite ggf. mit zu verantworten hat. Dies kann - so das Landgericht - nur dadurch verhindert werden, dass man sich ausdrücklich von diesen Inhalten distanziert. Auf dieser Webseite befinden sich Links zu anderen Inhalten im Internet.<br><br>
                                
                                Für diese Links gilt: Wir betonen ausdrücklich, dass wir keinen Einfluss auf die Gestaltung und die Inhalte der gelinkten Seiten / Inhalte haben. Deshalb distanzieren wir uns hiermit ausdrücklich von allen eventuellen rechtswidrigen Inhalten aller gelinkten Seiten auf dieser Webseite. Diese Erklärung gilt für alle Seiten dieser Seite, auf denen Links oder Banner auf externe Inhalte verweisen.
                                
                                <br><br></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
		<!-- Section Terms of Services Ends -->
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

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>

</body>


<!-- terms-of-services18:00  -->
</html>