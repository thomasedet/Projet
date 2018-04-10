<!DOCTYPE html>
<?php
require_once("config.php");
//require_once("bootstrap.php");
?>

<html>
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css"> body{ background:url('images/fond.jpg') no-repeat; } </style> 
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
  <source src="images/Bullet.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

  Your browser does not support the video tag.
</video>

<!--
<div  class="bts retour">
	<a href="index.php" class="btn btn-primary">Accueil</a>		button accueil
</div> -->


<div>
<p style="color:#40B3DF;border:2px solid #40B3DF;width:600px">Vous êtes sur l'interface de la chambre 1, cliquer pour faire disparaître.</p>


<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script>
</div>


<div style="letter-spacing:2px">
<h5> <FONT color= #0079F2> Recherche du chemin pour: </FONT> </h5>
</div>

<br>


<?php



//Connexion à la BDD
$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

//Preparation de la requete
$query= "SELECT * FROM films"; 

//Execution de la requete
$resultat= $conn->query($query); 

echo '<div><form method="GET" action=""><SELECT name="chemin" size="1">';


//création du tableau en fonction de la base de données sql
while ($row = $resultat->fetch_assoc()) {
    echo '<OPTION value="'.$row["chemin"] . '" >'.$row["titre"].'</OPTION>';	
}

echo '</SELECT>';
echo '<input type="submit" value="recherche">';
echo '</FORM><br></div>';

//identification de variable
$Lechemin = $_GET["chemin"];
	

?>

<script type="text/javascript">
var MyJSSchemin = '<?PHP echo $Lechemin;?>'
//alert( MyJSSchemin);    //affiche en alerte le chemin choisis par l'utilisateur
</script>



</br>

<div>
<input type="button" name="play" id="btn_play" value="PLAY"/>
<input type="button" name="stop" id="btn_stop" value="STOP"/>
<input type="button" name="fullscreen" id="btn_fullscreen" value="FULLSCREEN"/>
<input type="button" name="pause" id="btn_pause" value="PAUSE"/>
</div>





<script type="text/javascript">



		$("#btn_play").click(function() {
			$.get( "vlc/requests/status.json?command=in_play&input=videos/"+MyJSSchemin,function( data ) {
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
			$.get( "vlc/requests/status.json?command=pl_pause&id=videos/"+MyJSSchemin);
				alert("le film est mit sur pause");
		});


</script>



</body>
</html>

