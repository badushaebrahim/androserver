<?php
include 'con22.php';
$id = $_GET['id'];

$sql= "DELETE FROM `users` WHERE `uid`=$id";
if($conn->query($sql)){
	
	echo "<script>location.href='reg-users.php'</script>";  
    
    }else{
	echo "failure";
    }


?>