<?php

include '../includes/db.php';

if(isset($_POST['submit'])){

    $collection = $db->products;

    $collection->insertOne([

        'name' => $_POST['name'],
        'price' => $_POST['price']

    ]);

    echo "Product Added Successfully";

}

?>

<!DOCTYPE html>
<html>

<head>
   <title>Add Product</title>
</head>

<body>

<h1>Add Product</h1>

<form method="POST">

   <input type="text"
          name="name"
          placeholder="Product Name">

   <br><br>

   <input type="number"
          name="price"
          placeholder="Price">

   <br><br>

   <button type="submit"
           name="submit">

      Add Product

   </button>

</form>

</body>
</html>