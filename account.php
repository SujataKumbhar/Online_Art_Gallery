<?php
session_start();
$name=$_SESSION['name'];
	 $mailid=$_SESSION['mail'];
	 	 $user=$_SESSION['user'];
		 	 if(!isset($_SESSION['name'])){
			 header('Location:'.'home.php');
		 }
		  if(!isset($_SESSION['mail'])){
			 header('Location:'.'home.php');
		 }
		  if(!isset($_SESSION['user'])){
			 header('Location:'.'home.php');
		 }
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
 <div id="regi">
 <h2> Personal<h2>
  <div id="regi_box">
 <a href="editaddress.php" id="acc">Edit profile</a><br>


  </div>
   <h2> Setting <h2>
    <div id="regi_box">
 <a href="passu.php" id="acc">Edit Password </a><br>
 
  </div>
     <h2>Order<h2>
    <div id="regi_box">
 <a href="orderhis.php" id="acc">Your Order History </a><br>
  </div>
  
  	<?php
	if($user="Artist"){
    echo " <h2>Upload<h2>
    <div id='regi_box'>
 <a href='upload_his.php' id='acc'>Upload History </a><br>
  </div>";
	}
  
  
  ?>
    </div>
	
 <footer>
  @ashpaint painting shop reserve right @2016
  <a href="#">contact</font> &nbsp| &nbsp<a href="#">Admin</font>
 </footer>
 </div>
 






 

</body>

</html>