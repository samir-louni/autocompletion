<?php include('header2.php'); ?>

<main>
    <div class = 'centrer_case'>

        <?php
            $id = $_GET['id'];
            $user->afficher_musique($id); 
        ?>
        
    </div>
</main>

<?php include('footer.php'); ?>
