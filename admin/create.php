<?php
include "../connection.php";
include "../settings.php";
include "../lib.php";
include "logincheck.php";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	$title = addslashes($_POST["title"]);
	$content = addslashes($_POST["content"]);
	$order = (float)$_POST["order"];

	$sql = "INSERT INTO `pages` (`title`,`content`,`order`) 
			VALUES ('$title','$content',$order)";

	mysqli_query($conn,$sql);
}


//dump($_SERVER["REQUEST_METHOD"]=="POST");

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
			
			<h2>Ստեղծել նոր էջ</h2>
			<form action="" method="POST" class="form-group">
				<input type="text" name="title" placeholder="Վերնագիր" class="form-control"><br>
				<textarea id="editor" name="content" rows="13" placeholder="Բովանդակություն" class="form-control"></textarea><br>
				<input type="text" name="order" placeholder="Հերթական համար" class="form-control"><br>
				<input type="submit" value="Պահպանել" class="btn btn-default navbar-btn">
			</form>

			</div>
			<div class="col-md-3">
				<?php include "sidebar.php"; ?>
			</div>
	</div> 
</div>

<?php include "../scripts.php" ?>

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
	  $('#editor').summernote({height:300});
	});
</script>

</body>
</html>
