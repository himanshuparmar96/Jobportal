<!DOCTYPE html>
<head>
	<title>Create Account</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">Company Registration</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="do_company_register.php" method="post">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="first_name" class="control-label">Company Name</label>
			            <input type="text" class="form-control" id="company_name" placeholder="" name="c_name">		            		            		            
			          </div>  
			          <div class="col-md-6">		          	
			            <label for="last_name" class="control-label">Email Id</label>
			            <input type="email" class="form-control" id="last_name" placeholder="" name="c_email">		            		            		            
			          </div>             
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">User Name</label>
			            <input type="text" class="form-control" id="email" placeholder="" name="c_username">		            		            		            
			          </div>              
			        </div>			
			        
			        
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">Password</label>
			            <input type="password" class="form-control" id="password" placeholder="" name="c_password">
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">Confirm Password</label>
			            <input type="password" class="form-control" id="password_confirm" placeholder="">
			          </div>
			        </div>

			        <div class="form-group">
			        	<div class="col-md-6">
			        	<label class="control-label" required>Industry Type</label>
			        	<select class="form-control" name="industry">
			        		<option value="Banking/Financial">Banking/Financial</option>
			        		<option value="Education">Education</option>
			        		<option value="Enterntainment/Media/Pblishing">Entertainment/Media/Publishing</option>
			        		<option value="IT/Computer-Hardware">IT/Computer-Hardware</option>
			        		<option value="IT/Computer-Software">IT/Computer-Software</option>
			        		<option value="Oil/Gas/Petroleum">Oil/Gas/Petroleum</option>
			        		<option value="Real Estate">Real Estate</option>
			        		<option value="Telecom">Telecom</option>
			        		<option value="Advertising/Events">Advertising/Events</option>
			        		<option value="Travels/Tourism">Travels/Tourism</option>
			        		<option value="Other">Other</option>
			        	</select>
			        	
			        	</div>	

			        	<div class="col-md-6">
			        		<label class="control-label" name="city">City</label>
			        			<select class="form-control" required name="city">
								<option value="Ahmedabad">Ahmedabad</option>
								<option value="Anand">Anand</option>
								<option value="Nadiyad">Nadiyad</option>
								<option value="Baroda">Baroda</option>
								<option value="Surat">Surat</option>
								</select>
			        	</div>
			        	</div>
			        

			        	<div class="form-group">
			        		<div class="col-md-6">
			        			<label class="control-label">Contact Number</label>
			        			<input type="number" name="c_number" minlength="10" maxlength="10" required class="form-control" name="">
			        		</div>
			        	

			        	<div class="form-group">
			        		<div class="col-md-6">
			        			<label class="control-label">Company Website</label>
			        			<input type="text" name="website" class="form-control" style="width: 305px;">
			        		</div>
			        	</div>

			        	<div class="form-group">
			        		<div class="col-md-12">
			        		<label class="control-label" style="margin-left: 13px;">Address</label>
			        		<textarea class="form-control" style="margin-left: 13px;float: center;width: 650px;" name="c_address"></textarea>	
			        		</div>
			        		
			        	</div>
			        <!--<div class="form-group">
			          <div class="col-md-12">
			            <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
			          </div>
			        </div>-->
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="Create account" class="btn btn-info" name="submit">
			            <a href="login.php" class="pull-right">Login</a>
			          </div>

			        </div>	

				</div>				    	

		      </form>		      
		      <div align="center"><a href="index.php" class="templatemo-create-new" >Go To Homepage</a></div>
		</div>
	</div>
	
	
	<!--<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
</body>
</html>