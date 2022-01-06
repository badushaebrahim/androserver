<?php
include 'con.php';

$res= "SELECT * FROM `sellings`";
$r= mysqli_query($conn,$res);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row; 
}
print(json_encode($jso));


?>
