
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cover Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

<?php
require_once '../blocks/header.php';
 ?>

<body>

  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mb-3">
        <form class="" action="addCountry.php" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" id="name" class ='form-control' value="">
<br>

        <button type="submit" name="reg" id="reg" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
        </form>
      </div>
    </div>
  </div>

</body>


<?php

require_once '../blocks/header.php';
require_once '../data.php';

$name = $_POST['name'];

$sql = 'INSERT INTO country(name) VALUES(?)';
$query = $pdo->prepare($sql);
$query->execute([$name]);
//$users = $query->fetchAll(PDO::FETCH_OBJ);

 ?>
