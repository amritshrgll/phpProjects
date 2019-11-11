<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript"src="js/bootstrap.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="co-md-6">

				<?php
					$idp1= $_GET['idp'];
					$my_sql3= "SELECT * FROM small where sn='$idp1'";
					$run3=mysqli_query($con,$my_sql3);
					$n1=mysqli_fetch_array($run3);
				?>
				<form method="POST">
					<strong>Demo page</strong>
					<div class="form-group">
						<label>enter the firstname</label>
						<input type="text" class="form-control" name="fname" value="<?php echo $n1['first_name'];?>">
					</div>
					<div class="form-group">
						<label>enter the second name</label>
						<input type="text" class="form-control" name="sname" value = "<?php echo $n1['second_name'];?>">
					</div>
					<div class="form-group">
						<label>ennter the password</label>
						<input type="password" class="form-control" name="pname" value="<?php echo $n1['password'];?>">
					</div>
					<button class="btn btn-success" type="submit" name="subbtn12">submit</button>

					<?php
						if(isset($_POST['subbtn12']))
						{
							echo $firstvar1= $_POST['fname'];
							echo $secondvar1=$_POST['sname'];
							echo $thirdvar1 = $_POST['pname'];
							

							$update= "UPDATE small SET first_name='$firstvar1',second_name='$secondvar1',password='$thirdvar1' where sn=$idp1 ";
							$up= mysqli_query($con,$update);
							if($up)
							{
								echo  "update";

							}
							else
							{
								echo "notupdate";
							}
						}
					?>


			</div>
		</div>
	</div>
</body>
</html>