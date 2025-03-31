<?php
// connect to mySQL
// host
// user
// pw
//  database.

error_reporting(E_ALL);

ini_set('display_errors', 1);

//connect to db


$db = new PDO('mysql:host=localhost; dbname=football;','root','');
//host, user, pw    - change credential for your environment. XAMPP on Uni PCs should be user = root but no password

$sql = "select playerid, firstname, lastname from player ORDER BY lastname DESC LIMIT 500 ";

echo $sql;

$result = $db->query($sql);

foreach($result  as $row  ){

    echo '<a href="details.php?playerid='. $row['playerid']. '    ">';
    
    echo $row['firstname'] . " " . $row['lastname'] .   "<br>";
    
    echo '</a>';
}

// var_dump($db);

?>

  