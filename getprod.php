<?php
include 'con22.php';
$me= $_GET['me'];
$res= "SELECT * FROM `sellings`where Lid=$me";
$r= mysqli_query($conn,$res);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row;
}
print(json_encode($jso));
?>