<!DOCTYPE html>
<?php
require_once("config.php");
?>

<html>
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css"> body{ background:url('fond.jpg') no-repeat; } </style> 
		<title>Interface acceuillant ch1</title>
	<link rel="style" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	
</head>
<body


<div style="position:relative;">
  <div style="margin-top:30px;width:400px;height:150px;padding:20px;border-radius:10px;border:10px solid #45E5F7;font-size:120%;">
	<h1> <FONT color= #40B3DF> BTS SN IR </br> La Croix Rouge </br>  La Salle </FONT> </h1>
   	 	<div style="letter-spacing:5px;font-size:15px;position:relative;left:25px;top:10px;">Serveur de streaming</div>
    	<div style="color:#40B3DF;letter-spacing:12px;font-size:15px;position:relative;left:25px;top:10px;">2018
   	 <span style="background-color:#00DCF4;color:#ffffff;"> Projet</span></div>
   </div>



<video width="480" height="320" style="top:100%;left:62%;position:relative" controls  ;>
  <source src="Bullet.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

  Your browser does not support the video tag.
</video>


<div>
<p>
<noscript> Votre navigateur ne supporte pas le Javascript, nous tentons d'améliorer le site pour une meilleure adaptation, merci de votre compréhension!</noscript>
<p id="demo">Pour savoir sur l'interface de quelle chambre vous êtes, cliquer sur "chambre?"</p>
<button type="button" onclick="Chambre()">Chambre?</button>
<script>
function Chambre() { 
    document.getElementById("demo").innerHTML = "Vous êtes sur l'interface de la chambre 1.";
}
</script>
</p>
</div>
	



<p>
Merci de choisir le film
</p>

<?php

//Connexion à la BDD
$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

//Preparation de la requete
$query= "SELECT * FROM films"; 

//Execution de la requete
$resultat= $conn->query($query); 

echo '<div><form method="GET" action=""><SELECT name="chemin" size="1">';

while ($row = $resultat->fetch_assoc()) {
    echo '<OPTION value="'.$row["chemin"] . '" >'.$row["titre"].'</OPTION>';
}

echo '</SELECT>';
echo '<input type="submit" value="PLAY">';
echo '</FORM><br></div>';

?>

</br>





<div>
<input type="button" name="play" id="btn_play" value="PLAY"/>
<input type="button" name="stop" id="btn_stop" value="STOP"/>
<input type="button" name="fullscreen" id="btn_fullscreen" value="FULLSCREEN"/>
<input type="button" name="pause" id="btn_pause" value="PAUSE"/>
</div>






 <script type="text/javascript">

		$("#btn_play").click(function() {
			$.get( "vlc/requests/status.json?command=in_play&input=videos/aba.mp4",function( data ) {
  				alert( "Data Loaded: " + data );
			});			
		});

		$("#btn_stop").click(function() {
			$.get( "vlc/requests/status.json?command=pl_stop");
				alert("le film est stoppé");
		});

		$("#btn_fullscreen").click(function() {
			$.get( "vlc/requests/status.json?command=fullscreen");
				alert("le film est mit en plein écran");
		});

		$("#btn_pause").click(function() {
			$.get( "vlc/requests/status.json?command=pl_pause&id=videos/aba.mp4");
				alert("le film est mit sur pause");
		});

</script>




</body>
</html>

