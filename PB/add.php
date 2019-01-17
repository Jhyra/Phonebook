<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/hq.jpg);
			color: white;
			width: 100%;
		}
	</style>
</head>

<body>
					<nav class="navbar navbar-expand-lg navbar-success bg-transparent">
						<img src="img/logo.png" width="100" height="70" alt="">
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
									</li>
								</ul>
											</div>
										</li>
									</ul>
								</form>
							</div>
					</nav>
		     </div>
<br>
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO contacts(firstname, lastname, phone_number, email, address, login_id) VALUES('$firstname', '$lastname', '$phone_number', '$email', '$address', '$loginId')");
		header('location: view.php');
	} 
?>
<div class="container">
	<form action="add.php" method="post" name="form1">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">firstname :</label>
				<div class="col-sm-5">
					<input type="text" name="firstname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">lastname :</label>
				<div class="col-sm-5">
					<input type="text" name="lastname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">phonenumber :</label>
				<div class="col-sm-5">
					<input type="number" name="phone_number" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">email :</label>
				<div class="col-sm-5">
					<input type="email" name="email" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">address :</label>
				<div class="col-sm-5">
					<input type="text" name="address" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<center><button class="btn btn-outline-warningbtn btn-sm btn-outline-primary" type="submit" name="Submit" value="Add">Add</button>
					
				</div>
		</div>
		
	</form>
</div>
</br>
	
</body>
</html>
