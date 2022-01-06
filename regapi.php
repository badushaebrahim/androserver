<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    // Include the necessary files
    require_once "con22.php";
    require_once "validate.php";
    // Call validate, pass form data as parameter and store the returned value
	$name = $_POST['name'];
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $Num = $_POST['number'];
	$address = $_POST['address'];
    // Create the SQL query string. We'll use md5() function for data security. It calculates and returns the MD5 hash of a string
    $sql="INSERT INTO `users`( `name`,`email`, `password`, `Number`, `address`) VALUES ('$name','$email','$password','$Num','$address')";
    // Execute the query. Print "success" on a successful execution, otherwise "failure".
//echo "$sql";
    if(!$conn->query($sql)){
        echo "failure";

    }else{
        echo "success";   
    }
}
?>