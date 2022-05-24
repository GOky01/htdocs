
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
  ?>
<br>
<br>
 <body>

   <div class="container">
     <div class="row mt-4 mt-5">
       <div class="col-md-8 mb-3">
         <form class="" action='addCustomers.php'  method="post">

           <label for="fio">Surname</label>
           <input type="text" name="surname" id="fio" class ='form-control' value="">
           <br>
           <label for="fio">Name</label>
           <input type="text" name="name" id="salary" class ='form-control' value="">
           <br>
           <label for="fio">Lastname</label>
           <input type="text" name="lastname" id="fio" class ='form-control' value="">
           <br>
           <label for="telephone">Passport</label>
           <input type="text" name="pasport" id="telephone" class ='form-control' value="">
           <br>
           <label for="position">Adress</label>
           <input type="text" name="adress" id="position" class ='form-control' value="">


         <button type="submit" name="rendercustomers" id="renderauto" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');


    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $pasport = $_POST['pasport'];
    $adres = $_POST['adress'];



   $sql = 'INSERT INTO customers(surname,name,lastname,passport,address) VALUES(?,?,?,?,?)';
   $query = $pdo->prepare($sql);
   $query->execute([$surname,$name,$lastname,$pasport,$adres]);

    ?>

 </body>
