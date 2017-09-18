<?php
session_start();
$name=$_SESSION['name'];
	 $mailid=$_SESSION['mail'];
	 	 $user=$_SESSION['user'];
include 'connect.php';


?>

<html>
<head>
<style>
#regi_box{
border: 1px solid black;
    width: 500px;
    height: 502px;
    margin-top: 55px;
    margin-left: 186px;
    text-align: center;
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
?>


<hr>
 <div id="regi">
   <?php
$sql="select * from register Where mail='$mailid' and user='Artist' ";

$result=mysql_query($sql);

$values = mysql_fetch_array($result);
$city=$values['city'] ;


			$msgimg="";
		if(isset($_POST['subg'])){
			/*
$filename=$_FILES['fileToUpload']['name'];
$uploaddir = 'C:/xampp/htdocs/painting/images/Artist/';

$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
	//$sqlpic="INSERT INTO `photos`(`name`, `link`, `usertype`, `city`) VALUES ('$name','$filename','$user','$disu')";
	//mysql_query($sqlpic);

 //$msgimg="Uploaded SuccesFully  ";
}
else {
	//$msgimg="oops Something is Wrong ";
	 }*/
		}

$msgshow="";

if(isset($_POST['sub'])){
	$desc=$_POST['disc'];
	$subject=$_POST['subj'];
	$size=$_POST['size'];
	$shade=$_POST['shade'];
		$price=$_POST['price'];
	$today=date("Y/m/d");
   
$time=strtotime($today);
$month=date("F");
$year=date("Y");
$date=date("d");

			
$filename=$_FILES['fileToUpload']['name'];
$uploaddir = 'C:/xampp/htdocs/painting/images/Artist/';

$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
	//$sqlpic="INSERT INTO `photos`(`name`, `link`, `usertype`, `city`) VALUES ('$name','$filename','$user','$disu')";
	//mysql_query($sqlpic);

 //$msgimg="Uploaded SuccesFully  ";
}
else {
	//$msgimg="oops Something is Wrong ";
	 }
	$imglink=$filename;
$sql_upl="INSERT INTO `upload`(`id`,`artist`, `mail`, `paintimg`, `discrp`, `subject`, `size`, `shades`, `cost`, `city`, `date`, `month`, `year`, `status`) 
VALUES ('','$name','$mailid','$imglink','$desc','$subject','$size','$shade','$price','$city','$date','$month','$year','pending')";
if($ret=mysql_query($sql_upl)){
	$msgshow="Success upload your conten will verify first then will display";
}
else{
$msgshow="Something wrong with database";
}
}
echo $msgshow;
		?>
  <div id="upload_box">

<br><br>


 <form action="upload.php" method="post" enctype="multipart/form-data">
  <label >Upload Painting</label>
  
    <input type="file" id="fileToUpload"  placeholder="painting" name="fileToUpload" ><br><br>


 <label id="label">Discription :- </label> <textarea rows="4" cols="50" name="disc"> </textarea><br>

 <br><br>
   <label>By Subject :</label><select name="subj">
  <option> abstract painting </option >
 <option>Landscape and sescape</option >
 <option>Figurative painting </option >
 <option>Modern Art painting </option >
 <option>Budha painting </option >
 <option>Religious Painting</option >
 <option>Fold art Painting</option >
 <option>Stil Art Painting</option >
 <option>still Life Painting</option >
 <option>Other subject </option >
  </select> 
  <br><br>
      <label>By Size :</label><select name="size">
  <option>Horizontal</option >
 <option>Square</option >
 <option>Vertical </option >

  </select><br><br>
   <label id="label">Shades:-</label> <input type="text"  id="text9"  name="shade"/><br>

 <br><br>
    <label id="label">Price:-</label> <input type="text"  id="text9"  name="price" placeholder="Ruppees "/><br>

 <br><br>




 <input type="submit" name="sub">

 	
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