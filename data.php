<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'household_appliances';

try {
  $dsn = 'mysql:host='.$host.';dbname='.$db;
  $pdo = new PDO($dsn,$user,$password);

} catch (PDOException $e) {
    print $e->getMessage ();
}





 ?>
