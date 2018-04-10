<?php
	$Lechemin = $_GET["chemin"];
	print("vlc/requests/status.json?command=in_play&input=$Lechemin");

?>

 <script type="text/javascript">

		$("#btn_play").click(function() {
			$.get( "vlc/requests/status.json?command=in_play&input=$Lechemin",function( data ) {
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




