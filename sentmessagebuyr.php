<?php
include 'con22.php';

$msg=$_POST['msg'];
$sentid1=$_POST['senter'];
$senis=intval($sentid1);
$recid1=$_POST['reciver'];
$recid=intval($recid1);
$prod1=$_POST['prodno'];
$prod=intval($prod1);
$pname=$_POST['prodname'];
$getq="SELECT * FROM `users` WHERE `uid`=$senis;";
		$qr= mysqli_query($conn,$getq);
		$r=  mysqli_fetch_assoc($qr);
$mename=$r['name'];
$qry="INSERT INTO `msgholder`(`msg`, `senterid`, `reciverid`, `prodid`, `prodname`, `sentername`) VALUES ('$msg',$senis,$recid,$prod,'$pname','$mename')";
$res=mysqli_query($conn,$qry);
			
			if($res==true)
			 echo "oks";
			else
			 echo "fail";
?>