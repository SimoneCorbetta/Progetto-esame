<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h3>Digitando il nome, cognome del cameriere responsabile e la sua password si torna indietro alla pagina principale</h3>
    <?php
                $conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");
                $result = $conn->query("select n_tavolo, n_persone from tavolo;");

                while ($riga_db=$result->fetch_assoc()) {
                    $Ntavolo=$riga_db["n_tavolo"];
                    $Npersone=$riga_db["n_persone"];

                    echo "<form action='/paninoteca/tavolo/logout/logout.php?n_tavolo=$Ntavolo&n_persone=$Npersone' method='get'>";
                }
            ?>
        Nome: <input type="text" name="nome"><br>
        Cognome: <input type="text" name="cognome"><br>
        Password: <br><input type="password" name="password"><br><br>
        <input type="submit" value="Conferma">
    </form>
</body>
</html>