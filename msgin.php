<?php
if(isset($_POST['msg']) && isset($_POST['listingname'])){
//echo "here";
    // Include the necessary files
    require_once "con.php";
	$msg=$_POST['msg'];
	$lname=$_POST['listingname'];
	$lid=$_POST['lid'];
	$lid2=(int)$lid;
	$sid = $_POST['senterid'];
	$rvid = $_POST['reciverid'];
	$rvid2 = (int)$rvid;
	$sid2 = (int)$sid;
	

$q="INSERT INTO `msgholder`(`msg`, `senterid`, `reciverid`, `listingname`,  `listingid`) VALUES ('$msg',$sid2,$rvid2,'$lname',$lid2)";
if(!$conn->query($q)){
        echo "failure";

    }else{
        echo "success";   
    }
}
?>