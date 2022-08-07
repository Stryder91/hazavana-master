<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Chambre | Hazavana Lodge</title>
    <meta name="description" content="Bungalow Hazavana Hotel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
		@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}</style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include("header_lodge.php"); ?>
    <!-- header-end -->

    <div class="about_area" id="presentation_hotel">
	    <div class="mb-5 container">
			<div class="row ">

                <div class="col-lg-6 img_chambre_title_container">
                    <div class="image-container img_1 img_chambre_title">
                        <img src="img/batient_ext.jpg" alt="photo hotel bungalow">
                    </div>
                </div>
                <div class="offset-lg-1"></div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Profitez d'une remise de 5% avec une réservation de plus de 5 nuitées!</span>
                            <h3>Chambre famillial</h3>
                        </div>
                        <p>Confort en famille </p>
                        <ul>
                            <li class="font-weight-bold">
                                🥥  Bungalow pour 6 personnes
                            </li>
                            <li>
                                🥥  2 grands lits double  
                            </li>
														<li>
                                🥥  1 lit superposé  
                            </li>
                            <li>
                                🥥  Wifi, canal+ 
                            </li>
														<li>
                                🥥  Terrasse personelle
                            </li>
                            <li>
                                🥥  Douche, toilettes
                            </li>
                        </ul>
                        <p class="mt-5">
                            <span>Prix : <span id="amountPrice"></span> AR / nuitée</span>
                        </p>
                        <a class="popup-with-form line-button" href="#add_resa">RESERVER</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-content mt-5 d-flex">
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="img/chambre3.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>	
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="img/bathroom.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>	
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="img/vue_chambre.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>	
						<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							<img src="img/chambre_bas.jpg" class="img-fluid mx-auto d-block" alt="img1">
						</div>	

            <!-- <div class="container-fluid">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
													<img src="img/chambre_bas.jpg" class="img-fluid mx-auto d-block" alt="img1">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/bathroom.jpg" class="img-fluid mx-auto d-block" alt="img2">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/batient_ext.jpg" class="img-fluid mx-auto d-block" alt="img3">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/chambre2.jpg" class="img-fluid mx-auto d-block" alt="img4">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/chambre3.jpg" class="img-fluid mx-auto d-block" alt="img5">
                        </div>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/bathroom.jpg" class="img-fluid mx-auto d-block" alt="img3">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>


    <?php include("contact_tel.php"); ?>

    <?php include("gallery.php"); ?>

    <?php include("footer.php"); ?>

    <?php include("form_add_resa.php"); ?>

    <?php include("scriptsJS.php"); ?>

    <script>
        const currentMonth = new Date().getMonth() + 1;
        // July & August
        if (currentMonth == 7 || currentMonth == 8) {
            document.getElementById("amountPrice").textContent="130 000"
        } else {
            document.getElementById("amountPrice").textContent="100 000"
        }
    </script>
</body>


</html>