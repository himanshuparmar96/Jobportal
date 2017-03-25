<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<?php 
include 'conn.php';
if (isset($_POST['submit'])) 
{
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);




}
	$query="select * from jobseeker where user_name='$username'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
//	echo "row".$count;
	if ($count==1) 
	{
		$row=mysql_fetch_assoc($result);
		//echo "row".$row['password'];
		//echo "user".$row['user_name'];
		if ($password==$row['password']) 
		{
			echo "login successfull";
			 
        	 header('Location:index.php');
			return true;
		}
		 else 
		 {
        	echo "Wrong Username or Password";
        	return false;
    	  }

	}

	



 ?>



</body>
</html>