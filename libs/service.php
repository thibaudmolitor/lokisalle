<?php 
include_once('../inc/connexion.inc.php');
include_once('../inc/function.inc.php');
if (!empty($_REQUEST['action'])){
		switch ($_REQUEST['action']) {
			case 'addSalle':
				addSalle();	
			break;

			case 'addProduit':
				addProduit();
			break;
					
									
			default:
			header('Location: ../index.php');
			die();
			break;
		}

}






function addSalle(){
	global $connexion;

// generer un nom aleatoire pour la photo
// definir le chemin dans lequel va etre enregistré la photo
// definir l'url qui pointe vers la photo
// copier la photo avec la fonction copy 
$photoName = rand(1000000 , 2000000);

$cheminCopy = "C:/xamp/htdocs/lokisalle/img/" .$photoName .".jpg";
$cheminWeb = "http://localhost/lokisalle/img/".$photoName.".jpg";
copy($_FILES["file"]["tmp_name"], $cheminCopy );


	if(!empty(trim($_POST['titre'])) && !empty(trim($_POST['description'])) ){
		$sql = "INSERT INTO `salle` (
		`titre`, 
		`description`, 
		`photo`, 
		`pays`, 
		`ville`, 
		`adresse`,
		 `cp`, 
		 `capacite`, 
		 `categorie`) 
		 VALUES (
		 :titre, 
		 :description, 
		 :file, 
		 :pays, 
		 :ville, 
		 :adresse, 
		 :code, 
		 :capacite, 
		 :categorie);";
		$req = $connexion->prepare($sql);

		$datas = array(
			'titre'=> $_POST['titre'], 
			'description'=>$_POST['description'],
			'file'=>$cheminWeb,
			'pays'=>$_POST['pays'],
			'ville'=>$_POST['ville'],
			'adresse'=>$_POST['adresse'],
			'code'=>$_POST['code'],
			'capacite'=>$_POST['capacite'],
			'categorie'=>$_POST['categorie']
					);


		$req->execute($datas);
	}
	  	
	header('Location: ../index.php');
}


function addProduit(){
	global $connexion;

if(!empty(trim($_POST['dateA'])) && !empty(trim($_POST['dateD'])) ){
		$sql="
	INSERT INTO `produit`
	 (`id_salle`,
	 `date_arrivee`,
	  `date_depart`, 
	  `prix` 
	 ) 
	  VALUES 
	  (
		:id_salle,
		:dateA,
		:dateD,
		:tarif


	  );";
$req = $connexion->prepare($sql);
$datas = array(
			'id_salle'=>$_POST['salle'],
			'dateA'=> $_POST['dateA'], 
			'dateD'=>$_POST['dateD'],
			'tarif'=>$_POST['tarif'],

			
					);


		$req->execute($datas);
		
	}
	  	
	header('Location: ../admin/index.php');




}











?>
