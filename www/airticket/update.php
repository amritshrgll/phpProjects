<!DOCTYPE html>
<?php include("config.php");?>
<html>
<head>
	<title>updateform</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  	</script>
</head>
<body>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6">
 			<?php
 						$id3=$_GET['id2'];
 						$sel= "SELECT * FROM ticket where sn='$id3'";
 						$querry=mysqli_query($con,$sel);
 						$n1=mysqli_fetch_array($querry);

 						$myvar = $n1['radio'];



 			?>
 			<form method ="post">
 				<div class="form-group">
 					<label>first name</label>
 					<input type="text"  class="form-control" name="fname" value="<?php echo $n1['first_name']; ?>">
 				</div>
 				<div class="form-group">
 					<label>second name</label>
 					<input type="text" name="sname" class="form-control" value="<?php echo $n1['second_name']?>">
 				</div>
 				<div class="form-group">
 					<label>mobile number</label>
 					<input type="number" name="mnumber" class="form-control" value="<?php echo$n1['mobile_number']?>">	
 				</div>
 				<div clas="radio">
 					<input type="radio" name="rname" value="male" 
 						<?php if(isset($myvar))
 						{
 							echo "checked";
 						}?>
 					

 					>male
 					<input type="radio" name="rname" value="female">female
 				</div>
 				<div class=form-group>
 					<select class="form-control" name="sel">
 						<option value="<?php echo $n1['location']; ?>"><?php echo $n1['location']; ?></option>
 						<option value="bhopal">bhopal</option>
 						<option value="indore">indore</option>
 						<option value="rewa">rewa</option>
 						<option value="satna">satna</option>
 					</select>
 				</div>
 				<strong>Birthday</strong>
 				<div >
 					<input type="date" name="date" value="<?php echo $n1['birthday']?>">
 				</div>
 				<div>
 					<button class="btn btn-success" type="submit" name="submit">submit</button>
 				</div>
 				<?php
 						if(isset($_POST['submit']))
 						{
 							  $fname = $_POST['fname'];
 							 $sname = $_POST['sname'];
 							 $tname = $_POST['mnumber'];
 							 $rname = $_POST['rname'];
 							 $sname = $_POST['sel'];
 							 $sename =$_POST['date'];

 							$update="UPDATE ticket SET first_name='$fname' where sn = $id3";
 							$sq= mysqli_query($con,$update);
 							if($sq)
 							{
 								echo "update";
 							}
 							else
 							{
 								echo mysqli_error($con);
 							}
 						}
 				?>
 			</form>
 			
 		</div>
 	</div>
 </div>
</body>
</html>