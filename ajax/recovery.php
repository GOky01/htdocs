<?php

require_once('../db.php');

$login = $_POST['login'];
$email = $_POST['email'];

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

$a =  substr(str_shuffle($permitted_chars), 0, 10);

$error = '';

if(empty($login) || strlen($login)<3){
  $error = 'Введіть коректно логін';
}
else if(empty($email) || strlen($email)<3){
  $error = 'Введіть коректно email';
}


if ($error !=''){
  echo $error;
  exit();
}


$hash = 'fhfhfjfhjhff';
$pass = md5($pass.$hash);


$sql = 'SELECT `id` FROM `users` WHERE `login`=:login && `email`=:email';
$query = $pdo->prepare($sql);
$query->execute(['login'=>$login,'email'=>$email]);

$user = $query->fetch(PDO::FETCH_OBJ);

if($user->id==0){
  echo 'Такого користувача не існує';
} else {
  echo 'Success';
}




 ?>
