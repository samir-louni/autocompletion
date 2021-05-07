<?php 
session_start();
include("fonction.php");
$user = new musique();
$user->dbconnect();
?> 

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="images-auto/logo.png" />
        <link rel="stylesheet" href="autocompletion.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>50 Musiques</title>
        </head>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        </style>
    </head>
<body>

<header>
    <nav class="navbar navbar-dark navbar_samir">
        <a href = 'index.php'><span class="navbar-brand mb-0 h1 adroite">Accueil</span></a>
    </nav>
    <div class = 'centrer_input3'>
        <form method='post' class="form-inline my-2 my-lg-0 " autocomplete="off">
            <input  name ='search' class="form-control mr-sm-2 droite " type="search" placeholder="Recherche" id="rechercher_titre" aria-label="Search">
            <button name = 'valide' class="btn boutton "   type="submit">Recherche</button>
        </form>  
        <div class = 'resultat' id = 'resultat_recherche'></div>
    </div>
</header>

<script src="script.js"></script>

<?php 
    if(isset($_POST['valide']))
    {
        $nom = $_POST['search']; 
        header("location:recherche?search=$nom");
    }
?>