<?php include("./admin/fonctions.php"); ?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hazavana Hotel | Moramanga</title>
    <meta name="description" content="Hazavana Hotel Madagascar Tourisme Moramanga Foulpointe Paysage Plage Vacances Chambres Confort">
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
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- header-start -->
    <?php include("header_lodge.php"); ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_hotel_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hazavana Hôtel</h3>
                                <p>Bienvenue à Moramanga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_hotel_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hazavana Hôtel</h3>
                                <p>Bienvenue à Moramanga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_hotel_3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Hazavana Hôtel</h3>
                                <p>Bienvenue à Moramanga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <?php include("lodge.php"); ?>

    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <a href="about.php">
        <div class="video_area_inner text-center">
                <span>Découvrez l'hôtel et ses alentours</span>
                <h3>Hazavana Lodge à Foulpointe</h3>
            </div>
        </a>
    </div>
    <!-- video_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <span class="mb-20 mt-20">Profitez de l'hotel</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms single_rooms_quatro">
                <div class="room_thumb room_thumb_quatro">
                    <img src="img/piscine4.jpg" alt="piscine">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Il fait chaud ? Rafraichissez-vous!</span>
                            <h3>Piscine à l'image de mickey</h3>
                        </div>
                        <a href="about_lodge.php" class="line-button">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms single_rooms_quatro">
                <div class="room_thumb room_thumb_quatro">
                    <img src="img/babyfoot2.jpg" alt="babyfoot">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Amusez-vous à marquer des buts!</span>
                            <h3>Baby-foots pour adultes et enfants</h3>
                        </div>
                        <a href="about_lodge.php" class="line-button">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms single_rooms_quatro">
                <div class="room_thumb room_thumb_quatro">
                    <img src="img/chalet2.jpg" alt="chalet">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Déjeuner, discuter et se relaxer ?</span>
                            <h3>Chalet central devant la piscine </h3>
                        </div>
                        <a href="about_lodge.php" class="line-button">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms single_rooms_quatro">
                <div class="room_thumb room_thumb_quatro">
                    <img src="img/plage2.jpg" alt="page">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Sur l'eau ou dans l'eau, découvrez la barrière de corail</span>
                            <h3>Tour de pirogue <br/> à quelques minutes de l'hotel</h3>
                        </div>
                        <a href="about_lodge.php" class="line-button">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

    <?php include("contact_tel.php"); ?>

    <?php include("gallery.php"); ?>

    <?php include("footer.php"); ?>

    <!-- form itself end-->
    <?php include("form_add_resa.php"); ?>
    <!-- form itself end -->
    <?php include("scriptsJS.php"); ?>
    
</body>

</html>