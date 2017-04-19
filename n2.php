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
    <form action="n2.php" method="get">
        <input type="text" name="number" />
    </form>
        <?php
            $sum=0;
            $l=1;
            for ( $i=1; $i<= $_GET['number'];$i+=2){
                $sum+= ((float) $l) / ($i**$i);
                $l*=-1;
            }
            echo $sum;
        ?>

</div>
</body>
</html>