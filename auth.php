<?php
session_start();
if($_SESSION['logged']!=1):
$_SESSION['uri']=$_SERVER['REQUEST_URI'];
header('Location: login.php');
endif;

?>
