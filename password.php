<?php
require_once './functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: black;
            color : white;
        }
    </style>
</head>
<body>
    <h1>Generated Password</h1>

    <div class="container">
        <h2>
            <?php
            echo "La tua password e' : " .$generatedPassword ;
            ?>
        </h2>
    </div>

</body>
</html>