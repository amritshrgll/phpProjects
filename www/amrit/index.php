<?php
	include('config.php');
?>

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
  		background-image:url('image/IMG_20151115_084108.jpg');
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
				<img class="img" src="image/IMG_20151115_084108.jpg">
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
					<input type="text"class="form-control fn" placeholder="first name" name="fname" required>
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
					<input type="radio"class="form-control" name="rname" value="male"><strong>male</strong>
					<input type="radio" class="form-control" name="rname" value="female"><strong>female</strong>
				</div>
				<div class=from-group>
					<textarea class="form-control" name="tarea"></textarea>
				</div>
				<button class="btn btn-success bn" type="submit" name="submit1">submit</button>

				<?php
						if(isset($_POST['submit1']))
						{

							echo $firstname1 = $_POST['fname'];
							echo"<br>";
							echo $secondname = $_POST['sname'];
							echo"<br>";
							echo $thirdname = $_POST['npassword'];
							echo "<br>";
							echo $thirdname1 = $_POST['cpassword'];
							/*if($thirdname==$thirdname1 && $thirdname==8)
							{
								echo"correct";
							}
							else
							{
								echo"wrong";
							}*/
							echo "<br>";
							echo $fourthname = $_POST['mnumber'];
							/*if($fourthname ==10)
							{
								echo "correct number";
							}
							else
							{
								echo"entered short mobile number";
							}8*/
							echo"<br>";
							echo $fifthname = $_POST['nemail'];
							echo "<br>";
							echo $sixthname = $_POST['rname'];
							
							echo "<br>";
							echo $eightname = $_POST['tarea'];

							$my_sql="INSERT INTO signupform(firstname,secondname,newpassword,confirmpassword,mobilenumber,newemail,gender,message)
							values('$firstname1','$secondname','$thirdname','$thirdname1','$fourthname','$fifthname','$sixthname','$eightname')";
							$query= mysqli_query($con,$my_sql);
							if($query)
							{
								echo"inserted";
							}
							else{
								echo "not inserted"; 
							}
							
							$sql="SELECT * from signupform";
							$query1=mysqli_query($con,$sql);
							if($query1)
							{
								echo "connected";
							}
							else
							{
								echo "not connected";
							}


				?>

			</form>
			<table border="1px">
				<tr>
					<th>sn</th>
					<th>firstname</th>
					<th>secondname</th>
					<th>newpassword</th>
					<th>confirmpassword</th>
					<th>mobilenumber</th>
					<th>newemail</th>
					<th>gender</th>
					<th>message</th>
				</tr>
				<?php while($new=mysqli_fetch_array($query1)){ ?>
				<tr>
					<td><?php echo $new['sn']?></td>
					<td><?php echo $new['firstname']; ?></td>
					<td><?php echo $new['secondname'];?></td>
					<td><?php echo $new['newpassword']; ?></td>
					<td><?php echo $new['confirmpassword']; ?></td>
					<td><?php echo $new['mobilenumber']; ?></td>
					<td><?php echo $new['newemail']; ?></td>
					<td><?php echo $new['gender']; ?></td>
					<td><?php echo $new['message']; ?></td>
					<td><button><a href="index.php?id=<?php echo $new['sn']?>">delete</a></td>
					
					</tr>
			<?php } } ?>
			</table>

			<?php
				$id1=$_GET['id'];
				$del= "DELETE FROM signupform where sn='$id1'";
				$sqll=mysqli_query($con,$del);
				if($sqll)
				{
					echo "deleted";
				}
				else{
					echo "not deleted";
				}     
			?>
		</div>
	
	<div class="col-md-6">
		<h1 class=color7>for login</h1>
		<form class="form" method="POST">
			<div class="form-group">
				<label class=color5>login id</label>
				<input type="text" class="form-control" placeholder="email" name="lname">
			</div>
			<div class="form-group">
				<label class=color5>password</label>
				<input type="text" placeholder="password" class="form-control" name="fpassword">
				<button type="submit"class="btn btn-success margin " name="hello">login</button>



				<?php
						if(isset($_POST['hello']))
						{

							echo $login = $_POST['lname'];
							echo"<br>";
							echo $password =$_POST['fpassword'];
						}

				?>
				
		</form><br/>
		
	</div>
</div>

</body>
</html>