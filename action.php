<?php
include 'connect.php';
$id=$_GET['idd'];
echo $id;
$sql="UPDATE `upload` SET `status`='Active' WHERE id='$id'";
$jt=mysql_query($sql);
header('Location:'.'manageart.php');
?>