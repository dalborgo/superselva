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
            <h1><span>TANGENZIALI</span></h1>
            <p>The products we create inspire us, reflect who we are as a society.</p>
        </div>
    </div><!-- breadcrumb content -->
</div>

<div class="portfolio-section" style="margin-bottom:80px">
    <div class="portfolio-content">
        <div class="text-center container listaPers">
            <ul class="portfoli-menu">
                <li><a href="#" class="active" data-filter="*">Tutti</a></li>
                <li><a href="#" data-filter=".tan-metallici" class="">Metallici Diamantati</a></li>
                <li><a href="#" data-filter=".tan-resinoidi" class="">Resinoidi Diamantati</a></li>
                <li><a href="#" data-filter=".tan-marmo" class="">Per Marmo</a></li>
                <li><a href="#" data-filter=".tan-granito" class="">Per Granito</a></li>
                <li><a href="#" data-filter=".tan-spazzole" class="">Spazzole</a></li>

            </ul>
        </div>
        <div class="row portfolio-filter">
            <?= getSotto('METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','tan-metallici','17') ?>
            <?= getSotto('METALLICI DIAMANTATI', 'METALLICI DIAMANTATI','tan-metallici','01') ?>
            <?= getSotto('140MM E 170MM', 'RESINOIDI DIAMANTATI','tan-resinoidi','51') ?>
            <?= getSotto('140MM E 170MM', 'RESINOIDI DIAMANTATI','tan-resinoidi','39') ?>
            <?= getSotto('140MM E 170MM', 'RESINOIDI DIAMANTATI','tan-resinoidi','37') ?>
            <?= getSotto('140MM E 170MM', 'RESINOIDI DIAMANTATI','tan-resinoidi','28') ?>
            <?= getSotto('140MM E 170MM', 'RESINOIDI DIAMANTATI','tan-resinoidi','28') ?>
            <?= getSotto('LUCIDANTI "5 EXTRA" PER MARMO', 'PER MARMO','tan-marmo','65') ?>
            <?= getSotto('SINTETICO PER GRANITO 140MM e 170MM', 'PER GRANITO','tan-granito','64') ?>
            <?= getSotto('MAGNESITE PER GRANITO 140MM e 170MM', 'PER GRANITO','tan-granito','38') ?>
            <?= getSotto('MAGNESITE PER GRANITO 140MM e 170MM', 'PER GRANITO','tan-granito','09') ?>
            <?= getSotto('LUCIDANTI "SUPERLUX" PER GRANITO', 'PER GRANITO','tan-granito','64') ?>
            <?= getSotto('SPAZZOLE', 'PER GRANITO','tan-spazzole','14') ?>
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