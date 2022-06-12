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
    // visualizzare l'ordine, la stringa o prendendo dal database
$conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

$stringa = $_GET["ordine"];

$ordine = explode("_", $stringa);
$result = $conn->query("select n_tavolo, n_persone from tavolo;");

while ($riga = $result->fetch_assoc()) {
    $Ntavolo = $riga["n_tavolo"];
    $Npersone = $riga["n_persone"];
}

echo "Il tavolo $Ntavolo formato da $Npersone persone hanno fatto questo <br>";
for ($i=0; $i < count($ordine); $i++) { 
    echo "".$ordine[$i]."<br>";
}
echo "<br>---------------";

// errore qui
echo "<form action='../../../cassa/cassa.php?ordine_cassa=$stringa' method='post'>
    <input type='submit' value='conferma'>
</form>";
?>
</body>
</html>

