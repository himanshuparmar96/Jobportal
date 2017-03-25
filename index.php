<!DOCTYPE html>
<html>
<head>
	<title>welcome to jobportal</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet"  href="web_final/bootstrap-3.3.7-dist/font-awesome-4.7.0/search/font-awesome.min.css">
	<style type="text/css">
		.body{background-color: cyan;}
	</style>
</head>
<body>

<div class="container" >

<div class="row">
	<div class="col-lg-10">
	<h1>Jobportal</h1>

	<ul class="nav nav-pills ">
  		<li role="presentation" class="active"><a href="#">Home</a></li>
  		<li role="presentation"><a href="#search_module">Search Jobs</a></li>
  		<li role="presentation"><a href="job_list.php">Joblist</a></li>
  		<li role="presentation"><a href="job_post.php">Job Post</a></li>
  		<li role="presentation"><a href="contactus.php">ContactUs</a></li>
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
?>


<!--Search Module -->
<div class="container" >
<h1>Welcome to Jobportal</h1>
<?php include 'search.php'; ?>
</div>

<!--Footer-->

<?php 
include 'footer.php';
 ?>



</div>

</body>
</html>