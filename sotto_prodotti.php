<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Asten Srl">
    <meta name="description" content="">

    <title>Homepage | Superselva S.r.l.</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Developed By Grid Bootstrap -->

</head>
<body>

<?php include_once "header.php" ?>
<?php include_once "php_sotto.php" ?>
<div class="breadcrumb-section image-bg">
    <div class="overlay"></div>
    <div class="breadcrumb-content">
        <div class="container text-center">
            <h1><span>FRANKFURT</span></h1>
            <p>The products we create inspire us, reflect who we are as a society.</p><br>
            <a href="home_prodotti.php" class="torna"><span
                        class="freccia"><i class="fa fa-arrow-left"></i></span><span class="tornasc">
                Categorie Prodotti
            </span></a>

        </div>
    </div><!-- breadcrumb content -->
</div>

<div class="portfolio-section" style="margin-bottom:80px">
    <div class="portfolio-content">
        <div class="text-center container listaPers">
            <ul class="portfoli-menu">
                <li><a href="#" class="active" data-filter="*">Tutti</a></li>
                <li><a href="#" data-filter=".verona" class="">Verona</a></li>
                <li><a href="#" data-filter=".germania" class="">Germania</a></li>
                <li><a href="#" data-filter=".lucidanti">Lucidanti</a></li>
                <li><a href="#" data-filter=".gomma">Gomma Pioli</a></li>
                <li><a href="#" data-filter=".metallici">Metallici Diamantati</a></li>
                <li><a href="#" data-filter=".resinoidi">Resinoidi Diamantati</a></li>
                <li><a href="#" data-filter=".pulitori">Pulitori</a></li>
                <li><a href="#" data-filter=".spazzole">Spazzole per Anticato</a></li>
                <li><a href="#" data-filter=".spugne">Spugne per Levigato</a></li>
            </ul>
        </div>
        <div class="row portfolio-filter">
            <?= getSotto('SINTETICO VELOX', 'VERONA','verona','84',1) ?>
            <?= getSotto('RESINA SUPER-SINTETICO', 'VERONA','verona','85',2) ?>
            <?= getSotto('MAGNESITE PER GRANITO', 'VERONA','verona','87',3) ?>
            <?= getSotto('GERMANIA', 'GERMANIA','germania','24') ?>
            <?= getSotto('GOMMA PIOLI', 'GOMMA PIOLI','gomma','11') ?>
            <?= getSotto('5/EXTRA', 'LUCIDANTI','lucidanti','61') ?>
            <?= getSotto('UTENSILI METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','metallici','40',1) ?>
            <?= getSotto('UTENSILI METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','metallici','41',2) ?>
            <?= getSotto('UTENSILI METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','metallici','42',3) ?>
            <?= getSotto('UTENSILI METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','metallici','43',4) ?>
            <?= getSotto('RESINOIDI DIAMANTATI', 'RESINOIDI DIAMANTATI','resinoidi','23') ?>
            <?= getSotto('RESINOIDI DIAMANTATI', 'RESINOIDI DIAMANTATI','resinoidi','27') ?>
            <?= getSotto('PULITORI', 'PULITORI','pulitori','10') ?>
            <?= getSotto('PULTIORI', 'PULITORI','pulitori','25') ?>
            <?= getSotto('PULTIORI', 'PULITORI','pulitori','63') ?>
            <?= getSotto('PULTIORI', 'PULITORI','pulitori','82') ?>
            <?= getSotto('SPAZZOLE', 'SPAZZOLE PER ANTICATO','spazzole','13') ?>
            <?= getSotto('SPAZZOLE', 'SPAZZOLE PER ANTICATO','spazzole','15') ?>
            <?= getSotto('SPUGNE', 'SPUGNE PER LEVIGATO','spugne','07') ?>
            <?= getSotto('SPUGNE', 'SPUGNE PER LEVIGATO','spugne','36') ?>

        </div> <!-- row -->
    </div> <!-- portfolio content -->
</div> <!-- portfolio section -->

<?php include 'piede.php'; ?>
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
<script src="js/custom.js"></script>
</body>
</html>