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
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
 <div id='cssmenu'>
<ul>
   <li class='last'><a href='admin.php'><span>Admin</span></a></li>
  



 

      <li class='last'><a href='signout.php'> <span> Sign Out</span></a></li>
	  
</ul>
</div>

<hr>
 <div id="regi">
 <h2> Personal<h2>
  <div id="regi3_box">

<table id="t01">
  <tr>
     <th>name</th>
    <th>Painting</th>
		<th>date </th>
        <th>Cost</th>
		 <th>status</th>

  </tr>
 <?php
 $sql_art="select * from pay  ";
 $result=mysql_query($sql_art);
 if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

 
 while($row=mysql_fetch_array($result)){
	 $image=$row['product'];
	
	 $dat=$row['date'];
	
	 $price=$row['cost'];
	 $name=$row['name'];
	 
echo "
  <tr>
  	    <td>".$name."</td>		
    <td height='80'><img src='images/Artist/".$image."'width='50' height='50' /></td>
	    <td>".$dat."</td>		
	
     <td><i class='fa fa-inr'></i>".$price."</td>

	<td>  SOLD</td>

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