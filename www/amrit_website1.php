<!DOCTYPE html>
<html>
<head>
	<title>Amrit_website</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript"src="js/bootstrap.min.css"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style type="text/css">
  	body
  	{
  		background-image:url('file:///E:/amrit%20mobile%20images/national%20park/IMG_20151115_084108.jpg');
  		background-width:100%;
  		background-repeat:no-repeat;
  		background-size:cover; 
  	}
  	.box
  	{
  		float:right;
  		margin-top: 10px;

  	}
  	.color
  	{
  		color:#E9EAEF;
  	}
  	.img
  	{
  		height: 80px;
  		width: 30%;

  	}
  	.fn
  	{
  		margin-left:30px;
  	}
  	.sn
  	{
  		margin-left:30px;
  	}
  	.ne
  	{
  		margin-left:50px;
  	}
  	.fi
  	{
  		margin-top:50px;
  	}
  	.bn
  	{
  		margin-left:100px;
  		margin-top:10px;
  	}
  	.color5
  	{
  		color:white;
  	}
  	.form
  	{
  		margin-top:50px;
  		margin-left:300px;
  	}
  	.color7
  	{
  		color: white;
  		margin-left:300px;
  	}
  	.margin
  	{
  		margin-top:10px;
  	}
  </style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="file:///E:/amrit%20mobile%20images/national%20park/IMG_20151115_075206.jpg">
				
				
			</div>
			<div class="col-md-6 ">
				<ul class="nav nav-pills box">
					<li class="active"><a href="#">home</a></li>
					<li ><a href="#" class="color">profile</a></li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle color">gallery<span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
								<li><a href="#">slide show</a></li>
								<li><a href="#">stack</a></li>
								<li><a href="#">images</a></li>	
							</ul>
					</li>
					<li><a href="#" class="color">messeges</a></li>	
				</ul>
			</div>
		</div>
	</div>
	<div><hr></hr></div>
	<div class="row">
		<div class="col-md-6">
			<h1 class=color5>For signup</h1>
			<form class="form-inline fi" method="POST">
				<div class="form-group">
					<label class=color5>first name</label>
					<input type="text"class="form-control fn" name="fname" placeholder="first name">
				</div>
				<div class="form-group">
					<label class=color5>second name</label>
					<input type="text" class="form-control sn" placeholder="second name" name="sname">
				</div>
				<div class="form-group margin">
					<label class=color5>new password</label>
					<input type="password" class="form-control" placeholder="password" name="npassword">
				</div>
				<div class="form-group margin">
					<label class=color5>confirm password</label>
					<input type="password" class="form-control" placeholder="confirm p" name="cpassword">
				</div>
				<div class="form-group margin">
					<label class=color5>mobile number</label>
					<input type="number" placeholder="number" class="form-control"name="mnumber">
				</div>
				<div class="form-group margin">
					<label class=color5>new email</label>
					<input type="text" class="form-control ne"placeholder="new email" name="nemail">
				</div>
				<div class="form-group color5">
				<input type="radio"class="form-control" name="rname"><strong>male</strong>
				<input type="radio" class="form-control" name="rname1"><strong>female</strong></div>
				<div class=from-group>
					<textarea class="form-control"></textarea>
				</div>
				<button type="submit" name="submit">submit</button>
				</form>
				</div>
	
	<div class="col-md-6">
		<h1 class=color7>for login</h1>
		<form class=form>
			<div class="form-group">
				<label class=color5>login id</label>
				<input type="text" class="form-control" placeholder="email" name="lname">
			</div>
			<div class="form-group">
				<label class=color5>password</label>
				<input type="text" placeholder="password" class="form-control" name="fpassword">
				<btn class="btn btn-success margin 	 ">login</btn>



				<?php
						if(isset($_POST['submit']))
						{

							echo $firstname = $_POST['fname'];
							echo $secondname = $_POST['sname'];
							echo $p1 = $_POST['npassword'];
							echo $p2 = $_POST['cpassword'];
						}

				?>
		</form><br/>
		
	</div>
</div>

</body>
</html>