<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>airticket</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
  		<style type="text/css">
  			body
  			{
  				background-image:url('image/airplane-wallpaper-3.jpg');
  				background-repeat:no-repeat;
  				background-size: cover;
  			}
  			.color0
  			{
  				color: white;
  			}
  			.color1
  			{
  				color: black;
  				background-color: #B58E89;
  			}
  			.color2
  			{
  				background-color: white;
  			}
  			.margin
  			{
  				height: 200px;
  				width: 20%;
  			}
  			
  		</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<img src="image/th%20(3).jpeg"height="80px" width="20%">
				<img src = "image/th%20(2).jpeg" height="80px" width="20%">
			</div>
			<div class="col-md-3 col-md-offset-4">
				<ul class= "nav nav-pills">
					<li class="active "><a href="#">signup</a></li>
					<li ><a href="#" class="color0">home</a></li>
					<li ><a href="#" class="color0">gallery</a></li>
					<li ><a href="#" class="color0">services</a></li> 
				</ul>
			</div>
		</div>
		<div><hr></hr></div>

		<div class="row">
			<div class="col-md-6">
				<div class="thumbnail margin">
					<img src="image/th%20(4).jpeg" height="100px">
					<div class="caption">
						<strong>our service</strong>
						<p>get a look on our services which provide full facility</p>	
					</div>
				</div>
				
			</div>		
			<div class="col-md-6">
				<form method="post">
					<div class="form-group">
						<label>first name</label>
						<input type="text" placeholder="first name" class="form-control color2" name="f_name">	
					</div>
					<div class="form-group">
						<label>second name</label>
						<input type="text" placeholder="second name" class="form-control color2" name="s_name">
					</div>
					<div class="form-group">
						<label>mobile number</label>
						<input type="number" placeholder="number" class="form-control color2" name="number">
					</div>
					<input type="radio" name="rname" value="male" checked><strong>male</strong>
					<input type="radio" name="rname" value="female"><strong>female</strong>
					<div class= "form-group">
						<select class="form-control color2" name="select">
							<option>location</option>
							<option>bhopal</option>
							<option>indore</option>
							<option>rewa</option>
							<option>satna</option>
						</select>
					</div>
					<strong>Birthday</strong><br/>
					<input type="date" class="color2" name="date"><br/><br/>
					<button class="btn btn-success" name="submit" type="submit">submit</button>

					<?php
					if(isset($_POST['submit']))
					{
						echo $firstname= $_POST['f_name'];
						echo $secondname= $_POST['s_name'];
						echo $thirdname = $_POST['number'];
						echo $fourthname= $_POST['rname'];
						echo $fifthname= $_POST['select'];
						echo $sixthname =$_POST['date'];

						$my_sql="INSERT INTO ticket(first_name,second_name,mobile_number,radio,location,birthday) values('$firstname','$secondname','$thirdname','$fourthname','$fifthname','$sixthname')";
						$query=mysqli_query($con,$my_sql);
						if($query)
						{
							echo "imserted";
						}
						else
						{
							echo "not inserted";
						}
						$sql= "SELECT * from ticket";
						$query1=mysqli_query($con,$sql)
					
					?>
				</form>
				<table border="1px">
					<tr>
						<th>sn</th>
						<th>first name</th>
						<th>second name</th>
						<th>mobile number</th>
						<th>gender</th>
						<th>location</th>
						<th>birthday</th>
						<th>button</th>
					</tr>
					<?php while($new=mysqli_fetch_array($query1)) { ?>
					<tr>
						<td><?php echo $new['sn']?></td>
						<td><?php echo $new['first_name'] ?></td>
						<td><?php echo $new['second_name']?></td>
						<td><?php echo $new['mobile_number'] ?></td>
						<td><?php echo $new['radio']?></td>
						<td><?php echo $new['location']?></td>
						<td><?php echo $new['birthday']?></td>
						<td><button><a href="index.php?id=<?php echo $new['sn']?>">submit</a></button></td>
						<td><button><a href="update.php?id2=<?php echo $new['sn']?>">update</a></button></td>
					</tr>
				<?php } } ?>
				</table>
			</div>
			<?php
             if(isset($_GET['id']) AND !empty($_GET['id']))
       {

			 $id1= $_GET['id'];
			$del= "DELETE  FROM ticket where sn='$id1'";
			$sqll=mysqli_query($con,$del);
			if($sqll)
			{
				echo "deleted";
			}
			else
			{
				echo "not deleted";
			}
		
		}

			?>
		
		</div>
	</div>
</body>
</html>