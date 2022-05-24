<?php
require_once 'data.php';
 ?>
 <!doctype html>
 <html lang="en" class="h-100">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Cover Template · Bootstrap v5.1</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
   </head>

 <?php
 require_once 'blocks/header.php';

   $id = (int)$_GET['id'];
   $sql = 'SELECT * FROM firma WHERE `id_firma`=?';
   $query = $pdo->prepare($sql);
   $query->execute([$id]);
   $users = $query->fetchAll(PDO::FETCH_OBJ);

   foreach ($users as $el) {
   }

  ?>
<br>
<br>
 <body>

   <div class="container">
     <div class="row mt-4 mt-5">
       <div class="col-md-8 mb-3">
         <form class="" action='renderfirma.php'  method="post">

           <label for="id">ID</label>
           <input type="text" name="id" id="id" class ='form-control' value="<?= $el->id_firma ?>" readonly>
           <br>
         <label for="mark">Name</label>
         <input type="text" name="name" id="mark" class ='form-control' value="<?= $el->name ?>">
       <br>
       <label for="mark">Adress</label>
       <input type="text" name="adress" id="mark" class ='form-control' value="<?= $el->adress ?>">
         <button type="submit" name="renderfirma" id="renderauto" class= 'btn btn-outline-danger form-control mt-3'>Змінити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('data.php');


     $id1 = $_POST['id'];
     $name = $_POST['name'];
     $adress = $_POST['adress'];
     $id2 = (int)$id1;





   $sql = "UPDATE `firma` SET `name`='$name', `adress`='$adress' WHERE `id_firma`=:id_firma";
   $query = $pdo->prepare($sql);
   $query->execute(['id_firma'=>$id2]);

    ?>

 </body>
