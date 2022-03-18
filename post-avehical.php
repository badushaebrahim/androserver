<?php
session_start();
error_reporting(0);
include('connection.php');
if($_SESSION['alogin'])
	{	
header('location:index.php');
}
else{ 

	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Post Vehicle</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Post A Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-body">
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											<div class="form-group">
												<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="vehicletitle" class="form-control" required>
												</div>
											
												<label class="col-sm-2 control-label">Vehicle Reg No.<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="regno" class="form-control" required>
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Price Per Day<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="costperday" class="form-control" required>
												</div>												
												<label class="col-sm-2 control-label">Price Per KM<span style="color:red">*</span></label>
												<div class="col-sm-4">
														<input type="text" name="costperkm" class="form-control" required>
												</div>
											</div>
											<div class="form-group">
																								
												<div class="col-sm-12">	
													<label class="col-sm-2 control-label">Select Fuel Type<span style="color:red">*</span></label>
													<div class="col-sm-4">
														<select class="selectpicker" name="fueltype" required>
															<option value=""> Select </option>
															<option value="Petrol">Petrol</option>
															<option value="Diesel">Diesel</option>
															<option value="CNG">CNG</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="modelyear" class="form-control" required>
												</div>
												<label class="col-sm-2 control-label">Seating Capacity<span style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="seatingcapacity" class="form-control" required>
												</div>														
											</div>

											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php 
	
if(isset($_POST['submit']))
{
$vehicletitle=$_POST['vehicletitle'];
$regno=$_POST['regno'];
$perday=$_POST['costperday'];
$perkm=$_POST['costperkm'];
$fueltype=$_POST['fueltype'];
$modelyear=$_POST['modelyear'];
$seatno=$_POST['seatingcapacity'];

$sql="INSERT INTO `car_details`(`v_name`, `v_regno`, `v_costperday`, `v_costperkm`, `v_fueltype`, `v_seatno`, `v_year`) VALUES ('$vehicletitle','$regno','$perday','$perkm','$fueltype','$seatno','$modelyear');";
$query = mysqli_query($con,$sql);
$lastInsertId = lastInsertId($con);
if($lastInsertId)
{
 echo "<script> alert('Vehicle posted successfully')</script>";
header("location:./manage-vehicles.php");

}
else 
{
$error="Something went wrong. Please try again";
}

}


} ?>