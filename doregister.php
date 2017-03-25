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
		echo "data inserted";
	}
	else
	{
		echo mysql_error();
	}



 ?>
