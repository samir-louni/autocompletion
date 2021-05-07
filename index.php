<?php include('header.php'); ?>

<main>
    <div class = 'centrer_image'>
        <img src = 'images-auto/music2.png' class = 'musique' alt = 'Logo Site'>
    </div>
    <div class = 'centrer_input'>
        <form method='post' class="form-inline my-2 my-lg-0" autocomplete='off'>
            <input name = 'search' class="form-control mr-sm-2 " type="search" placeholder="Recherche" id="rechercher_titre" aria-label="Search">
            <button name = 'valide' class="btn btn-outline-warning my-2 my-sm-0 " type="submit">Recherche</button>
        </form>
        <?php 
           if(isset($_POST['valide']))
            {
                 $nom = $_POST['search']; 
               header("location:recherche?search=$nom");
             }
        ?>
    </div>
    <div class = 'centrer_input2'>
        <div class = 'resultat' id = 'resultat_recherche'></div>
    </div>
    <div class = 'texte_index'>
        <p>Découvrez mes statistiques Spotify avec les morceaux et les artistes que j'ai
        le plus écouté ce mois-ci . L’occasion de faire un tour d’horizon de mes goûts musicaux !</p>
    </div>
</main>

<?php include('footer.php'); ?>
