<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    // Include the necessary files
    require_once "con22.php";
    require_once "validate.php";
    // Call validate, pass form data as parameter and store the returned value
	$name = $_POST['name'];
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
$lat1= $_POST['lati'];
$lati=10.15445;
//floatval($lat1);
$longi2=75.155;
//$_POST['longi'];
$longi=75.15245;
//floatval($longi2);
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