<!DOCTYPE html>
<html>
<head>
	<title>welcome to jobportal</title>
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
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
  		<li role="presentation" ><a href="index.php">Home</a></li>
  		<li role="presentation"><a href="#">Joblist</a></li>
  		<li role="presentation" class="active"><a href="#">Job Post</a></li>
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
<h1>Job Post</h1>
<?php include 'company_post.php'; ?>
</div>

<!--Footer-->

<?php 
include 'footer.php';
 ?>



</div>

</body>
</html>