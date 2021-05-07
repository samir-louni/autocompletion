<?php include('header2.php'); ?>
<?php $nom = $_GET['search']; ?>
<main>

    <div class = 'centrer_case2'>
      <div class='card large'>
        <div class='card-header fond_recherche'>
          <h5>Résultat de vos recherches .. </h5>
        </div>
        <div class='card-body'>
        <blockquote class='blockquote mb-0'>

        <?php
                $user->recherche($nom);
        ?>

          <footer class='blockquote-footer marge2'>Titre correspondant à  :  <cite title='Source Title'><?php echo $nom; ?></cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>
