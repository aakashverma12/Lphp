<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning php</title>
</head>
<body>
	<?php if(isset($_SESSION['username'])) {?>
		Welcome <?php echo $_SESSION['username'];?>
		<a href="index.php?logout=yes">logout</a>
	<?php } else { ?>
		please login;
	<?php }; ?>
</body>

</html>