<?php
  require '../inc/json.php';
  include '../inc/head.inc.php';
?>

<section class="container-fluid section">
  <ul class="unstyled">
    <div class="row justify-content-md-center">
      <?php
        foreach($productArray as $key => $value){
          if($productArray[$key]['taxonomy_path'][4] == $_GET['cat'])
          {
              include '../inc/productDisplay.inc.php';
          }
        }
      ?>
    </div>
  </ul>
</section>

<?php
  include '../inc/foot.inc.php';
?>