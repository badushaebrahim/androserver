<?php
include 'con22.php';

    
	   $name=$_POST['prod_name'];
	   $details=$_POST['details'];	   
	   $type=$_POST['type'];	   
	   $price=$_POST['price'];	   
	   $sellerid=$_POST['sellerid'];
	   $so=int($sellerid);   
	   $img=$_POST['upload'];
	   $pi= int($price);

                   $filename="IMG".rand().".jpg";
	   file_put_contents("upload/".$filename,base64_decode($img));
		$mr= "SELECT * FROM `users` WHERE `uid`=$so";
		$re=mysqli_query($conn,$mr);
		if($lam=mysqli_fetch_assoc($re)){
$qry="INSERT INTO `sellings`(`Listing_title`, `imagelink`, `long_details`, `latitude`, `longi`, `sellerid`, `expected_price`) VALUES ('$name','$filename','$details','$lam[lat]','$lam[longi]','$sellerid',$pi)";
			$res=mysqli_query($conn,$qry);
			
			if($res==true)
			 echo "File Uploaded Successfully";
			else
			 echo "Could not upload File";
		}

?>

