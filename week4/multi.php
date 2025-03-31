<?php

    $multi = array(
         "cars"=>array("Skoda"=>array("Octavia", "Superb"),  "Ford"=>array("Ka", "Focus", "Kuga"=>array("petrol", "Diesel")))
        
    );

    echo "<pre>";
        print_r($multi);
    echo "</pre>";



    foreach( $multi["cars"] as $key => $value) {

        foreach($value as $car) {

            echo $car . "<br>";
        }

    }

?>