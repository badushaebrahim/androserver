<?php
include 'con22.php';
$id = $_POST['id'];

$sql= "DELETE FROM `sellings` WHERE `Lid`=$id";
if(!$conn->query($sql)){
	echo "failure";
    
    }else{
	echo "success";   
    }


?>