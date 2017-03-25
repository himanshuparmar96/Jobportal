<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   //echo 'You have cleaned session';
   //header('refresh:1;url:login.php');
   header('Refresh: 1; URL = .\login.php');

?>