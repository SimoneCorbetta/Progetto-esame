<!-- fare la form dove inserire i dati dell'utente -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione per madare il buono</title>
</head>
<body>
    <h4>pagamento effettuato con successo!</h4>
    <?php
    $conn = new mysqli("localhost", "root", "", "paninoteca");
    
    $result = $conn->query("select n_tavolo from tavolo;");
    
    while ($riga_tavolo = $result->fetch_assoc()) {
        $Ntavolo = $riga_tavolo["n_tavolo"];
    }

    echo "<form action='./inserisci_buono.php?n_tavolo=$Ntavolo' method='post'>
        Nome: <input type='text' name='nome'><br><br>
        Cognome: <input type='text' name='cognome'><br><br>
        Email: <input type='email' name='indirizzo'><br><br>
        Telefono: <input type='tel' name='numero'><br><br>

        <input type='submit' value='invia buono'>
    </form>";
    ?>
</body>
</html>