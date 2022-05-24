<?php
require_once '../data.php';

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
 require_once '../blocks/header.php';

$id = (int)$_GET['id'];


   $sql = 'SELECT * FROM furniture WHERE `id_furniture`=?';
   $query = $pdo->prepare($sql);
   $query->execute([$id]);
   $users = $query->fetchAll(PDO::FETCH_OBJ);
  ?>
<br>
<br>
 <body>

   <div class="container">
     <div class="row mt-4 mt-5">
       <div class="col-md-8 mb-3">
         <form class="" action='deleteAuto.php'  method="post">

           <label for="id">id_furniture</label>
           <input type="text" name="id" id="id" class ='form-control' value="<?= $el->id_furniture ?>" readonly>

         <button type="submit" name="renderauto" id="renderauto" class= 'btn btn-outline-danger form-control mt-3'>Видалити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');

   $id2 = $el->id_furniture;


   $sql = "DELETE FROM furniture WHERE `id_furniture`=:id_furniture";
   $query = $pdo->prepare($sql);
   $query->execute(['id_furniture'=>$id2]);

    ?>

 </body>
