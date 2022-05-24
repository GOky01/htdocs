
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
<?php
if ($_COOKIE['login']==''):
 ?>
        <label for="login">Логін</label>
        <input type="text" name="login" id="login" class ='form-control' value="">
<br>
        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass" class ='form-control' value="">

        <div class="alert alert-danger form-control" id="error"> </div>

        <button type="button" name="auth" id="auth" class= 'btn btn-outline-success form-control mt-3'>Вхід</button>

<?php
else:
 ?>
 <h2><?= $_COOKIE['login']; ?></h2>
 <button type="button" name="exit" id="exit" class= 'btn btn-dark form-control mt-3'>Вихід</button>

 <?php
endif;
  ?>
        </form>
      </div>
    </div>
  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$('#exit').click(function(){


  $.ajax({
    url:'ajax/exit.php',
    type:'POST',
    cache:false,
    data:{},
    dataType:'html',
    success:function(data){
      document.location.reload(true);
    }
  });

});

$('#auth').click(function(){

  var login = $('#login').val();

  var pass = $('#pass').val();

  $.ajax({
    url:'ajax/authi.php',
    type:'POST',
    cache:false,
    data:{'login':login, 'pass':pass},
    dataType:'html',
    success:function(data){
      if(data=='Success'){
        $('#auth').text('Готово');
        $('#error').hide();
        document.location.reload(true);
      } else {
        $('#auth').text('Неудача');
        $('#error').text(data);
        $('#error').show();
      }
    }
  });

});




</script>


</body>
