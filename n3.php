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
    <div class="list">
        <a href="home.php"> <- домой </a>
        <br>
        <form action="n3.php" method="get">
            <input type="text" name="login" value="login" />
            <input type="text" name="password" value="password" />
            <input type="submit">
        </form>
    </div>
    <div class="display">
        <ul>
        <?php
        if (($handle = fopen("file.csv", "w+")) !== FALSE) {
            $bool=true;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if($_Get['login']===$data[0]){
                    $bool=false;
                }
                echo "<li>".($_Get['login'])."</li>";
            }

            if($bool){
                fputcsv($fp, array($_GET['login'], $_GET['password']));
            }


            fclose($fp);
        }
        ?>
        </ul>
    </div>

</div>
</body>
</html>