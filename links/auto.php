<?php
require_once '../blocks/header.php';
require_once '../data.php';

$sql = 'SELECT * FROM furniture';
$query = $pdo->prepare($sql);
$query->execute([]);
$users = $query->fetchAll(PDO::FETCH_OBJ);

echo '<table class="table">';
echo  '<thead class="thead-dark">';

      echo "<tr>";
          echo  '<th scope="col">'.'id_furniture'. '</th>';
          echo  '<th scope="col">'.'id_firma'. '</th>';
          echo  '<th scope="col">'.'id_country'. '</th>';
          echo  '<th scope="col">'.'mark'. '</th>';
          echo  '<th scope="col">'.'color'. '</th>';
          echo  '<th scope="col">'.'date'. '</th>';
          echo  '<th scope="col">'.'body_furniture'. '</th>';
      echo "</tr>";
echo '</thead>';

echo '<tbody>';
    foreach ($users as $el) {
      echo '<tr>';
        echo '<th scope="row">'. $el->id_furniture .'</th>';
        echo '<td>'. $el->id_firma . '</td>';
        echo '<td>'. $el->id_country . '</td>';
        echo '<td>'. $el->name_furniture . '</td>';
        echo '<td>'. $el->color . '</td>';
        echo '<td>'. $el->date . '</td>';
        echo '<td>'. $el->body_furniture . '</td>';
        echo '<td>'."<a href='../renderauto.php?id=" . $el->id_furniture . "' class='link-info'>Change</a>".'</td>';
        echo '<td>'."<a href='../Delete/deleteAuto.php?id=" . $el->id_furniture . "' class='link-danger'>Delete</a>".'</td>';
      echo '</tr>';
    }


echo '</tbody>';

echo '</table>';


 ?>

 <div class="container">
   <div class="row mt-4">
     <div class="col-md-8 mb-3">
       <a href="../Add/addFurniture.php" class=""><button type="button" name="button" class=' btn btn-outline-secondary form-control'>Добавити</button></a>
     </div>
   </div>
 </div>
