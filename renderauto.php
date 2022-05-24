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


   $sql = 'SELECT * FROM computer WHERE `id_computer`=?';
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
         <form class="" action='renderauto.php'  method="post">

         <label for="id">ID</label>
         <input type="text" name="id" id="id" class ='form-control' value="<?= $el->id_computer ?>" readonly>

         <label for="mark">Mark</label>
         <input type="text" name="mark" id="mark" class ='form-control' value="<?= $el->mark ?>">

         <label for="color">Color</label>
         <input type="text" name="color" id="color" class ='form-control' value="<?= $el->color ?>">
<br>
         <label for="date">Date</label>
         <input type="date" name="date" value="<?= $el->date ?>">
<br>
<br>
         <label for="fuel">VideoCard</label>
         <input type="text" name="videocard" id="fuel" class ='form-control' value="<?=$el->videocard ?>">

         <label for="carcase">BodyType</label>
         <input type="text" name="bodyType" id="kuzov" class ='form-control' value="<?=$el->bodyType ?>">


         <button type="submit" name="renderauto" id="renderauto" class= 'btn btn-outline-danger form-control mt-3'>Змінити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('data.php');


    $id1 =$_POST['id'];
    $mark = $_POST['mark'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $bodyType = $_POST['bodyType'];
    $videocard = $_POST['videocard'];
    $id2 = (int)$id1;





   $sql = "UPDATE `computer` SET `mark`='$mark', `color`='$color', `date`='$date', `videocard`='$videocard', `bodyType`='$bodyType' WHERE `id_computer`=:id_computer";
   $query = $pdo->prepare($sql);
   $query->execute(['id_computer'=>$id2]);

    ?>

 </body>
