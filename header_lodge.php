<header>
	<div class="header-area ">
			<div id="sticky-header" class="main-header-area">
					<div class="container-fluid p-0">
							<div class="row align-items-center no-gutters">
									<div class="col-xl-5 col-lg-6">
											<div class="main-menu  d-none d-lg-block">
													<nav>
															<ul id="navigation">
																	<li><a href="index.php">Home</a></li>
																	<?php 
																		if(basename($_SERVER["REQUEST_URI"], ".php") == "index_lodge") {
																			echo("<li><a class=\"active\" href=\"index_lodge.php\">Lodge</a></li>");
																		} else {
																			echo("<li><a href=\"index_lodge.php\">Lodge</a></li>");
																		}
																	?>

																	<?php 
																		if(basename($_SERVER["REQUEST_URI"], ".php") == "about_lodge") {
																			echo("<li><a class=\"active\" href=\"about_lodge.php\">Informations</a></li>");
																		} else {
																			echo("<li><a href=\"about_lodge.php\">Informations</a></li>");
																		}
																	?>

																	<?php 
																		if(basename($_SERVER["REQUEST_URI"], ".php") == "rooms_lodge") {
																			echo("<li><a class=\"active\" href=\"rooms_lodge.php\">Chambres</a>");
																		} else {
																			echo("<li><a href=\"rooms_lodge.php\">Chambres</a>");
																		}
																	?>
																		<ul class="submenu">
																				<li><a href="rooms_lodge.php">Bungalow</a></li>
																				<li><a href="rooms_lodge_chambre.php">Chambre</a></li>
																		</ul>
																	</li>

																	<?php 
																			if(basename($_SERVER["REQUEST_URI"], ".php") == "contact") {
																				echo("<li><a class=\"active\" href=\"contact.php\">Contact | Accès</a></li>");
																			} else {
																				echo("<li><a href=\"contact.php\">Contact | Accès</a></li>");
																			}
																		?>

																	
																</ul>
													</nav>
											</div>
									</div>
									<div class="col-xl-2 col-lg-2">
											<div class="logo-img">
													<a href="index_lodge.php">
														<img src="img/logo.svg" alt="logo hazavana">
													</a>
											</div>
									</div>
									<div class="col-xl-5 col-lg-4 d-none d-lg-block">
											
											<div class="book_room">
													<div class="fb_cadre">
														<a href="https://www.facebook.com/HAZAVANA.LODGE.foulpointe" target="_blank" rel="noreferrer noopener">
															<img src="./img/fb.png" alt="facebook">																
														</a>
													</div>
													<div class="book_btn d-none d-lg-block">
														<a class="popup-with-form font-weight-bold" href="#add_resa">RESERVER</a>
													</div>
											</div>
									</div>
									<div class="col-12">
											<div class="mobile_menu d-block d-lg-none"></div>
									</div>
							</div>
					</div>
			</div>
	</div>
</header>