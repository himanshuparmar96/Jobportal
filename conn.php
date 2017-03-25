<?php 

$con=mysql_connect('localhost','root','','jobportal')or die("Unable to connect");;
mysql_select_db('jobportal');
if($con)
{echo "";}
else{
	echo error_reporting();
}
$query="insert into ";

 ?>