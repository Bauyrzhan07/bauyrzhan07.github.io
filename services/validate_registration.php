<?php
    function validate_password($password, $password_confirm) {
        if (strlen($password) < 8)
            return 2;
        if ($password != $password_confirm)
            return 3;
        return !preg_match("/^\S*(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password) ? 4 : 0;
    }

    function validate_phone($phone) {
        return !preg_match("/^\+77(\d{9})$/", $phone) ? 5 : 0;
    }

    $response = 0;
    if ($_POST['email'] == "" || $_POST['first_name'] == "" || $_POST['last_name'] == "" 
        || $_POST['phone'] == "" || $_POST['password'] == "" || $_POST['password_confirm'] == "") {
        $response = 1;
    }
    if ($response == 0)
        $response = validate_password($_POST['password'], $_POST['password_confirm']);
    if ($response == 0)
        $response = validate_phone($_POST['phone']);
    if ($response == 0) {
        $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $_POST['email'] . "';");
        if (mysqli_num_rows($result) > 0)
            $response = 6;
    }
    if ($response == 0) {
        $result = mysqli_query($con, "SELECT * FROM users WHERE phone = '" . $_POST['phone'] . "';");
        if (mysqli_num_rows($result) > 0)
            $response = 7;
    }
    if($response != 0) {
        header("Location: ../../registration.php?error=" . $response);
        exit();
    }
?>