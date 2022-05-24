<?php

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];

require_once('../db.php');

$error = '';
$real = '';

if (empty($name) || strlen($name)<3){
  $error = 'Введіть коректно імя';
}
else if (empty($login) || strlen($login)<3){
  $error = 'Введіть коректно логін';
}
else if (empty($email) || strlen($email)<3){
  $error = 'Введіть коректно email';
}
else if (empty($pass) || strlen($pass)<3){
  $error = 'Введіть коректно пароль';
}

if ($error !=''){
  echo $error;
  exit();
}

$hash = 'fhfhfjfhjhff';
$pass = md5($pass.$hash);

$sqlone = 'SELECT count(*) FROM `users` WHERE `login`=:login';
$select_login = $pdo->prepare($sqlone);
$select_login->execute(['login'=>$login]);
$exist_login = $select_login->fetchColumn();


$sqltwo = 'SELECT count(*) FROM `users` WHERE `email`=:email';
$select_email = $pdo->prepare($sqltwo);
$select_email->execute(['email'=>$email]);
$exist_email = $select_email->fetchColumn();

if($exist_login){
  $real = 'Користувач з таким login вже існує';
}
else if ($exist_email){
  $real = 'Користувач з таким email вже існує';
}

if($real !=''){
  echo $real;
  exit();
}

$sql = 'INSERT INTO users(name,login,email,pass) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$name,$login,$email,$pass]);



echo 'Success';

 ?>
