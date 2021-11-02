<?php
echo ($aParamsURL[2]);
if (!empty($aParamsURL[2])):
    $oCar = Car::getCarByLicence($dbc, $aParamsURL[2]);
    if ($oCar == false) {
        throw new Exception("Le numéro de série n'existe pas !", '9999');
    }
endif;
include('views/carSingleView.php');