<!DOCTYPE html>
<html>
<head>
	<title>job list</title>
</head>
<body>

</body>
</html>
<?php 
include 'conn.php';

if (isset($_POST['submit'])) 
{
//print_r($_POST);	

	$c_name=$_POST['c_name'];
	$c_email=$_POST['c_email'];
	$c_username=$_POST['c_username'];
	$c_password=$_POST['c_password'];
	$industry=$_POST['industry'];
	$city=$_POST['city'];
	$c_number=$_POST['c_number'];
	$website=$_POST['website'];
	$address=$_POST['c_address'];
}
	$query="insert into company_registration values('','".$c_name."','".$c_email."','".$c_username."','".$c_password."','".$industry."','".$city."','".$c_number."','".$website."','".$address."')";
	

	if (mysql_query($query)) 
	{
		echo "<center><h1 style='color:green;'>Registration Successfull</h1><center>";
		echo "You are redirecting login page...";
		
		//header('refresh:5;Location:login.php');
		header('refresh:3;url=login.php');
	}
	else
	{
		echo mysql_error();
	}



 ?>
