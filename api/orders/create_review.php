<?php
    include "../../config/db.php";
    if(isset($_POST['rate']) && isset($_POST['comment'])) {
        $rate = $_POST['rate'];
        $comment = $_POST['comment'];
        session_start();
        $result = mysqli_query($con, "INSERT INTO reviews (user_id, rate, comment) 
                                       VALUES (${_SESSION['user_id']}, '$rate', '$comment')");
    }
    header("Location: ../../index.php");
?>