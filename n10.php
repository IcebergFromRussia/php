<html>
<head>
    <style>
        .table{
            width: 600px;
            background-color: rgba(35, 106, 188, 0.26);
            margin: auto;
            padding: 20px;
        }
        .list{
            width: 300px;
        }
        .display{
            width: 300px;
            background-color: white;
        }
        td{
            width: 28px;
        }
    </style>
</head>
<body>
<div class="table">
    <a href="home.php"> <- домой </a>
    <br>

    <?php

        if($_SERVER['REQUEST_METHOD']==='GET') {
           // echo $_SERVER['REQUEST_METHOD'];
    ?>
            <form action="n10.php" method="Post">
                <p><b>Юридический или физический заказчик</b></p>
                <p><input name="radio" type="radio" value="uri"> Юридический</p>
                <p><input name="radio" type="radio" value="phis"> Физический</p>
                <input style="visibility: hidden" type="text" name="n12" value="1">
                <p><input type="submit" value="Выбрать"></p>
            </form>
    <?php
        }else {
            if ($_POST["n12"] == "1") {

    ?>
                <form action="n10.php" method="post">
                    <p><b>Количество товара</b></p>
                    <p><input name="cola" type="text" > Кола</p>
                    <p><input name="chocolat" type="text" > Шоколад</p>
                    <input style="visibility: hidden" type="text" name="n12" value="2">
                    <p><input type="submit" value="Выбрать"></p>
                    <input style="visibility: hidden;" type="text" name="val" value="<?php
                    if ($_POST['radio'] == "uri") {
                        echo "Заказчик юридического типа.";
                    }
                    else{
                        echo "Заказчик физического типа.";
                    }
                    ?>">
                </form>
     <?php
            }else{
                if($_POST["n12"] == "2") {
    ?>
                    <form action="n10.php" method="post">
                        <p><b>Место доставки</b></p>
                        <p><input name="adress" type="text"> Адрес</p>
                        <input style="visibility: hidden" type="text" name="n12" value="3">
                        <p><input type="submit" value="Выбрать"></p>
                        <input style="visibility: hidden" type="text" name="val" value="<?php
                        echo $_POST['val'] . ("колы ") . $_POST['cola'] . " штук, шоколада " . $_POST['chocolat'] . " штук, ваш заказ будет стоить " . ($_POST['cola'] * 100 + $_POST['chocolat'] * 12) . "рублей.";
                        ?>">
                    </form>


    <?php
                }
                else{
                    echo $_POST['val']." Заказ придут на адрес".$_POST['adress'];
                }
            }
        }
    ?>

</div>
</body>
</html>

