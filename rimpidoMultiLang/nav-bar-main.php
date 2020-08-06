        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">

                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="index.php">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="img/rimpido/rimpido_transparent_white.png" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="img/rimpido/rimpido_transparent.png" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						<ul class="nav navbar-nav" id="main-navigation">
                            <li><a href="index.php"><i class="fa fa-home"></i> Start Page</a></li>
							<li class="dropdown" id="services" onclick="changeActiveNavBar()">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"  id="rimpidoServices"><i class="fa fa-image"></i> Rimpido Services <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="services-implementation.php">EHS- Implementation</a></li>
									<li><a href="services-support.php">EHS- Support</a></li>
									<li><a href="services-phrasencatalog.php">Phrase Library</a></li>
									<li><a href="services-training.php">Training</a></li>
									<li><a href="services-tools.php">EH&S Tools</a></li>
									<li><a href="http://chemistry-service.de/" target="_blank">Chemistry Service</a></li>
									<li><a href="services-volume-tracking.php">Substance Volume Tracking</a></li>
									<li><a href="services-manual.php">EHS- Manual</a></li>
								</ul>
							</li>
							<li class="dropdown" id="ourteam" onclick="changeActiveNavBar()">
								<a href="our-team.php"><i class="fa fa-edit"></i> Our Team <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="our-team.php#ehsexperts">EHS- Experts</a></li>
									<li><a href="our-team.php#ceo">CEO</a></li>
								</ul>
							</li>

                            <li id="partner"><a href="partner.php"><i class="fa fa-envelope"></i> Partner</a></li>
							<li id="contact"><a href="contact.php"><i class="fa fa-envelope"></i> Contact</a></li>
                            <li>
                                <form name="language" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<select onchange = "document.language.submit()" name="lang" style="background-color:rgba(255,255,255,0); border:none;">
    	<option selected="selected" style="background-color:rgba(0,0,0,0); color:black;"><?php echo $lang['LANGUAGE']; ?></option>
       <option value="en" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['en']; ?></option>
        <option value="es" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['es']; ?></option>
        <option value="fr" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['fr']; ?></option>
        <option value="de" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['de']; ?></option>
        <option value="ja" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['ja']; ?></option>
        <option value="zh" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['zh']; ?></option>
        <option value="ar" style="background-color:rgba(255,255,255,0); color:black;"><?php echo $lang['ar']; ?></option>
     </select>
                                    
    
</form>
       
                                
                                
                                
                            </li>
                            
							
							<!-- Search Icon Ends -->
						</ul>
						<!-- Main Menu Ends -->
					</div>
					
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>