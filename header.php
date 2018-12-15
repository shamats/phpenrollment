<?php
 session_START();
 if(isset($_POST['login']) &&!empty($_POST['login']))
 {
	 $user = $_POST['username'];
	 $pwd=$_POST['pwd'];
	 if(($user=="shama") && ($pwd=="12345"))
	 {
			//echo $user.$pwd;exit();
			$_SESSION['activeuser'] = $user;
			header('Location:registration.php');
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
  <link rel="stylesheet" href="style1.css">
</head>

<body>
<div class="container">
 <div class="row">
  <div class="col-md-6 col-md-offset-3">
  <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-music">
    </i>
    Shankar Music Academy Login Form
  </h4>
  <div style="padding: 20px;" id="form-olvidado">
  <form accept-charset="UTF-8" role="form" id="login-form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" name="musicschool">
      <fieldset>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input class="form-control" placeholder="USER NAME" name="username" type="text">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="PASSWORD" name="pwd" type="password" value="" required="">
        </div>
        <div class="form-group">
          <input type="submit" name="login" value="LOGIN" class="form-control" style="background-color:#505050;color:white;font-size:18px;font-family:Arial;font-weight:bold;font-style:italic;letter-spacing:2px;">
        </div>
      </fieldset>
    </form>
  </div>
</div>
</body>
</html>