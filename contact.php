<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Grid Bootstrap">
    <meta name="description" content="">

    <title>Contatti | Superselva s.r.l.</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- icons -->
    <link rel="icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

</head>
<body>

<?php include_once "header.php" ?>

<div class="breadcrumb-section image-bg">
    <div class="overlay"></div>
    <div class="breadcrumb-content">
        <div class="container text-center">
            <h1><span>Contattaci</span></h1>
            <!--<p>The buildings we create inspire us, reflect who we are as a society.</p>-->
        </div>
    </div><!-- breadcrumb content -->
</div><!-- breadcrumb section -->

<div class="contact-form-section section-padding">
    <div id="gmap" style=""></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="contact-info">
                    <h2>Mettiti in contatto con noi</h2>
                    <form id="contact-form" class="contact-form" name="contact-form" method="post" action="php/contact-form.php" novalidate="novalidate">
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <!--<input type="text" class="form-control name-field" required placeholder="Nome e cognome...">-->
                            <input id="name" name="name" type="text" class="form-control name-field"  placeholder="Nome e cognome...">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" id="address" name="address" class="form-control indirizzo-field"  placeholder="Indirizzo...">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" id="nation" name="nation" class="form-control nazione-field"  placeholder="Nazione...">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <input id="email" aria-required="true" name="email" type="email" class="form-control mail-field" data-msg-email="Inserisci un indirizzo email valido." placeholder="E-mail..." data-msg-required="Inserisci l'indirizzo email" required="">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="text" id="phone" name="phone" class="form-control telefono-filed"  placeholder="Telefono...">
                        </div>
                        <div class="col-md-6 col-sm-12 form-group">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input type="text" id="fax" name="fax" class="form-control fax-filed"  placeholder="Fax...">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <i aria-hidden="true"></i>
                            <input type="text" id="product" name="product" class="form-control prodotto-filed"  placeholder="Prodotto di interesse...">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group">
                            <i aria-hidden="true"></i>
                            <textarea name="message" data-msg-required="Inserisci un messaggio." required="" aria-required="true" id="message"  class="form-control message-filed" rows="7" placeholder="Messaggio..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia<i class="fa fa-arrow-right"></i></button>
                        <div class="alert alert-success hidden" id="contactSuccess">
                            <strong>Inviato!</strong> Il tuo messaggio è stato spedito.
                        </div>

                        <div class="alert alert-danger hidden" id="contactError">
                            <strong>Errore!</strong> C'è stato un errore nella spedizione.
                        </div>
                    </form><!-- contact form -->

                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- contact form section -->



<?php include 'piede.php';?>

<!-- script -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/inview.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD8UhNy7vlX1N39_kQOkLklyrYbB0N4kRQ&sensor=true"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    // -------------------------------------------------------------
    //   Google Map
    // -------------------------------------------------------------

    (function(){

        var map;

        map = new GMaps({
            el: '#gmap',
            lat: 45.6144126,
            lng: 11.1373472,
            scrollwheel:false,
            zoom: 15,
            zoomControl : false,
            panControl : true,
            streetViewControl : true,
            mapTypeControl: true,
            overviewMapControl: false,
            clickable: false
        });

        var image = '';
        map.addMarker({
            lat: 45.6144126,
            lng: 11.1373472,
            icon: image,
            animation: google.maps.Animation.DROP,
            verticalAlign: 'bottom',
            horizontalAlign: 'center',
            backgroundColor: '#d3cfcf',
        });

    }());

</script>

<script src="js/jquery.validate.min.js"></script>
<script src="js/contact-form-validation.min.js"></script>
</body>
</html>    