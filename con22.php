<?php  
$servername = "localhost";  
$username = "root";  
$password = "";  //default xamp cred
$database = "andro";  
// Create connection
$conn = mysqli_connect($servername, 
    $username, $password, $database);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
   // echo"<script>console.log('okok conect');</script>";
}
?>  