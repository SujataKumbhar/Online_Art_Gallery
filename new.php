<?php
session_start();
$_SESSION['name']="";
	 $mailid=$_SESSION['mail']="";
	 	 $user=$_SESSION['user']="";

include 'connect.php';


?>
<html>
<head>
<head>
<title>Painting Website </title>
 <link rel="stylesheet" type="text\css" href="style\new.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

<div id="cp_widget_6db11fec-6c7a-443c-995a-c269b723134e"></div>
<script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_6db11fec-6c7a-443c-995a-c269b723134e"; cpo["_fid"] = "A8CAcCtnjAI3";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript>Powered by Cincopa <a href='http://www.cincopa.com/video-hosting'>Video Hosting for Business</a> solution.<span>New Gallery 2015/10/23</span><span>Simple way to share you art  </span><span>art is god gifted things </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 500</span><span>height</span><span> 331</span><span>Quality Painting we Provide </span><span>originaldate</span><span> 1/1/0001 6:00:00 AM</span><span>width</span><span> 1500</span><span>height</span><span> 1200</span><span>Variation in Painting </span><span>cameramake</span><span> NIKON CORPORATION</span><span>height</span><span> 653</span><span>camerasoftware</span><span> Adobe Photoshop Ligh</span><span>originaldate</span><span> 2/14/2013 9:54:18 PM</span><span>width</span><span> 980</span><span>cameramodel</span><span> NIKON D700</span></noscript>
 <div id='cssmenu'>
<ul>
   <li class='last'><a href='home.php'><span>Home</span></a></li>

      <li class='active'><a href='gallery.php'> <span> Gallery</span></a></li>

 

      <li class='last'><a href='register.php'> <span> Register</span></a></li>
	  <div id="form">
	  		<form action="hello.php" method="post"><label id="label">User :-</label>  <input type="text" name="mail" />
<label id="label">Password :-</label>  <input type="password" name="pass" />

<input type="submit" name="sub" id="btn" />
<font color="red"> </font>
			
<a href="#">Forgot Password? </a>
		</form>
		
		</div>
</ul>
</div>
<div id="gallery">
<br>

<hr>
  	   <?php
				  $sql_art="select * from upload ";
 $result=mysql_query($sql_art);
 
 while($row=mysql_fetch_array($result)){
	 $image=$row['paintimg'];
	 $dateall=$row['date'].$row['month'].$row['year'];
	 //$desc=$row['discrp'];
	 //$sub=$row['subject'];
	 //$siz=$row['size'];
	 //$shad=$row['shades'];
	 $price=$row['cost'];  
	 $name=$row['artist'];
	 $city=$row['city'];
	 $id=$row['id'];

echo "<div class='one-third'>
   
      <span class='screen fade-in'>
        <p class='title'>
       ".$name."<br>
		<font color='white'>-".$city."</font><br>
				<span> ".$dateall."</span><br>
				<i class='fa fa-inr'></i>".$price."
        </p>
				<a href='gallery.php?id=".$id."'>more detail</a>
      </span>

<img src='images/Artist/".$image."' class='tilt pic' alt='Profile' width='200px' height='200px' />
  </div>";
  
 }
  ?>
</div>
 <div id="regi">
 <footer>
  @ashpaint painting shop reserve right @2016
  <a href="#">contact</font> &nbsp| &nbsp<a href="#">Admin</font>
 </footer>
 </div>

 </div>
 

</body>

</html>