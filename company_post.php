<!DOCTYPE html>
<html>
<head>
	<title>Post Job</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width: 500px;border: 1px solid;">
<form action="#" method="post">
	<h1>Post Your Job Here</h1>
	<div class="form-group">
	<label class="fieldRequired">JobTitle</label>
	<input type="text" name="job_title" class="form-control" required>
	</div>		

	<div class="form-group">
		<label>Job Description</label>
		<textarea rows="10" cols="20" class="form-control" required></textarea>
	</div>

	<div class="form-group">
		<label>Job Location</label>
		
			<select class="form-control" required>
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
		<label>Salary</label>
		<input type="number" name="salary" class="form-control" required>
	</div>

	<div class="form-group" required>
		<label>Qualification/ Eligibility:</label>
		<select class="form-control">
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
		<input type="Date" name="lastdate_vacancy" class="form-control">
	</div>

	<div class="form-group">
		<label>Vacancy</label>
		<input type="number" name="vacancy" class="form-control">

	</div>

	<div class="form-group">
		<input type="submit" value="Post Job" class="form-control btn-danger" name="submit">
		
	</div>

</form>
</div>
</body>
</html>