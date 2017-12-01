<?php

@include_once ("database.php");

// GET PRODUCTS HISTORY
$query = "SELECT * FROM `bakery_products_history` ORDER BY `date`";
$productHistory = db_query($query);



// GET PRODUCTS
$query = "SELECT * FROM `bakery_products`";
$products = db_query($query);

@include_once ("view/data-table.php");
