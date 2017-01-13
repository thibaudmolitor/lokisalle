

<?php
require_once('../inc/init_session.inc.php');
include(  'header.php');

?>

<main>

	<?php 
		if (!empty($_GET['page'])) {
			
			if (file_exists('../inc/' . $_GET['page'] . '.inc.php')) {
				include('../inc/' . $_GET['page'] . '.inc.php');	


			}else if (file_exists(  $_GET['page'] . '.php')){
				 include(  $_GET['page'] . '.php');		
			} else {
				include('../inc/404.inc.php');
				}


		}else{	
			include('../inc/accueil.inc.php');
		}
	?>


	

</main>

<?php include( 'footer.php'); ?>
