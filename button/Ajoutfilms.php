<?php


$titre=$_POST['titre'];
$taille=$_POST['taille'];
$date=$_POST['date'];
$chemin=$_POST['chm'];


if ($_POST['taille'] = NULL){
$sql = "INSERT INTO films
		VALUES(NULL,'$titre','NULL','$date','$chemin');";

}

else {
$sql = "INSERT INTO films
		VALUES(NULL,'$titre','$taille','$date','$chemin');";

}




$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

$result = $conn->query($sql); // a changer
if(!result) die("Echec d'enregistrement : " . $conn->error);

$conn->close();

//header("refresh:1; url=biblio.php");
?>


