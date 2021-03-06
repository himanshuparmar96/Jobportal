<!DOCTYPE html>
<html>
<head>
	<title>Post Job</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width: 100%;border: 1px solid;background-color: #eee;">
<div class="container" style="width: 700px; background-color: white;border-radius: 8px;margin-top: 30px;margin-bottom: 30px;">
<form action="#" method="post">
	<h1>Post Your Job Here</h1>

	<div class="container" style="width: 600px;">

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
		<label>Experience</label>
		<select class="form-control">
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

	</div>
</form>
</div>
</div>
</body>
</html>