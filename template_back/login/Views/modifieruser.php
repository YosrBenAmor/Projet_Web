<?php
include_once '../Model/User.php';
include_once '../Controller/UserC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$user = new userC();
if (
    isset($_POST["numuser"]) &&
    isset($_POST["nom"]) &&		
    isset($_POST["prenom"]) &&
    isset($_POST["password"]) &&
    isset($_POST["adresse"]) && 
    isset($_POST["email"]) && 
    isset($_POST["tel"]) && 
    isset($_POST["dateinscription"])
) {
    if (
        !empty($_POST["numuser"]) && 
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) && 
        !empty($_POST["password"]) && 
        !empty($_POST["adresse"]) && 
        !empty($_POST["email"]) && 
        !empty($_POST["tel"]) && 
        !empty($_POST["dateinscription"])
    ) {
        $user = new User(
            $_POST['numuser'],
            $_POST['nom'],
            $_POST['prenom'], 
            $_POST['password'], 
            $_POST['adresse'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['dateinscription']
        );
        $userC->ajouteruser($user);
        header('Location:afficherListeUsers.php');
    }
    else
        $error = "Missing information";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
   

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['NumUser'])) {
        $user = $userC->recupereruser($_POST['NumUse']);

    ?>

    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="numuser">Numéro utilisateur:
                    </label>
                </td>
                <td><input type="string" name="numuser" id="numuser"
                        value="<?php echo $user['numuser']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom:
                    </label>
                </td>
                <td><input type="string" name="nom" id="nom" value="<?php echo $user['nom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">Prenom:
                    </label>
                </td>
                <td><input type="string" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>"
                        maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:
                    </label>
                </td>
                <td><input type="string" name="password" id="password" value="<?php echo $user['password']; ?>"
                        maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="adresse">Adresse:
                    </label>
                </td>
                <td>
                    <input type="string" name="adresse" value="<?php echo $user['adresse']; ?>" id="adresse">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Adresse mail:
                    </label>
                </td>
                <td>
                    <input type="string" name="email" id="email" value="<?php echo $user['email']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Date d'inscription:
                    </label>
                </td>
                <td>
                    <input type="date" name="dateinscription" id="dateinscription" value="<?php echo $user['dateInscription']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Modifier">
                </td>
                <td>
                    <input type="reset" value="Annuler">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>

</html>