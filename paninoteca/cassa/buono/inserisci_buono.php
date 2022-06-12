<?php
$conn = new mysqli("localhost", "root", "", "paninoteca");

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$tel = $_POST["numero"];
$email = $_POST["indirizzo"];

$result2 = $conn->query("select n_tavolo from tavolo;");

while ($riga_tavolo = $result2->fetch_assoc()) {
    $Ntavolo = $riga_tavolo["n_tavolo"];
}

//-------------------------
$result = $conn->query("select spesa_tot from ordine where codtavolo = $Ntavolo;");

while ($riga = $result->fetch_assoc()) {
    $spesa_t = $riga["spesa_tot"];
}
$valore = $spesa_t / 10;
$valore_int = (int) $valore;
//-------------------------

if($conn->query("insert into buono(email, tel, nome, cognome, valore_buono) values('$email', '$tel', '$nome', '$cognome', $valore_int);")){
    echo "<h2>Il buono è stato inviato con successo</h2><br><br>
    <a href='../cassa.php'>Torna alla cassa</a>";
}
?> 