<?php
session_start();

 if (isset($_COOKIE[session_name()] ) ){
  setcookie(session_name(),'',time()-86400,'/');
 }

 session_unset();

 session_destroy();

 echo "you have been logged out";


 echo "<p><a href='login.php'>Log back in</a></p>";
?>