<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/common.css">
    <title>Wolt: Доставка еды и товаров - Казахстан</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <main>
        <div class="poster flex-row align">
            <div class="poster-content flex-col">
                <div class="questions">
                    <p>Устали после вечеринки?</p>
                </div>
                <p>Адрес доставки</p>
                <div class="search-form flex-row">
                    <form class="flex-row">
                        <input id="address-picker" placeholder="Выбрать адрес доставки">
                        <button class="btn btn-colored">Поиск</button>
                    </form>
                </div>
                <a href="#">или найдите популярные рестораны и магазины в городе Алматы</a>
            </div>
            <img src="images/poster.jpg" alt="poster">
        </div>
        <div class="content-list flex-col align">
            <div class="content-item align">
                <div class="item-head flex-row align">
                    <h1>Откройте города, где доступен Wolt</h1>
                    <p>Казахстан</p>    
                </div>
                <div class="item-content flex-row">
                    <div>
                        <p><img class="flag-icon" src="images/kz.svg" alt="kz"> Казахстан</p>
                        <a href="#">Показать все страны</a>
                    </div>
                    <div class="list-container flex-row">
                        <a href="#">Актау</a>
                        <a href="#">Актобе</a>
                        <a href="#">Алматы</a>
                        <a href="#">Атырау</a>
                        <a href="#">Караганда</a>
                        <a href="#">Костанай</a>
                        <a href="#">Астана</a>
                        <a href="#">Павлодар</a>
                        <a href="#">Усть-Каменогорск</a>
                        <a href="#">Шымкент</a>
                    </div>
                </div>
            </div>
            <div class="content-item flex-row bordered">
                <div class="content-half flex-col">
                    <h4>Что такое Wolt?</h4>
                    <h1>Доставим</h1>
                    <p>С Wolt невероятно легко найти и получить что угодно. Доставим вам – быстро, надёжно и недорого.</p>
                </div>
                <img width="600px" src="https://cdn.wolt.com/frontpage-assets/video-cover-image-4.jpg" alt="page">
            </div>
            <div class="content-item article">
                <p>А вы знали?</p>
                <p>Когда вы заказываете суши с доставкой – вы упрощаете не только свою жизнь. Заказывая с Wolt, вы помогаете тысячам владельцев ресторанов и магазинов, а также курьерам, работать и зарабатывать.</p>
            </div>
            <div class="poster wolt-module flex-row">
                <div class="poster-half flex-col">
                    <h1>Дорогая, мы не готовим сегодня вечером.</h1>
                    <p>Загрузите приложение Wolt, получившее награду Apple, и выбирайте среди 40,000 ресторанов и сотен магазинов в 20+ странах мира. Находите и заказывайте что угодно – а наши курьеры-партнёры доставят.</p>
                    <a href="#">
                        <img class="app_link" src="https://cdn.wolt.com/app-store-badges/Download_on_the_App_Store_Badge_RU_RGB_blk_100317.svg" alt="download app store">
                    </a>
                    <a href="#">
                        <img class="app_link" src="https://cdn.wolt.com/app-store-badges/google-play-badge_ru.png" alt="download google">
                    </a>
                </div>
                <img height="750px" src="images/front-cells.png" alt="poster">
            </div>
            <div class="content-item flex-col">
                <h1>Хотите чего-то большего?</h1>
                <div class="list-conainer flex-row">
                    <div class="offer-card flex-col">
                        <img src="https://cdn.wolt.com/frontpage-assets/courier-card-image.jpg" alt="">
                        <h3>Станьте курьером-партнёром и начните зарабатывать</h3>
                        <a href="#">Подать заявку</a>
                    </div>
                    <div class="offer-card flex-col">
                        <img src="https://cdn.wolt.com/frontpage-assets/restaurant-card-image.jpg" alt="">
                        <h3>Получите больше клиентов как ресторан-партнер</h3>
                        <a href="#">Подать заявку</a>
                    </div>
                    <div class="offer-card flex-col">
                        <img src="https://cdn.wolt.com/frontpage-assets/jobs-card-image.jpg" alt="">
                        <h3>Начни с чистого листа — получи работу в Wolt</h3>
                        <a href="#">Подать заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex-col align">
        <div class="flex-row">
            <div class="flex-col">
                <img class="logo" src="images/wolt.png" alt="wolt logo">
                <a href="#">
                    <img class="app_link" src="https://cdn.wolt.com/app-store-badges/Download_on_the_App_Store_Badge_RU_RGB_blk_100317.svg" alt="download app store">
                </a>
                <a href="#">
                    <img class="app_link" src="https://cdn.wolt.com/app-store-badges/google-play-badge_ru.png" alt="download google">
                </a>
            </div>
            <div id="footer-nav" class="flex-row">
                <div class="flex-col">
                    <p>Давайте сделаем это вместе</p>
                    <a href="#">Курьерам</a>
                    <a href="#">Для ресторанов</a>
                    <a href="#">Для магазинов</a>
                    <a href="#">Для компаний</a>
                    <a href="#">Wolt Drive</a>            
                </div>
                <div class="flex-col">
                    <p>Company</p>
                    <a href="#">О нас</a>
                    <a href="#">Вакансии</a>
                    <a href="#">Ответственность</a>
                    <a href="#">Безопасность</a>
                    <a href="#">Инвесторам</a>            
                </div>
                <div class="flex-col">
                    <p>Useful links</p>
                    <a href="#">Поддержка</a>
                    <a href="#">Медиа</a>
                    <a href="#">Контакты</a>           
                </div>
                <div class="flex-col">
                    <p>Follow us</p>
                    <a href="#">Блог Wolt</a>
                    <a href="#">Блог инженеров</a>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Linkedin</a>            
                </div>
            </div>
        </div>
    </footer>
</body>
</html>