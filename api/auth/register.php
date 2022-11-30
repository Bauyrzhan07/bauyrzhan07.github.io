<?php 
    include "../../config/db.php";
    include "../../services/validate_registration.php";

    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "INSERT INTO users(first_name, last_name, phone, email, password)
                                   VALUES('$first_name', '$last_name', '$phone', '$email', '$password');");
    session_start();
    $_SESSION['user_id'] = mysqli_insert_id($con);
    header("Location: ../../index.php");
?>