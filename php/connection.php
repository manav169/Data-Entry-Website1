<?php
require_once("config.php");
$conn=mysqli_connect($server, $username, $password, $database);

if(!$conn)
header("Location:errorpage.php?err=101")

?>
<!--  -->
