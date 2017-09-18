<?php
include 'connect.php';
$id=$_GET['idd'];

$sql="DELETE FROM `upload`WHERE id='$id'";
$jt=mysql_query($sql);
header('Location:'.'managec.php');
?>