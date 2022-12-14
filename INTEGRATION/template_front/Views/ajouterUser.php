<?php
    include_once '../Model/user.php';
    include_once '../Controller/userC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new userC();
    if (
        isset($_POST["nom"]) &&     
        isset($_POST["prenom"]) &&
        isset($_POST["password"]) &&
        isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["tel"]) 
       // isset($_POST["usad"])
    ) {
        if (
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["password"]) && 
            !empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
           !empty($_POST["tel"]) 
           // !empty($_POST["usad"])
        ){
            $user = new user(
                null,
                $_POST['nom'],
                $_POST['prenom'],
                null, 
                $_POST['password'], 
                $_POST['adresse'],
                $_POST['email'],
                $_POST['tel'],
                null
            );
            $userC->ajouteruser($user); 
            $password = $_POST["password"];
            $email = $_POST["email"] ; 

        $result = $userC->recupereruserByemail($email,$password);
        if($result == null)
            $error ="Email et/ou mot de passe est incorrect";
        else{
                    $_SESSION['id']= $result['id']; 
                    $_SESSION['nom']= $result['nom'];
                    $_SESSION['prenom']= $result['prenom'];
                    $_SESSION['password']= $result['password'];
                    $_SESSION['email']= $result['email'];
                    $_SESSION['adresse']= $result['adresse'];
                    $_SESSION['tel']= $result['tel'];
                    $_SESSION['usad']= $result['usad'];
                    }
            
            header('Location:acceuil2.php');
        }
        else
            $error = "Missing information";
    }
    
?>

<html>
<head>
        <title>PHPJabbers.com | Free Blog Website Template</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
    <script type="text/javascript" src="validation.js"></script>

    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                <header id="header" class="alt">
                    <a   class="logo"><img src="images/logo.png"  /></a>
                     
                </header>
 
                    <div>
                        <div class="inner">
                            <section>
                                <header class="major">
                                    <h2>Commencez a troquer !</h2>
                                    
                                </header>

                                <form action="" method="POST"  name="amin" onsubmit="return validateForm(event)" >
                                    <div class="fields">
                                        <div class="field half">
                                            <label for="nom">Nom</label>
                                            <input type="text" name="nom" id="nom" />
                                            <p id="nomER" class="error"></P>
                                        </div>
                                        
                                        <div class="field half">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" name="prenom" id="prenom" />
                                            <p id="prenomER" class="error"></P>
                                        </div>
                                        <div class="field">
                                            <label for="email">Émail</label>
                                            <input type="text" name="email" id="email" />
                                            <p id="emailER" class="error"></P>
                                        </div>
                                        <div class="field">
                                            <label for="password">Mot de passe</label>
                                             <input type="password" name ='password'  id="password"/><br>
                                            <input type="checkbox" id="GFG" onclick="myFunction()"> Démasquer le  mot de passe
                                            <script>
        function myGeeks() {
            var g = document.getElementById("GFG").defaultChecked;
            document.getElementById("sudo").innerHTML = g;
        }
    </script>
                                            <script>
                                            function myFunction() {
                                              var x = document.getElementById("password");
                                              if (x.type == "password") {
                                                x.type = "text";
                                              } else {
                                                x.type = "password";
                                              }
                                            }
                                            </script>
                                            
                                            
                                        </div>
                                        <p id="passER" class="error"></P>
                                
                                        <div class="field">
                                            <label for="tel">Numero téléphone</label>
                                            <input type="text" name="tel" id="tel" />
                                            <p id="telER" class="error"></P>
                                        </div>
                                        <div class="field">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" name="adresse" id="adresse" />
                                            <p id="adER" class="error"></P>
                                        </div>
                                        
                                        <tr>
                                        </div>
                                        <div class="field half text-right">
                                            <ul class="actions">
                                                <input type="submit" value="créer un compte" class="primary" />
                                            </ul>
                                            Vous avez déja un compte ? <a href="login.php">Se connecter</a>
                                        </div>
                                    </div>
                                </form>
                            
                        </div>
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