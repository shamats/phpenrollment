<?php 
    session_start();
	$conn = mysqli_connect('localhost','root','');
		if($conn)
		{
			$db = mysqli_select_db($conn,'shankarschool');
			if($db)
			{
				if(isset($_POST['booking']) && !empty($_POST['fullname']))
				{
					$fullname = $_POST['fullname'];
					$mobile = $_POST['mobile'];
					$email = $_POST['email'];
					$course = $_POST['course'];
					$branch = $_POST['branch'];
					$insertQry = "INSERT INTO shankarmaha(fullname,email,mobile,course,branch)VALUES('$fullname','$email','$mobile','$course','$branch')";
					$result = mysqli_query($conn,$insertQry);
					//print_r(mysqli_error());exit;
					if($result)
					{
							
						echo "Registered successfully";
						//header('Location:studentDetails.php');
						
					} 
					else
					{
						echo "Please try again";
					}
					mysqli_close($conn);

				}

			}
			else
			{
				echo "there is sn issue to connect to db";
			}
		}
?>
			
			



<!DOCTYPE html>
<html>
<head>
<title> Form Validation </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style2.css">
</head>

<body>

<h2>Interested to Join the School then Enroll your Name </h2>
			<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" name="musicschool" class="music">
				<div class="form-group">
					<input type="text" name="fullname" placeholder="Full NAME" class="form-control" style="max-width: 500px;">	
				</div>
				<div class="form-group">
					<input type="text" name="mobile" placeholder="MOBILE" class="form-control" style="max-width: 500px;">
				</div>
				<div class="form-group">
					<input type="text" name="email" placeholder="EMAIL" class="form-control" style="max-width: 500px;">
				</div>
				<div class="form-group">
					<select name="course" class="form-control" style="max-width: 500px;">
						<option value="">Select Music Class</option>
  						<option value="classical">Classical</option>
  						<option value="pop">Pop</option>
  						<option value="western">Western</option>
  						<option value="hindustani">Hindustani</option>
					</select>
				</div>
				<div class="form-group">
					<select name="branch" class="form-control" style="max-width: 500px;">
						<option value="">Select Branch</option>
  						<option value="btmlayout">BTM Layout</option>
  						<option value="jayanagar">Jayanagar</option>
  						<option value="marathahalli">Marathahalli</option>
  						<option value="rajajinagar">Rajajinagar</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="booking" value="Book Your Seat Now!" class="btn btn-success">
				</div>
			</form>
</body>
</html>