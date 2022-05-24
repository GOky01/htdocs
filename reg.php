
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cover Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

<?php
require_once 'blocks/header.php';
 ?>

<body>


  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mb-3">
        <form class="" action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class ='form-control' value="">

        <label for="login">Login</label>
        <input type="text" name="login" id="login" class ='form-control' value="">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class ='form-control' value="">

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" class ='form-control' value="">

        <div class="alert alert-danger form-control" id="error"> </div>

        <button type="button" name="reg" id="reg" class= 'btn btn-outline-danger form-control mt-3'>Зарегестрироваться</button>
        </form>
      </div>
    </div>
  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$('#reg').click(function(){

  var name = $('#name').val();
  var login = $('#login').val();
  var email = $('#email').val();
  var pass = $('#pass').val();

  $.ajax({
    url:'ajax/regi.php',
    type:'POST',
    cache:false,
    data:{'name':name, 'login':login, 'email':email, 'pass':pass},
    dataType:'html',
    success:function(data){
      if(data=='Success'){
        $('#reg').text('Готово');
        $('#error').hide();
      } else {
        $('#reg').text('Неудача');
        $('#error').text(data);
        $('#error').show();
      }
    }
  });

});


</script>


</body>
