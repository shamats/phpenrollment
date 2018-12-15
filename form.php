
<?php 
    session_start();
	include 'registration.php';
	$conn = mysqli_connect('localhost','root','');
		if($conn)
		{
			$db = mysqli_select_db($conn,'musicschool');
			if($db)
			{
				if(isset($_POST['booking']) && !empty($_POST['fullname']))
				{
					$fullname = $_POST['fullname'];
					$mobile = $_POST['mobile'];
					$email = $_POST['email'];
					$course = $_POST['course'];
					$branch = $_POST['branch'];
					$insertQry = "INSERT INTO shankar(fullname,email,mobile,course,branch)VALUES('$fullname','$email','$mobile','$course','$branch')";
					$result = mysqli_query($conn,$insertQry);
					//print_r(mysqli_error());exit;
					if($result)
					{
						echo "Registered succesfully";
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
			

