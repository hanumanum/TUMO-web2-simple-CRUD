<div class="panel panel-default">
  <div class="panel-heading">Կառավարման Հղումներ</div>
  <div class="panel-body">
    	<li><a href="../index.php">Գնալ Սկիզբ</a></li>
    	<li><a href="index.php">Գնալ Ցանկ</a></li>
    	<li><a href="create.php">Ստեղծել նոր էջ</a></li>
		<?php

		if(isLoggedIn()){
			echo '<li><a href="logout.php">Դուրս գրվել</a></li>';	
		}

		?>

  </div>
</div>