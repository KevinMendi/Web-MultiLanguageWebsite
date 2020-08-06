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
    <title>Rimpido GmbH - Privacy Policy</title>
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
                <div class="col-md-12">
                        <div class="text-center top-text " style="padding-top: 50px;">
                            <h1><span>RIMPIDO GMBH</span> DATENSCHUTZERKLÄRUNG</h1>
                            <p><b>Der Betrieb einer Webseite führt in jedem Fall zur automatisierten Verarbeitung personenbezogener Daten. An dieser Stelle informieren wir Sie entsprechend unserer gesetzlichen Verpflichtung gemäß Art. 13 DSGVO.<br>Diese Datenschutzerklärung gilt für alle von der rimpido GmbH betriebenen Webseiten der Domainen: www.rimpido.* ; www.phrase-catalog.* ; www.chemistry-service.* .</b></p>
                        </div>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="col-md-12">
                        <div class="divider text-center">
                            <span class="outer-line"></span>
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                </div>
                <!-- Divider Ends -->
                <div class="col-md-12">
                        <div class="services-pre-content">
                                <p><b>Verantwortliche Stelle</b> <br>
                                Verantwortlich für die Datenverarbeitung durch diese Webseite ist:<br>
                                Rimpido GmbH <br>
                                Reiherstieg 40 <br>
                                21244 Buchholz <br>
                                Deutschland <br>
                                Telefon +49 (0) 4181 1386 456 <br></p><br>
                                <p>Um Kommunikation im Internet zu ermöglichen, müssen Daten von dem Server, auf dem sie gespeichert sind, zu dem angeschlossenen Computer gelangen, der auf die Inhalte zugreifen möchte. Hierzu muss mit der Anfrage, die Daten abzurufen, auch mitgeteilt werden, an welchen Empfänger die Information vom Server übermittelt werden soll. Zu diesem Zwecke sind allen mit dem Internet verbundenen Geräten sog. IP-Adressen zugeordnet. Die Übermittlung der IP-Adresse erfolgt beim Aufruf einer Internetseite automatisch durch den Browser des Nutzers.</p><br>
                                <p>Zu diesem Zweck werden die IP-Adressen der Nutzer, die die Webseite der rimpido GmbH aufrufen, sowie die durch den Browser übermittelten Daten durch die rimpido GmbH verarbeitet. </p><br> 
                                <p>Die Verarbeitung erfolgt zur Erfüllung der Aufgaben nach Art. 6 Absatz 1 lit. e in Verbindung mit Art. 57 DSGVO. Die Daten werden entsprechend der rechtlichen Vorgaben gespeichert.</p><br>
                                <p><b>Rechte der Nutzer (betroffenen Personen)</b></p><br> 
                                <p>Sie haben der rimpido GmbH gegenüber hinsichtlich der Datenverarbeitung auf dieser Webseite folgende Rechte:
                                </p><br>
                                <p>Auskunft: Sie haben das Recht, eine Bestätigung darüber zu verlangen, ob Sie betreffende personenbezogene Daten verarbeitet werden; ist dies der Fall, so haben Sie ein Recht auf Auskunft über diese personenbezogenen Daten und auf die in Art. 15 DS-GVO im einzelnen aufgeführten Informationen.</p><br>
                                <p>Berichtigung: Sie haben das Recht, unverzüglich die Berichtigung Sie betreffender unrichtiger personenbezogener Daten und ggf. die Vervollständigung unvollständiger personenbezogener Daten zu verlangen (Art. 16 DSGVO).</p><br>
                                <p>Löschung: Sie haben das Recht, zu verlangen, dass Sie betreffende personenbezogene Daten unverzüglich gelöscht werden, sofern einer der in Art. 17 DSGVO im einzelnen aufgeführten Gründe zutrifft, z. B. wenn die Daten für die verfolgten Zwecke nicht mehr benötigt werden und die gesetzlichen Aufbewahrungs- und Archivvorschriften einer Löschung nicht entgegenstehen.</p><br>
                                <p>Einschränkung der Verarbeitung: Sie haben das Recht, die Einschränkung der Verarbeitung zu verlangen, wenn eine der in Art. 18 DSGVO aufgeführten Voraussetzungen gegeben ist, z. B. wenn Sie Widerspruch gegen die Verarbeitung eingelegt haben, für die Dauer der Prüfung, ob dem Widerspruch statt gegeben werden kann.</p><br>
                                <p>Datenübertragbarkeit: Sie haben gemäß Art. 20 DSGVO das Recht, die uns aufgrund Ihrer Einwilligung freiwillig zur Verfügung gestellten und elektronisch verarbeiteten Daten in einem strukturierten, gängigen und maschinen-lesbaren Format zu erhalten, sodass Sie diese Daten einem anderen Verantwortlichen zur Verfügung stellen können. Sofern Sie die direkte Übertragung der Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p><br>
                                <p>Widerspruch: Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit im Rahmen der Voraussetzungen des Art. 21 DSGVO gegen die Verarbeitung Sie betreffender personenbezogener Daten Widerspruch einzulegen.</p><br>
                                <p><b>Datenerfassung auf unserer Website</b></p><br>
                                <p><b>Cookies</b></p><br>
                                <p>Unsere Webseiten verwenden auch sogenannte Cookies. Cookies werden verwendet, um unser Angebot nutzerfreundlicher, effizienter und sicherer zu gestalten. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert</p><br>
                                <p>Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie werden nach Ende Ihres Besuchs a utomatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p><br>
                                <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p><br>
                                <p>Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von Cookies zur technisch fehlerfreien und optimierten Bereitstellung seiner Dienste. Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser Datenschutzerklärung gesondert behandelt.</p><br>
                                <p><b>Server-Log-Dateien</b></p><br>
                                <p>Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p><br>
                                <p>• Browsertyp und Browserversion <br>
                                • verwendetes Betriebssystem <br>
                                • Referrer URL <br>
                                • Hostname des zugreifenden Rechners <br>
                                • Uhrzeit der Serveranfrage <br>
                                • Uhrzeit der Serveranfrage <br></p><br>
                                <p>Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.</p><br>
                                <p>Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO, der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p><br>
                                <p><b>SSL- bzw. TLS-Verschlüsselung</b></p><br>
                                <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-bzw. TLS-Verschlüsselung. Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von “http://” auf “https://” wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p><br>
                                <p>Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns übermitteln, nicht von Dritten mitgelesen werden.</p><br>
                                <p><b>Analyse Tools</b></p><br>
                                <p><b>Google Analytics</b></p><br>
                                <p>Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</p><br>
                                <p>Google Analytics verwendet so genannte "Cookies". Das sind Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.</p><br>
                                <p>Die Speicherung von Google-Analytics-Cookies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der Analyse des Nutzerverhaltens, um sowohl sein Webangebot als auch seine Werbung zu optimieren.</p><br>

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