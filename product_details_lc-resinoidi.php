<?php
$uno='';$due='';$tre='';$quattro='';
if(isset($_GET["ord"])){
    $ord=$_GET["ord"];
}else{
    $ord=1;
}
if ($ord == 1)
    $uno='active';
elseif ($ord == 2)
    $due='active';
elseif ($ord == 3)
    $tre='active';
else
    $quattro = 'active';


?>

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
<?php include_once "elab_dett.php" ?>

<div class="breadcrumb-section image-bg">
    <div class="overlay"></div>
    <div class="breadcrumb-content">
        <div class="container text-center">
            <h1>LEVIGACOSTE<span> RESINOIDI DIAMANTATI</span></h1>
            <p>The products we create inspire us, reflect who we are as a society.</p><br>
            <a href="sotto_prodotti_lc.php" class="torna"><span
                        class="freccia"><i class="fa fa-arrow-left"></i></span><span class="tornasc">
                Categorie Levigacoste
            </span></a>&nbsp;
            <a href="sotto_prodotti_utens.php" class="torna2"><span
                        class="freccia2"><i class="fa fa-arrow-left"></i></span><span class="tornasc">
                Categorie Diamantati
            </span></a>
        </div>
    </div><!-- breadcrumb content -->
</div>

<div class="service-section section-padding">
    <div class="container">
        <!--<div class="section-title text-center">
            <h1>Our Services</h1>
            <h2>We Offer Our Clients</h2>
        </div>-->
     <div class="service-tabs text-center">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?= $uno ?>"><a href="#uno" data-toggle="tab">RESINOIDI DIAMANTATI FIORE</a></li>
                <li role="presentation" class="<?= $due ?>"><a href="#due" data-toggle="tab">RESINOIDI DIAMANTATI SMUSSO</a></li>
                <li role="presentation" class="<?= $tre ?>"><a href="#tre" data-toggle="tab">RESINOIDI DIAMANTATI TORO</a></li>
                <li role="presentation" class="<?= $quattro ?>"><a href="#quattro" data-toggle="tab">TERZAGO RESINOIDI DIAMANTATI</a></li>

            </ul>
        </div>

        <div class="tab-content service-content">
        <?= elabD1(52, 'RESINOIDI DIAMANTATI FIORE', 'lc-resinoidi', 'uno', $uno,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),array(''),array(''),'GRANE','') ?>
        <?= elabD2(55, 'RESINOIDI DIAMANTATI FIORE', 'lc-resinoidi', 'uno', $uno,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),array(''),array(''),'GRANE','') ?>
        <?= elabD2(59, 'RESINOIDI DIAMANTATI FIORE', 'lc-resinoidi', 'uno', $uno,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),array(''),array(''),'GRANE','').'</div>' ?>
        <?= elab2(68, 'RESINOIDI DIAMANTATI SMUSSO', 'lc-resinoidi', 'due', $due,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),'GRANE','') ?>
        <?= elabD1(69, 'RESINOIDI DIAMANTATI TORO', 'lc-resinoidi', 'tre', $tre,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),array(''),array(''),'GRANE','') ?>
        <?= elabD2(72, 'RESINOIDI DIAMANTATI TORO', 'lc-resinoidi', 'tre', $tre,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),array(''),array(''),'GRANE','').'</div>' ?>
        <?= elab2(68, 'TERZAGO RESINOIDI DIAMANTATI', 'lc-resinoidi', 'quattro', $quattro,'','a richiesta','',array(16,24,36,46,60,80,120),array(''),'GRANE','') ?>

        </div>
    </div><!-- container -->
</div><!-- service section -->

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