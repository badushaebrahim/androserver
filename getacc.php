<?php
include 'con22.php';
$id = $_GET['uid'];
$sql = "SELECT * FROM `users` WHERE uid =$id;";
$r= mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row; 
}
print(json_encode($jso));
?>