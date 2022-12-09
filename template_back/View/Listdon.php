<?php
include '../Controller/donsC.php';
$donC = new donC();
$list = $donC->listdon();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/upgrade-to-pro.html" />

    <title>Upgrade to Pro | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="trouverUser.php">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Utilisateurs</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListedemande.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Demandes</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherListereservation.php">
							<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Reservations</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listevenements.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Evenements</span>
            </a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listparticipants.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Participations</span>
            </a>
			</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="Listassociation.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Associations</span>
            </a>
			</li>

            <li class="sidebar-item active">
						<a class="sidebar-link" href="Listdon.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Don</span>
            </a>
			</li>

					

				
			</div>
		</nav>

        <div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			</nav>

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Liste Des Dons</h1>
                    <a class="badge bg-dark text-white ms-2" href="chercherdon.php"> </a>
                   

                    <div class= row align-items-center> 
                        <div class="col-40 col-md-40 col-lg-55 col-xl-99 col-xxl-45 mx-auto">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <tr>
                            
            <th class="text-center">Nom_don</th>
            <th class="text-center">Img_don</th>
            <th class="text-center">Num_tel</th>
            <th class="text-center">Email_don</th>
            <th class="text-center">Option</th>
                                                </tr>
                                                <?php
        foreach ($list as $don) {
        ?>
        <tr>
            <td><?php echo $don['nom_don']; ?></td>
            <td><img src="img/<?php echo $don['img_don']; ?>"     width="100"    height="100"></td>
            <td><?php echo $don['num_tel']; ?></td>
            <td><?php echo $don['email_don']; ?></td>
                <td>
                    
                
                
                    <a href="deletedon.php?id_don=<?php echo $don['id_don']; ?>">Delete</a>
                </td>
                </div>
           
           </tr>
   
           <?php
           }
           ?>
                                               </thead>
                                               
   
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
   
                   