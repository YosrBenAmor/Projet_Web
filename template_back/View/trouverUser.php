<?php
include '../Controller/UserC.php';
$userC = new UserC();

if (isset($_GET['label']) && !empty($_GET['label'])) {
    $listeUsers = $userC->afficheruser($_GET['label']);
} else {
    $listeUsers = $userC->afficherusers();
}
$nb_users = $userC -> count_user();
$nb_u = array_values($nb_users)[0];
$nb_admins = $userC -> count_admin();
$nb_a = array_values($nb_admins)[0];


?>
<html>


<head> <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/upgrade-to-pro.html" />

    <title>Upgrade to Pro | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"></head>

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

					<li class="sidebar-item active" >
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

            <li class="sidebar-item  ">
						<a class="sidebar-link" href="Listassociation.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Associations</span>
            </a>
			</li>

            <li class="sidebar-item ">
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

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								
								
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
			
            <main class="content">
            <div>
        <form action="" method="GET">
            <input type="text" name="label" id="label" placeholder="donner le ID dutulisateur">
            <input type="submit" value="Search">
        </form>
    </div>
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">utilisateurs possibles</h1>

                   
                                
                                <div class="card-body">
                                    <div class="table-responsive table-upgrade">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">nom </th>
                                                    <th class="text-center">prenom</th>
                                                    <th class="text-center">pts</th>
                                                    <th class="text-center">MOT DE PASSE</th>
                                                    <th class="text-center">ADRESSE</th>
                                                    <th class="text-center">EMAIL</th>
                                                    <th class="text-center">TEL</th>
                                                    <th class="text-center">usad</th>
                                                </tr>
                                                <?php
        foreach ($listeUsers as $user) {
        ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['nom']; ?></td>
            <td><?php echo $user['prenom']; ?></td>
            <td><?php echo $user['pts']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php echo $user['adresse']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['tel']; ?></td>
            <td><?php echo $user['usad']; ?></td>
            <div class="card-body text-center">
                                <div class="mb-3">
  
                                
                                <td>  <button class="align-middle me-2" ><a href="supprimeruser.php?id=<?php echo $user['id']; ?>">x</a></button></td>
                                
                                
                                </div>
           
        </tr>
        

        <?php
        
        }
        ?>
                                            </thead>
                                            



                                            <div class="card-body text-center">
                                


                                        </table>
                                        </div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title">Line Chart</h5>
									<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-line"></canvas>
									</div>
								</div>
							</div>
						</div>
                        <script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Line chart
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "useres",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [<?php
                                for ($i = 1; $i <= 11; $i++) {
                                $countmonth = $userC -> count_by_month($i);
                                if ($countmonth!=NULL){
                                $nb_m= array_values($countmonth)[1];
                                echo $nb_m .',';
                                }else {echo '0 , ';}
                            } $countmonth12 = $userC -> count_by_month(12);
                            if ($countmonth12!=NULL){
                                $nb_m= array_values($countmonth)[1];
                                echo $nb_m ;
                                }else {echo '0';}
                            ?>]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
		});
	</script>

<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pie Chart</h5>
									<h6 class="card-subtitle text-muted">se sont les utilisateurs par rapport au admins.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-pie"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>    

				</div><script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
				data: {
					labels: ["admin", "user"],
					datasets: [{
						data: [<?php echo $nb_a; ?> , <?php echo $nb_u ;?>],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
						
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
		});
	</script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                                


                        

</body>

</html>