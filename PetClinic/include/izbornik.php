<div class="top-bar">
      <div class="row">
        <div class="top-bar" id="example-menu">
		  <div class="top-bar-left">
		    <ul class="dropdown menu" data-dropdown-menu>
		      <li<?php
				if ($_SERVER["PHP_SELF"] === $putanjaAPP . "index.php") {
					echo " class=\"active\"";
				}
		      ?>>
			      <a href="<?php echo $putanjaAPP; ?>index.php">
			      	<?php echo $naslovAPP; ?>
			      </a>	
		      	</li>
		      <li<?php
					if ($_SERVER["PHP_SELF"] === $putanjaAPP . "onama.php") {
						echo " class=\"active\"";
					}
		      ?>><a href="<?php echo $putanjaAPP; ?>onama.php">O nama</a></li>
		      <li<?php
				if ($_SERVER["PHP_SELF"] === $putanjaAPP . "kontakt.php") {
					echo " class=\"active\"";
				}
		      ?>><a href="<?php echo $putanjaAPP; ?>kontakt.php">Kontakt</a></li>
		    </ul>
		  </div>
		  <div class="top-bar-right">
		<?php if(!isset($_SESSION["autoriziran"])): ?>
	  		<a href="<?php echo $putanjaAPP; ?>login.php" class="button">Prijava</a>
	  	<?php else: ?>>
	  		<a href="<?php echo $putanjaAPP; ?>logout.php" class="button">Odjava</a>
	  	<?php endif;?>

		  </div>
		</div>
      </div>
    </div>