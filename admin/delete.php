<?php
include "../connection.php";
include "../settings.php";
include "../lib.php";
?>

<!DOCTYPE html>
<html>
<head>
    <?php include "../styles.php" ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href='<?=$set["homeURL"]; ?>'> 
					<img width="160" src=' <?=$set["logo"]; ?> '>
				</a>
			</div>
			<div class="col-md-10">
				<h1><?=$set["sitetitle"]; ?></h1>
				<p><?=$set["siteslogan"]; ?></p>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-9">

				TODO: Էջեր ջնջելու ֆունկցիոնալը կպատրաստենք իրար հետ

			</div>
			<div class="col-md-3">
				<?php include "sidebar.php"; ?>
			</div>
	</div> 
</div>

<?php include "../scripts.php" ?>

</body>
</html>
