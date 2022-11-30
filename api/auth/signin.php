<?php 
    include "../../config/db.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password';");
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['user_id'] = mysqli_fetch_assoc($result)['id'];
        header("Location: ../../index.php");
    } else {
        header("Location: ../../login.php?error=8");
    }
?>