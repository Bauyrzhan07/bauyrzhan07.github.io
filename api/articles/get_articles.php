<?php
    include 'config/db.php';
    $result = mysqli_query($con, "SELECT * FROM article");
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>