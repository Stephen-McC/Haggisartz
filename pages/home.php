<?php
  require '../inc/json.php';
  include '../inc/head.inc.php';
?>

<section class='container-fluid section'>
  <img src='https://via.placeholder.com/450' alt='test category' class='center largebox'>
</section>

<section class='container-fluid'>
  <ul class='unstyled'>
    <div class='row justify-content-md-center'>
      <?php
        require '../inc/category.inc.php';
      ?>
    </div>
  </ul>
</section>

<?php
  include '../inc/foot.inc.php';
?>

<!--

cookies at bottom

--->