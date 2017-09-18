<?php
session_start();
$name=$_SESSION['name'];
	 $mailid=$_SESSION['mail'];
	 	 $user=$_SESSION['user'];
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
<?php if($user=="Artist"){
	 echo "<div id='cssmenu'>
<ul>
   <li class='last'><a href='account.php'><span>".$name."</span></a></li>
   <li class='active'><a href='account.php'><span>Account</span></a></li>

      <li class='last'><a href='usergallery.php'> <span> Gallery</span></a></li>

       <li class='last'><a href='upload.php'> <span>Upload</span></a></li>

      <li class='last'><a href='signout.php'> <span> Sign Out</span></a></li>
	  
</ul>
</div>";
	
}

// user


if($user=="user"){
	 echo "<div id='cssmenu'>
<ul>
   <li class='last'><a href='account.php'><span>".$name."</span></a></li>
   <li class='active'><a href='account.php'><span>Account</span></a></li>

      <li class='last'><a href='usergallery.php'> <span> Gallery</span></a></li>


      <li class='last'><a href='signout.php'> <span> Sign Out</span></a></li>
	  
</ul>
</div>";
	
}
?>

<hr>
 <div id="regi" align="center">
  <?php
  $msg="";
  $sql="select * from register where mail='$mailid'";	
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
	$sql_up="UPDATE `register` SET `pass`='$passw' WHERE mail='$mailid' ";
	$update=mysql_query($sql_up);
		$msg="Updated";
}

	}
	
}
}
echo "<font color='green' size='3px'>".$msg."</font>";
?>
 <h2> Password change<h2>
  <div id="regi2_box">
  <form action="" method="post">
  <label id="label">Password:- </label>  <input type="password"  id="text12" name="pss" /><br>

<br><br>
 <label id="label">Re-type Password:-</label>  <input type="password"  id="text13" name="repss" /><br>

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