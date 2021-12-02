<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//saving the inputs in the database
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');
// $title = $_POST['title'];
$statement =$pdo->prepare("INSERT INTO products (title,  image, description, price, create_date)
            VALUES (:title, :image, :description, :price, :date)");

$statement->bindValue(':title', $title);
$statement->bindValue(':image', $image);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', $date);
$statement->execute();



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

    <form action="create.php" method="post">
  
  <div class="mb-3">
    <label> Product Title </label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label> Product Description </label>
    <textarea name="description" class="form-control" > </textarea>
  </div>
  <div class="mb-3">
    <label> Product Price </label>
    <input type="number" step=".01" class="form-control" name="price" >
  </div>
  <div class="mb-3">
    <label> Product Image </label> <br>
    <input type="file"  name="image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

   

</body>

</html>