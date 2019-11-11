<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
	<script type="text/javascript"src="js/bootstrap.min.js"></script>
	
</head>
<body>

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-pills">
			<li><a href="#">home</a></li>
			<li><a href="#">profilee</a></li>
			<li class="active"><a href="#">signup page</a></li>
		</ul>
	</div>
	<div><hr></hr></div>

	<div class="container">
		<form method="POST">
			<div class="form-group">
				<label>first name</label>
				<input type="text" class="form-control" name="fname">
			</div>
			<div class="form-group">
				<label>last name</label>
				<input type="text"  class="form-control" name="lname">
			</div>
			<div class="radio">
				<input type="radio"  name="rname" value="male" >male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio"  name="rname" value="female">female
			</div>
			<div class="checkbox">
			<input type="checkbox" name="check[]" value="cricket">cricket &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="check[]" value="football">football
			</div>
			<button type="submit" name="subbtn" class="btn btn-success">submit</button>

			<?php
			 	if(isset($_POST['subbtn']))
			 	{
			 		echo $firstname = $_POST['fname'];
			 		echo $secondname = $_POST['lname'];
			 		echo $thirdname = $_POST['rname'];

			 		foreach($_POST['check'] as $select)
			 		{
			 			echo $select;
			 		}
			 	
			 	$my_sql = "INSERT INTO learn(first_name,last_name,r_name,hobby) values('$firstname','$secondname','$thirdname','$select')";
			 	$query=mysqli_query($con,$my_sql);
			 	if($query)
			 	{
			 		echo "inserted";
			 	}
			 	else{
			 		echo"noot inserted";	
			 	}

			 	$sql= "SELECT * from learn";
			 	$query1= mysqli_query($con,$sql);
			 	//$new= mysqli_fetch_array($query1);
			 	//echo print_r($new);
                
                
			 	
			 	if($query1)
			 	{
			 		echo"connected";
			 	}
			 	else{
			 		echo "not connected";
			 	}
			 
			 ?>
		</form>

		<table border="1px">
			<tr>
				<th>sno</th>
				<th>first name</th>
				<th>last name</th>
				<th>gender</th>
				<th>hobby</th>
			</tr>
			<?php while($new= mysqli_fetch_array($query1)){

			?>
			<tr>
				<td> <?php echo $new['sn']; ?></td>
				<td> <?php echo $new['first_name']; ?></td>
				<td> <?php echo $new['last_name']; ?></td>
				<td> <?php echo $new['r_name']; ?></td>
				<td><?php  echo $new['hobby']; ?></td>

			</tr>
			<?php } }?>
		</table>
	</div>
</div>
</body>
</html>