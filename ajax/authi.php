<?php

$login = $_POST['login'];
$pass = $_POST['pass'];

require_once('../db.php');

$error = '';

if (empty($login)|| strlen($login)<3){
  $error =  'Введіть логін коректно';
}
else if (empty($pass)|| strlen($pass)<3){
  $error = 'Введіть пароль коректно';
}

if ($error !=''){
  echo $error;
  exit();
}

$hash = 'fhfhfjfhjhff';
$pass = md5($pass.$hash);


$sql = 'SELECT `id` FROM `users` WHERE `login`=:login && `pass`=:pass';
$query = $pdo->prepare($sql);
$query->execute(['login'=>$login,'pass'=>$pass]);

$user = $query->fetch(PDO::FETCH_OBJ);

if($user->id==0){
  echo 'Такого користувача не існує або пароль невірний';
} else {
  setcookie('login',$login,time()+3600*24,'/');

  echo 'Success';
}



 ?>
