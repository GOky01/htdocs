<?php

$nazva = $_POST['nazva'];
$description = $_POST['description'];


require_once('../db.php');

$error = '';

if(strlen($nazva)<4){
  $error = 'Введіть коректно назву';
  exit();
}


if(strlen($description)<4){
  $error = 'Введіть коректно опис';
  exit();
}


if ($error != '') {
  echo $error;
}

$hash = 'fhfhfjfhjhff';
$pass = md5($pass.$hash);


$sql = 'INSERT INTO article(nazva,description,avtor,time) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$nazva,$description,$_COOKIE['login'],date()]);



echo 'Success';

 ?>
