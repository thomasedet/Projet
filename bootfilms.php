<!DOCTYPE html>
<?php
require_once("config.php");
require_once("bootstrap.php");
?>
<html lang="en">
<head>
  <title>Diffusion Films</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootfilms.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h3> <FONT color= #40B3DF> BTS SN IR </br> La Croix Rouge </br>  La Salle </FONT> </h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="biblio.php">Gestion des films / bibliothèque</a></li>
		<li><a href="reglages.php">Réglages</a></li>
      </ul><br>
		 <img src="images/croixrouge.jpg" class="img-rounded" alt="croixrouge" width="305" height="150" > 
      
    </div>	

      <div class="col-sm-9">
      <h4><small>Bienvenue, vous êtes sur le canal 1.</small></h4>
      <hr>
      <h2>
	  <img src="images/homer.jpg" alt="Homer" style="float:right;width:100px;height:100px;">
	  Diffusion de films pour Homer</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Version 2018</h5>
      <h5><span class="label label-primary">films</span></h5><br>
      <div>

<div>
<p style="color:#40B3DF;border:2px solid #40B3DF;width:470px">Vous êtes sur l'interface de la chambre 1, cliquer pour faire disparaître.</p>
</div>

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
if($conn->connect_error) die($conn->connect_error); //die = exit

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
<!-- Les boutons utilisés -->
<input type="button" name="play" id="btn_play" value="PLAY"/>
<input type="button" name="stop" id="btn_stop" value="STOP"/>
<input type="button" name="fullscreen" id="btn_fullscreen" value="FULLSCREEN"/>
<input type="button" name="pause" id="btn_pause" value="PAUSE"/>








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
      <br><br>
      
      <h4><small>Bienvenue, vous êtes sur le canal 2.</small></h4>
      <hr>
      <h2>
	  <img class="fm" src="images/titeuf.jpg" alt="titeuf" style="float:right;width:100px;height:100px;">
	  Diffusion de films pour Titeuf</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Version 2018</h5>
	  <h5><span class="label label-primary">films</span></h5><br>
	  <div>
<p style="color:#40B3DF;border:2px solid #40B3DF;width:470px">Vous êtes sur l'interface de la chambre 2, cliquer pour faire disparaître.</p>


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
<input type="button" name="play" id="btn_play2" value="PLAY"/>
<input type="button" name="stop" id="btn_stop2" value="STOP"/>
<input type="button" name="fullscreen" id="btn_fullscreen2" value="FULLSCREEN"/>
<input type="button" name="pause" id="btn_pause2" value="PAUSE"/>
</div>





<script type="text/javascript">



		$("#btn_play2").click(function() {
			$.get( "vlc/requests/status.json?command=in_play&input=videos/"+MyJSSchemin,function( data ) {
  				alert( "Data Loaded: " + data );
			});			
		});

		$("#btn_stop2").click(function() {
			$.get( "vlc/requests/status.json?command=pl_stop");
				alert("le film est stoppé");
		});

		$("#btn_fullscreen2").click(function() {
			$.get( "vlc/requests/status.json?command=fullscreen");
				alert("le film est mit en plein écran");
		});

		$("#btn_pause2").click(function() {
			$.get( "vlc/requests/status.json?command=pl_pause&id=videos/"+MyJSSchemin);
				alert("le film est mit sur pause");
		});


</script>

      <hr>
      
	  	
      
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-right">
 	
	<div  class="col-sm-7 text-right">
	 <p><span class="badge">1</span> Un oubli? Une question? Visualiser la vidéo de présentation!
</div>
<div  class="col-sm-5">
		<a href="index.php" class="btn btn-primary">Home</a>
	
	
</div>
</footer>

</body>
</html>
