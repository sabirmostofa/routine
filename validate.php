<?php
session_start();
require_once('library/functions.php');
if(isset($_POST['gg'])){
	if(!in_table('username','users',$_POST['username'])):
	echo 'user doesn\'t exists';
	
	elseif(in_table('username','users',$_POST['username'])):	
	if(!valid_pass($_POST['username'],$_POST['pass'])):
	echo 'wrong password try again';
	
	elseif(valid_pass($_POST['username'],$_POST['pass'])):
	$_SESSION['logged']=1;
	header("Location: index.php");
	
	endif;
	endif;
		
	}
