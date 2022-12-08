<?php 
    $response = 0;
    if(!isset($_POST['card_number'])
    || !isset($_POST['expiration_date'])
    || !isset($_POST['ccv'])
    || !isset($_POST['card_type'])) {
        $response = 1;
    } else {
        $card_number = $_POST['card_number'];
        $expiration_date = $_POST['expiration_date'];
        $ccv = $_POST['ccv'];
        $card_type = $_POST['card_type'];
    }
    if($response == 0) {
        if(($card_type == "Visa" && !preg_match('/^4\d{3}-?(\d{4}-?){3}$/', $card_number))
        || ($card_type == "MasterCard" && !preg_match('/^5\d{3}-?(\d{4}-?){3}$/', $card_number))) 
            $response = 9;
    }
    if($response != 0) {
        header("Location: ../../payment.php?error=" . $response);
        exit();
    }
?>