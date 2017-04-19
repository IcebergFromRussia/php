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
    $arr = array(63, 39, 63, 65, 83, 34, 23);
    echo "<div>";
    for ($i = 0; $i<7; $i++){
        echo $arr[$i]." ";
    }
    echo "</div>";
    $search = array(63,65,83);
    $save_position = 0;
    $l=0;
    $end = false;
    for($i=0; $i<count($arr); $i++){
        if($arr[$i]===$search[$l]){
            if($l==0){
                $save_position=$i;
            }
            $l++;
            if($l==count($search)){
                $end = true;
                break;
            }
        }
        else{
            if($l>0){
                $i=$save_position;
                $l=0;
            }
        }
    }
    echo "<div>";
    if($end){
        echo "вхождение найдено <br>";
        echo $save_position;
    }
    else
    {
        echo "вхождение не найдено <br>";
    }
    echo "</div>";
    ?>

</div>
</body>
</html>



