<?php
session_start();
$name=$_SESSION['name'];
	 $mailid=$_SESSION['mail'];
	 	 $user=$_SESSION['user'];
$id=$_GET['id'];
include 'connect.php';


?>
<html>
<head>
<style>
#info{
	margin-left:104px;
	
}
#info_box{
	    border: 1px solid black;
    height: 453px;
    width: 381px;
    /* margin: 32px auto; */
    margin-left: 400px;
	text-align:center;
}
bold{
	color:red;
	
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
 <link rel="stylesheet" type="text\css" href="style\gallery.css" >
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

<div id="gallery">
<br>

<hr>
<div id="info">
				   <?php
		
					   
					   			  $sql_art="select * from upload where id='$id'";
					   
			
				
	
 $result=mysql_query($sql_art);
 $row=mysql_fetch_array($result);
	 $image=$row['paintimg'];
	 $dateall=$row['date'].$row['month'].$row['year'];
	 $desc=$row['discrp'];
	 $sub=$row['subject'];
	 $siz=$row['size'];
	 $shad=$row['shades'];
	 $price=$row['cost'];  
	 $name=$row['artist'];
	 $city=$row['city'];
	 $id=$row['id'];

echo "<div class='one-third'>
   
      <span class='screen fade-in'>
   
	
      </span>

<img src='images/Artist/".$image."' class='tilt pic' alt='Profile' width='200px' height='200px' />
  </div>";
  
 
  ?>
  </div>
  <div id="info_box">
  <bold> Artist Name : </bold><?php echo $name;?><br><br>
      <bold> publish date  :</bold> <?php echo $dateall;?><br><br>
  <bold> Cost   : </bold><?php echo "<i class='fa fa-inr'></i>".$price." ";?><br><br>
    <bold> City :</bold> <?php echo $city;?><br><br>
  <bold> Subject  :</bold> <?php echo $sub;?><br><br>
  <bold> Size  :</bold> <?php echo $siz;?><br><br>
  <bold> shades  : </bold><?php echo $shad;?><br><br>
   <bold>Discription   :</bold> <?php echo $desc;?><br><br>
   
<?php
if(!isset($_SESSION['user'])){
	
	echo "<span><font color='red'>* Login is required to Proceed please Login </font></span><br><br>";
	  echo " <a href='#' class='btn'>BUY</a>";
}
if(isset($_SESSION['user'])){
	  echo " <a href='buy.php?idd=".$id."' class='btn'>BUY</a>";
}


   ?>

   </form>
  </div>

 
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