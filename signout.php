<?php
session_start();
session_unset(); 
session_destroy();
$name=$_SESSION['name']="";
	 $mailid=$_SESSION['mail']="";
	 	 $user=$_SESSION['user']="";
header('Location:'.'home.php');


?>