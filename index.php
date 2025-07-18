<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Password</title>
    <style>
        *{
            background-color: black;
            color : white;
        }
    </style>
</head>
<body>

<form method="GET" action="./password.php">
    <h1> Random Password Generator</h1>
    <br>

    <div class="container">
        
    
        <div class="form-group">

            <label for="lenght">
                Password Lenght: 
            </label>
            <input 
                type="number"
                id="length"
                name="length"
                min="1"
                max="100"
                value=<?php echo $length; ?>
                required
            >
        </div>
        <button type="submit" class="btn btn-primary mt-2">
        Genera
        </button>
    </form>
    </div>


</body>
</html>
