<!DOCTYPE html>
<head>
	<title>Jobseeker Registration</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
<h1 class="margin-bottom-15">Jobseeker Registration</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="joblist.php" method="post">
				<div class="form-inner">
					<div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="first_name" class="control-label">First Name</label>
			            <input type="text" name="f_name" class="form-control" id="first_name" placeholder="" required>		            		            		            
			          </div>  
			          <div class="col-md-6">		          	
			            <label for="last_name" class="control-label">Last Name</label>
			            <input type="text" name="l_name" class="form-control" id="last_name" placeholder="" required>		            		            		            
			          </div>             
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">Email</label>
			            <input type="email" name="j_email" class="form-control" id="email" placeholder="" required>		            		            		            
			          </div>              
			        			
			        <div class="form-group">
			          <div class="col-md-6" style="padding-right: 30px;">		          	
			            <label for="username" class="control-label">Username</label>
			            <input type="text" name="j_username" class="form-control" id="username" placeholder="" required style="">		            		            		            
			          </div>
			          </div>
			          <div>
			          	<div class="col-md-6">
			        	<label class="control-label">Contact No</label>
			        	<input type="number" name="j_cn" class="form-control" required>
			        	</div>
			          <div class="col-md-6 templatemo-radio-group">
			          	<label class="radio-inline">
		          			<input type="radio" name="gender" id="optionsRadios1" value="Male"> Male
		          		</label>
		          		<label class="radio-inline">
		          			<input type="radio" name="gender" id="optionsRadios2" value="Female"> Female
		          		</label>
			          </div>  
			       
			          
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">Password</label>
			            <input type="password" name="password" class="form-control" id="password" placeholder="" required>
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">Confirm Password</label>
			            <input type="password" class="form-control" id="password_confirm" placeholder="" required>
			          </div>
			        </div>

			        
			        
			        	
			        
			        <!--<div class="form-group">
			          <div class="col-md-12">
			            <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
			          </div>
			        </div>-->
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" name="submit" value="Create account" class="btn btn-info">
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