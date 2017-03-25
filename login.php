<!DOCTYPE html>
<head>
	
	<title>Login </title>
	
	<link href="bootstrap-3.3.7-dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
	<script type="text/javascript">
		function checkuser() 
		{
		var x=document.getElementById('user').value;
		if(x==0)
		{
			alert("select user");
			return false;
		}
		}
	</script>
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Login</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="dologin.php" method="post" onsubmit="return checkuser()">				
		        <div class="form-group">
		        <div class="row">
		        <div class="col-lg-12">
		        <label>Select  User:</label>
		        <div class="form-group" align="center" style="margin-left: 45px;margin-right: 15px;">
		        	<select class="form-control" name="user" id="user" required>
		        		<option value="0">Please Select</option>
		        		<option value="1" required>Jobseeker</option>
		        		<option value="2" required>Company</option>
		        		
		        	</select>
		        </div>
		        </div>
		        </div>
		          <div class="col-xs-12" style="margin-top: 20px;">		            
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox"> Remember me
                		</label>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="Log in" class="btn btn-info" name="submit">
		          		<a href="forgot-password.html" class="text-right pull-right">Forgot password?</a>
		          	</div>
		          </div>
		        </div>
		        
		      </form>
		      <div class="text-center">
		      	<a href="REGISTER.html" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>	<br>
		      	<a href="index.php" class="templatemo-create-new">Go To Homepage</a>
		      </div>
		</div>
		
	</div>
</body>
</html>