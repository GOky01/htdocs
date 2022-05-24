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

   $sql = 'SELECT * FROM customers WHERE `id_customers`=?';
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
         <form class="" action='rendercustomers.php'  method="post">

           <label for="id">ID</label>
           <input type="text" name="id" id="id" class ='form-control' value="<?= $el->id_customers ?>" readonly>
           <br>
           <label for="fio">Surname</label>
           <input type="text" name="surname" id="fio" class ='form-control' value="<?= $el->surname ?>">
           <br>
           <label for="fio">Name</label>
           <input type="text" name="name" id="salary" class ='form-control' value="<?= $el->name ?>">
           <br>
           <label for="fio">Lastname</label>
           <input type="text" name="lastname" id="fio" class ='form-control' value="<?= $el->lastname ?>">
           <br>
           <label for="telephone">Passport</label>
           <input type="text" name="pasport" id="telephone" class ='form-control' value="<?= $el->passport ?>">
           <br>
           <label for="position">Address</label>
           <input type="text" name="adress" id="position" class ='form-control' value="<?= $el->address ?>">


         <button type="submit" name="rendercustomers" id="renderauto" class= 'btn btn-outline-danger form-control mt-3'>Змінити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('data.php');

    $id1 =$_POST['id'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $passport = $_POST['pasport'];
    $address = $_POST['adress'];
    $id2 = (int)$id1;


   $sql = "UPDATE `customers` SET `surname`='$surname', `name`='$name', `lastname`='$lastname', `passport`='$passport', `address`='$address' WHERE `id_customers`=:id_customers";
   $query = $pdo->prepare($sql);
   $query->execute(['id_customers'=>$id2]);

    ?>

 </body>
