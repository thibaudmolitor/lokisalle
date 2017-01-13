<?php  
// echo '<pre>';
// var_dump($salles);
// echo '</pre>';
if(isset($_GET['id'])){

    $produits = getSalle(null,null,$_GET['id']);
}
$salles= getSalle();
?>
<section>
	<h2>Salle DECOUVERTE</h2>
	<div class="container">
		<div class="row">
			<?php foreach ($produits as $produit): ?>
			<div class="col-md-6">
				
					
				
				<img class="img-responsive" src="<?php echo $produit['photo']; ?>" alt="">
				<figcaption>information complémentaire</figcaption>
			</div>
		
			<div class="row">
				<div class="col-md-12">
					<h3>information complementaire</h3>
					<span class="glyphicon glyphicon-calendar" aria-hidden="true">arrivé le</span> 
					<span class="glyphicon glyphicon-calendar" aria-hidden="true">depart le</span>
					<span class="glyphicon  glyphicon-user" aria-hidden="true">capacité</span>
					<span>adresse:</span>
					<span>categorie</span>
					<span>tarif:</span>
				</div>
			</div>
			<?php endforeach ?>
		</div>



		<div class="row">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
	
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<?php 
						$i = 0;
						
						foreach ($salles as  $salle) 
						{ 
							if ($salle['id_salle']!=($_GET['id'])) {
					?>
					  <div class="item <?php if ($i== 0) echo 'active'; ?>">
					    <img src="<?php echo $salle['photo']; ?>" alt="">
					  </div>
					 <?php 
					 		$i++;
					 	} 
					}
					 ?>
	
					  
	
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-6"><textarea placeholder="Deposer un complementaire, une note"></textarea></div>
			<div class="col-md-6"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?> " class="button">retour</a></div>
		</div>
	</div>
	



</section>