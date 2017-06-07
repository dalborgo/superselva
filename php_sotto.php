<?php

function getSotto($nome, $cat, $fol, $num, $ord=1, $col = '3')
{
    $out = '
    <div class="portfolio col-sm-6 col-md-' . $col . ' col-xs-12  no-padding ' . $fol . '">
        <div class="portfolio-item">
            <img class="img-responsive" src="images/prod_dett/' . $fol . '/' . $num . '.png" alt="Image">
            <div class="portfolio-overlay">
                <div class="portfolio-info">
                    <a href="product_details_' . $fol . '.php?ord=' . $ord . '">
                        <h4>' . $nome . '</h4>
                    </a>
                </div>
                <div class="portfolio-icons">
                    <a href="product_details_' . $fol . '.php?ord=' . $ord . '">' . $cat . '</a>
                </div>
            </div>
        </div>
    </div>';
    return $out;
}

?>
