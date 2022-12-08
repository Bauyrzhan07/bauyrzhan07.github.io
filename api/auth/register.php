<?php 
    include "../../config/db.php";
    include "../../services/validate_registration.php";

    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $is_courier = $_POST['is_courier'] == 'on' ? 1 : 0;
    $result = mysqli_query($con, "INSERT INTO users(first_name, last_name, phone, email, password, has_discount, discount, is_courier)
                                   VALUES('$first_name', '$last_name', '$phone', '$email', '$password', TRUE, 20, $is_courier);");
    session_start();
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header("Location: ../../index.php");
?>