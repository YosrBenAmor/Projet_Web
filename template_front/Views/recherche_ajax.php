<?php
// create a new function
function search($text){
    
    // connection to the Ddatabase
    $db = new PDO("mysql:host=localhost;dbname=projet_web", 'root', '');
    // let's filter the data that comes in
    $text = htmlspecialchars($text);
    // prepare the mysql query to select the users 
    $get_nom_ass = $db->prepare("SELECT nom_ass FROM association WHERE nom_ass LIKE concat('%', :nom_ass, '%')");
    // execute the query
    $get_nom_ass -> execute(array('nom_ass' => $text));
    // show the users on the page
    while($names = $get_nom_ass->fetch(PDO::FETCH_ASSOC))
    {
        // show each user as a link
        echo '<a href="afficherdetailass.php ">'.$names['nom_ass'].'</a>';
    
        
        
    }
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>
 