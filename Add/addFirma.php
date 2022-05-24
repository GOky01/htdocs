
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
         <form class="" action='addFirma.php'  method="post">
         <label for="mark">Name</label>
         <input type="text" name="name" id="mark" class ='form-control' value="<?= $el->name ?>">
       <br>
       <label for="mark">Address</label>
       <input type="text" name="address" id="mark" class ='form-control' value="<?= $el->adrress ?>">
         <button type="submit" name="renderfirma" id="renderauto" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');

     $name = $_POST['name'];
     $addres = $_POST['adrress'];

   $sql = 'INSERT INTO firma(name,adrress) VALUES(?,?)';
   $query = $pdo->prepare($sql);
   $query->execute([$name,$addres]);

    ?>

 </body>
