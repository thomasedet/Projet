<!DOCTYPE html>
<?php
require_once("config.php");
?>
<html lang="en">
<head>
  <title>Gestion des films</title>
 <?php
require_once("header.php");
?>
  <link rel="stylesheet" href="css/bootbiblio.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#40B3DF">HandiDom</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Accueil</a></li>
      </ul>
		 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" >Navigation</a>
    <div class="dropdown-content">
      <a href="bootfilms.php">Films</a>
      <a href="reglages.php">Réglages</a>
    </div>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <a href="bootfilms.php" class="btn btn-primary">Films</a>
    <a href="reglages.php" class="btn btn-primary">Réglages</a>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="color:#40B3DF">Gestion des films</h1>
      <p>Ici vous pouvez gérer vos films, en ajouter, en supprimer, les voirs...</p>
      <hr>
      

		<div class="row aff"> 
		<div class="container">
 		<div class = "col-sm-5">
		<h3>Affichage des films</h3>
  <button type="button" class="btn btn-success">Afficher</button>
  <button type="button" class="btn btn-warning">Cacher</button> 
	<a href="biblio.php" class="btn btn-info btn-md">
          <span class="glyphicon glyphicon-refresh"></span> Refresh
        </a>
    
  <div class="collapse">
<!--code php exécuté lors de l'utilisation des boutons -->
   <?php
require_once("button/Affichedata.php");
?>
  </div>
</div>


<script>
$(document).ready(function(){
    $(".btn-success").click(function(){
        $(".collapse").collapse('show');
    });
    $(".btn-warning").click(function(){
        $(".collapse").collapse('hide');
    });
});
</script>




	
	<div class = "col-sm-5">
	<div class="panel panel-default">
		<div class="panel-heading">
	<h3> Ajouter des données des films <a href="biblio.php">
          <span class="glyphicon glyphicon-refresh"></span>
        </a></h3>
	<div>
	<div class="container">
 	<form method="POST" action="">
	titre*:<br>
	<input type="text" name="titre" maxlength="40" value="">
	<br>
	taille:<br>
	<input type="text" name="taille"  maxlength="40" value="">
	<br>
	date:*<br>
	<input type="number" name="date" min="2000" max="2100" step="1" v
alue="NULL">
	<br>
	chemin:*<br> 
	<input type="text" name="chm" maxlength="40" value="">   
	<br><br>
	
	<input type="image" src="images/add.png" alt="Submit" width="30" height="30">
		
	</form> 
	<?php
	require_once("button/Ajoutfilms.php");

	?>
<h4>Ajout rapide</h4>
	<form method="POST"  action="" enctype="multipart/form-data">
	<input name="films" accept="video/*" type="file">
	<input type="submit" value="Ajouter">
	</form>
	<?php
	require_once("button/ajoutauto.php");
	?>
	
	

	<div class="panel-body"><h3> Supprimer des films via titre <a href="biblio.php">
          <span class="glyphicon glyphicon-refresh"></span>
        </a></h3>
	<form method="POST" action="">
	titre*:<br>
	<input type="text" name="titredel" maxlength="40" value="">
	<br> <br>
	<input type="image" src="images/delete.png" alt="Submit" width="30" height="30">
	</form>
	<?php
	require_once("button/Delete.php");
	?>
	
	</div>
    </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>







    <div class="col-sm-2 sidenav">
      <div class="well well-sm">
        <img src="images/ovni.jpg" class="img-rounded" alt="pub" width="175" height="100" >
		<p style="color:#0075E9">Les ovnis débarquent</p>
      </div>
      <div class="well well-sm">
		<img src="images/ordi.jpg" class="img-rounded" alt="pub" width="175" height="100" >
        <p style="color:#0075E9" > News! </br> Ordinateurs quantiques</p>
      </div>
    </div>
  </div>
</div>

</div>

<footer class="container-fluid text-left">
  <div> <img src="images/croixrouge.jpg" class="img-circle" alt="Cinque Terre" width="175" height="75" >
</footer>
   	 

</body>
</html>
