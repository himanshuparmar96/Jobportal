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

	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email=$_POST['j_email'];
	$u_name=$_POST['j_username'];
	$c_number=$_POST['j_cn'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
}
	$query="insert into jobseeker values('','".$f_name."','".$l_name."','".$email."','".$u_name."','".$c_number."','".$gender."','".$password."')";
	

	if (mysql_query($query)) 
	{
		echo "<h1>Registration Successfull</h1>";
		sleep(5);//5 second to redirect
		header("Location:login.php");
	}
	else
	{
		echo mysql_error();
	}



 ?>
