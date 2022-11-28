<?php
include "../controller/categorieC.php";
$error = "";

// create categorie
$cat= null;
// create an instance of the controller
$catC=new categorieC();

if (
    isset($_POST["nom_categ"]) && 
    isset($_POST["descriptionc"]) 
   )
{
    if (
        !empty($_POST["nom_categ"]) && 
        !empty($_POST["descriptionc"])
        )
        {
            $image = $_FILES['image'];
	
	//$fileName = $_FILES['file']['name'];
	$image = $_FILES['image']['name'];
	$fileTmpName = $_FILES['image']['tmp_name'];
	$fileSize = $_FILES['image']['size'];
	$fileError = $_FILES['image']['error'];
	$fileType = $_FILES['image']['type'];
	
	//$fileExt = explode('.',$fileName);
	$fileExt = explode('.',$image);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png');
	
	if (in_array($fileActualExt, $allowed))
	{
		if ($fileError === 0)
		{
			if ($fileSize < 1000000)
			{
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = '../View/assets/images/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				echo "image uploaded with success !";
			}
			else 
			{
				echo "your file  is too big !";
			}
		}
		else 
		{
			echo "There was an error uploading your file !";
		}
	}else 
	{
		echo "you cannot upload files of this type !";
	}
	  
            $cat = new categorie
            (
                $_POST['nom_categ'],
                $_POST['descriptionc'],
                $_FILES['image']['name']
            );
            $catC->ajoutercategorie($cat);
            header('Location:afficher_categ.php');

        }
    else 
    $error = "Missing information";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Ajouter une categorie</title>

  <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

  
</head>


<body class="hold-transition sidebar-mini">


 <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                    </li>
                    <h3 class="menu-title"> Éléments IU</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->


                            <li><i class="fa fa-table"></i><a href="afficher_produit.php">Produits</a></li>
                           
                            </ul>
                    </li>
                

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Graphiques</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="../linechart/stat.php"> GraphiqueProduit</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="../View/linechart/stat_c.php"> GraphiqueCategorie</a></li>

                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Mot De Passe Oublier</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
       
                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary"><a style="color: white;" href="afficher_categ.php">Retour à la liste des categories</a></button>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style="justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Ajouter une categorie </strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">remplir </h3>
                                        </div>
                                        <hr>     
      
    
   
              <form action="ajouter_categ.php" method="POST" enctype="multipart/form-data" name="myform">
			  
			    <!-- Nom Categorie-->
                <div class="card-body">
                
                  <div class="form-group">
                    <label>Nom de la  categorie :</label>
                    <input class="form-control" name="nom_categ" id="nom_categ" placeholder="machines salle de sport/plastique/bicyclette" required maxlength="30" type="text">
                  </div>
				  
				  <!-- Description-->
				   <div class="form-group">
                    <label>Description de la categorie :</label>
                    <input class="form-control" name="descriptionc"  id="descriptionc" placeholder="description de la categorie" required>
                  </div>
				    <!-- Image -->
                    <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                </div>
				  
               
                <!-- /.card-body -->
                </div>
                
                <div class="card-footer">
                  <button type="submit" value="envoyer" class="btn btn-primary">Ajouter</button>
                </div>
				
              </form>
              
              </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                 


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
          

</html>
