<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Shopping Cart</title>
</head>
<body>
    <?php  include "views/header.php"; ?>

    <div class="products-container">
        <div class="products">

        </div>
        <div class="totalContainer">
            <p>Общая цена: 0 KZT</p>
        </div>
    </div>
    <div class="overlayAll"></div>
    <div id="formOrder">
        <h1 class="orderText">Ваш заказ</h1>
        <div class="orderItems">

        </div>
    </div>


    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>