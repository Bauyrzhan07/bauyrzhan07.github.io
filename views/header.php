<?php session_start(); ?>
<header class="flex-row">
    <a href="discovery.php">
        <img class="logo" src="images/wolt-logo.png" >
    </a>
    <div class="search-box">
        <form action="all.php">
            <input placeholder="Поиск в Wolt..." name="search">
        </form>
        <svg viewBox="0 0 24 24" aria-hidden="true" class="SearchInput__StyledMagnifyingGlassIcon-sc-1web0kr-0 hcqzDT"><path d="M23.384 21.6191L16.855 15.0901C19.8122 11.2028 19.2517 5.689 15.5728 2.47626C11.894 -0.736477 6.35493 -0.549369 2.90126 2.90431C-0.552421 6.35798 -0.739529 11.897 2.47321 15.5759C5.68595 19.2548 11.1997 19.8152 15.087 16.8581L21.616 23.3871C22.1078 23.8667 22.8923 23.8667 23.384 23.3871C23.8718 22.8987 23.8718 22.1075 23.384 21.6191ZM2.75002 9.50007C2.75002 5.77215 5.7721 2.75007 9.50002 2.75007C13.2279 2.75007 16.25 5.77215 16.25 9.50007C16.25 13.228 13.2279 16.2501 9.50002 16.2501C5.77393 16.2457 2.75443 13.2262 2.75002 9.50007Z"></path></svg>
    </div>
    <?php if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == NULL) {
            echo "
                <div class='btn-container flex-row'>
                <button class='btn btn-login'><a href='login.php'>${_SESSION['user_id']}Войти</a></button>
                <button class='btn btn-colored'><a href='registration.php'>Зарегистрироваться</a></button>
                </div>  
            ";
        } else {
            echo "
                <div class='btn-container flex-row'>
                    <button class='btn btn-colored'><a href='order_history.php'>История заказов</a></button>
                    <button class='btn btn-colored'><a href='cart.php'>Корзина</a></button>
                </div>
            ";
        }
    ?>
</header>