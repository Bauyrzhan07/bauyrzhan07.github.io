<?php include "api/get_restaurant.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/restaurant-style.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/common.css">
    <title><?=$restaurant['name']?></title>
</head>
<body>
    <?php include "views/header.php"; ?>
    <div class="header">
        <img class="main" src="<?=$restaurant['big_img_url']?>">
    </div>
    <main class="flex-col align">
        <div class="main-content flex-row justify">
    
            <div class="nav">
                <?php foreach($sub_categories as $category): ?>
                    <a class='order' href="#<?=$category['name']?>"><?=$category['name']?></a><br><br>
                <?php endforeach;?>
            </div>

            <div class="article">
                <?php foreach($sub_categories as $category): ?>
                    <h2 id="<?=$category['name']?>"><?=$category['name']?></h2>
                    <?php include "api/get_products.php"; ?>
                    <?php foreach($products as $product): ?>
                        <a class="inside" href="#">
                            <div class="menu">
                                <img class="insideimg" src="<?=$product['img_url']?>">
                                <h3><?=$product['name']?></h3>
                                <p><?=$product['description']?></p>
                                <h4><?=$product['price']?></h4>
                            </div>
                        </a>
                    <?php endforeach;?>
                <?php endforeach;?>
            </div>

            <div class='info'>
                <h2>Информация о ресторане</h2>
        
                <h4>Адрес</h4>

                <p><?=$restaurant['address']?></p>
                <p><?=$restaurant['zip_code']?> <?=$restaurant['city']?></p>
                <p>При наличии аллергии или диетических ограничений, сообщите об этом ресторану. Он предоставит подробную информацию о блюдах.</p>
        
            </div>
       </div>
    </main>
    <?php include "views/footer.php"; ?>
</body>
</html>