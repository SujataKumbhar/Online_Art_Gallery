
<?php
if(isset($_POST['subd'])){
	$bank=$_POST['bank'];
	$cardno=$_POST['cardno'];
	$cvv=$_POST['cvv'];
	$namec=$_POST['name'];
	//check the data with bank table 
	$sqlpaint="select * from upload where id='$id'";
	$rety=mysql_query($sqlpaint);
	$rowrt=mysql_fetch_array($rety);
	$price=$rowrt['cost'];
	$img=$rowrt['paintimg'];
	$sqlbank="select * from bank where name='$bank'";
	$get=mysql_query($sqlbank);
	$fet=mysql_fetch_array($get);
	$bankname=$fet['name'];
	$card=$fet['cardno'];
	$cv=$fet['cvv'];
	$client_name=$fet['cl_name'];
	
	if($bank==$bankname&&$cardno==$card&&$cvv==$cv&&$namec==$client_name){
		$msgsuc="Sucessfull trancation ";
		$sqlpaym="insert into pay(name,cost,product,date)values('$name','$price','$img','CURDATE()')";
		$succ=mysql_query($sqlpaym);
	}
	else{
		$msgsuc="Unsuccesfull";
	}
}
?>