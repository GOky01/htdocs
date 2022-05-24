<?php
require_once '../blocks/header.php';
require_once '../data.php';

$sql = 'SELECT * FROM country';
$query = $pdo->prepare($sql);
$query->execute([]);
$users = $query->fetchAll(PDO::FETCH_OBJ);

echo '<table class="table">';
echo  '<thead class="thead-dark">';

      echo "<tr>";
          echo  '<th scope="col">'.'id_country'. '</th>';
          echo  '<th scope="col">'.'name'. '</th>';
      echo "</tr>";
echo '</thead>';

echo '<tbody>';
    foreach ($users as $el) {
      echo '<tr>';
        echo '<th scope="row">'. $el->id_country .'</th>';
        echo '<td>'. $el->name . '</td>';
      echo '</tr>';
    }

echo '</tbody>';

echo '</table>' ;

 ?>


 <div class="container">
   <div class="row mt-4">
     <div class="col-md-8 mb-3">
       <a href="../Add/addCountry.php" class=""><button type="button" name="button" class=' btn btn-outline-secondary form-control'>Добавити</button></a>
     </div>
   </div>
 </div>
