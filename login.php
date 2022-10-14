<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if ($_POST["username"] === "jesper6969") {

        if ($_POST["password"] === "stadler") {
            echo "inloggning avklarad";
            session_start();
            $_SESSION["username"] = $_POST["username"];
            header("location: upload.html");
        } else {
            echo "inloggning misslyckades";
        }
    } else {
        echo ("inloggning misslyckades");
    }
    ?>
</body>

</html>