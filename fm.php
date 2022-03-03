<?php
include 'con22.php';
$ge="SELECT * FROM `users` WHERE `uid`=1;";
		$qr= mysqli_query($conn,$ge);
		$r=  mysqli_fetch_assoc($qr);
	$lat=$r['lat'];
	$longi=$r['longi'];
	
	$num=$r['Number'];
	echo"$longi";


		?>