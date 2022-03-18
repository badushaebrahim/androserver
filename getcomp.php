<?php
include 'con22.php';
$id2=$_POST['me'];
$id=intval($id2);
$lid2=$_POST['lid'];
$lid=intval($lid2);
$com=$_POST['com'];
$sql="INSERT INTO `complaints`(`complaint`, `productid`, `senter`) VALUES ('$com',$lid,$id)";
if(!$conn->query($sql)){
	echo "failure";
    
    }else{
	echo "success";   
    }

?>