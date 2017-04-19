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
    <form action="n5.php" method="get">
        <input type="text" name="number" />
    </form>
    <?php
    $n = $_GET['number'];
    for ( $i=1; $i<= sqrt ($n);$i++){
        if($n % $i == 0){
            echo "<div>".($i)."</div>";
            if(($n/$i)!=$i)
            {
                echo "<div>".($n/$i)."</div>";
            }
        }
    }
    ?>

</div>
</body>
</html>