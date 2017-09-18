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
 <div id="regi">
  <div id="regi_box1">
  <?php
  $msg="";
  $sql="select * from register where mail='$mailid'";	
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$mb=$row['mobile'];
$cont=$row['country'];
$sta=$row['state'];
$mailidd=$row['mail'];
$address=$row['address'];	
$id=$row['id'];

if(isset($_POST['sub'])){
	$flag=1;
	$mbno=$_POST['mbno'];
	$con=$_POST['con'];
		$state=$_POST['st'];
	$mail=$_POST['email'];
		$add=$_POST['add'];

if($mbno=="" || $con==""||$state==""||$mail==""||$add==""){
	$mbno=$mb;
	$con=$cont;
	$state=$sta;
	$mail=$mailidd;
	$add=$address;
	$flag=0;
	
}
if($mbno!=""){
	$mbno=$mbno;
	$flag=0;
}
if($con!=""){
	$con=$con;
	$flag=0;
}
if($state!=""){
	$state=$state;
	$flag=0;
	
}
if($mail!=""){
	$mail=$mail;
	$flag=0;
}
if($add!=""){
	$add=$add;
	$flag=0;
}
if($flag==0){
	
	$sql_up="UPDATE `register` SET `mobile`='$mbno',`country`='$con',`state`='$state',`mail`='$mail',`address`='$add' WHERE mail='$mailid' ";
	$update=mysql_query($sql_up);
		$msg="Updated";
}
else{
	
$msg="SQl Wrong ";
}


}
echo "<font color='green' size='3px'>".$msg."</font>";
?>
  

  <form  action="editaddress.php" method="post"> 


	 <h1 id="reqbl">Contact Information </h1>
	 <hr>
	  <br><br>
 <?php echo "<label id='label'>Mobile Number:-</label> <input type='text' name='mbno' id='text4' value='$mb' />";?>
<br><br>
<label id="label">Select Country:-</label> <select id='text6' name="con" >
  <option value="India">India</option>

  </select><br><br>
<label id="label">Select State:- </label> 
 <select id="text7" name="st">
  <option value="Maharastra">Maharastra</option>

  </select><br><br>
 
  

 <label id="label">E-Mail ID:-</label> <?php echo "<input type='text'  id='text9'  name='email' value='$mailidd'/><br>";?>
 <?php //echo $msgem;  ?>
 <br><br>
 <label id="label">Permanent Address:- </label><textarea rows="4" cols="50" name="add"> </textarea><br>
 <?php //echo $msgadd;  ?>
 <br><br>


 <input type="submit" name="sub" value="Update">

 	
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