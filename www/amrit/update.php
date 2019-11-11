<!DOCTYPE html>
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
 			<form method ="post">
 				<div class="form-group">
 					<label>first name</label>
 					<input type="text"  class="form-control" name="fname">
 				</div>
 				<div class="form-group">
 					<label>second name</label>
 					<input type="text" name="sname" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>mobile number</label>
 					<input type="number" name="mnumber" class="form-control">	
 				</div>
 				<div clas="radio">
 					<input type="radio" name="rname" value="male">male
 					<input type="radio" name="rname" value="female">female
 				</div>
 				<div class=form-group>
 					<select class="form-control">
 						<option>location</option>
 						<option>bhopal</option>
 						<option>indore</option>
 						<option>rewa</option>
 						<option>satna</option>
 					</select>
 				</div>
 				<strong>Birthday</strong>
 				<div >
 					<input type="date" name="date">
 				</div>
 				<button class="btn btn-success" type="submit" name="submit">submit</button>
 			</form>
 		</div>
 	</div>
 </div>
</body>
</html>