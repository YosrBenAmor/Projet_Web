<?php 
  session_start(); 

  if (!isset($_SESSION['nom'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: inn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['nom']);
  	header("location: inn.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	nous allons mettre le home ici
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome!!! <strong><?php echo $_SESSION['nom']; ?></strong></p>
    	<p> <a href="index.php?logout='1'"  >logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>