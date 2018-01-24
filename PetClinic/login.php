<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
     <?php include_once 'include/head.php'; ?>
  </head>
  <body>
    

    <!-- Start Top Bar -->
    <?php include_once 'include/izbornik.php'; ?>
    <!-- End Top Bar -->
    <br>
    <div class="grid-x grid-padding-x">
			<div class="large-4 large-offset-4 cell centered">
				<form class="log-in-form" action="autoriziraj.php" method="post">
				  <h4 class="text-center">Unesite Vaše podatke</h4>
				  <label>Email
				    <input type="email" name="email" placeholder="mario@edunova.hr"
				    value="<?php if(isset($_GET["email"])){
				    	echo $_GET["email"];
				    } ?>">
				  </label>
				  <label>Lozinka
				    <input type="password" name="lozinka" placeholder="Lozinka">
				  </label>
				  <p><input type="submit" class="button expanded" value="Prijava"></input></p>
				  <?php if(isset($_GET["neuspjelo"])){
				  	echo "Neispravna kombinacija email/lozinka";
				  } ?>
				</form>

			</div>
		</div>
		<br>

    <?php include_once 'include/podnozje.php'; ?>
	<?php include_once 'include/login-skripte.php'; ?>
    
  </body>
</html>


    