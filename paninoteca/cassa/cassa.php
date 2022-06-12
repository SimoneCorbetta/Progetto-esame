<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro di cassa</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

    $stringa = $_GET["ordine_cassa"];

    $ordine = explode("_", $stringa);

    $result = $conn->query("select spesa_tot, idordine, n_persone, n_tavolo from ordine, tavolo where codtavolo=n_tavolo;");

    while ($riga = $result->fetch_assoc()) {
        $Ntavolo = $riga["n_tavolo"];
        $Npersone = $riga["n_persone"];
        $codice_ordine = $riga["idordine"];
        $totale = $riga["spesa_tot"];
    }

    echo "l'ordine numero $codice_ordine del tavolo $Ntavolo<br>-------------------------<br>";
    for ($i=1; $i < count($ordine); $i++) { 
        echo "".$ordine[$i]."<br>";
    }
    $tot_diviso = $totale/$Npersone;
    echo "<br>---------------<br>se volete dividere il conto viene $tot_diviso € a testa<br><br>";
    ?>

    <form action="../cassa/buono/buono_form.php" method="post">
        <input type="submit" value="conferma pagamento">
    </form>
</body>
</html>