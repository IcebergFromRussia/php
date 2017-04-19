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
        .pascal_Elem{
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="table">
    <a href="home.php"> <- домой </a>
    <br>
    <form action="n4.php" method="Post">
        <input type="text" name="number" />
    </form>

        <?php
            $a1 = array([1]);
            echo "<div class='pascal_Elem'>1</div>";
            for ( $i=0; $i< $_POST['number']-1;$i++){
                echo "<div class='pascal_Elem'>";
                $a2 = array();
                array_push($a2, 1);
                echo "1 ";
                for ($j=0 ; $j < (count($a1)-1); $j++)
                {
                    array_push($a2, $a1[$j]+$a1[$j+1]);
                    echo ($a1[$j]+$a1[$j+1]).' ';
                }
                array_push($a2, 1);
                echo "1";
                echo "</div>";
                $a1=$a2;
            }
        ?>
</div>
</body>
</html>