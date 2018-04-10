<!DOCTYPE html>

<html>
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css"> body{ background:url('fond.jpg') no-repeat; } </style> 
		<title>Interface acceuillant</title>
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
	<p> Merci de choisir le film à diffuser</p>
		<input type="image" src="film.jpeg" style="height:45px;" />
	<form action="vlc/requests/status.json" method="get" accept-charset="utf-8">
	 	<label>Choix du film : </label><br>
		<input type="hidden" name="command" value="in_play" />
		<input type="text" name="input" />
		<input type="checkbox" id="chkbox1" name="ch1" value="oui" />
		<label for="chkbox1">chambre 1</label> 
		<input type="checkbox" id="chkbox2"  name="ch2" value="oui" />
		<label for="chkbox1">chambre 2</label> 
		<input type="checkbox" id="chkbox3"  name="ch12" value="oui" />
		<label for="chkbox1">chambre 1 et 2</label> 
		<input type="submit" value="lecture"/>
	</form>
</div>

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

