<?php
$sql = "select title,id from pages order by `order`";
$res = mysqli_query($conn,$sql);
$menuID = isset($_GET["page"]) ? $_GET["page"] : 1;

$active = "class='active'";
echo "<ul class='nav nav-tabs'>";
while ($menuItem = mysqli_fetch_assoc($res)){
	if($menuID!=$menuItem["id"]){
		$active="";
	}

	echo "<li role='presentation' $active>";
		echo "<a href='?page=".$menuItem["id"]."'>";
			echo $menuItem["title"];
		echo "</a>";
	echo "</li>";

	$active = "class='active'";
}
echo "</ul>";



?>