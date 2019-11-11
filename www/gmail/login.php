<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
  	<style type="text/css">
  		.b1
  		{
  			margin-left: 750px;
  			margin-top: 30px;


  		}
  		.row{
  			background-color: blue;
  			height: 140px;
  		}
  		.info1
  		{	margin-top:30px; 
  			margin-left: 70px;
  		}
  		.c
  		{
  			color: red;
  			margin-left:80px;
  		}
  		
  	</style>
</head>


			<?php
			if(isset($_POST['btn1']))
			{
				$nfirstvar= $_POST['username'];
				$nsecondvar = $_POST['password'];
				$sel="SELECT * FROM signuppage where username='$nfirstvar' and c_password='$nsecondvar'";
				$run22= mysqli_query($con,$sel);
				 $countrows = mysqli_num_rows($run22);



				if($countrows==1)
				{
				$n5= mysqli_fetch_array($run22);

					if($n5)
						{
							echo "loggedin";
						}
					else
						{
							echo"not loggin";
						}
				}
				else
				{
					$invalid= "<div class='c'><small>invalid username  or password</small></div>";
				}
			}
			?>


<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form class="form-inline b1" method="POST">
				<div class="form-group">
					<label>username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" class="form-control" name="password">
					
				</div>
				<?php
						if(isset($invalid))
						{
							echo $invalid;
						}
					?>

				<button class="btn btn-info info1" type="submit" name="btn1">login</button>
			</form>
		</div>
		<div ><hr ></hr></div>
	</div>
	
</div>
</body>
</html>