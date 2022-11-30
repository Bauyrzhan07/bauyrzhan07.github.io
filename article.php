<?php include "api/articles/get_article.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/articles.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title><?=$article['title']?></title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <article class="head">
        <article class="part2">
            <h1 class="mainsen"><?=$article['title']?></h1>
        </article>

        <img class="mainphoto" src="<?=$article['main_poster_url']?>">
    </article>
    <div class="flex-col align">
        <article class="date">
            <p>
                Опубликовано:<?=$article['publish_date']?>.
            </p>
        </article>
        <div class="links">
            <img class="icon" src="https://discovery-cdn.wolt.com/cities/almaty/sections/74d454fe-331f-11ec-9429-8a8234787ddd_logowolt_1.png">
            <p class="kazakhstan">Wolt Kazakhstan</p>
        </div>
    
        <?=$article['text']?>
        
    </div>
    <?php include "views/footer.php"; ?>
</body>
</html>