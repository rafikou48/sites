<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gateway Informatique</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet">
	  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ0EKYkpFkT4EiBmK5fRFGYivF8vLWFlk&callback=initMap" type="text/javascript"></script>
  
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
					<div class="site-logo">
						<a href="index.html" class="brand">
							<img src="images/logo_gateway.png" class="img-responsive" alt="Gateway Informatique"> 
						</a>
					</div>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							  <li><a href="#home">Accueil</a></li>
							  <li><a href="#about">A propos de nous</a></li>
							  <li><a href="#portfolio">Portfolio</a></li>
							  <li><a href="#features">Nos projets</a></li>				                                                                  								  
							  <li><a href="#contact">Contact</a></li>
						</ul>
					</div>
					<!-- /.Navbar-collapse -->		 
			</div>
		</div>		
	</nav>
   
    <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/datacenter03.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="images/datacenter04.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/datacenter05.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>
   
	<section id="about">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>A propos de nous</h2>
					<hr>					
					<p class="lead">Gateway est une structure mettant en relation les jeunes talents de l'informatique et le monde de l'industrie.</p>
				</div>
			</div>
		</div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
					<img src="images/etude.png" class="img-responsive" />
					<p>Vos projets peuvent ??tre nos challenges.</p>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  P??dagogie
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/pedagogie.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Toujours vers de nouvelles technologies</h4>
                                             <p>C'est en consultant les experts m??tiers et les p??dagogues de renom que l'on parvient ?? une pertinence technologique.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Infrastructure
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Tout est mis en oeuvre pour maximiser l'efficience de la production. Pr??t de mat??riel, licences et outils.</p>
								</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Expertise
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Dix ann??es d'expertise ont ??t?? mis ?? profit dans pr??s d'une centaine de projets innovants.</p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Apport
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
								   <p>Concentrez-vous sur votre m??tier. Nous sommes ?? votre disposition pour vous accompagner dans l'??laboration de votre syst??me d'information.</p>
								</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->
   
	<section id="portfolio">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>Portfolio</h2>
					<hr>					
					<p class="lead">La polyvalence est notre quotidien.</p>
				</div>
			</div>
		</div>
	
        <div class="container">
			<div class="col-lg-12">		
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".securite">S??curit??</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".reseaux">R??seaux</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".conception">Conception</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".virtualisation">Virtualisation</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".gestion">Gestion</a></li>
				</ul><!--/#portfolio-filter-->

				<div class="row">
					<div class="portfolio-items">
						<div class="portfolio-item conception gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/application_mobile.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Application mobile</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/application_mobile.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>
						</div><!--/.portfolio-item-->

						<div class="portfolio-item conception col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/databases.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Base de donn??es</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/databases.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

						<div class="portfolio-item securite reseaux col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/Cisco01.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Cisco</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/Cisco01.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>        
						</div><!--/.portfolio-item-->

						<div class="portfolio-item virtualisation col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/hyper-v.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Hyper-V</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/hyper-v.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>           
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item securite virtualisation col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/docker01.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Docker</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/docker01.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item securite reseaux col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/ids.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">IDS</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/ids.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/active_directory.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Active Directory</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/active_directory.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item securite virtualisation bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/vmware.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">VMware</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/vmware.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item securite reseaux conception gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/ingenierie.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Ing??nierie</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/ingenierie.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item securite reseaux virtualisation col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/linux.jpeg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Linux</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/linux.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item conception gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/nosql.gif" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">NOSql</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/nosql.gif" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item securite reseaux col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/securite_informatique.jpeg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">s??curit?? informatique</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/securite_informatique.jpeg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item conception col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/site_web.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Site WEB</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/site_web.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item securite virtualisation bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/virtualisation-de-stockage.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">virtualisation-de-stockage.jpg</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/virtualisation-de-stockage.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/qualite.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Qualit??</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/qualite.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item securite reseaux col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/zabbix.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Zabbix</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/zabbix.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

			  
						<div class="portfolio-item conception bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/reseau.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">R??seaux</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/reseau.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

						<div class="portfolio-item conception gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/gestion-de-projet-02.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Gestion de projet</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/gestion-de-projet-02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>         
						</div><!--/.portfolio-item-->

						<div class="portfolio-item conception virtualisation gestion col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/ingenierie-logicielle.jpg" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Ingeni??rie logicielle</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/ingenierie-logicielle.jpg rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

						<div class="portfolio-item conception col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/databases.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Databases</a></h3>
										<p></p>
										<a class="preview" href="images/portfolio/full/databases.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->
					</div>
				</div>
			</div>
		</div>
    </section><!--/#portfolio-item-->
	
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="center">
					<div class="col-md-6 col-md-offset-3">
						<h2>Nos projets</h2>
						<hr>					
						<p class="lead">Gateway vous guidera dans la conception, la r??alisation et la finalisation de vos projets.</p>
					</div>
				</div>
				
				<div class="col-md-4 wow fadeInLeft">
					<h3>Ing??nierie logiciel</h3>
					<img src="images/portfolio/recent/mcd.jpg" alt="">
					<p>Quelque soit la technologie nous trouverons les ressources qu'il vous manquent ainsi que les m??thodes les mieux adapt??es ?? votre structure.</p>
				</div>
				
				<div class="col-md-4 wow fadeInUp">
					<h3>Architecture Syst??me et r??seaux</h3>
					<img src="images/portfolio/recent/network.jpg" alt="">
					<p>Gateway collabore avec les plus grands ??quipementiers et sp??cialistes afin de pr??coniser des infrastructures de derni??re g??n??ration.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Stockage et virtualisation</h3>
					<img src="images/portfolio/recent/stockage.jpg" alt="">
					<p>Au coeur de votre syst??me d'information la donn??e est votre bien le plus pr??cieux. Gateway vous apportera des solutions professionnelles pour les g??rer s??curitairement.</p>
				</div>
			</div>
		</div>		
	</section>
	
	
		<div class="map">
			<div id="google-map" data-latitude="49.0372892" data-longitude="2.0686121999999614"></div>
		</div>
	<section id="contact">
		<div class="contact-page">
			<div class="container">
				<div class="center">        
					<h2>Contactez nous</h2>						
				</div> 
				<div class="row contact-wrap"> 	
				    <div class="col-md-8 col-md-offset-2">	
                        <div id="sendmessage">Votre message a ??t?? envoy??.</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            
                            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Envoyer le message</button></div>
                        </form>			
                    </div>	
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/#contact-page-->		
	</section>
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
					</div>
                    Gateway Informatique, 12 Rue des Violettes, 95000 Cergy, France
                </div>
				
                <div class="top-bar">			
					<div class="col-lg-12">
					   <!--div class="social">
							<ul class="social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
					   </div-->
					</div>
				</div>
			</div>
		</div>
    </footer><!--/#footer-->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/main.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>