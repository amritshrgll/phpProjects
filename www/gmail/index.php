<?php
include ('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>gmail signup</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript " src="js/bootstrap.min.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  	</script>
  	<style type="text/css">
  		.row
  		{		margin-top:80px;	
  				margin-left: 300px;
  				height: 500px;
  				width: 60%;
  				border: 9px inset #31B0D5 ;
  				border-radius: 10px;
  				
  		}
  		.img
  		{	margin: left:20px;
  			margin-top:30px;
  			height:60px;
  			width: 40%;
  		}
  		.img1
  		{	margin-top: 70px;
  			height: 300px;
  			width: 70%;
  		}
  		.margin
  		{
  			margin-top:10px;
  			margin-left:20px;
  		}
  		.fname
  		{
  			margin-top:10px;
  		}
  		.text
  		{
  			color: #31B0D5;
  			margin-top:50px;
  		}
  		.btn1
  		{
  			margin-left: 60px;
  		}
  		.c
  		{
  			color: red;
  			
  		}
  		.c1
  		{
  			color: red;
  			padding-left: 70px;
  		}
  		.div1
  		{	width: 10%;
  			
  			color: red;
  			margin-left:50px;
  		}
  		.div
  		{
  			width: 10%;
  			
  			color: red;

  		}
  		.btn2
  		{
  			margin-left: 300px;
  		}
  	</style>
</head>
<body>

		<?php
			if(isset($_POST['submit']))
			{
				 
				$first = $_POST['fname'];

				if(empty($first))
				 {
				 	$ferror = "<small class=div>"."first name was not empty"."</small>";
				 }
				else
				 {
				 	$fcount = strlen($first);
				 	if($fcount<8)
				 	{
				 		$ferror = "<small class=div>"."Plz use 8 char &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."</small>";
				 	}
				 }

				if(!empty($first) && $fcount<8)
				 	{
				 		$firstvar = $first; 
				 	}

				 $firstvar = $first;


				 $second=$_POST['lname'];

				if(empty($second))
					{
						$serror= "<small class=div1>last name cannot be empty</small>";
					}
				else
					{
					    $scount= strlen($second);
					 	if( $scount<8)
						{
							$serror= "<small class=c1>plzz use 8 characters &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small>";
						}
				    }

				if (!empty($second) && $scount<8)
					{
						$secondvar =$second;
					}

				$secondvar=$second;


				$third = $_POST['uname'];
				if(empty($third))
					{
						$thirderror="<small class='c'>username cannot be empty</small>";
					}
				else
					{
						$thirdcount=strlen($third);
						if($thirdcount<8)
						{
						$thirderror="<small class='c'>username must be of min. 8 character</small>";
						}
					}

				if (!empty($third)&& $thirdcount<8)
				{
					$thirdvar=$third;
				}

				$thirdvar=$third;

				$fourth = $_POST['pname'];
				if(empty($fourth))
				 {
				 	$fourtherror="<small class='c'>password can't be empty</small>";
				 }
				else
				{
					$fourthcount = strlen($fourth);
				 	if($fourthcount<8)
				 	{
				 		$fourtherror ="<small class='c'>plz use 8 letter password</small>";
				 	}
				}

				if(!empty($fourth) && $fourthcount<8)
				 {
				 	$fourthvar = $fourth;
				 }
				 	$fourthvar = $fourth;



				$fifth = $_POST['cname'];

				if($fourthvar !== $fifth)
				{
				  $fiftherror="<small class='c1'> password doestnot match </small>";
				}
				/*else
				{
					$fifthcount11 =strlen($fifth);
					if($fifthcount11 <8)
					{
						$fiftherror="<small class='c1'>short password</small>";
					}
				}*/

				if($fourthvar !== $fifth /* && $fifthcount11<8 */)
				{
					$fifthvar = $fifth;
				}
				$fifthvar= $fifth;

				 if(!empty($first) && $fcount>8 && !empty($second) && $scount>8 && !empty($third)&& $thirdcount>8 && !empty($fourth) && $fourthcount>8 && $fourthvar == $fifth /*&& $fifthcount11>8*/)
				 {
				 	$in = "INSERT INTO signuppage(first_name,last_name,username,password,c_password) VALUES('$firstvar','$secondvar','$thirdvar','$fourthvar','$fifthvar')";
			$run = mysqli_query($con,$in);
				if($run)
				{
					echo "successfully redirect";
				} 
				else{
					$already ="<small class='c'>email already exsist</small>";
				}
				
				 }
				 
				 

				
			  
				 
			}
				
		
			?>	
				 




	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7">
				<img class="img" src="image/unnamed.png"><br/>
				<div class=margin>
					<strong >Create your Google Account</strong><br/>
					to continue to Gmail
				</div>

				<form class="form-inline" method="POST" >
					<div class="form-group">
						<input type="text" value="<?php if (isset($first)) {echo $first ; } ?>" class="form-control fname"  placeholder="First name" name="fname">
					
					</div>
				
				  
					<div class="form-group">
						<input type="text" value="<?php if (isset($second)){echo $second; }?>" 
						class="form-control fname" placeholder="last name" name="lname" >
						
					</div>
					<br/>
					<?php if(isset($ferror))
						{ echo $ferror; }
						else{
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
						 } ?> 
					<?php if(isset($serror))
						{ echo  $serror; }
				  	?><br/>
						
					<div class="form-group">
						<input type="text" class="form-control fname" value="<?php if(isset($third)){echo $third;}?>" placeholder="Username" name="uname"><br/>
					<?php if(isset($thirderror))
						{ echo $thirderror;}
					?>
					<?php
						if(isset($already))
						{
							echo $already;
						}
					?>
					
					
					</div>
					<br/><small>You can use letters,number and periods</small><br/>
					<div class="form-group">
						<input type="password" class="form-control fname" placeholder="Password" name="pname" >
					</div>
				 
					<div class="form-group">
						<input type="password" class="form-control fname" placeholder="Confirm password" name="cname" >
					</div><br/>
					<?php if(isset($fourtherror))
						{ echo $fourtherror; }  ?>
					<?php if(isset($fiftherror))
						{echo $fiftherror;}
					?>
						<br/>
					<small>Use 8 or more characters with a mix of letters, numbers & symbols</small>
					<div class="text">
						Sign in instead
						<button  class="btn btn-info btn1" type="submit" name="submit">submit</a></button>
						<button class="btn btn-info btn1 " type="submit" name="btn0"><a href="http://localhost/gmail/login.php">for login</a></button>
					</div>

				</form>
			</div>
			<div class="col-md-5">
				<img class="img1" src="image/Untitled.png">
			</div>
		</div>

		
	</div>

</body>
</html>