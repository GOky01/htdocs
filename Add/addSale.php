
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

 $sql = 'SELECT * FROM furniture';
 $query = $pdo->prepare($sql);
 $query->execute([]);
 $users = $query->fetchAll(PDO::FETCH_OBJ);

 $sql1 = 'SELECT * FROM customers';
 $query1 = $pdo->prepare($sql1);
 $query1->execute([]);
 $users1 = $query1->fetchAll(PDO::FETCH_OBJ);

 $sql2 = 'SELECT * FROM staff';
 $query2 = $pdo->prepare($sql2);
 $query2->execute([]);
 $users2 = $query2->fetchAll(PDO::FETCH_OBJ);

 $sql3 = 'SELECT * FROM equipment';
 $query3 = $pdo->prepare($sql3);
 $query3->execute([]);
 $users3 = $query3->fetchAll(PDO::FETCH_OBJ);

  ?>

<br>
<br>
 <body>

   <div class="container">
     <div class="row mt-4 mt-5">
       <div class="col-md-8 mb-3">
         <form class="" action='addSale.php'  method="post">
<br>
<br>
           <?php
           echo '<select class="form-select" name="auto" aria-label="Default select example">';
           echo '<option selected>Select furniture</option>';
           foreach ($users as $el) {
              echo "<option value='$el->id_furniture'>".$el->id_furniture.' - '. $el->name_furniture."</option>";
           }
           echo '</select>';
            ?>
<br>
<br>
            <?php
            echo '<select class="form-select" name="pokup" aria-label="Default select example">';
            echo '<option selected>Select customers</option>';
            foreach ($users1 as $el) {
               echo "<option value='$el->id_customers'>".$el->id_customers.' - '. $el->surname."</option>";

            }
            echo '</select>';

             ?>
             <br>
             <br>
             <?php
             echo '<select class="form-select" name="staff" aria-label="Default select example">';
             echo '<option selected>Select staff</option>';
             foreach ($users2 as $el) {
                echo "<option value='$el->id_staff'>".$el->id_staff.' - '. $el->pib."</option>";

             }
             echo '</select>';

              ?>
             <br>
             <br>
             <br>

             <?php
             echo '<select class="form-select" name="equipment" aria-label="Default select example">';
             echo '<option selected>Select equipment</option>';
             foreach ($users3 as $el) {
                echo "<option value='$el->id_equipment'>".$el->id_equipment.' - '. $el->name.' - '.$el->cost."</option>";

             }
             echo '</select>';

              ?>
             <br>
             <br>
             <br>

         <label for="date">Date</label>
         <input type="date" name="date" value="">
<br>
<br>
<br>
<label for="date">Cost</label>
<input type="text" name="cost" value="">
<br>
<br>

         <button type="submit" name="renderauto" id="renderauto" class= 'btn btn-outline-secondary form-control mt-3'>Добавити</button>
         </form>
       </div>
     </div>
   </div>

   <?php
   require_once('../data.php');


    $auto = $_POST['auto'];
    $pokup = $_POST['pokup'];
    $staff = $_POST['staff'];
    $date = $_POST['date'];
    $cost = $_POST['cost'];
    $equipment = $_POST['equipment'];

    $sql = 'INSERT INTO sales(id_furniture,id_customers,id_staff,id_equipment, date,cost) VALUES(?,?,?,?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$auto,$pokup,$staff,$equipment,$date,$cost]);

    ?>

 </body>
