<?php
$server   =  "";
$username =  "";
$password =  "";
$db       =  "";

$conn = mysqli_connect($server,$username,$password,$db);

if (!$conn){
	die("oops not connected!!!". mysqli_connect_error());
}else{
	echo "";
}
?>