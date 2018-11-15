<?php 
	session_start();
	$lastname = " Verma";
	$name = "Aakash".$lastname;
	$color = "blue";
	$check = 1;
	if (isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = $_POST['username'];
		$_SESSION['username'] = $username;
		header("Location: welcome.php");
	}

	if(isset($_SESSION['username']))
	{
		echo $_SESSION['username'];
	}

	if ((isset($_REQUEST['logout']) && ($_REQUEST['logout'] == 'yes')))
	{
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning php</title>
</head>
<body style="background-color: <?php echo $color;?>;color: white;">
<form action="" method="POST">
	<input type="text" name="username" placeholder="username">
	<button>Submit</button>
</form>
</body>

</html>