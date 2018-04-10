<?php
require_once("config.php");
?>


<?php
$dir = "/home/tom/videos";
//  si le dossier pointe existe
if (is_dir($dir)) {

   // si il contient quelque chose
   if ($dh = opendir($dir)) {

       // boucler tant que quelque chose est trouve
       while (($file = readdir($dh)) !== false) {

           // affiche le nom et le type si ce n'est pas un element du systeme
           if( $file != '.' && $file != '..') {
           echo "fichier :". $file  . "<br />\n";
		  
           } 
       }
       // on ferme la connection
       closedir($dh);
   }
}

$query="
INSERT INTO filmscomp
     (nom) SELECT  'Pat', 'mon adresse' FROM    DUMMY
WHERE   NOT EXISTS
        (   SELECT  1
            FROM    carnetAdresse
            WHERE   nom = 'Pat'";		//a modifier

?>




<hr><hr>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Chemin</th>
    </tr>
  </thead>

<?php
//Connexion à la BDD
$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error) die($conn->connect_error);

//Preparation de la requete
$sql = "SELECT * FROM films";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array()) {

	?>

  <tbody>
    <tr>

      <td><?php echo $row['chemin']; ?></td>
      <td></td>
    </tr>
  </tbody>

	<?php } 

    
} else {
    echo "0 results";
}
$conn->close();
?>

</table>
