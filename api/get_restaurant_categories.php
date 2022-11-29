<?php
    include "config/db.php";
    
    $result = mysqli_query($con, "SELECT * FROM categories WHERE type='RESTAURANT';");
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>