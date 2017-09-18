<?php
session_start();

include 'connect.php';


?>
<html>
<head>
<head>
<title>Painting Website </title>
 <link rel="stylesheet" type="text\css" href="style\account.css" >
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script>

 
 </script>

</head>
<body bgcolor="#8ED2C9">


<div class="big_header"  >


<!-- src="images/logo.png" alt="Profile" width="70px" height="70px" align="left" />-->
<div id="shadow">
<img src="images/logo.png" alt="Profile" align="left" width="70px" height="70px"/></a >
<h1>Ashpaint shop <h2>
<p id="logo"> Dream you hold</p>
</div>


<hr>
 <div id="regi" align="center">
  <?php
  $msg="";


if(isset($_POST['sub'])){
	$admin=$_POST['admin'];
	$passd=$_POST['pass'];
	  $sql="select * from admin where admin_id='$admin'";	
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$ad_id=$row['admin_id'];
$pass=$row['pass'];
if($admin==$ad_id){
	if ( $passd==$pass){
	

	 $_SESSION['name']=$admin;

 //$msg="ok";
header('Location:'.'admin.php');
	}
	else {

	$msg="* Password is Wrong";
	}
}
else {

	$msg=" * ID is Wrong";
	}
}

echo "<font color='green' size='3px'>".$msg."</font>";
?>
 <h2>Admin Login<h2>
  <div id="regi2_box">
  <form action="" method="post">
  <label id="label">Admin:- </label>  <input type="text"  id="text12" name="admin" /><br>

<br><br>
 <label id="label">Password:-</label>  <input type="password"  id="text13" name="pass" /><br>

<br><br>
<input type="submit" id="sub" value="update" name="sub">
</form>
  </div>

 </div>
 
 <footer>
  @ashpaint painting shop reserve right @2016
  <a href="#">contact</font> &nbsp| &nbsp<a href="#">Admin</font>
 </footer>
</div>



 </div>
 

</body>

</html>