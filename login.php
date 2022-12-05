<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Вход</title>
</head>
<body>
    <?php  include "views/header.php"; ?>
    <main class="flex-col align">
        <img class="label" src="images/name.png">

        <form action="api/auth/signin.php" class="main" method="POST">

            <p style="margin-left:25px;">Войдите или создайте новый аккаунт Wolt</p>

            <fieldset class="google">
            <img class="icon" src="images/google.png">
            <a href="https://www.google.com/" style="color:black">Продолжить с Google</a>
            </fieldset>
            <fieldset class="apple">
            <img class="icon" src="images/apple.png">
            <a href="https://www.appleid.apple.com/" style="color:white">Продолжить через Apple</a>
            </fieldset>
            <fieldset  class="facebook">
            <img class="icon" src="images/facebook.png">
            <a href="https://www.facebook.com/" style="color:white">Продолжить с Facebook</a>
            </fieldset>

            <p class="or">————————или войдите через почту————————</p>
            <?php 
                include "utils/constants.php";
                if(isset($_GET['error'])) {
                    echo "<p style='color:red; margin-left:25px;'>" . $errors[$_GET['error']] . "</p>";
                }
            ?>
            <input class="mail" type="email" placeholder="Электронная почта" name="email">
            <input class="mail" type="password" placeholder="Пароль" name="password">
        
            <input class="button" type="submit" value="Далее">
        
            <p class="privacy">Пожалуйста, перейдите на страницу<a class="privacy" href="https://explore.wolt.com/ru/kaz/privacy?_gl=1*v7a1za*_ga*NTQ4NDUzNTMxLjE2NjU4MTMwMTA.*_ga_CP7Z2F7NFM*MTY2NTk4NjkzMi40LjEuMTY2NTk4NjkzMi42MC4wLjA.">Заявление Wolt о конфиденциальности</a>, чтобы узнать об обработке персональных данных в Wolt. Вы сможете ознакомиться с локальным Заявлением о конфиденциальности, связанным с вашим аккаунтом в Wolt, на следующем этапе регистрации – после указания вами страны и языковых предпочтений. Данный сайт защищён hCaptcha. На сайте работают <a class="privacy" href="https://www.hcaptcha.com/privacy">Политика Конфиденциальности</a> и <a class="privacy" href="https://www.hcaptcha.com/terms">Условия Пользования</a> hCaptcha.</p>
        </form>
        
    </main>
    <?php include "views/footer.php"; ?>
</body>
</html>