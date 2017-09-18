<?php
session_start();
$admin=$_SESSION['name'];
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
 <div id='cssmenu'>
<ul>
   <li class='last'><a href='admin.php'><span><?php echo $admin;?></span></a></li>
  


 

      <li class='last'><a href='signout.php'> <span> Sign Out</span></a></li>
	  
</ul>
</div>

<hr>
 <div id="regi">
 <h2> User Order<h2>
  <div id="regi_box">


 
 <a href="ordreport.php" id="acc">Order Report  </a><br>
 

  </div>
   <h2> Setting <h2>
    <div id="regi_box">
 <a href="adminpass.php" id="acc">Edit Password </a><br>
 
  </div>
     <h2>Artist Request <h2>
    <div id="regi_box">
	<a href="manageart.php" id="acc">Manage Content </a><br>

  </div>

  
       <h2>Content  <h2>
    <div id="regi_box">
	<a href="managec.php" id="acc">Manage Content </a><br>
 <a href="Reportc.php" id="acc">Content Report  </a><br>

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