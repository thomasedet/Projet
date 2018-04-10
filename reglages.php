<!DOCTYPE html>
<?php
require_once("config.php");
?>

<html lang="en">
<head>
  <title>réglages</title>
<?php
require_once("header.php");
?>
<link rel="stylesheet" href="css/reglages.css">
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
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer" >Navigation <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bootfilms.php">films</a></li>
          <li><a href="biblio.php">Bibliothèque de films</a></li>
        </ul>
      </li>
    </div>
    </div>
  </div>
</nav>


<div class="jumbotron text-center">
  <h2>Réglages</h2> 
  <p>Sur cette page vous pouvez modifier des réglages concernant les adresses IPS, les images..</p> 
</div>





<div class="container-fluid">
	<div class="panel-heading">
	<div class = "col-sm-1">
	</div>

	<div class = "col-sm-5">
  <h2>Changer l'adresse IP de :</h2>
   <form method="POST" action=""><h4> Chambre 1:</h4>
	<input type="text" name="titre" maxlength="40" value="">
<input type="submit" value="Changer adresse Ip chambre 1"> 
</form>


<form method="POST" action=""><h4> Chambre 2:</h4>
	<input type="text" name="titre" maxlength="40" value="">
<input type="submit" value="Changer adresse Ip chambre 2"> 
</form>
</div>
 


  <h2>Changer les images des accueillis</h2>
   <form method="POST" action=""><h4> Accueilli 1:</h4>
	<input type="text" name="accueilli_1" maxlength="40" value="">
<input type="submit" value="changer photo 1"> 
</form>


<form method="POST" action=""><h4> Accueilli 2:</h4>
	<input type="text" name="accueilli_2" maxlength="40" value="">
<input type="submit" value="changer photo 1"> 
</form>
</div>
<div class = "col-sm-7">col sm 
</div>
</div>



</body>

</html>
