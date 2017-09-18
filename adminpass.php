<?php
session_start();
$admin=$_SESSION['name'];
include 'connect.php';


?>
<html>
<head>
<style>
#re_box{
	

    border: 1px solid black;
    width: 212px;
    height: 274px;
    margin-top: 102px;
    margin-left: 251px;
}
</style>
</head>
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
 <div id='cssmenu'>
<ul>
   <li class='last'><a href='admin.php'><span><?php echo $admin?></span></a></li>
  



 

      <li class='last'><a href='signout.php'> <span> Sign Out</span></a></li>
	  
</ul>
</div>

<hr>
 <div id="regi">
 <?php
  $msg="";
  $sql="select * from admin where admin_id='$admin'";	
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$pass=$row['pass'];

if(isset($_POST['sub'])){
	$passw=$_POST['pss'];
		$passwre=$_POST['repss'];
	
if($passw=="" ||$passwre==""){
	$msg="Please Do not blank";
	
}	

if($passw!="" && $passwre!=""){
	if($passwre!=$passw){
	$msg=" Password should be match";
}
	if($passw==$passwre){
		if($passw==$pass ){
	$msg="password should not similar to old ";
}

else{
	$sql_up="UPDATE `admin` SET `pass`='$passw' WHERE admin_id='$admin' ";
	$update=mysql_query($sql_up);
		$msg="Updated";
}

	}
	
}
}
echo "<font color='green' size='3px'>".$msg."</font>";
?>
 <h2> Password change<h2>
  <div id="re_box">
  <form action="adminpass.php" method="post">
  <label id="label">Password:- </label>  <input type="password"  id="text12" name="pss" /><br>
 <?php //echo $msgpss;  ?>
<br><br>
 <label id="label">Re-type Password:-</label>  <input type="password"  id="text13" name="repss" /><br>
 <?php //echo $msgrepss;  ?>
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