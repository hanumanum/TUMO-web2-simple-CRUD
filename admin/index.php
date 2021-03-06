<?php
include "../connection.php";
include "../settings.php";
include "../lib.php";
include "logincheck.php";

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
				<h2>Ստեղծված էջերի ցանկ</h2>
				<table class="table" id="articles">
					<thead>
						<tr>
							<th>ID</th>
							<th>Վերնագիր</th>
							<th>Հերթը</th>
							<th>Խմբագրել</th>
							<th>Ջնջել</th>
						</tr>
					</thead>
					<tbody>
					<?php $sql = "SELECT * FROM pages";
						   $res = mysqli_query($conn,$sql); 
						   while($p = mysqli_fetch_assoc($res))
						   {
							   	echo "<tr>";
									echo "<td>".$p["id"]."</td>";
									echo "<td>".$p["title"]."</td>";
									echo "<td>".$p["order"]."</td>";
									echo "<td><a href='edit.php?id=".$p["id"]."' class='glyphicon glyphicon glyphicon-edit btn btn-xs btn-primary'></a></td>";
									echo "<td><a href='delete.php?id=".$p["id"]."' class='glyphicon glyphicon-remove btn btn-xs btn-danger'></a></td>";
							   	echo "</tr>";
						   }
					?>
				</tbody>
				</table>

				<div class="row">
					<div class="col-md-3 col-md-offset-9">
						<a href="create.php" role="button" class="btn btn-primary">
							Նոր էջ
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<?php include "sidebar.php"; ?>
			</div>
	</div> 
</div>

<?php include "../scripts.php" ?>

<!-- include summernote css/js-->
<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
    	$('#articles').DataTable();
	});
</script>

</body>
</html>
