<!DOCTYPE html>
<html>
<head>
	<title>new form</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<script type="text/javascript"src="js/bootstrap.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <style type="text/css">
  	.row
  	{
  		float:left;
  		margin-left:530px;
  		padding-top:10px;
  	}
  	.row1
  	{
  		float:left;
  		margin-left:1000px;
  	}
  	body
  	{
  		background-image: url('');
  	}
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<form class="form-inline" method="POST">
					<div class=form-group>
						<label>username</label>
						<input type="text" class="form-control" name="uname">
					</div>
					<div class="form-group">
						<label> password</label>
						<input type="password" class="form-control" name="pname">
					</div>
					
						<button class="btn btn-success" name="subbtn3">login</button>
						<?php
							if(isset($_POST['subbtn3']))
							{
								echo $username = $_POST['uname'];
								echo $password = $_POST['pname'];
								echo strlen($password);
								$new=strlen($password);
								if($new==8)
								{
									echo"strong password";
								}
								else
								{
									echo"use atleast 8 character";
								}
							}
						?>
						
					
				</form>
			</div>
		</div>
		
	</div>
	<div><hr></hr></div>
	<div class=row1>
		<div class="col-md-12">
			<form method="POST">
				<div class=form-group>
					<label>enter the first name</label>
					<input type="text" class="form-control" name="fname">
				</div>
				<div class="form-group">
					<label>enter the second naame</label>
					<input type="text" class="form-control" name="sname">
				</div>
				<strong>birthday</strong>
				<div >
					<input type="date" class="form-control" name="bname">
				</div><br>
				
			<button type="submit" name="subbtn">submit</button>
				<?php
					if(isset($_POST['subbtn']))
					{
						echo $firstname=$_POST['fname'];


						echo $secondname=$_POST['sname'];
						echo $date=$_POST['bname'];
					}
				?>

			
			</form>
		</div>
	</div>
</body>
</html>
