<?php $title = 'namespaces';?>
<?php include 'inc/header.php'; ?>

<!-- See HTML & Twitter fodlers within src folder -->

<main>


  <div class="flex-container">

    <?php
    include './src/HTTP/Client.php';
    include './src/Twitter/Client.php';

    var_dump(new HTTP\Client);
    var_dump(new Twitter\Client);
    ?>

  </div>
</main>

<?php include 'inc/footer.php'; ?>