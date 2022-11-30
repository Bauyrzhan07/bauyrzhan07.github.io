<?php
    include "config/db.php";
    $article_id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM article WHERE id = $article_id");
    $article = mysqli_fetch_assoc($result);
?>