<?php
  # Iniciando la variable de control que permitirá mostrar o no el modal
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {
    # Caso no exista la cookie entra aquí
    # Creamos la cookie con la duración que queramos
     
    //$expirar = 3600; // muestra cada 1 hora
    //$expirar = 10800; // muestra cada 3 horas
    //$expirar = 21600; //muestra cada 6 horas
    $expirar = 43200; //muestra cada 12 horas
    //$expirar = 86400;  // muestra cada 24 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141045536-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-141045536-1');
	</script>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
    <title>Tambo Yanesha - Area de Conservación Privada</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="TamboYanesha, por sus condiciones geográficas es un refugio natural de flora y fauna, es un lugar perfecto para las personas que quieren retirarse de la vida atareada para venir a un lugar pleno de naturaleza y biodiversidad." />
    <meta name="keywords" content="Tambo Yanesha, yanesha, escapada oxapampa, retiro espiritual, turismo en peru, turismo diferente, turismo vivencial, escapada en peru, vacaciones en peru, yoga en la selva, reiki, comida vegetariana, paseo natural" />
    <meta name="author" content="Kallpa Global" />
    <meta name="MobileOptimized" content="320" />
	
	<link rel="canonical" href="https://tamboyanesha.com">
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="TamboYanesha – Area de Conservación Privada" />
	<meta property="og:description" content="TamboYanesha, por sus condiciones geográficas es un refugio natural de flora y fauna, es un lugar perfecto para las personas que quieren retirarse de la vida atareada para venir a un lugar pleno de naturaleza y biodiversidad." />
	<meta property="og:url" content="https://tamboyanesha.com" />
	<meta property="og:image" itemprop="image" content="https://tamboyanesha.com/images/logo-thumb.webp"/> 
	<meta property="og:site_name" content="Tambo Yanesha - Area de Conservación Privada" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="TamboYanesha, por sus condiciones geográficas es un refugio natural de flora y fauna, es un lugar perfecto para las personas que quieren retirarse de la vida atareada para venir a un lugar pleno de naturaleza y biodiversidad." />
	<meta name="twitter:title" content="Tambo Yanesha - Area de Conservación Privada" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:updated_time" content="1440432930" /> 
	<meta http-equiv="Cache-control" content="public">
	<link rel="icon" href="../img/favicon.png" type="image/png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css"><link rel="stylesheet" href="css/style-font.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
</head>

<body>
	<a href="https://api.whatsapp.com/send?phone=51981598510" class="whatsappfloat" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
	<a href="../index.php" class="smartfloat"><div class="smart-float">Spanish</div></a>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="../img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Programs</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="permacultura.html">Permaculture</a></li>
									<li class="nav-item"><a class="nav-link" href="medicina-natural.html">Natural Medicine</a></li>
									<li class="nav-item"><a class="nav-link" href="cocina-vegetariana.html">Vegetarian Food</a></li>
									<li class="nav-item"><a class="nav-link" href="yoga.html">Yoga</a></li>
									<li class="nav-item"><a class="nav-link" href="reiki.html">Reiki Healing</a></li>
									<li class="nav-item"><a class="nav-link" href="recreacion.html">Recreation</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="nosotros.html">About Us</a></li>
							<li class="nav-item"><a class="nav-link" href="proyecto-tamboyanesha.html">The Project</a></li>
							<li class="nav-item"><a class="nav-link" href="concurso.html">Contest</a></li>
							<li class="nav-item"><a class="nav-link" href="contacto.html">Contact</a></li>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content">
						<p style="font-family:'Roboto', sans-serif;font-weight: 999;color: #FFFFFF;text-transform: uppercase;">Private Conservation Area</p>
						<h2 style="font-family: 'Beyond';">Tambo Yanesha</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature-area section_gap_top" style="padding-top:20px;">
		<div class="container wow fadeInUp">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">
						<h1 style="font-family: 'Beyond';">Enjoy Nature </h1>
						<p>The best way to do it is with harmony and well-being, finding its true essence.</p><br>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>Practice Yoga</h5>
							<p>
								Take a few days in the tropical nature to practice yoga, relax, eat rich and connect with the natural environment.
							</p>
							<a href="yoga.html" class="primary-btn mb-40">Read more</a>
						</div>
						<div>
							<img class="img-fluid" src="../img/service/s1.png" alt="">
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>Relax with Nature</h5>
							<p>
								This program is designed to share with you our beloved site. Come and discover the biodiversity of birds and plants.
							</p>
							<a href="recreacion.html" class="primary-btn mb-40">Read more</a>
						</div>
						<div>
							<img class="img-fluid" src="../img/service/s2.png" alt="">
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>Reiki Healing</h5>
							<p>
								Prepare for a journey of self-discovery as we explore this wonderful healing art and its possibilities.
							</p>
							<a href="reiki.html" class="primary-btn mb-40">Read more</a>
						</div>
						<div>
							<img class="img-fluid" src="../img/service/s4.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area section_gap" style="padding-bottom:30px;">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-lg-5">
					<h1 style="font-family:'Beyond'">The Earth Changes, it is Moment of a Different Experience</h1>
					<p>
						Because of our campaign start together with The Stone Coin, you can buy one of our memberships and access an infinite number of benefits, get more information by contacting us.
					</p>
					<a href="reserva.html" class="primary-btn">Membership Now</a>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<img class="cta-img img-fluid" src="../img/cta-img.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--================ End CTA Area =================-->

	<!--================ Start Trip Package Area =================-->
	<section class="package-area section_gap_top" style="padding-top:50px;">
		<div class="container wow fadeInUp">
			<div class="row d-flex justify-content-center">
				<div class="ol-lg-12">
					<div class="main_title">
						<h1 style="font-family: 'Beyond';">Expand your Mind, Nourish your Soul</h1>
						<p>You know the story of that musician he was struck by lightning and as a result he became a genius of
music? </br>Yes, he was lucky and it is not necessary to happen the lightning, to reach the conditions</br>
necessary for your brain to work 100%</p></br>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="medicina-natural.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p1.jpg" alt="">						
						</div></a>
						<h4 style="text-align:center;">Natural Medicine</h4>
						<p style="text-align:center;">With hundreds of species of medicinal plants, Tambo Yanesha is a Mecca for education and herbal medicine. We provide courses in herbal medicine, comprehensive care and cultivation of different species of mushrooms.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="permacultura.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p2.jpg" alt="">								
						</div></a>
						<h4 style="text-align:center;">Permaculture</h4>
						<p style="text-align:center;">
							The Private Conservation Area "Tambo Yanesha" is one of the most consolidated centers of education on permaculture biosiversos of South America. We offer certification programs and practical training in permaculture design.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="yoga.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p3.jpg" alt="">								
						</div></a>
						<h4 style="text-align:center;">Yoga</h4>
						<p style="text-align:center;">In addition to our daily practices and classes in the community, we regularly organize 200-hour yoga meetings at Tambo Yanesha. Deepen your practice, surrounded by the exuberant Peruvian jungle.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="cocina-vegetariana.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p4.jpg" alt="">								
						</div></a>
						<h4 style="text-align:center;">Organic Food</h4>
						<p style="text-align:center;">This program is designed for one or two people maximum, for an intimate experience and personalized instruction. Get a true taste of vegetarian cuisine with this perfectly blended 4 day retreat.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="recreacion.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p5.jpeg" alt="">								
						</div></a>
						<h4 style="text-align:center;">Recreation</h4>
						<p style="text-align:center;">This program is designed to share with you our beloved site. We have a natural lagoon at your disposal for swimming and a path in the forest where you can appreciate the biodiversity of birds and plants.
</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<a href="reiki.html"><div class="thumb">
							<img class="../img-fluid" src="../img/package/p6.jpg" alt="">								
						</div></a>
						<h4 style="text-align:center;">Reiki Initiation</h4>
						<p style="text-align:center;">Join us at Tambo Yanesha for a journey of self-discovery as we explore this wonderful healing art and its incredible possibilities. Spend three days discovering a new capacity in yourself and being able to achieve health.</p>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!--================ End Trip Package Area =================-->

	<!--================ Start Popular Places Area =================-->
	<section class="popular-places-area section_gap_bottom wow fadeInUp">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<h1 style="font-family: 'Beyond';">Enjoy these Alternate Activities</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="popular-places-slider owl-carousel">
			<a href="../img/places/p1.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="../img/places/p1.jpg" alt="">
				</div>
				<div class="popular-places-text">
					<h4>
						Tambo Recreation
					</h4>
				</div>
			</a>
			<a href="../img/places/p2.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="../img/places/p2.jpg" alt="">
				</div>
				<div class="popular-places-text">
					<h4>
						Permaculture
					</h4>
				</div>
			</a>
			<a href="../img/places/p3.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="../img/places/p3.jpg" alt="">
				</div>
				<div class="popular-places-text">
					<h4>
						Swimming
					</h4>
				</div>
			</a>
			<a href="../img/places/p4.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="../img/places/p4.jpg" alt="">
				</div>
				<div class="popular-places-text">
					<h4>
						Yoga
					</h4>
				</div>
			</a>
		</div>
	</section>
	<!--================ End Popular Places Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area2 section_gap">
		<div class="container wow fadeInUp">
			<div class="row align-items-center">
				<div class="col-lg-5">
					<img class="cta-img2 img-fluid" src="../img/cta-img2.png" alt="">
				</div>
				<div class="offset-lg-2 col-lg-5">
					<h1 style="font-family:'Beyond'">Subscribe for <br>
					    our Newsletter</h1>
					<p>
						Register with your email address to receive news and updates!
					</p>
					<div class="" id="mc_embed_signup2">	
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							method="get" class="form-inline">
							<div class="d-flex flex-row">
								<input class="form-control" name="EMAIL" placeholder="Ingresa Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa Email '"
									required="" type="email">
								<button class="click-btn btn text-uppercase">suscribete</button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
							</div>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End CTA Area =================-->

	<!--================ Start Testimonials Area =================-->
	<section class="testimonials-area section_gap">
		<div class="container wow fadeInUp">
			<div class="testi-slider owl-carousel" data-slider-id="1">
				<div class="item">
					<div class="testi-item">
						<img src="../img/tamboyanesha.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="../img/coinwaypai.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="../img/stonecoin.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================ End Blog Area =================-->

    <!--================  start footer Area =================-->
    <footer class="footer-area">
        <div class="footer_top section_gap_top">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-footer-widget">
                            <h5 class="footer_title">About Tambo Yanesha</h5>
                            <p class="about-text">
							<b>UBICATION:</b> Chontabamba, Provincia de Oxapampa, Deparment Pasco.<br>
							<b>COORDINATES:</b> -10.674066°, -75.507983°</br>
							<b>WHEATER:</b> Annual rainfall ranges from 1,500 mm to 6,000 mm per year,
							the humid and semi warm climate, with average temperatures of 13º C to 20º C.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-footer-widget">
                            <h5>Newsletter</h5>
                            <p>You can receive updates of the phases in the execution of the Tambo Yanesha project </p>
                            <div class="footer-newsletter" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="" method="get" class="form-inline">
                                    <div class="d-flex flex-row">
                                        <input class="form-control" name="EMAIL" placeholder="Ingresa Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa Email '" required="" type="email">
                                        <button class="click-btn btn btn-default"><span class="lnr lnr-location aria-hidden="true"></span></button>
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                                type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-4 col-sm-4">
                        <div class="single-footer-widget mail-chimp">
                            <h5 class="mb-20">We accept The Stone Coin</h5>
                            <center><a href="#"><img class="../img-fluid" src="../img/blog/stonecoin-thumb.png" alt="" style="padding-bottom:10px;"></a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-right">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/tamboyanesha/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!--================ End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/stellar.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../js/owl-carousel-thumb.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/mail-script.js"></script>
	<script src="../vendors/animate-css/wow.min.js"></script>
	<script>
        new WOW().init();
    </script>
	<!--gmaps Js-->
	<script src="../js/theme.js"></script>
	
			<!-- Modal -->
	<div class="modal fade" id="modalInicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index:9999991;">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-personalizado">
		  <div class="modal-header">
			<h2 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Beyond';">Architecture Competition</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<table><tr><td style="width: 60%;">
				<strong>“TAMBO YANESHA”</strong> is integrating the best
				Specialists in architecture and design, for what will be a true
				model community in Oxapampa.
			</td><td style="width: 40%;"></td></tr>
			</table>
		  </div>
		  <div class="modal-footer" style="justify-content: center;">
			<a href="concurso.html" class="btn btn-primary" style="padding: .375rem 5rem; background-color: #fcc62c; color:#000;">Register</a>
		  </div>
		</div>
	  </div>
	</div>
	<?php if($exibirModal === true) : // Si nuestra variable de control "$exibirModal" es igual a TRUE activa nuestro modal y será visible a nuestro usuario. ?>
	  <script>
	  $(document).ready(function()
	  {
		// id de nuestro modal
		$("#modalInicio").modal("show");
	  });
	  </script>
	<?php endif; ?>
</body>

</html>