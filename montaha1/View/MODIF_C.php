<?php
include "../Controller/categorieC.php";
include_once '../Model/categorie.php';



$error = "";

$catC=new categorieC();

if (
    
    isset($_POST["nom_categ"]) && 
    isset($_POST["descriptionc"]) &&
    isset($_POST['image'])
   )
{
    if (
        
        !empty($_POST["nom_categ"]) && 
        !empty($_POST["descriptionc"])&& 
        !empty($_POST['image'])
        )
    {
            $cat = new categorie
            (
                $_POST['nom_categ'],
                $_POST['descriptionc'],
                $_POST['image']
            );
            $catC->modifiercategorie($cat, $_GET['id_categ']);
            //header('Location:../View/afficher_categ.php');
            header('refresh:5;url=afficher_categ.php');

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
  <title> Modifier une categorie</title>

  
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
                           
                            <li><i class="fa fa-table"></i><a href="afficher_produit.php">Produit</a></li>
                          
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

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style="justify-content: center;">
                    <div class="col-lg-6" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Categorie</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Modifier Categorie </h3>
                                        </div>
                                        <hr>
                            
          
          
          
             

         
              


    
   
            
			  
			   <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                if (isset($_GET['id_categ'])) {
                    $cat = $catC->recuperercategorie($_GET['id_categ']); 
                ?>
			  
              <form action="" method="POST">
			  
			    <!-- Nom Categorie-->
                <div class="card-body">
                   
				   <div class="form-group">
                                    <label for="id_categ">id_categ</label>
                                    <input type="int" class="form-control" name="id_categ" id="id_categ" value="<?php echo $cat['id_categ']; ?>" disabled>
                                </div>
				
                  <div class="form-group">
                                    <label for="$nom_categ">nom_categ</label>
                                    <input type="string" class="form-control" name="nom_categ" id="nom_categ" value="<?php echo $cat['nom_categ']; ?>">
                                </div>
                                  
				  
				  <!-- Description-->
				    <div class="form-group">
                                    <label for="categorie">descriptionc</label>
                                    <input type="string" class="form-control" name="descriptionc" id="descriptionc" value="<?php echo $cat['descriptionc']; ?>">
                                </div>
				  
                                 <!-- Image-->
				    <div class="form-group">
                                    <label for="image">image</label><br>
                                    <input type="file" name="image" value="<?php echo $cat['image']; ?>">                            
                    </div>                              
                 <button type="submit" value="submit" class="btn btn-primary">Modifier</button>

                 <button class="btn btn-danger"><a style="color: white;" href="afficher_categ.php">Annuler</a></button>

                <!-- /.card-body -->
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

            
  
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
 <?php
} 
else {
            echo "error de chargement";
        }
?>
</body>
</html>

