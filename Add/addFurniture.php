
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
 require_once '../data.php';

 $sql = 'SELECT * FROM firma';
 $query = $pdo->prepare($sql);
 $query->execute([]);
 $users = $query->fetchAll(PDO::FETCH_OBJ);

 $sql1 = 'SELECT * FROM country';
 $query1 = $pdo->prepare($sql1);
 $query1->execute([]);
 $users1 = $query1->fetchAll(PDO::FETCH_OBJ);

  ?>

<br>
<br>
 <body>

   <div class="container">
     <div class="row mt-4 mt-5">
       <div class="col-md-8 mb-3">
         <form class="" action='addFurniture.php'  method="post">
<br>
<br>
           <?php
           echo '<select class="form-select" name="firma" aria-label="Default select example">';
           echo '<option selected>Select firma</option>';
           foreach ($users as $el) {
              echo "<option value='$el->id_firma'>".$el->id_firma.' - '. $el->name."</option>";

           }
           echo '</select>';
            ?>
<br>
<br>
            <?php
            echo '<select class="form-select" name="strana" aria-label="Default select example">';
            echo '<option selected>Select country</option>';
            foreach ($users1 as $el) {
               echo "<option value='$el->id_country'>".$el->id_country.' - '. $el->name."</option>";

            }
            echo '</select>';

             ?>
             <br>
             <br>
             <br>

         <label for="color">Color</label>
         <input type="text" name="color" id="color" class ='form-control' value="">
<br>
         <label for="date">Date</label>
         <input type="date" name="date" value="">
<br>
<br>
         <label for="fuel">Name of furniture</label>
         <input type="text" name="name_furniture" id="fuel" class ='form-control' value="">

         <label for="carcase">Furniture body</label>
         <input type="text" name="body_furniture" id="kuzov" class ='form-control' value="">


         <button type="submit" name="renderauto" id="renderauto" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');


    $firma = $_POST['firma'];
    $strana = $_POST['strana'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $name_furniture = $_POST['name_furniture'];
    $body_furniture = $_POST['body_furniture'];


    $sql = 'INSERT INTO furniture(id_firma,id_country,name_furniture,color,date,body_furniture) VALUES(?,?,?,?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$firma,$strana,$name_furniture,$color,$date,$body_furniture]);

    ?>

 </body>
