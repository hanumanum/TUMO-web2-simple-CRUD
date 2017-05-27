<?php
include "../connection.php";
include "../settings.php";
include "../lib.php";
include "logincheck.php";

$id = (int)$_GET["id"];
$sql = "DELETE FROM pages WHERE id=$id";
mysqli_query($conn,$sql);

header("location: index.php");
exit;

?>

