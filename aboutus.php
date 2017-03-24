<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


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
  		<li role="presentation" ><a href="contactus.php">ContactUs</a></li>
  		<li role="presentation" class="active"><a href="aboutus.php">AboutUs</a></li>
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
<div class="container">
<div >
	<h1>About Us</h1>
	<img src="img/about.jpg" height="600px" width="700px" class="img-square" style="border: 1px solid;">
	
</div>

<div>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>