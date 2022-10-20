<?php
    $conn=new mysqli("localhost","Shivan","Druscilla@157","ocrs");
    if($conn->connect_error){
    	die("Connection Failed".$conn->connect_error);
    }
?>