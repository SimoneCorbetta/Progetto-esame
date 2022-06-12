<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../assets/_css/contorno.css">
    <link rel="stylesheet" href="./../../assets/_css/sfondo.css">
    <title>Logout</title>
</head>
<body>
    <div class="corpo">
        <h3>Digitando il nome, cognome del cameriere responsabile e la sua password si torna alla pagina principale</h3>
        <?php
                    $conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");
                    $result = $conn->query("select n_tavolo, n_persone from tavolo;");

                    while ($riga_db=$result->fetch_assoc()) {
                        $Ntavolo=$riga_db["n_tavolo"];
                        $Npersone=$riga_db["n_persone"];

                        echo "<form action='/paninoteca/tavolo/logout/logout.php?n_tavolo=$Ntavolo&n_persone=$Npersone' method='get'>";
                    }
        ?>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Enter nome del commesso">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cognome:</label>
            <input type="text" name="cognome" class="form-control" placeholder="Enter cognome del commesso">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Passowrd:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        <input type="submit" class="btn btn-primary" value="Conferma">
        </form>
    </div>
</body>
</html>