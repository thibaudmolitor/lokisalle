<?php 
if(isset($_GET['ville']))
{
    $salles = getSalle($_GET['ville']);

} else if(isset($_GET['categorie'])){

    $salles = getSalle(null,$_GET['categorie']);

   
}else{
     $salles= getSalle();
}


?>
<section>
	<div class="container">
		<div class="row">
		<!-- aside -->
			<div class="col-md-2">
				<h3>
					<label class="label label-default">Categories</label>
				</h3>
				<div class="list-group">
  					<a href="?categorie=reunion">
  						<button type="button" class="list-group-item">Reunion</button>
  					</a>
  					<a href="?categorie=evenement">
  						<button type="button" class="list-group-item">evenement</button>
  					</a>
  					<a href="?categorie=formation">
  						<button type="button" class="list-group-item">Formation</button>
  					</a>
  				</div>


  				<h3>
  					<label class="label label-default">ville</label>
  				</h3>
				<div class="list-group">
  					<a href="?ville=paris">
  						<button type="button" class="list-group-item">Paris</button>
  					</a>
  					<a href="?ville=lyon">
  						<button type="button" class="list-group-item">Lyon</button>
  					</a>
  					<a href="?ville=marseille">
  						<button type="button" class="list-group-item">Marseille</button>
  					</a>
  				</div>

  				<p>
  					<label for="amount">Prix:</label>
  					<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</p>

				<div id="slider"></div>


  				<h3>
  					<label class="label label-default">Période</label>
  				</h3>
  				<label>Date d'arrivée</label>
  				<span class="glyphicon glyphicon-calendar" aria-hidden="true">
  					<input type="date" name="">
  				</span>

  				<label>Date de départ</label>
  				<span class="glyphicon glyphicon-calendar" aria-hidden="true">
  					<input type="date" name="">
  				</span>
  			

			</div>
		<!--fin aside -->





			<div class="col-md-10">
						
				
						<!-- 1ere ligne d'image -->
				<div class="row">
				<?php foreach ($salles as $salle){ ?>
				
				<!-- boucle foreach -->
					<div class="col-sm-4 col-lg-4 col-md-4">
                    	<div class="thumbnail">
                    								<!-- src dynamique -->
                      	  		 <a href="index.php?page=product">
                       	   			<img class="img-responsive" src="<?php echo $salle['photo']; ?>"" alt="">
                      		  	<div class="caption">
                      		  		<!-- prix dynamique -->
                      		  		
                      		  		<h4 class="pull-right"> €</h4>
                      		  			
                      		  		<!-- nom dynamique -->
                      			  	<h4><?php echo $salle['titre']; ?></h4>
                      			  	<!-- commentaires dynamique -->
                      				<p class="glyphicon glyphicon-calendar" aria-hidden="true"> <?php echo $salle['description']; ?></p>
                 		         </div></a>
                 		         
                 		   
                 		 </div>
                 	</div>	
                 	<?php } ?>		
				</div>	
			</div>

					<!--  -->



		</div>
	</div>

</section>