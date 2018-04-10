
<?php

$titre=$_FILES['films']['name'];


$taille=$_FILES['films']['size'];

/*
$chemin=$_FILES['films']['tmp_name'];
*/
$chemin=$titre;


$sql = "INSERT INTO films
		VALUES(NULL,'$titre','$taille',NULL,'$chemin');";

$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

$result = $conn->query($sql); // a changer
if(!result) die("Echec d'enregistrement : " . $conn->error);

$conn->close();
?>

