<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $data = $_POST["data"];
        $recensione = $_POST["numero"];

        $_SESSION["data"] = $data;

        if(!isset($_SESSION["recensione"])){
            $_SESSION["recensione"] = array($recensione);
        }else{
            array_push($_SESSION["recensione"], $recensione);
        }
        

        if(!isset($_SESSION["form"])){
            $_SESSION["form"] = 1;
        }else{
            $_SESSION["form"]++;
        }
    ?>

    <a href="./presentazione.html">script -> presentazione</a>
</body>
</html>