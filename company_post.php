<!DOCTYPE html>
<html>
<head>
	<title>Post Job</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<script type="text/javascript">
		function msgbox() 
		{
			var x=document.getElementByID('msg').value
			if (x==post job) 
			{
				alert("job posted");
			}
		}

	</script>
</head>
<body>
<div class="container" style="width: 100%;border: 1px solid;background-color: #eee;">
<div class="container" style="width: 700px; background-color: white;border-radius: 8px;margin-top: 30px;margin-bottom: 30px;">
<form action="" method="post" onsubmit="return msgbox();">
	<h1>Post Your Job Here</h1>

	<div class="container" style="width: 600px;">

	<div class="form-group">
	<label class="fieldRequired">JobTitle</label>
	<input type="text" name="job_title" class="form-control" required>
	</div>		

	<div class="form-group">
		<label>Job Description</label>
		<textarea rows="10" cols="20" name="job_decription" class="form-control" required></textarea>
	</div>

	<div class="form-group">
		<label>Job Location</label>
		
			<select class="form-control" required name="location">
			<option value="Ahmedabad">Ahmedabad</option>
			<option value="Anand">Anand</option>
			<option value="Nadiyad">Nadiyad</option>
			<option value="Baroda">Baroda</option>
			<option value="Surat">Surat</option>
		</select>
	</div>

	<div class="form-group">
		<label >Skills</label>
			<input type="text" name="skills" class="form-control">
	</div>

	<div class="form-group">
		<label>Experience</label>
		<select class="form-control" name="experience">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select>
	</div>
	<div class="form-group">
		<label>Salary</label>
		<input type="number" name="salary" class="form-control" required>
	</div>

	<div class="form-group" required>
		<label>Qualification/ Eligibility:</label>
		<select class="form-control" name="qualification">
			<option value="BE">BE</option>
			<option value="MCA">MCA</option>
			<option value="BCA">BCA</option>
			<option value="PHD">PHD</option>
			<option value="B.TECH">B.TECH</option>
			<option value="B.Pharm">B.Pharm</option>
			<option  value="B.Sc">B.Sc</option>
		</select>
	</div>

	<div>
		<label>Last Date of Vacancies</label>
		<input type="Date" name="last_date_of_vacancy" class="form-control">
	</div>

	<div class="form-group">
		<label>Vacancy</label>
		<input type="number" name="vacancy" class="form-control">

	</div>

	<div class="form-group">
		<input type="submit" value="Post Job" class="form-control btn-danger" name="submit" id="msg">
		
	</div>

	</div>
</form>
</div>
</div>
</body>
</html>

<?php 
include 'conn.php';
if (isset($_POST['submit'])) 
{
	$job_title=$_POST['job_title'];	
	$job_decription=$_POST['job_decription'];
	$location=$_POST['location'];
	$skills=$_POST['skills'];
	$experience=$_POST['experience'];
	$salary=$_POST['salary'];
	$qualification=$_POST['qualification'];
	$last_date_of_vacancy=$_POST['last_date_of_vacancy'];
	$vacancy=$_POST['vacancy'];
}
$query="insert into post values('','".$job_title."','".$job_decription."','".$location."','".$skills."','".$experience."','".$salary."','".$qualification."','".$last_date_of_vacancy."','".$vacancy."')";
if (mysql_query($query)==true) 
{
	echo "";
	
}
else{
	echo mysql_error();
	return false;
}



 ?>
