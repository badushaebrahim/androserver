<?php
//$conn=mysqli_connect("localhost","root","");
//mysqli_select_db($conn,"android_db");
include 'con22.php';
		$type=$_POST['type'];
	   $name=$_POST['title'];
	   $design=$_POST['details'];	   
	   $price=$_POST['price'];	   
	   $img=$_POST['upload'];
		$mes=$_POST['meid'];
		$me=intval($mes);
		$getq="SELECT * FROM `users` WHERE `uid`=$me;";
		$qr= mysqli_query($conn,$getq);
		$r=  mysqli_fetch_assoc($qr);
	$lat=$r['lat'];
	$longi=$r['longi'];
	$num=$r["Number"];
	///donot edit
                   $filename="IMG".rand().".jpg";
	   file_put_contents("upload/".$filename,base64_decode($img));
//till here
	$qry="INSERT INTO `sellings`(`type`, `Listing_title`, `imagelink`, `long_details`,  `sellerid`, `expected_price`)
			 VALUES ('$type','$name','$filename','$design',$me,'$price')";

			$res=mysqli_query($conn,$qry);
			
			if($res==true)
			 echo "File Uploaded Successfully";
			else
			 echo "Could not upload File";
?>
