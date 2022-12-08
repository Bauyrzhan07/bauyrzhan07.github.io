<?php 
    include "../../config/db.php";
    include "../../services/validate_card.php";
    $products = json_decode($_POST['products'], true);
    $totalCost = json_decode($_POST['amount'], true);
    
    $get_couriers = mysqli_query($con, "SELECT * FROM users WHERE is_courier = 1");
    $couriers = mysqli_fetch_all($get_couriers, MYSQLI_ASSOC);
    $courier_id = $couriers[rand(0, count($couriers) - 1)]['id'];
    
    session_start();
    $user_id = $_SESSION['user_id'];

    $user = mysqli_query($con, "SELECT * FROM users WHERE id = $user_id");
    $user = mysqli_fetch_assoc($user);
    if($user['has_discount'])
        $totalCost = $totalCost - ($totalCost * $user['discount'] / 100);

    mysqli_query($con, "INSERT INTO orders (user_id, total_amount, courier_id, created_at)
                        VALUES($user_id, $totalCost, $courier_id, now());");
    $order_id = mysqli_insert_id($con);
    
    foreach($products as $product)
        mysqli_query($con, "INSERT INTO order_products(order_id, product_id, amount)
                            VALUES($order_id, ${product['id']}, ${product['inCart']});");

    $result = mysqli_query($con, "SELECT COUNT(*) as orders_count FROM orders
                                  WHERE user_id=$user_id;");
    
    $orders_count = mysqli_fetch_assoc($result)['orders_count'];
    if($orders_count % 5 == 0)
        mysqli_query($con, "UPDATE users SET has_discount=TRUE, discount=20
                            WHERE id = $user_id;");
    header("Location: ../../payment.php?order_id=$order_id");
?>