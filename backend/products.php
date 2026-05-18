<?php

require 'db.php';

$products = $db->products->find();

foreach($products as $product){

   echo $product['name'];

   echo "<br>";

}
?>