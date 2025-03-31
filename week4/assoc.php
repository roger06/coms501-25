<?php


    $mycounties = array(
        'Hants'=>'Winchester',
        'Hants'=>'Basingstoke',
        'Surrey'=>'KoT',
        "West Sussex"=>'Chichester',
        "Cornwall"=>'Truro',

    );

    foreach($mycounties as $county => $town){

        echo "The country town of " . $county . " is " . $town . "<br>";
    }

    //  echo "<pre>";
    //     print_r($mycounties);
    // echo "</pre>";


?>