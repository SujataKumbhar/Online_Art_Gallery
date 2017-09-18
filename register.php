<?php



include 'connect.php';


?><html>
<head>
<head>
<title>Painting Website </title>
 <link rel="stylesheet" type="text\css" href="style\register.css" >
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script>

 
 </script>

</head>
<body bgcolor="#8ED2C9">


<div class="big_header" align="center"  >


<!-- src="images/logo.png" alt="Profile" width="70px" height="70px" align="left" />-->
<div id="shadow">
<img src="images/logo.png" alt="Profile" align="left" width="70px" height="70px"/></a >
<h1>Ashpaint shop <h2>
<p id="logo"> Dream you hold</p>
</div>


<hr>
 <div id="regi">
   <?php

   $msg="";
$flag=0;
           $msgn=$msgd=$msgm=$msgl=$msgadd=$msgem=$msgpss=$msgrepss=$msgsameem="";

if (isset($_POST['sub'])){
$name=$_POST['name'];
$gen=$_POST['gen'];
$mbno=$_POST['mbno'];
$con=$_POST['con'];
$st=$_POST['st'];
$mail=$_POST['email'];
$add=$_POST['add'];
$pass=$_POST['pss'];
$user=$_POST['user'];
$city=$_POST['city'];

	
$name=$_POST['name'];
if ($name==""){
	$msgn="* Do not Blank the field";
$flag=1;

}
else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		 $msgn= " * Only letters and white space allowed"; 
$flag=1;
		}
   else {
		
  }
$mbno=$_POST['mbno'];
		 if($mbno==""){
			 
			  $msgm="* Do not Blank the field ";
		
$flag=1;
		 }
      else {
	
	  }
$mail=$_POST["email"];
		  	 if($mail== ""){
			 
		 $msgem="* Do not Blank the field ";
$flag=1;

		 }
		 if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $msgem = "* Invalid email format"; 
$flag=1;
}
      else {
		   
	  }
	     $sql_ret="select * from register";
   $re=mysql_query($sql_ret);
   while($row=mysql_fetch_array($re)){
	   $mai=$row['mail'];
	   if($mail==$mai){
		   		 $msgem="* Mail alraeady exist ";
				 $flag=1;
	   }
	   else{
		   
	   }
   }
	  
$add=$_POST["add"];
		   	 if($add == " "){
			 
			  $msgadd="* Do not Blank the field ";
$flag=1;
			  	 
		 }
      else {

	  }
$pass=$_POST["pss"];
				 if($pass== ""){
			 $msgpss="* Do not Blank the field ";
	
$flag=1;
		 }
      else {
	
	  }

if ($flag==1){
	
	echo "";
}
else {
$name=$_POST['name'];

			 $gen=$_POST['gen'];
	
			   $mbno=$_POST['mbno'];

				 $con=$_POST['con'];
				  $st=$_POST['st'];

					 $mail=$_POST['email'];
					  $add=$_POST['add'];
					   $pass=$_POST['pss'];
$today=date("Y/m/d");
$time=strtotime($today);
$month=date("F");
$year=date("Y");
$date=date("d");



//$sql = "INSERT INTO reg(name,bldgrp,gen,dob,mbno,lnno,con,st,dis,cit,mail,add,pass,repass,avail) VALUES ('$name','$bld',$gen,'2015/06/28',$mbno,$lnno,$con,$st,$dis,$cit,$mail,$add,$pass,$repass,$avail)";
$sql="INSERT INTO `register`(`id`,`user`, `year`, `month`, `date`, `name`, `gender`, `mobile`, `country`,`state`,  `city`,`mail`, `address`, `pass`, `qu`)
 VALUES('','$user','$year','$month','$date','$name','$gen','$mbno','$con','$st','$city','$mail','$add','$pass','')";

$succ=mysql_query($sql);
 	$msg="Registered you can login now ";

}

}
 echo "<font color='green'>".$msg."</font>";
?>
  <div id="regi_box">

  <form  action="register.php" method="post">
<label id="label">User type:-  </label>
  <select name="user">
  <option>Artist </option>
    <option>User</option>
  </select><br><br>
<label id='label'> Full Name :-</label>    <input type = 'text' name='name' id='text' /><br>
 <?php echo $msgn; 

 ?>
<br>
 <label id="label">Gender:-  </label><select id="text2" name="gen">
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select><br><br>

<hr>
	 <h1 id="reqbl">Contact Information </h1>
	 <hr>
	  <br><br>
 <label id="label">Mobile Number:-</label> <input type="text" name="mbno" id="text4" /><br>
 <?php echo $msgm;?>
<br><br>
 <label id="label">Select Country:-</label> <select id="text6" name="con">
  <option value="India">India</option>

  </select><br><br>
  <label id="label" >Select State:-</label>
<select name="st">
<option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
<option value='Andhra Pradesh'>Andhra Pradesh</option>
<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
<option value='Assam'>Assam</option>
<option value='Bihar'>Bihar</option>
<option value='Chandigarh'>Chandigarh</option>
<option value='Chhattisgarh'>Chhattisgarh</option>
<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
<option value='Daman and Diu'>Daman and Diu</option>
<option value='Delhi'>Delhi</option>
<option value='Goa'>Goa</option>
<option value='Gujarat'>Gujarat</option>
<option value='Haryana'>Haryana</option>
<option value='Himachal Pradesh'>Himachal Pradesh</option>
<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
<option value='Jharkhand'>Jharkhand</option>
<option value='Karnataka'>Karnataka</option>
<option value='Kerala'>Kerala</option>
<option value='Lakshadweep'>Lakshadweep</option>
<option value='Madhya Pradesh'>Madhya Pradesh</option>
<option value='Maharashtra'>Maharashtra</option>
<option value='Manipur'>Manipur</option>
<option value='Meghalaya'>Meghalaya</option>
<option value='Mizoram'>Mizoram</option>
<option value='Nagaland'>Nagaland</option>
<option value='Odisha'>Odisha</option>
<option value='Puducherry'>Puducherry</option>
<option value='Punjab'>Punjab</option>
<option value='Rajasthan'>Rajasthan</option>
<option value='Sikkim'>Sikkim</option>
<option value='Tamil Nadu'>Tamil Nadu</option>
<option value='Telengana'>Telengana</option>
<option value='Tripura'>Tripura</option>
<option value='Uttar Pradesh'>Uttar Pradesh</option>
<option value='Uttarakhand'>Uttarakhand</option>
<option value='West Bengal'>West Bengal</option>
</select>
  <br><br>
 <label id="label">City:-</label> <input type="text"  id="text9"  name="city"/><br>
 <?php echo $msgem;  ?>
 <br><br>
 <label id="label">E-Mail ID:-</label> <input type="text"  id="text9"  name="email"/><br>
 <?php echo $msgem;  ?>
 <br><br>
 <label id="label">Permanent Address:- </label> <textarea rows="4" cols="50" name="add"> </textarea><br>
 <?php echo $msgadd;  ?>
 <br><br>
  
<label id="label">Password:- </label>  <input type="password"  id="text12" name="pss" /><br>
 <?php echo $msgpss;  ?>
<br><br>



 <input type="submit" name="sub">
 <a href="home.php">Home</a>
 	
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