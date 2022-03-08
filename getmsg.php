<?php
include 'con22.php';
$me=$_GET['me'];
$pid=$_GET['pid'];
$rid=$_GET['rid'];
$qry="SELECT * FROM `msgholder` WHERE `senterid`=$me AND `reciverid`=$rid OR `senterid`=$rid AND `reciverid`=$me AND `prodid`=$pid;";
$r= mysqli_query($conn,$qry);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row; 
}
print(json_encode($jso));

?>