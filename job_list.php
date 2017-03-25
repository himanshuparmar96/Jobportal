<!DOCTYPE html>
<html>
<head>
	<title>jobs</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body>
<div class="container">
<form action="#" method="posst">
<div class="form-group">
<?php 
include 'conn.php';

$query="select * from company_registration";
$result=mysql_query($query);

while( $row = mysql_fetch_assoc( $result ) ){
       ?>
       <div>
     <table border="1px" class="table table-inverse">
     <tr scope="row">
     	<th rowspan="2" class="thead-inverse">Contact Details</th>
     	<td>Company Name</td>
     	<td>Email Id</td>
     	<td>User Name</td>
     	<td>industry</td>
     	<td>city</td>
     	<td>contact_no</td>
     	<td>website</td>
     	<td>Address</td>
     </tr>
	<tr>
		

            <td><?php echo $row['company_name']; ?></td><br>
            <td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td> 
            <td><?php echo $row['industry']; ?></td> 
            <td><?php echo $row['city']; ?></td> 
            <td><?php echo $row['contact_no']; ?></td> 
            <td><?php echo $row['website']; ?></td> 
            <td><?php echo $row['address']; ?></td> 
            
            
        </tr>
        </table>
        </div>
        <?php
}

 ?>


<?php 
$query="select * from post";
$result=mysql_query($query);

while( $row = mysql_fetch_assoc( $result ) ){
       ?>
       <div>
     <table  class="table">
     	<tr>
            <td>job_title</td><br>
            <td>job_description</td>
            <td>job_location</td> 
            <td>skills</td> 
            <td>experience</td> <br>
            <td>salary</td> 
            <td>qualification</td> 
            <td>last_date_of_vacancy</td> 
            <td>vacancy</td> 
            <td rowspan="2"><input type="submit" name="submit" value="Apply" class="btn btn-info"></td><br>
        </tr>



	<tr>
            <td><?php echo $row['job_title']; ?></td><br>
            <td><?php echo $row['job_description']; ?></td>
            <td><?php echo $row['job_location']; ?></td> 
            <td><?php echo $row['skills']; ?></td> 
            <td><?php echo $row['experience']; ?></td> <br>
            <td><?php echo $row['salary']; ?></td> 
            <td><?php echo $row['qualification']; ?></td> 
            <td><?php echo $row['last_date_of_vacancy']; ?></td> 
            <td><?php echo $row['vacancy']; ?></td> 
            
        </tr>
        </table>
        </div>
        <?php
}

 ?>
 </div>
 </form>
 </div>
</body>
</html>