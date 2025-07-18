<?php

// Set di caratteri per la generazione della password (lettere, numeri e simboli)
$charactersLength = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';

function generatePassword($length) {
    global $charactersLength;

    $password = '';

    // Ciclo per generare ogni carattere della password
    for ($i = 0; $i < $length; $i++) {
        // Seleziona un indice casuale dal set di caratteri
        $randomIndex = rand(0, strlen($charactersLength) - 1);
        // Aggiunge il carattere selezionato alla password
        $password .= $charactersLength[$randomIndex];
    }

    return $password;
}

// Ottiene la lunghezza richiesta dal parametro GET
$length = (int)$_GET['length'];
$generatedPassword = '';
$error = '';

// Validazione della lunghezza e generazione della password
if ($length < 1) {
    $error = 'La lunghezza deve essere almeno 1 carattere.';
} elseif ($length > 100) {
    $error = 'La lunghezza non può superare i 100 caratteri.';
} else {
    // Genera la password se la lunghezza è valida
    $generatedPassword = generatePassword($length);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>

<form method="GET" action="">
    <h1> Grande generatore di password</h1>
    <br>

    <div class="container">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Genera Password</label>
    
            <input type="text" class="form-control border-dark" id="exampleInputPassword1"
    
            value="<?php echo $generatedPassword; ?>">
    
        </div>
    
        <div class="form-group">
    
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
        <button type="submit" class="btn btn-primary">
        Genera
        </button>
    </form>
    </div>


</body>
</html>
