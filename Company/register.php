
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	if (isset($_POST['submit'])) 
	{
	
	
		$user=$_POST['user'];
		
		if ($user==1) 
		{
			include 'jobseeker.php';
		}
		else
		{
			include 'company_registration.php';
		}
	
	}
	//else{echo "<script>alert('select field');</script>";}

 ?>
</body>
</html>


	