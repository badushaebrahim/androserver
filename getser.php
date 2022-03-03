<?php
include 'con22.php';

$res= "SELECT * FROM `serv`";
$r= mysqli_query($conn,$res);
while($row = mysqli_fetch_assoc($r)){
$jso[] = $row; 
}
print(json_encode($jso));


?>
