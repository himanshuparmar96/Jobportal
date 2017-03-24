<!DOCTYPE html>
<html>
<head>
	<title>Registration User</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function checkuser() 
		{
		var x=document.getElementById('user').value;
		if(x==0)
		{
			alert("select user");
			//document.write("<?php header("Location:registration_user.php") ?>"); 
		}
		}
	</script>
</head>
<body style="background-color: #eee;">
<div class="container">
<form action="register.php" method="post">
<div class="form-group">
<div align="center" class="container" style="width: 400px;background-color: white;border-radius: 8px;margin-top: 100px;">
<h1 class="label-control">Select User</h1>	
<select class="form-control" name="user" id="user">
	<option value="0" selected>Select User</option>
	<option value="1">Jobseeker</option>
	<option value="2">Company</option>
	
</select>
	<div class="form-group">
	<div style="margin-top: 30px;">
	<input type="submit" value="Register" class="form-control btn-danger" name="submit" onclick="checkuser()">
	</div>
	</div>
</div>
</div>

</form>
</div>
</body>
</html>