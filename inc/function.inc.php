<?php 
 function liens(){
 	
 	if (empty($_SERVER["HTTP_REFERER"])){
 		$url= "http://localhost/lokisalle/index.php?page=accueil";
 	}elseif($_SERVER['HTTP_REFERER'] !='http://localhost/lokisalle' ){
	
		$url= "http://localhost/lokisalle/index.php?page=accueil";	

	}else{
 		$url= $_SERVER["HTTP_REFERER"];
	
 	}	

 	return $url;

 }










// recupere les images de la base de donnée
function getSalle($search = null, $getSearch =null, $id=null){
	global $connexion;
	if($search && $getSearch){	
		$sql = "SELECT * FROM salle WHERE '$search' = '$getSearch'";
		
	} else if($id){
		$sql = "SELECT * FROM salle, produit WHERE produit.id_salle = salle.id_salle AND salle.id_salle = '$id'";
		

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
