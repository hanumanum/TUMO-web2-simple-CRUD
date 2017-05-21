<?php

$pageID=isset($_GET["page"]) ? $_GET["page"] : 1;


$sql = "SELECT title,content FROM pages WHERE id=$pageID";


$res = mysqli_query($conn,$sql);
echo mysqli_error($conn);
$page = mysqli_fetch_assoc($res);
mysqli_close($conn);
?>

<h2><?=$page["title"]?></h2>
<?=$page["content"]?>

