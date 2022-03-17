<?php
include 'con22.php';
$rid=$_GET['id'];

$sql="SELECT DISTINCT reciverid,prodid,prodname,sentername,senterid FROM `msgholder` WHERE `reciverid`=$rid";
$r= mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row; 
}
print(json_encode($jso));
?>