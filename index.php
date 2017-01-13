



<?php
require_once('inc/init_session.inc.php');
include(  'inc/header.inc.php');

?>

<main>

	<?php 
		if (!empty($_GET['page'])) {
			if (file_exists('inc/' . $_GET['page'] . '.inc.php')) {
				include('inc/' . $_GET['page'] . '.inc.php');		
			} else {
				include('inc/404.inc.php');		
			}
		} else {
			include('inc/accueil.inc.php');
		}
	?>

	

</main>

<?php include( 'inc/footer.inc.php'); ?>
