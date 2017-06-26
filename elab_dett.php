<?php
function elab($img, $nome, $fol, $id, $act = '', $desc = '', $pz = '20', $arr = array(16, 24, 36, 46, 60, 80, 100, 120, 180, 220, 280, 320), $tipo = 'GRANE')
{
    $str = '';
    if ($act == 'active') {
        $str = 'active in';
    }
    $dis = ($tipo != '') ? '' : 'display:none';
    $grane = '';
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    $out = '<div role="tabpanel" class="tab-pane fade ' . $str . '" id="' . $id . '">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                            <a class="image-link2" href="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">                            
                                <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-info blog-content">
                            <h4>' . $nome . '</h4>
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz . '</span>
                                    </li>
                                </ul>
                            </div>
                            <p style="">' . $desc . '</p>
                            <div style="padding: 14px;' . $dis . '">
                                <div style="float: left; color: white">' . $tipo . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    return $out;
}

function elab2($img, $nome, $fol, $id, $act = '', $desc = '', $pz = '15 - diametro 130MM ', $pz2 = '27 - diametro 100MM ', $arr = array(120, 220, 280, 320, 400, 600, 800), $arr2 = array('GRSmusso', '4Rosso', '320B', '400B', '600B'), $tipo = 'GRANE', $tipo2 = 'SPECIALI')
{
    $str = '';
    if ($act == 'active') {
        $str = 'active in';
    }
    $dis = ($tipo != '') ? '' : 'display:none';
    $dis2 = ($pz2 != '') ? '' : 'display:none';
    $grane = '';
    $grane2 = '';
    $lung=3;
    if (count($arr)>4)
        $lung=2;
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-'.$lung.'">' . $item . '</div>';
    }
    $lung=3;
    if (count($arr2)>4)
        $lung=2;
    foreach ($arr2 as $item) {
        $grane2 .= '<div class="col-xs-3 col-sm-'.$lung.'">' . $item . '</div>';
    }
    $out = '<div role="tabpanel" class="tab-pane fade ' . $str . '" id="' . $id . '">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                        <a class="image-link2" href="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-info blog-content">
                            <h4>' . $nome . '</h4>
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz . '</span>
                                    </li><br style="'.$dis2.'">
                                    <li style="'.$dis2.'"><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz2 . '</span>
                                    </li>
                                </ul>
                            </div>
                            <p style="">' . $desc . '</p>
                            <div style="padding: 14px;' . $dis . '">
                                <div style="float: left; color: white">' . $tipo . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane . '
                                </div>
                                 <div style="float: left; color: white">' . $tipo2 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane2 . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    return $out;
}

function elab4($img, $nome, $fol, $id, $act = '', $desc = '', $pz = '12', $pz2 = '', $arr = array('<span style="color:#F3CC29">Velox:</span>',46,60,80,120,220,320), $arr2 = array('<span style="color:#F3CC29">Resina:</span>',400,600,800,1000), $arr3 = array('<span style="color:#fff">Lucidanti per marmo:</span>','5/Extra pressati pieni'), $arr4 = array('<span style="color:#fff">Lucidanti per granito:</span>','Superlux pieni'), $tipo = 'GRANE:', $tipo2 = '',$tipo3='',$tipo4='')
{
    $str = '';
    if ($act == 'active') {
        $str = 'active in';
    }
    $dis = ($tipo != '') ? '' : 'display:none';
    $dis2 = ($pz2 != '') ? '' : 'display:none';
    $grane = '';
    $grane2 = '';
    $grane3 = '';
    $grane4 = '';
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr2 as $item) {
        $grane2 .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr3 as $item) {
        $grane3 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    foreach ($arr4 as $item) {
        $grane4 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    $out = '<div role="tabpanel" class="tab-pane fade ' . $str . '" id="' . $id . '">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                        <a class="image-link2" href="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-info blog-content">
                            <h4>' . $nome . '</h4>
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz . '</span>
                                    </li><br style="'.$dis2.'">
                                    <li style="'.$dis2.'"><img src="images/varie/scatola.png"><span style="margin-left: 6px;">Pezzi per scatola: ' . $pz2 . '</span>
                                    </li>
                                </ul>
                            </div>
                            <p style="">' . $desc . '</p>
                            <div style="padding: 14px;' . $dis . '">
                                <div style="float: left; color: white">' . $tipo . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane . '
                                </div>
                                 <div style="float: left; color: white">' . $tipo2 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane2 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo3 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane3 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo4 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane4 . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    return $out;
}

function elabD1($img,  $nome, $fol, $id, $act = '', $desc = '', $pz = '12', $pz2 = '', $arr = array('<span style="color:#F3CC29">Velox:</span>',46,60,80,120,220,320), $arr2 = array('<span style="color:#F3CC29">Resina:</span>',400,600,800,1000), $arr3 = array('<span style="color:#fff">Lucidanti per marmo:</span>','5/Extra pressati pieni'), $arr4 = array('<span style="color:#fff">Lucidanti per granito:</span>','Superlux pieni'), $tipo = 'GRANE:', $tipo2 = '',$tipo3='',$tipo4='')
{
    $str = '';
    if ($act == 'active') {
        $str = 'active in';
    }
    $dis = ($tipo != '') ? '' : 'display:none';
    $dis2 = ($pz2 != '') ? '' : 'display:none';
    $grane = '';
    $grane2 = '';
    $grane3 = '';
    $grane4 = '';
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr2 as $item) {
        $grane2 .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr3 as $item) {
        $grane3 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    foreach ($arr4 as $item) {
        $grane4 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    $out = '<div role="tabpanel" class="tab-pane fade ' . $str . '" id="' . $id . '">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                        <a class="image-link2" href="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-info blog-content">
                            <h4>' . $nome . '</h4>
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz . '</span>
                                    </li><br style="'.$dis2.'">
                                    <li style="'.$dis2.'"><img src="images/varie/scatola.png"><span style="margin-left: 6px;">Pezzi per scatola: ' . $pz2 . '</span>
                                    </li>
                                </ul>
                            </div>
                            <p style="">' . $desc . '</p>
                            <div style="padding: 14px;' . $dis . '">
                                <div style="float: left; color: white">' . $tipo . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane . '
                                </div>
                                 <div style="float: left; color: white">' . $tipo2 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane2 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo3 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane3 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo4 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane4 . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';


    return $out;
}

function elabD2($img,  $nome, $fol, $id, $act = '', $desc = '', $pz = '12', $pz2 = '', $arr = array('<span style="color:#F3CC29">Velox:</span>',46,60,80,120,220,320), $arr2 = array('<span style="color:#F3CC29">Resina:</span>',400,600,800,1000), $arr3 = array('<span style="color:#fff">Lucidanti per marmo:</span>','5/Extra pressati pieni'), $arr4 = array('<span style="color:#fff">Lucidanti per granito:</span>','Superlux pieni'), $tipo = 'GRANE:', $tipo2 = '',$tipo3='',$tipo4='')
{
    $str = '';
    if ($act == 'active') {
        $str = 'active in';
    }
    $dis = ($tipo != '') ? '' : 'display:none';
    $dis2 = ($pz2 != '') ? '' : 'display:none';
    $grane = '';
    $grane2 = '';
    $grane3 = '';
    $grane4 = '';
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr2 as $item) {
        $grane2 .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    foreach ($arr3 as $item) {
        $grane3 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    foreach ($arr4 as $item) {
        $grane4 .= '<div class="col-xs-6 col-sm-5">' . $item . '</div>';
    }
    $out='
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                        <a class="image-link2" href="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-info blog-content">
                            <h4>' . $nome . '</h4>
                            <div class="entry-meta">
                                <ul class="list-inline">
                                    <li><img src="images/varie/scatola.png"><span style="margin-left: 6px">Pezzi per scatola: ' . $pz . '</span>
                                    </li><br style="'.$dis2.'">
                                    <li style="'.$dis2.'"><img src="images/varie/scatola.png"><span style="margin-left: 6px;">Pezzi per scatola: ' . $pz2 . '</span>
                                    </li>
                                </ul>
                            </div>
                            <p style="">' . $desc . '</p>
                            <div style="padding: 14px;' . $dis . '">
                                <div style="float: left; color: white">' . $tipo . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane . '
                                </div>
                                 <div style="float: left; color: white">' . $tipo2 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane2 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo3 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane3 . '
                                </div>
                                <div style="float: left; color: white">' . $tipo4 . '</div>
                                <div class="row tab_stile">                                   
                                  ' . $grane4 . '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
';


    return $out;
}

?>
