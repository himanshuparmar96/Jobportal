

<?php 
include 'conn.php';
session_start();
if (isset($_POST['submit'])) 
	{
		$user=$_POST['user'];
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
	}
		if ($user==1) 
		{
			$query="select * from jobseeker where user_name='$username'";
			$result=mysql_query($query);
			$count=mysql_num_rows($result);
			//	echo "row".$count;
			if ($count==1) 
			{
				$_SESSION['user'] = $username;
				$row=mysql_fetch_assoc($result);
				//echo "row".$row['password'];
				
				if ($password==$row['password']) 
				{
				echo "login successfull";
			 
        	 	header('Location:jobseeker/index.php');
				return true;
				}
		 		else 
		 		{
        		echo "Wrong Username or Password";
        		return false;
        		header('Location:login.php');
    	  	
				}
			}
		}
			
		
		else
		{
			$query="select * from company_registration where user_name='$username'";
			$result=mysql_query($query);
			$count=mysql_num_rows($result);
			//	echo "row".$count;
			if ($count==1) 
			{
			$_SESSION['user'] = $username;
			$row=mysql_fetch_assoc($result);
			//echo "row".$row['password'];
			//echo "user".$row['user_name'];
			if ($password==$row['password']) 
			{
			echo "login successfull";
			 
        	header('Location:company/index.php');

			return true;
			}
		 	else 
		 	{
        	echo "Wrong Username or Password";
        	
        	header('Location:login.php');

        	return false;
			}
			}
		}
	
 ?>
