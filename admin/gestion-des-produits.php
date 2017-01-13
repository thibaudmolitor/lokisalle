<?php

$sql = "
SELECT
  `produit`.*
FROM
  `produit`
";
$req = $connexion->query($sql);
?>
<table>
	<tr>
  <strong>
		<th>id_produit</th>
		<th>date d'arrivee</th>
		<th>date de depart</th>
    <th>id_salle</th>
		<th>prix</th>
		<th>etat</th>
		<th>action</th>
		</strong>
	</tr>
	<?php
		while($datas = $req->fetch()){
			echo "<tr>";
			echo "	<td>".$datas['id_produit']."</td>";
      echo "  <td>".$datas['id_salle']."</td>";
			echo "	<td>".$datas['date_arrivee']."</td>";
			echo "	<td>".$datas['date_depart']."</td>";
			echo "	<td>".$datas['prix']."</td>";
			echo "	<td>".$datas['etat']."</td>";
			echo "</tr>";
		}
	?>
</table>


<form  action="../libs/service.php?action=addProduit" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="dateA">date Arrivé:</label>
    <input type="text" class="form-control" id="dateA" name="dateA" placeholder="yyyy-mm-jj hh:mm">
  </div>

  <div class="form-group">
    <label for="dateD">date Départ:</label>
    <input type="text" class="form-control" id="dateD" name="dateD" placeholder="yyyy-mm-jj hh:mm">
  </div>


<!--  -->
<div class="form-group">
  <label for="salle">Salle:</label>
  <select class="form-control" id="salle" name="salle">
<?php
 $data = getSalle();
 
  foreach ($data as $salle)
{
?>
  <option value="<?php echo $salle['id_salle']; ?>"> <?php echo $salle['titre']; ?>- <?php echo $salle['ville']; ?> - <?php echo $salle['adresse']; ?></option>
<?php
}
 
?>             
  </select>
</div>

<!--  -->


<div class="form-group">
    <label for="tarif">tarif:</label>
    <input type="text" class="form-control" id="tarif" name="tarif" placeholder="prix en euros">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>