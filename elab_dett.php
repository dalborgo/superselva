<?php
function elab($img, $nome, $fol,$id, $act = '', $desc='', $pz='20', $arr=array(16,24,36,46,60,80,100,120,180,220,280,320), $tipo='GRANE')
{
    $str='';
    if ($act == 'active') {
        $str = 'active in';
    }
    $grane = '';
    foreach ($arr as $item) {
        $grane .= '<div class="col-xs-3 col-sm-2">' . $item . '</div>';
    }
    $out = '<div role="tabpanel" class="tab-pane fade ' . $str . '" id="'.$id.'">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="service-image">
                            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $img . '.png" alt="image">
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
                            <div style="padding: 14px">
                                <div style="float: left; color: white">'.$tipo.'</div>
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

?>
