<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
       <th scope="col">Taille</th>
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
      <td><?php echo $row['titre']; ?></td>
      <td><?php echo $row['taille']; ?></td>
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
