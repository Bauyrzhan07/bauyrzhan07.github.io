<?php
    session_start();
    function add_to_cart($product) {
        if($_SESSION['cart'] == null)
            $_SESSION['cart'] = [$product];
        else
            array_push($_SESSION['cart'], $product);
    }
    $product_id = $_GET['id'];
    include "../api/get_product.php";
    add_to_cart($product);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>