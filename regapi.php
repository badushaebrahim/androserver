<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    // Include the necessary files
    require_once "con22.php";
    require_once "validate.php";
    // Call validate, pass form data as parameter and store the returned value
	$name = $_POST['name'];
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
$lati1= $_POST['lati'];
//$lati1=10.15445;
$lati=floatval($lati1);
//floatval($lat1);
//$longi2=75.155;
$longi2=$_POST['longi'];
$longi=floatval($longi2);
    $Num2 = $_POST['number'];
    $Num= intval($Num2);
	$address = $_POST['address'];
    // Create the SQL query string. We'll use md5() function for data security. It calculates and returns the MD5 hash of a string

    $sql="INSERT INTO `users`( `name`, `email`, `password`, `Number`, `address`, `lat`, `longi`) VALUES ('$name','$email','$password','$Num','$address',$lati,$longi)";


    // Execute the query. Print "success" on a successful execution, otherwise "failure".
//echo "$sql";
    if(!$conn->query($sql)){
        echo "failure";

    }else{
        echo "success";   
    }
}
?>