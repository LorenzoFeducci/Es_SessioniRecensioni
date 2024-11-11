<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td, th{
            border: solid black 2px;
        }

        table{
            border-collapse: collapse;
        }

    </style>
</head>
<body>

    <?php
        echo "<table>";
            echo "<tr>";
                echo "<th>Numero di Form</th>";
                echo "<th>Data</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $_SESSION["form"] . "</td>";
                echo "<td>" . $_SESSION["data"] . "</td>";
            echo "</tr>";
        echo "</table>";

        $somma = 0;
        $count = 0;

        echo "<h3>Recensioni</h3>";
        foreach($_SESSION["recensione"] as $k => $v){
            echo "<ul>";
                echo "<li>$v</li>";
                $somma = $somma + $v;
                $count++;
            echo "</ul>";
        }

        $media = $somma / $count;
        echo "<h3>$media</h3>";
    ?>

    <a href="./presentazione.html">risultati -> presentazione</a>
</body>
</html>