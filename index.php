<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($product);
// echo '</pre>'



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
    <h1>PRODUCTS CRUD</h1>

    <p>
        <a href="create.php"> <button class="btn btn-success"> Create Product</button> </a>
    </p>

    <form action="">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="search for products" name="search">
  <button class="btn btn-outline-secondary" type="submit">search</button>
</div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>



            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $i => $product) :     ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td> <img src="<?php echo $product['image'] ?>" alt="" class="thumb-img"> </td>
                    <td><?php echo $product['title']  ?></td>
                    <td><?php echo $product['price']  ?></td>
                    <td><?php echo $product['create_date']  ?></td>
                    <td><?php echo $product['description']  ?></td>

                    <!-- <td>  ?></td> -->
                    <td>
                        <a href="update.php?id=<?php echo $product['id']?>"  class="btn btn-sm fc btn-outline-primary"> Edit </a>

                        <form action="delete.php" method="post" style="display: inline-block;">
                            <input type="hidden" name="id" value="<?php echo $product['id']?>">
                            <button type="submit" class="btn btn-sm btn-outline-danger"> Delete</button>
                        </form>



                    </td>






                </tr>

            <?php endforeach;  ?>

        </tbody>
    </table>


</body>

</html>