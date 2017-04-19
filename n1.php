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
    <form action="n1.php" method="get">
        <input type="text" name="number" />
    </form>
    <table style="margin: auto" border="1">
        <caption>Таблица размеров обуви</caption>
        <?php
            for ( $i=0; $i< $_GET['number'];$i++){
                echo "<tr>";
                for ( $j=0; $j< $_GET['number'];$j++){
                    echo "<td>".($i*$j)."</td>";
                }
                echo "</tr>";
        } ?>
    </table>
</div>
</body>
</html>