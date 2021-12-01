<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>PRODUCTS CRUD</title>
</head>

<body>
    <h1>CREATE NEW PRODUCTS</h1>

    <form>
  
  <div class="mb-3">
    <label> Product Title </label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label> Product Description </label>
    <textarea class="form-control" > </textarea>
  </div>
  <div class="mb-3">
    <label> Product Price </label>
    <input type="number" step=".01" class="form-control" >
  </div>
  <div class="mb-3">
    <label> Product Image </label> <br>
    <input type="file" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

   

</body>

</html>