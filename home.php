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
 <link rel="stylesheet" type="text\css" href="style\home.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


</head>
<body bgcolor="#8ED2C9">
	  <?php

$msg = "";
if(isset($_POST['sub'])){
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];

	


$sql="select * from register Where mail='$mail'";

$result=mysql_query($sql);

$values = mysql_fetch_array($result);
$maild =$values['mail'] ;
$passd = $values['pass'];
$name=$values['name'];
$user=$values['user'];

if($maild==$mail){
	if ( $passd==$pass){
	

	 $_SESSION['name']=$name;
	 $_SESSION['mail']=$mail;
	 	 $_SESSION['user']=$user;
 //$msg="ok";
header('Location:'.'account.php');
	}
	else {

	$msg="* Password is Wrong";
	}
}
else {

	$msg=" * Email is Wrong";
	}


}

?>

<div class="big_header"   >


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

   <li class='active'><a href='hello.php'><span>Home</span></a></li>

      <li class='last'><a href='usergallery.php'> <span> Gallery</span></a></li>

 

      <li class='last'><a href='register.php'> <span> Register</span></a></li>
	   	  <div id="form">

	  		<form action="home.php" method="post"><label id="label">User :-</label>  <input type="text" name="mail" />
<label id="label">Password :-</label>  <input type="password" name="pass" />

<input type="submit" name="sub" id="btn" /><br>


		</form>
		
		</div>
	  <?php echo "<font color='red' size='3px'>".$msg."</font>";?>

</ul>
</div>
<!----- New Release  Section   -->
<div id="new">
<h2> New release  <font size="2px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp>><a href="new.php" id="view"> View More </a> </font></h2>
<hr>
<marquee  direction="left" scrollamount="6" scrolldelay="" onmouseover="this.stop()"
                   onmouseout="this.start()" direction="left"
                   style="margin-top: 0px; margin-left: 6px;" class="style41">
				   
				   <?php
				  $sql_art="select * from upload where status='Active'";
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
</marquee>
<hr>
</div>
<!----- Popular Section   -->
<div id="pop">
<h2>Popular  <font size="2px"></h2>
<hr>
<marquee  direction="left" scrollamount="6" scrolldelay="" onmouseover="this.stop()"
                   onmouseout="this.start()" direction="left"
                   style="margin-top: 0px; margin-left: 6px;" class="style41">
<div class="one-third">

      <span class="screen fade-in">
        <p class="title">
        Umesh Shende<br>
		<font color="white">-Mumbai</font><br>
				<span> 20 Oct 2015</span><br>
								<i class="fa fa-inr"></i> 1300.00
        </p>
				<a href="#" id="idname">more detail</a>
      </span>
<img src="images/p1.jpg" class="tilt pic" alt="Profile" width="200px" height="200px"/>

  </div>
<div class="one-third">

      <span class="screen fade-in">
        <p class="title">
       Rahul<br>
		<font color="ivory">-Mumbai</font><br>
						<i class="fa fa-inr"></i> 1300.00

        </p>
						<a href="#" id="idname">more detail</a>
      </span>
<img src="images/p2.jpg"  class="tilt pic"alt="Profile"  width="200px" height="200px"/>
    </a>
  </div>
  <div class="one-third">

      <span class="screen fade-in">
        <p class="title">
       Rahul<br>
		<font color="ivory">-Mumbai</font>
        </p>
						<a href="#" id="idname">more detail</a>
      </span>
<img src="images/p3.jpg"  class="tilt pic"alt="Profile"  width="200px" height="200px"/>
    </a>
  </div>


</marquee>
<hr>
</div>
<!----- Sold Section   -->
<div id="sold">
<h2> Latest Sold <h2>
<hr>
<marquee  direction="left" scrollamount="6" scrolldelay="" onmouseover="this.stop()"
                   onmouseout="this.start()" direction="left"
                   style="margin-top: 0px; margin-left: 6px;" class="style41">
<?php
				  $sql_art="select * from pay ";
 $result=mysql_query($sql_art);
 
 while($row=mysql_fetch_array($result)){
	 $image=$row['product'];
	 $dateall=$row['date'];
	 //$desc=$row['discrp'];
	 //$sub=$row['subject'];
	 //$siz=$row['size'];
	 //$shad=$row['shades'];
	 $price=$row['cost'];  

	 $id=$row['id'];

echo "<div class='one-third'>
   
      <span class='screen fade-in'>
        <p class='title'>
       <font color='red'>SOLD</font><br>

				<span> ".$dateall."</span><br>
				<i class='fa fa-inr'></i>".$price."
        </p>

      </span>

<img src='images/Artist/".$image."' class='tilt pic' alt='Profile' width='200px' height='200px' />
  </div>";
  
 }
  ?>


</marquee>
<hr>
</div>
 <div id="regi">
 <footer>
  @ashpaint painting shop reserve right @2016
  <a href="#">contact</font> &nbsp| &nbsp<a href="adminlogin.php">Admin</font>
 </footer>
 </div>

 </div>
 

</body>

</html>