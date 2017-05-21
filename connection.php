<?php
//Միացնում ենք սխալների ցուցադրումը
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Տվյալների բազայի միացումը
$conn = mysqli_connect("localhost","root","root","little_site");
mysqli_set_charset($conn,'utf8');


?>