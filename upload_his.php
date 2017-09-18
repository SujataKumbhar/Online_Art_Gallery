
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

<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>
 


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
  <div id="regi3_box">

<table id="t01">
  <tr>
    <th>Painting</th>
		<th>date </th>
    <th>Description  </th>	
	<th>Subject </th>
	<th>Size</th>
	<th>Shade</th>	
    <th>Cost</th>

  </tr>
 <?php
 $sql_art="select * from upload where mail='$mailid'";
 $result=mysql_query($sql_art);
 
 while($row=mysql_fetch_array($result)){
	 $image=$row['paintimg'];
	 $dateall=$row['date'].$row['month'].$row['year'];
	 $desc=$row['discrp'];
	 $sub=$row['subject'];
	 $siz=$row['size'];
	 $shad=$row['shades'];
	 $price=$row['cost'];
	 
echo "
  <tr>
    <td height='80'><img src='images/Artist/".$image."'width='50' height='50' /></td>
	    <td>".$dateall."</td>		
    <td>".$desc."</td>		
    <td>".$sub."</td>
	 <td>".$siz."</td>
	     <td>".$shad."</td>		
    <td>".$price."</td>

  </tr>";
 }
   ?>
 


</table>

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