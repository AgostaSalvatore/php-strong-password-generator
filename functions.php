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