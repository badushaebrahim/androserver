<?php
include 'con22.php';
require_once "validate.php";
$name = $_POST['name'];
$email = validate($_POST['email']);
$password = validate($_POST['password']);
$Num2 = $_POST['number'];
$address = $_POST['address'];
$id=$_POST['ids'];
$sql="UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`Number`='$Num',`address`='$address' WHERE `uid`=$id";
if(!$conn->query($sql)){
    echo "failure";

}else{
    echo "success";   
}

?>