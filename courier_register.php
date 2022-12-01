<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/styles.css">
    <style>
        .logotip{
            width:100%;
            padding-bottom:50px;
        }

        img{
            width:100px;
            margin-left:40%;
        }

        .main{
            text-align: center;
            
        }

        .question{
            text-align: left;
            position: absolute;
            width:250px;
            
        }   

        .separate{
            padding: 20px;
        }

        section{
            background-color: #b3e8fe;
        }

        .button{
            border-radius:10px;
            width:200px;
            margin:50px;
            padding:10px;
            background-color: #009ee1;
            border-color: #009ee1;
            color:white;
            font-size: 18px;
            font-weight: bold;
        }

        .button:hover{
            background-color:#72c5e9;
        }

        .data{
            margin:60px;
        }

        .form{
            margin-left:200px;
            margin-right: 200px;
            background-color: white;

        }




    </style>
</head>
<body>
    <?php include "views/header.php"; ?>
    <p class="main">Готовы стать курьером - партнером Wolt и начать работу? Зарегистрируйтесь и подайте заявку в несколько кликов.</p>
    
    <section>
        <nav>
        <div class="form">
            <form class="main">

                <div class="separate">
                <p class="question">Тип траснпортного средства</p>
                <input name="transport" type="radio" value="car">
                <label for="car">Машина</label><br>
                <input name="transport" type="radio" value="motorcycle">
                <label for="motorcycle">Мотоцикл</label><br>
                <input name="transport" type="radio" value="bicycle">
                <label for="bicycle">Автобус</label><br>
                </div>
                

                <div class="separate">
                    <p class="question">Сколько часов в неделю вы готовы работать?</p>
                    <input name="time" type="radio" value="first">
                    <label for="first">0-15 часов</label><br>
                    <input name="time" type="radio" value="second">
                    <label for="second">15-30 часов</label><br>
                    <input name="time" type="radio" value="third">
                    <label for="third">30-40 часов</label><br>
                    <input name="time" type="radio" value="fourth">
                    <label for="fourth">40+ часов</label><br>
                </div>

                <div class="separate">
                    <p class="question">В какой день вы хотели бы работать</p>
                    <input name="day" type="radio" value="on">
                    <label for="on">Будни</label><br>
                    <input name="day" type="radio" value="off">
                    <label for="off">Выходные</label><br>
                    <input name="day" type="radio" value="nomatter">
                    <label for="nomatter">Без разницы</label><br>
                </div>

                <div class="separate">
                    <p class="question">Есть ли у вас опыт работы курьером в прошлом?</p>
                    <input name="exper" type="radio" value="Yes">
                    <label for="Yes">Да</label><br>
                    <input name="exper" type="radio" value="No">
                    <label for="No">Нет</label><br>

                </div>

                <p class="data">Ваши личные данные будут заполнены по данным из вашего кабинета</p>

                <input class="button" type="submit" value="Далее">

            </form>
        </div>
        </nav>
    </section>
    <?php include "views/footer.php"; ?>
</body>
</html>