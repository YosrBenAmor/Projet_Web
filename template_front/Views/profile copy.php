<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">voici votre compte</h1>
							<p class="lead">
								vos informations personnels
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">

									<form>
										<div class="mb-3">
                                            <label class="form-label">ID:</label>
											<label class="form-label"><?php echo $_SESSION['id'];?></label><br>
                                            <label class="form-label">NOM:</label>
											<label class="form-label"><?php echo $_SESSION['nom'];?></label> <br>
                                            <label class="form-label">PRENOM:</label>
											<label class="form-label"><?php echo $_SESSION['prenom'];?></label><br>
                                            <label class="form-label">EMAIL:</label>
											<label class="form-label"><?php echo $_SESSION['email'];?></label> <br>
                                            <label class="form-label">ADRESSE:</label>
											<label class="form-label"><?php echo $_SESSION['adresse'];?></label><br>
                                            <label class="form-label">NUMERO TELEPHONE:</label>
											<label class="form-label"><?php echo $_SESSION['tel'];?></label> <br>
                                          
										</div>
		
          </label>
										</div>
										<div class="text-center mt-3">
										
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>