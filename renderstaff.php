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

   $sql = 'SELECT * FROM staff WHERE `id_staff`=?';
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
         <form class="" action='renderstaff.php'  method="post">

           <label for="id">ID</label>
           <input type="text" name="id" id="id" class ='form-control' value="<?= $el->id_staff ?>" readonly>
           <br>
           <label for="fio">PIB</label>
           <input type="text" name="pib" id="fio" class ='form-control' value="<?= $el->pib ?>">
           <br>
           <label for="fio">Salary</label>
           <input type="text" name="salary" id="salary" class ='form-control' value="<?= $el->salary ?>">
           <br>
           <label for="telephone">Telephone</label>
           <input type="text" name="telephone" id="telephone" class ='form-control' value="<?= $el->telephone ?>">
           <br>
           <label for="position">Position</label>
           <input type="text" name="position" id="position" class ='form-control' value="<?= $el->position ?>">
           <br>
           <label for="position">Experience</label>
           <input type="text" name="experience" id="position" class ='form-control' value="<?= $el->experience ?>">

         <button type="submit" name="renderstaff" id="renderauto" class= 'btn btn-outline-danger form-control mt-3'>Змінити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('data.php');

    $id1 =$_POST['id'];
    $pib = $_POST['pib'];
    $salary = $_POST['salary'];
    $telephone = $_POST['telephone'];
    $position = $_POST['position'];
    $experience = $_POST['experience'];
    $id2 = (int)$id1;


   $sql = "UPDATE `staff` SET `pib`='$pib', `salary`='$salary', `telephone`='$telephone', `position`='$position', `experience`='$experience' WHERE `id_staff`=:id_staff";
   $query = $pdo->prepare($sql);
   $query->execute(['id_staff'=>$id2]);

    ?>

 </body>
