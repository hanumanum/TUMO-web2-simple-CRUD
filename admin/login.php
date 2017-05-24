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
			<div class="col-md-4 col-md-offset-2">
			
			<h2>Մուտք գործել</h2>
				<form action="" method="POST" class="form-group">
					<input type="text" name="username" placeholder="Մուտքի անուն" class="form-control"><br>
					<input type="password" name="password" placeholder="Գաղտնաբառ" class="form-control"><br>
					<button type="submit" class="btn btn-default">Մուտք</button>
				</form>

		</div>
	</div> 
</div>

<?php include "../scripts.php" ?>
	

</body>
</html>