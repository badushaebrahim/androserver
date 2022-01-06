<?php
include 'con22.php';

//$msg=$_GET['msg'];
	$lname=$_GET['listingname'];
	
	$sid = $_GET['senterid'];
	$rvid = $_GET['reciverid'];
	$rvid2 = (int)$rvid;
	$sid2 = (int)$sid;
	
$res= "SELECT * FROM `msgholder` WHERE `listingname`= ".$lname." AND `senterid`=$sid2 OR `reciverid`=$rvid2";
//$res = "SELECT * FROM `msgholder`";
$r= mysqli_query($conn,$res);

while($row = mysqli_fetch_assoc($r)){
echo "$row[listingname]";
$jso[] = $row; 
}
//echo "$lname,$sid,$rvid";
print(json_encode($jso));


?>
