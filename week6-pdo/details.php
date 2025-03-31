<h1>Data for...</h1>
<?php
$db = new PDO('mysql:host=localhost; dbname=football;','root','');
$sql = "select * from player WHERE playerid =  " . $_GET['playerid'];
$stmt = $db->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo htmlentities($row['firstname']). " ".htmlentities($row['lastname']) ."<br>";
echo htmlentities($row['email']). " ".htmlentities($row['ice']) ."<br>";
    
    
 








?>