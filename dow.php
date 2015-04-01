<?php 
$file=file('out.php');
$path=realpath('out.php');//echo $path;
header('location:'.$path);
?>