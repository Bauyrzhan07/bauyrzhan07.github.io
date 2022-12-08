<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Корзина покупок</title>
</head>
<?php 
    if(isset($_REQUEST['order_id']))
        echo "<body onload='displayRate();'>";
    else
        echo "<body>";
?>
    <?php include "views/header.php"; ?>
    
    <div id="formRate">
        <button class="closeOrder" onclick="closeOrder()"><ion-icon name="close-outline"></ion-icon></button>
        <h1>Ваш заказ принят</h1><br>
        <h2>Пожалуйста, оцените работу нашего сервиса и оставьте комментарий для его улучшения</h2><br>
        <form action="api/orders/create_review.php" method="POST" style="margin: 25px 0">
            <input type="text" name="comment">
            <div class="rate">
                <input type="radio" id="like" name="rate" value="like">
                <label for="like">
                    <ion-icon class="yes" name="thumbs-up-outline"></ion-icon>
                </label>
                <input type="radio" id="dislike" name="rate" value="dislike">
                <label for="dislike">
                    <ion-icon class="no" name="thumbs-down-outline"></ion-icon>
                </label>
                <input type="submit" value="Отправить отзыв!">
            </div>
        </form>
    </div>

    <nav class="endCost">
        <h1 class="paymentText">Проверка</h1>
        <?php 
            include "utils/constants.php";
            if(isset($_GET['error'])) {
                echo "<p style='color:red; margin-left:25px;'>" . $errors[$_GET['error']] . "</p>";
            }
        ?>
        <form class="paymentForm flex-col" style="gap: 5px" action="api/orders/create_order.php" method="POST">
            <h3>Оплата</h3>
            <input class="placeholder" placeholder="Введите номер карты" name="card_number"></input>
            <input class="placeholder" placeholder="Введите срок истечения карты" type="date" name="expiration_date"></input>
            <input class="placeholder" placeholder="Введите CCV код" name="ccv"></input>
            <div class="flex-row">
                <input type="radio" id="visa" name="card_type" value="Visa">
                <label for="#visa">Visa</label>
                <input type="radio" id="master_card" name="card_type" value="MasterCard">
                <label for="#master_card">MasterCard</label>
            </div>
            <input id="products" type="hidden" name="products" value="">
            <input id="amount" type="hidden" name="amount" value="">
            <div class="btn-container">
                <input class="btn btn-colored" type="submit" value="Оплатить заказ">
            </div>
        </form> 
    </nav> 
    
    <div class="allSelect">
        <h1 class="selectText">Выбранные предметы</h1>
    <div class="selected">
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="main.js"></script>
    <script src="payment.js"></script>
</body>
</html>