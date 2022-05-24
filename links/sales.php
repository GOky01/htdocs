<?php
require_once '../blocks/header.php';
require_once '../data.php';

$sql = 'SELECT * FROM sales';
$query = $pdo->prepare($sql);
$query->execute([]);
$users = $query->fetchAll(PDO::FETCH_OBJ);

echo '<table class="table">';
echo  '<thead class="thead-dark">';

      echo "<tr>";
          echo  '<th scope="col">'.'id_sale'. '</th>';
          echo  '<th scope="col">'.'id_computer'. '</th>';
          echo  '<th scope="col">'.'id_customers'. '</th>';
          echo  '<th scope="col">'.'id_staff'. '</th>';
          echo  '<th scope="col">'.'date'. '</th>';
          echo  '<th scope="col">'.'cost'. '</th>';
      echo "</tr>";
echo '</thead>';

echo '<tbody>';
    foreach ($users as $el) {
      echo '<tr>';
        echo '<th scope="row">'. $el->id_sales .'</th>';
        echo '<td>'. $el->id_furniture . '</td>';
        echo '<td>'. $el->id_customers . '</td>';
        echo '<td>'. $el->id_staff . '</td>';
        echo '<td>'. $el->date . '</td>';
        echo '<td>'. $el->cost . '</td>';
        echo '<td>'."<a href='../rendersale.php?id=" . $el->id_sales . "' class='link-info'>Change</a>".'</td>';
        echo '<td>'."<a href='../Delete/deleteSale.php?id=" . $el->id_sales . "' class='link-danger'>Delete</a>".'</td>';
      echo '</tr>';
    }


echo '</tbody>';

echo '</table>';


 ?>

 <div class="container">
   <div class="row mt-4">
     <div class="col-md-8 mb-3">
       <a href="../Add/addSale.php" class=""><button type="button" name="button" class=' btn btn-outline-secondary form-control'>Добавити</button></a>
     </div>
   </div>
 </div>
