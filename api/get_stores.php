<?php
    include "config/db.php";

    $result = mysqli_query($con, "SELECT * FROM restaurants WHERE type='STORE';");
    $stores = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>