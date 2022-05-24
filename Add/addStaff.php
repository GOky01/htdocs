
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
         <form class="" action='addStaff.php'  method="post">

           <label for="fio">FIO</label>
           <input type="text" name="fio" id="fio" class ='form-control' value="">
           <br>
           <label for="fio">Salary</label>
           <input type="text" name="salary" id="salary" class ='form-control' value="">
           <br>
           <label for="telephone">Telephone</label>
           <input type="text" name="telephone" id="telephone" class ='form-control' value="">
           <br>
           <label for="position">Position</label>
           <input type="text" name="position" id="position" class ='form-control' value="">
           <br>
           <label for="position">Experience</label>
           <input type="text" name="stazh" id="position" class ='form-control' value="">

         <button type="submit" name="renderstaff" id="renderauto" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');


    $fio = $_POST['fio'];
    $salary = $_POST['salary'];
    $telephone = $_POST['telephone'];
    $position = $_POST['position'];
    $stazh = $_POST['stazh'];



   $sql = 'INSERT INTO staff(pib,salary,telephone,position,experience) VALUES(?,?,?,?,?)';
   $query = $pdo->prepare($sql);
   $query->execute([$fio,$salary,$telephone,$position,$stazh]);

    ?>

 </body>
