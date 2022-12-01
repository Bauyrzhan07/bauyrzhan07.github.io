<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/articles.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Ваша корзина</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <?php include "services/get_total_price.php"; ?>
    <div class="article flex-col" style="width: 60%;">
        <?php $items = $_SESSION['cart']?>
        <?php foreach($items as $item):?>
            <div class="inside">
                <div class="flex-row menu align" style="justify-content:space-between;">
                    <div class="flex-col">
                        <h3><?=$item['name']?></h3>
                        <p><?=$item['description']?></p>
                        <h4><?=$item['price']?></h4>    
                    </div>
                    <img class="insideimg" src="<?=$item['img_url']?>">
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php 
        $prices = get_total_price($items);
        $total_price = $prices[0];
        $discount_price = $prices[1];
        print_r($prices);
    ?>
    <div class="total-price"><?=$total_price?></div>
    <div class="end-price"><?=$discount_price?></div>
    <?php include "views/footer.php"; ?>
</body>
</html>