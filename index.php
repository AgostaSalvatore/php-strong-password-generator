<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Generatore di Password</title>
    <style>
        body {
            background-color: black;
            color: white;
            padding: 20px;
        }
        .form-check-label, .form-check-input {
            background-color: transparent;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .btn-primary {
            background-color: #0d6efd;
        }
        h1 {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .character-options {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Generatore di Password Casuale</h1>
    
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    
    <form method="GET" action="./password.php">
        <div class="form-group">
            <label for="length" class="form-label">Lunghezza Password:</label>
            <input 
                type="number"
                id="length"
                name="length"
                min="1"
                max="100"
                class="form-control"
                value="<?php echo $length; ?>"
                required
            >
            <small class="form-text text-muted">Seleziona un valore tra 1 e 100</small>
        </div>
        
        <div class="character-options">
            <h5>Tipi di caratteri da includere:</h5>
            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="lowercase" 
                    id="lowercase" 
                    value="1" 
                    <?php echo (isset($_GET['lowercase']) && $_GET['lowercase'] == '1') ? 'checked' : ''; ?>
                >
                <label class="form-check-label" for="lowercase">
                    Lettere minuscole (a-z)
                </label>
            </div>
            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="uppercase" 
                    id="uppercase" 
                    value="1" 
                    <?php echo (isset($_GET['uppercase']) && $_GET['uppercase'] == '1') ? 'checked' : ''; ?>
                >
                <label class="form-check-label" for="uppercase">
                    Lettere maiuscole (A-Z)
                </label>
            </div>
            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="numbers" 
                    id="numbers" 
                    value="1" 
                    <?php echo (isset($_GET['numbers']) && $_GET['numbers'] == '1') ? 'checked' : ''; ?>
                >
                <label class="form-check-label" for="numbers">
                    Numeri (0-9)
                </label>
            </div>
            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="special" 
                    id="special" 
                    value="1" 
                    <?php echo (isset($_GET['special']) && $_GET['special'] == '1') ? 'checked' : ''; ?>
                >
                <label class="form-check-label" for="special">
                    Caratteri speciali (!@#$%^&*()_+-=[]{})
                </label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Genera Password</button>
    </form>
</div>

</body>
</html>
