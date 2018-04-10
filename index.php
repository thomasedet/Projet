<?php

require_once("header.php"); ######va chercher le fichier headerphp pour avoir lentete

?>
<link rel="stylesheet" href="css/index.css">
<style type="text/css"> body{ background:url('images/fond.jpg') no-repeat; } </style>
<title>Accueil</title>
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

<video width="725" height="500" style="top:50%;left:50%;transform:translate(-50%,-50%);position:absolute" controls  ;>
  <source src="images/Bullet.mp4" type="video/mp4">
  	<source src="images/Bullet1.avi" type="video/avi">
 	 Your browser does not support the video tag.
</video>
<div class="col-sm-13 text-center">
	<h1> <br> </br> <FONT color= #40B3DF> BTS SN IR  La Croix Rouge -  La Salle </FONT> </h1>
</div>


</body>
</html>
