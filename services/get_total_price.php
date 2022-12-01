<?php 
    function get_total_price($items) {
        $result = 0;
        foreach($items as $item)
            $result += $item['price'];
        $discount_result = $result;
        include "config/db.php";
        $query = mysqli_query($con, "SELECT has_discount, discount FROM users WHERE id=${_SESSION['user_id']}");
        $user = mysqli_fetch_assoc($query);
        if ($user['has_discount'])
            $discount_result *= (1 - ($user['discount'] / 100));
        return [$result, $discount_result];
    }
?>