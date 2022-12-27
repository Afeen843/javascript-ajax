<?php


include_once('../database/products.php');


$product = new products();
$product->addproduct('products', ['menu_key' => $_POST['menu_key'], 'title' => $_POST['title'], 'url' => $_POST['url'], 'status' => $_POST['status']]);
$product->product_to_categories($_POST['categories']);





header("location:$_SERVER[HTTP_REFERER]");
exit();
