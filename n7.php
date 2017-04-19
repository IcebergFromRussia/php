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
    <form action="n7.php" method="get">
        <input type="text" name="word1" />
        <input type="text" name="word2" />
        <input type="submit"/>
    </form>
    <?php

    if (strlen($_GET["word1"])>strlen($_GET["word2"])){
        echo "<div>первое слово длиннее </div>";
    }else{
        echo "<div>первое слово не длиннее</div>";
    }
    ?>

</div>
</body>
</html>