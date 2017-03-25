<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.address {
    width: 300px;
    height: 180px;    
    border-radius: 3px;
    border: 1px solid red;

}
	</style>
</head>
<body>
<div class="container" >

<div class="row">
	<div class="col-lg-10">
	<h1>Jobportal</h1>

	<ul class="nav nav-pills ">
  		<li role="presentation" ><a href="index.php">Home</a></li>
  		<li role="presentation"><a href="index.php">Search Jobs</a></li>
  		<li role="presentation"><a href="#">Joblist</a></li>
  		<li role="presentation" ><a href="job_post.php">Job Post</a></li>
  		<li role="presentation" class="active"><a href="contactus.php">ContactUs</a></li>
  		<li role="presentation"><a href="aboutus.php">AboutUs</a></li>
	</ul>

	</div>

	<span class="col-lg-2" style="margin-top: 50px;padding:15px;"><a href="login.php">Login |</a>
	<a href="registration_user.php">Registration</a></span>
</div>

</div>

<?php
//**********************slider*********************
include 'slider.php';
//Advertisement
include 'Advertisement.php';

?>
<form>
	<div class="container">
	<div>
	<h1>Contact US</h1>
	</div>
	
	<div class="form-group">
		<div class="col-lg-8">
		<label class="control-label">Name</label>
		<input type="text" name="name" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-8">
		<label>Email</label>
		<input type="email" name="email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-8">
		<label>Phone</label>
		<input type="number" name="phone_number" class="form-control" maxlength="10">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-8">
		<label>Subject</label>
		<input type="text" name="subject" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-8">
		<label>Message</label>
		<textarea class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group" >
	<div class="col-lg-8">
		<input type="submit" name="submit" value="Send Message" class="btn btn-info" style="margin-left: 300px;margin-top: 20px;">
	</div>
	</div>
<div class="row" style="text-align: center;">
<div class="col-lg-4">
<div class="address" style="margin: 10px;margin-left: 20px;">
<h1>Address:</h1><p>14/215 Gujarat Housing Board,near baroda express highway,C.T.M,Ahmedabad-380026</p>
</div>
</div>

<div class="col-lg-4">
<div class="address" style="margin: 10px;margin-left: 49px;">
<h1>Details:</h1>
<p>Name:Parmar Himanshu</p>
<p>Email Id:</p>
<p>manager.jobportal@gmail.com</p>
<p>Phone:9586033348</p>
</div>
</div>
<h1></h1>
</div>	
</div>
</div>

</div>
</form>
<div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>