<?php include_once '../konfiguracija.php'; 
if(!isset($_SESSION["autoriziran"])){
	header("location: " . $putanjaAPP);
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../include/head-np.php'; ?>
  </head>
  <body>

    <div class="app-dashboard shrink-medium">
      	<?php include_once '../include/zaglavlje.php'; ?>
      	
		<div class="app-dashboard-body off-canvas-wrapper">
    	
 			<?php include_once '../include/np-left-side.php'; ?>
 			
 		
		<?php include_once '../include/np-right-side.php'; ?>

   		</div>
    </div>

   <?php include_once '../include/skripte-np.php'; ?>
  </body>
</html>