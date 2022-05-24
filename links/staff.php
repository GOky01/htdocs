<?php
require_once '../blocks/header.php';
require_once '../data.php';

$sql = 'SELECT * FROM staff';
$query = $pdo->prepare($sql);
$query->execute([]);
$users = $query->fetchAll(PDO::FETCH_OBJ);


echo '<table class="table">';
echo  '<thead class="thead-dark">';

      echo "<tr>";
          echo  '<th scope="col">'.'id_staff'. '</th>';
          echo  '<th scope="col">'.'pib'. '</th>';
          echo  '<th scope="col">'.'salary'. '</th>';
          echo  '<th scope="col">'.'telephone'. '</th>';
          echo  '<th scope="col">'.'position'. '</th>';
          echo  '<th scope="col">'.'experience'. '</th>';
      echo "</tr>";
echo '</thead>';

echo '<tbody>';
    foreach ($users as $el) {
      echo '<tr>';
        echo '<th scope="row">'. $el->id_staff .'</th>';
        echo '<td>'. $el->pib . '</td>';
        echo '<td>'. $el->salary . '</td>';
        echo '<td>'. $el->telephone . '</td>';
        echo '<td>'. $el->position . '</td>';
        echo '<td>'. $el->experience . '</td>';
        echo '<td>'."<a href='../renderstaff.php?id=" . $el->id_staff . "' class='link-info'>Change</a>".'</td>';
        echo '<td>'."<a href='../Delete/deleteStaff.php?id=" . $el->id_staff . "' class='link-danger'>Delete</a>".'</td>';
      echo '</tr>';
    }

echo '</tbody>';

echo '</table>';




 ?>

 <div class="container">
   <div class="row mt-4">
     <div class="col-md-8 mb-3">
       <a href="../Add/addStaff.php" class=""><button type="button" name="button" class=' btn btn-outline-secondary form-control'>Добавити</button></a>
     </div>
   </div>
 </div>
