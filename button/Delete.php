

<?php


$titredel=$_POST['titredel'];


//connexion
$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

//préparation de la trame
$sql = "DELETE FROM `films` WHERE `films`.`titre` = '$titredel';";	//requete ok


//
$result = $conn->query($sql); 
if(!result) die("Echec d'enregistrement : " . $conn->error);

$conn->close();
?>

