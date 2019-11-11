<?php
include('config.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  	</script>
	<script type="text/javascript"src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.colr{
			width:100%;
			height:90px;
			background: #3C5998; 
		}
		.shape
		{
			width: 70%;
			height: 90px;
		}
		.text1{
			color: white;
		}
		.text2
		{
			color: white;
		}
		.text3
		{
			color:white;

		}
		.text4
		{
			color: #BF9877
		}
		.row1
		{
			width: 100%;
			height: 485px;
			background: #E2E5F0;
		}
		.box
		{
			float: right;
			margin-top:20px;
		}
		.checkbox
		{
			float: left;
			margin-left:40px;
		}
	</style>
</head>
<body>
	<div class="conatiner-fluid">
		<div class="row colr">
			<div class="col-md-5 col-md-offset-1">
				<img src="image/th.jpg" class="shape">	
			</div>
			<div class="col-md-6">
				<form class="form-inline box" >
					<div class="form-group">
						<label><p class="text1">Email or phone</p></label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label><p class="text2">Password</p></label>
						<input type="password" class="form-control">
					</div>	
					<btn class="btn btn-#3C5998"><p class="text3">login</p></btn>
				</form>
			</div>
		</div>

		<div class="row1">
			<div class="col-md-6">
				<img src="image/attachment_732_4f0618ca9da0b.jpg">
			</div>
			<div class="col-md-6">
				<h1>create an account</h1><br>
				<strong>Its free and always will be</strong><br>
				<div class="col-md-12">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First name" name="fname">
						</div>
						<div class="form-group">
							<input type="last name" class="form-control" placeholder="surname" naame="lname">
						</div>
				</div>
				<div class="col-md-8">
						<div class="form-group">
							<input type="text"class="form-control" placeholder="mobile number or email address" name="mnumber"></div>
						</div>
						<div class="col-md-8">
						<div class="form-group">
							<input type="text"class="form-control" placeholder="new password" name="npassword"></div>
						</div>
						<div class="col-md-6"
						<strong>Birthday</strong></div>
						<div class="col-md-8">
						<input type="date" class="form-control" name="date">
						</div>
						<div class="col-md-6">
							<div class="radio ">
								
									<input type="radio" value="female"name="rname" ><strong>female</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" value="male" name="rname"><strong>male</strong>
								
							</div>
							<div class="checkbox">
								<label>
									
								</label>
							</div>
						</div>
						<div class="col-md-7 text4">
						<small>	By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</small>
						</div>
						<div class="col-md-10 col-md-offset-2">
							<button type="submit" class="btn btn-success btn-lg" name="submit">signup</button>
						</div>
						<div class="col-md-12">
							Create a Page for a celebrity, band or business.
						</div>

						<?php
								if(isset($_POST['submit']))
								{
									echo $firstname= $_POST['fname'];
									echo $secondname = $_POST['lname'];
									echo $thirdname = $_POST['mnumber'];
									echo $fourthname = $_POST['npassword'];
									echo $fifthname = $_POST['date'];
									echo $fourthname = $_POST['rname'];
								$my_sql="INSERT INTO "
								}

						?>
					</form>
			</div>
		</div>
	</div>	

</body>
