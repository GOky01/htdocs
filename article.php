
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

<label for="nazva">Название статьи</label>
<input type="text" name="nazva" class = 'form-control' value="">

<label for="description">Описание</label>
<textarea name="description" rows="8" cols="80" class='form-control'></textarea>


        <div class="alert alert-danger form-control" id="error"> </div>

        <button type="button" name="add" id="add" class= 'btn btn-dark form-control mt-3'>Добавити</button>
        </form>
      </div>
    </div>
  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$('#add').click(function(){

  var nazva = $('#nazva').val();
  var description = $('#description').val();


  $.ajax({
    url:'ajax/article.php',
    type:'POST',
    cache:false,
    data:{'nazva':nazva, 'description':description},
    dataType:'html',
    success:function(data){
      if(data=='Success'){
        $('#add').text('Готово');
        $('#error').hide();
      } else {
        $('#add').text('Неудача');
        $('#error').text(data);
        $('#error').show();
      }
    }
  });

});


</script>


</body>
