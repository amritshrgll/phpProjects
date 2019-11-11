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
				<form method="POST">
					<strong>Demo page</strong>
					<div class="form-group">
						<label>enter the firstname</label>
						<input type="text" class="form-control" name="fname">
					</div>
					<div class="form-group">
						<label>enter the second name</label>
						<input type="text" class="form-control" name="sname">
					</div>
					<div class="form-group">
						<label>ennter the password</label>
						<input type="password" class="form-control" name="pname">
					</div>
					<button class="btn btn-success" type="submit" name="subbtn">submit</button>



						<?php
							if(isset($_POST['subbtn']))
							{
								echo $firstvar= $_POST['fname'];
								echo $secondvar = $_POST['sname'];
								echo $thirdvar = $_POST['pname'];

								$my_sql= "INSERT INTO small(first_name,second_name,password) VALUES('$firstvar','$secondvar','$thirdvar')";
								$run= mysqli_query($con,$my_sql);
								if($run)
								{
									echo"inserted";
								}
								else
								{
									echo "not inserted";
								}

								$my_sql1 = "SELECT * FROM small";
								$run1 = mysqli_query($con,$my_sql1)
							
						?>
				</form>

				<table border="1px">
					<tr>
						<th>sn</th>
						<th>first name</th>
						<th> second name</th>
						<th>password</th>
						<th>delete</th>
						<th>update</th>
					</tr>
					<?php while($new=mysqli_fetch_array($run1)) { ?>
					<tr>
						<td><?php echo $new['sn'] ?></td>
						<td><?php echo $new['first_name']?></td>
						<td><?php echo $new ['second_name']?> </td>
						<td><?php echo $new ['password']?></td>
						<td><button><a href="index.php?id=<?php echo $new['sn']?>">delete</a></button></td>
						<td><button><a href ="update.php?idp=<?php echo  $new['sn']?>">update</a></button></td>
					</tr>
				<?php }  } ?>
				</table>
				<?php
					if(isset($_GET['id']) AND !empty($_GET['id']))
					{
						$id1= $_GET['id'];
						$my_sqll="DELETE FROM small WHERE sn='$id1'";
						$run2=mysqli_query($con,$my_sqll);
						if($run2)
						{
							echo "deleted";
						}
						else
						{
							echo mysqli_error($con);
						}
					}
					?>
			</div>
		</div>
	</div>
</body>
</html>