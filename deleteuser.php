<?php
include 'con22.php';
$id = $_POST['id'];

$sql= "DELETE FROM `users` WHERE `uid`=$id";
if(!$conn->query($sql)){
	echo "failure";
    
    }else{
	echo "success";   
    }


?>