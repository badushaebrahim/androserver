<?php
include 'con22.php';
$tit=$_POST['head'];
$de=$_POST['detail'];
$pr = $_POST['price'];
$id=$_POST['id'];
$sql="UPDATE `sellings` SET`Listing_title`='$tit',`long_details`='$de',`expected_price`='$pr' WHERE Lid= $id";
if(!$conn->query($sql)){
	echo "failure";
    
    }else{
	echo "success";   
    }

?>