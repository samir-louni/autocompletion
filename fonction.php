<?php 


class musique
{
private $_titre;
private $_nom;
public $_image;
public $_album;


/// Fonction pour se connecter a la base de données.

public function dbconnect()
{
    $db = new PDO("mysql:host=localhost; dbname=autocompletion", 'root', '');
    $db->exec("SET CHARACTER SET utf8");
    $this->_db = $db;
}


/// Fonction pour afficher le titres rechercher 

public function titre()
{

    $db = $this->_db;
    $requete = $db->prepare('SELECT titre FROM musiques');
    $requete->execute();
    $resultat = $requete->fetchall();

    foreach($resultat as $titre)
    {
        echo $titre['titre'];
    }

}


/// Fonction pour afficher les resultats de la recherche

public function recherche($_recherche){
    

    $db = $this->_db;
    
    
        if(!empty($_recherche)){
            $recherche = htmlspecialchars($_recherche);
            $requete = $db->prepare("SELECT * FROM musiques WHERE titre LIKE '$recherche%' ORDER BY id DESC");
            $requete->execute();
            $resultat = $requete->fetchall();
            foreach ($resultat as $key) {
                $titre = $key['titre'];
                $id = $key['id'];
                $artiste = $key['artiste'];
                
                echo "<div class = 'marge'>";
                echo "<img class = 'logoplay' src = 'images-auto/logoplay.png' alt = 'Logo lecture'/><a class = 'liens' href = element?id=$id>$titre</a><br>";
                echo "</div>";
            }
            
        }else{
            echo "Aucun resultat";
        }
    
    }


/// Fonction pour afficher le titre chosis.

public function afficher_musique($id)
{

    $db = $this->_db;
    $requete = $db->prepare("SELECT * FROM musiques WHERE id=$id");
    $requete->execute();
    $resultat = $requete->fetchall();

    foreach($resultat as $musique)
    {
        $titre = $musique['titre'];
        $artiste = $musique['artiste'];
        $album = $musique['album'];
        $image = $musique['image'];

    echo
        "<div class='card' style='width: 18rem;'>
            <img class='card-img-top' src='images-auto/$image' alt='Album $album'>
            <div class='card-body'>
                <h5 class='card-title'>Artiste :</h5><p class = 'anim'>$artiste</p>
                <h5 class='card-title'>Album : </h5><p class = 'anim'>$album</p>
                <h5 class='card-title'>Titre :</h5><p class = 'anim'> $titre</p> 
            </div>
         </div>";
    
}
}

}

?>
