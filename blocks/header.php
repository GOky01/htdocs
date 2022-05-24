<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<header class="mb-auto">
  <div>
    <h3 class="float-md-start mb-0">HouseholdShop</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
      <?php
      if($_COOKIE['login']==''):
       ?>
      <a class="nav-link active" aria-current="page" href="/" style="left: 100%; margin:0 auto;">
        <button type="button" name="button" class ='btn btn-primary'>Головна</button>
      </a>

      <a class="nav-link" href="../reg.php" style="left: 100%; margin:0 auto;">
          <button type="button" name="button" class ='btn btn-primary'>Реєстрація</button>
      </a>
      <a class="nav-link" href="../auth.php" style="width: 800px; margin:0 auto;">
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" name="button" class ='btn btn-primary'>Вхід</button>
        </div>
      </a>

      <?php
  else:
       ?>


       <?php
       require_once 'menu.php'
        ?>

<?php
endif;
 ?>
  </div>
</header>
