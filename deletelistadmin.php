<?php
include 'con22.php';
$id = $_GET['id'];

$sql= "DELETE FROM `sellings` WHERE `Lid`=$id";
if(!$conn->query($sql)){
	echo "failure";
    
    }else{
	echo "<script>location.href='manage-vehicles.php'</script>";   
    }


?>