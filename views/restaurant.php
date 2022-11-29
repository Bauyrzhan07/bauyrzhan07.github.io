<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/restaurant-style.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/common.css">
    <title>McDonald's на Шевченко</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <?php include "views/get_restaurant"; ?>
    <div class="header">
        <img class="main" src="https://imageproxy.wolt.com/venue/5d7bcb952aed085d3eda6451/e32128f6-3155-11ea-97fc-0a58646fa85d_4-3-mccomboXXL_BigTasty.jpg?w=1920">
    </div>
    <main class="flex-col align">
        <div class="main-content flex-row justify">
    
            <div class="nav">
                <?php
                    foreach($categories as $category)
                        echo '<a class="order" href="$category">$category</a><br><br>';
                >
                // <a class="order" href="#novinka">Новинки</a><br><br>
                // <a class="order" href="#McCombo">McCombo</a><br><br>
                // <a class="order" href="#meal">Говяжьи Сандвичи</a><br><br>
                // <a class="order" href="#dessert">Десерты</a><br><br>
                // <a class="order" href="#hot">Горячие напитки</a><br><br>
                
            </div>

            <div class="article">
                foreach ($categories as $category) {
                    echo '<h1 id="$category">$category</h1>';
                    foreach($)
                    echo '<a class="inside" href="#">
                            <div class="menu">

                    '
                }
            </div>

            <div class='info'>
                <h2>Информация о ресторане</h2>
        
                <h4>Адрес</h4>

                <p><?=$address></p>
                <p><?=$zip_code> <?=$city></p>
                // <p>Shevchenko 85a</p>
                // <p>050000 Almaty</p>
                // <p>На карте</p><br>
        
                <p>При наличии аллергии или диетических ограничений, сообщите об этом ресторану. Он предоставит подробную информацию о блюдах.</p>
        
            </div>
       </div>
    </main>
    <?php include "views/footer.php"; ?>
</body>
</html>