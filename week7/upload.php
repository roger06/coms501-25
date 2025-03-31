<?php
    // echo '<pre>';         print_r($_FILES['myfile']);     echo '</pre>';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $allowed_types = array("jpg", "jpeg", "png");


    $orig_name = $_FILES['myfile']['name'];
    $tmp_name = $_FILES['myfile']['tmp_name'];

    $new_name = microtime().".txt";
    $new_name = $orig_name;

    $path_parts = pathinfo($orig_name);
    echo '<pre>'; print_r($path_parts);  echo '</pre>';

    if (!in_array($path_parts['extension'],  $allowed_types)) {

            echo "not an image type";
            die();

    }


    if (move_uploaded_file($_FILES['myfile']['tmp_name'], "uploads/" . $new_name  )) {

        echo "File uploaded - " . $new_name;

        if(in_array($path_parts['extension'],  $allowed_types)){

            ?>
            <img src="uploads/<?php echo  $new_name;?>" alt="">
            <?php


        }
    } 

    else echo "File upload failed";
  
;

?>