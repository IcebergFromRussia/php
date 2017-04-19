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
        $n = rand(5,20);
        $arr = array();
        echo "<div>";
        for ($i = 0; $i<$n; $i++){
            array_push($arr,rand(0,100));
            echo $arr[$i]." ";
        }
        echo "</div>";


        for($i=0; $i<count($arr); $i++){
            for($j=$i+1; $j<count($arr); $j++){
                if($arr[$i]>$arr[$j]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }

        for ($i = 0; $i<count($arr); $i++){
            echo $arr[$i]." ";
        }
    ?>

</div>
</body>
</html>

