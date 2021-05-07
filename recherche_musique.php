<?php 
session_start();
include("fonction.php");
$user = new musique();
?> 


<?php 

$db = new PDO("mysql:host=localhost; dbname=autocompletion", 'root', '');
$db->exec("SET CHARACTER SET utf8");

$recherche = $_POST['titres'];

$requete = $db->prepare("SELECT * FROM musiques WHERE titre LIKE '$recherche%' ORDER BY id DESC");
$requete->execute();
$resultat = $requete->fetchall();

echo "<ul>";
foreach($resultat as $result){
    $id = $result['id'];
    $titre = $result['titre'];
    
    echo "<a href = 'recherche?search=$titre' class = 'ahref'><li>$titre</a></li>";
}
echo "</ul>";

?>

