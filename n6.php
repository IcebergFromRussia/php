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
    <form action="n6.php" method="get">
        <input type="text" name="word" />
    </form>
    <?php
        $word = $_GET['word'];
        $count = count($word);
        $bool = true;
        for ($i; $i < ($count / 2 + $count % 2); $i++)
        {
            if(substr($word,$i,1)!==substr($word,$count - $i,1)){
                $bool = false;
                break;
            }
        }
        if ($bool){
            echo "<div>полиндром</div>";
        }else{
            echo "<div>не полиндром</div>";
        }
    ?>

</div>
</body>
</html>