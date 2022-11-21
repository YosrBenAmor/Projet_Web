<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHPJabbers.com | Free Blog Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>

</style>

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><img src="images/logo.png"  /></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.html">Home </a> </li>

		                <li> <a href="login.php">login</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>
		                
		                <li> <a href="Evenement.html">Authors</a> </li>

		                <li class="active"><a href="Dons.html">Dons</a></li>
            		</ul>
				</nav>
 
				<!-- Main -->
					<div id="main" class="alt">


				<!-- form -->
					
						<div class="inner">
							<section>
								<header class="major">
									<h2>Commensez a troquer!</h2>
									<h5>creer un compte :)</h5>
								</header>

								
									<div class="fields">
									<form name ="logForm" onsubmit="return validateForm(event)"  method="POST"  action="register.php">
  	                                
									  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="username" value="<?php echo $username; ?>">
		<p id="errorNA" ></p>	
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" id="email" value="<?php echo $email; ?>">
		<p id="errormail" class="erreur"></p>	
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
			

  	  <input type="password" name="password_1" value="" id="myInput">
		<input type="checkbox" onclick="myFunction()">Show Password
											
											<script>
											function myFunction() {
											  var x = document.getElementById("myInput");
											  if (x.type === "password") {
												x.type = "text";
											  } else {
												x.type = "password";
											  }
											}
											</script>
											<p id="errorPass" ></p>
											<?php include('errors.php'); ?>
  	</div>
  	<div class="input-group">
  	  <label>Confirmez votre password</label>
  	  <input type="password" name="password_2" id="myInput2">




  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">enregistrer</button>		
    </div>
    
<p>
 vous avez deja un compte? <a href="login.php">se connecter</a>
  	</p>
										</div>
									</div>
								</form>
							
						</div>
					


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							
							<ul class="copyright">
								<li>Copyright © 2020 Company Name - Template by:</li>
								<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>