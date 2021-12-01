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

    <p>
       <a href="create.php"> <button class="btn btn-success"> Create Product</button> </a>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>
            <?php  foreach($products as $i=> $product):     ?>
                <tr>
                <th scope="row"><?php  echo $i + 1 ?></th>
                <td>    </td>
                <td><?php  echo $product['title']  ?></td>
                <td><?php  echo $product['price']  ?></td>
                <td><?php  echo $product['create_date']  ?></td>
                <td><?php  echo $product['title']  ?></td>
                <td>    
                    <button type="button" class="btn btn-sm btn-outline-primary"> Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-danger"> Delete</button>

                </td>





               
            </tr>

         <?php   endforeach;  ?>
      
        </tbody>
    </table>


</body>

</html>