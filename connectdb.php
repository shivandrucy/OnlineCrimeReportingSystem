<!--Connect db-->
<?php

    $host="localhost";
	$user="Shivan";
	$password="Druscilla@157";
	$db="ocrs";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    
	die("connection error");
}

?>