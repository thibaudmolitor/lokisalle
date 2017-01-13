<?php 
 function liens(){
 	if (empty($_SERVER["HTTP_REFERER"])){
 		$url= $_SERVER."index.php?page=accueil";
 	}else{
	
 		$url= $_SERVER["HTTP_REFERER"];
 	}	

 	return $url;

 }










// recupere les images de la base de donnée
function getSalle($ville = null, $categorie =null){
	global $connexion;
	if($ville)
	{
		$sql = "SELECT * FROM salle WHERE ville = '$ville'";
	} else if($categorie){
		$sql = "SELECT * FROM salle WHERE categorie = '$categorie'";

	}else {
		$sql= 'SELECT * FROM `salle`';
	}
	$req= $connexion->prepare($sql);
 	$req->execute();
 	$result =$req->fetchAll();
 	
 	return $result;


}

// recupere les services de la base de donnée
function getProduit(){
	global $connexion;
	$sql= 'SELECT * FROM `produit`';

	$req= $connexion->prepare($sql);
 	$req->execute();
 	$result =$req->fetchAll();
 	return $result;

}





 ?>
