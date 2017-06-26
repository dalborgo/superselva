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
            <h1>PLATÒ<span> 250MM</span></h1>
            <p>The products we create inspire us, reflect who we are as a society.</p><br>
            <a href="sotto_prodotti_plato.php" class="torna"><span
                        class="freccia"><i class="fa fa-arrow-left"></i></span><span class="tornasc">
                Categorie PLATÒ - PLATORELLI
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
                <li role="presentation" class="<?= $uno ?>"><a href="#uno" data-toggle="tab">MAGNESITE</a></li>
                <li role="presentation" class="<?= $due ?>"><a href="#due" data-toggle="tab">RESINA</a></li>
                <li role="presentation" class="<?= $tre ?>"><a href="#tre" data-toggle="tab">VELOX</a></li>
                <li role="presentation" class="<?= $quattro ?>"><a href="#quattro" data-toggle="tab">LUCIDANTI 5/EXTRA</a></li>
            </ul>
        </div>

        <div class="tab-content service-content">
            <?=elab('57', 'MAGNESITE', 'plato250', 'uno', $uno,'Prodotto in varie granulometrie. È utilizzato su marmi e pietre ','5',array(16,24,36,46,60,80,100,120,180,220,280,320,400
        )) ;?>

            <?=elab('60', 'RESINA', 'plato250', 'due', $due,'Composto con un particolare tipo di legante che ci permette di stabilire il grado di durezza desiderata. La stabilità nel tempo permette di garantire, a qualsiasi clima, la sua particolare performance di SUPER-ABRASIVITÀ. Sono utilizzati per la lavorazione dei marmi. Disponibile in varie durezze. ','5',array(360,'3/4',400,600,800,1000,1200));
            ?>
            <?=elab('71', 'VELOX', 'plato250', 'tre', $tre,'Composto con un particolare tipo di legante che ci permette di stabilire il grado di durezza desiderata. La stabilità nel tempo permette di garantire, a qualsiasi clima, la sua particolare performance di SUPER-ABRASIVITÀ. Sono utilizzati per la lavorazione dei marmi. Disponibile in varie durezze. ','5',array(16,24,36,46,60,80,100,120,180,220,280,320));
            ?>
            <?=elab2('79', 'LUCIDANTI 5/EXTRA:', 'plato250', 'quattro', $quattro,'la nostra produzione ci permette di variare la durezza, senza alterare l’effetto lucidante, soddisfando le più ampie esigenze di lucidatura. ','6','',array('PRESSATO'),array('SINTETICO'),'TIPO','');
            ?>
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