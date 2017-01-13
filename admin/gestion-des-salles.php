<?php



 
$sql = "
SELECT
  `salle`.`id_salle`,
  `salle`.`titre`,
  `salle`.`description`,
  `salle`.`photo`,
  `salle`.`pays`,
  `salle`.`ville`,
  `salle`.`adresse`,
  `salle`.`cp`,
  `salle`.`capacite`,
  `salle`.`categorie`
FROM
  `salle`
";
$req = $connexion->query($sql);
?>

        <table>
        	<tr> 
             <div><th>id_salle</th></div>
        		
        		<th>Titre</th>
        		<th>Description</th>
        		<th>Photo</th>
        		<th>Pays</th>
        		<th>Ville</th>
        		<th>Adresse</th>
        		<th>Cp</th>
        		<th>Capacité</th>
        		<th>Categorie</th>
        	</tr>
        	<?php
        		while($datas = $req->fetch()){
        			echo "<tr>";
        			echo "	<td>".$datas['id_salle']."</td>";
        			echo "	<td>".$datas['titre']."</td>";
        			echo "	<td>".$datas['description']."</td>";
        			echo "	<td>".$datas['photo']."</td>";
        			echo "	<td>".$datas['pays']."</td>";
        			echo "	<td>".$datas['ville']."</td>";
        			echo "	<td>".$datas['adresse']."</td>";
        			echo "	<td>".$datas['cp']."</td>";
        			echo "	<td>".$datas['capacite']."</td>";
        			echo "	<td>".$datas['categorie']."</td>";
        			echo "</tr>";
        		}
        	?>
        
        </table>
<div class="container">
    <div class="row">
        
            <form  action="../libs/service.php?action=addSalle" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
              <div class="form-group">
                <label for="titre">titre:</label>
                <input type="text" class="form-control" id="titre" name="titre">
              </div>

              <div class="form-group">
                <label for="pwd">description:</label>
                <input type="description" class="form-control" id="description" name="description">
              </div>
               <div class="form-group">
                <label for="file">photo:</label>
                <input type="file" class="form-control" id="file" name="file">
              </div>

              <div class="form-group">
              <label for="capacite">Capacité:</label>
              <select class="form-control" id="capacite" name="capacite">
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="400">400</option>
              </select>
            </div>

            <div class="form-group">
              <label for="categorie">Catégorie:</label>
              <select class="form-control" id="categorie" name="categorie">
                <option value="reunion">reunion</option>
                <option value="evenement">evenement</option>
                <option value="formation">formation</option>
              </select>
            </div>
    </div>
    <div class="col-md-6">

        <div class="form-group">
          <label for="pays">pays:</label>
          <select class="form-control" id="pays" name="pays">
            <option>france</option>
          </select>
        </div>


        <div class="form-group">
          <label for="ville">ville:</label>
          <select class="form-control" id="ville" name="ville">
            <option value="lyon">lyon</option>
            <option value="paris">paris</option>
            <option value="marseille">marseille</option>
          </select>
        </div>

        <div class="form-group">
          <label for="adresse">adresse:</label>
          <textarea class="form-control" rows="5" id="adresse" name="adresse"></textarea>
        </div>

          <div class="form-group">
            <label for="code">code Postal:</label>
            <input type="text" class="form-control" id="code" name="code">
          </div>




          

          
          <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
    
    </div>
</div>