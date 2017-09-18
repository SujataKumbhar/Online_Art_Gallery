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
		 $id=$_GET['idd'];
$_SESSION['idd']=$id;

include 'connect.php';

echo $_SESSION['idd'];
?>

<html>
<head>

<style>
#regi_pay{
    border: 1px solid black;
    width: 500px;
    height: 306px;
    margin-top: 96px;
    margin-left: 165px;
}
#pay{
	
	    margin-left: 161px;
}
#payment{
	
	    margin-left: 116px;
}
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 28px;
  padding: 5px 20px 6px 23px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
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
if($user==""&&$name==""&&$mailid==""){
	 echo "<div id='cssmenu'>
<ul>

   <li class='last'><a href='home.php'><span>Home</span></a></li>

      <li class='active'><a href='usergallery.php'> <span> Gallery</span></a></li>

	  
</ul>
</div>";
	
}
?>


<hr>
 <div id="regi">
 
  <div id="regi_pay">
 <h1 id="pay">Payment Option]</h1>
  
  <form action="paymentaction.php" method="post">
  <div id="payment">
  <input type="radio" name="pay" value="Debitcard">Debit Card
    <input type="radio" name="pay" value="CashonDelivery">Cash on Delivery <br><br>
<input type="submit" class="btn" name="sub" value="GO"> 
	</div>
  </form>

  </div>
   
  

    </div>
	
 <footer>
  @ashpaint painting shop reserve right @2016
  <a href="#">contact</font> &nbsp| &nbsp<a href="#">Admin</font>
 </footer>
 </div>
 






 

</body>

</html>