<?php
require_once '../blocks/header.php';
require_once '../data.php';

$sql = 'SELECT * FROM customers';
$query = $pdo->prepare($sql);
$query->execute([]);
$users = $query->fetchAll(PDO::FETCH_OBJ);

echo '<table class="table">';
echo  '<thead class="thead-dark">';

      echo "<tr>";
          echo  '<th scope="col">'.'id_customers'. '</th>';
          echo  '<th scope="col">'.'surname'. '</th>';
          echo  '<th scope="col">'.'name'. '</th>';
          echo  '<th scope="col">'.'lastname'. '</th>';
          echo  '<th scope="col">'.'passport'. '</th>';
          echo  '<th scope="col">'.'address'. '</th>';
      echo "</tr>";
echo '</thead>';

echo '<tbody>';
    foreach ($users as $el) {
      echo '<tr>';
        echo '<th scope="row">'. $el->id_customers .'</th>';
        echo '<td>'. $el->surname . '</td>';
        echo '<td>'. $el->name . '</td>';
        echo '<td>'. $el->lastname . '</td>';
        echo '<td>'. $el->passport . '</td>';
        echo '<td>'. $el->address . '</td>';
        echo '<td>'."<a href='../rendercustomers.php?id=" . $el->id_customers . "' class='link-info'>Change</a>".'</td>';
        echo '<td>'."<a href='../Delete/deleteCustomers.php?id=" . $el->id_customers . "' class='link-danger'>Delete</a>".'</td>';
      echo '</tr>';
    }

echo '</tbody>';

echo '</table>' ;


 ?>

 <div class="container">
   <div class="row mt-4">
     <div class="col-md-8 mb-3">
       <a href="../Add/addCustomers.php" class=""><button type="button" name="button" class=' btn btn-outline-secondary form-control'>Добавити</button></a>
     </div>
   </div>
 </div>
