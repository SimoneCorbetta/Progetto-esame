
<?php
//da rivedere
$conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$password_form = $_GET["password"];

$Ntavolo = $_GET["n_tavolo"];
$Npersone = $_GET["n_persone"];

$result = $conn->query("select * from commesso;");

while ($riga_db = $result->fetch_assoc()) {
    $nome_db = $riga_db["nome"];
    $cognome_db = $riga_db["cognome"];
    $password_db = $riga_db["password"];

    //bisogna dire quali tavoli vengono controllati da quel carameriere per tutti e 6 le persone
    /*if($Ntavolo <= 5){
        $nome = "Simone";
        $cognome = "Corbetta";
        $password_form = "simone2002";
    }elseif ($Ntavolo > 5 && $Ntavolo <= 10) {
        $nome = "Luca";
        $cognome = "Campatelli";
        $password_form = "luca2003";
    }elseif($Ntavolo > 10 && $Ntavolo <= 15){
        $nome = "Elisa";
        $cognome = "Spolti";
        $password_form = "elisa2000";
    }elseif ($Ntavolo > 15 && $Ntavolo <= 20) {
        $nome = "Eleonora";
        $cognome = "Agnellini";
        $password_form = "eleonora2002";
    }elseif($Ntavolo > 20 && $Ntavolo <= 25){
        $nome = "Vincenzo";
        $cognome = "Palermo";
        $password_form = "vincenzo1999";
    }elseif ($Ntavolo > 25 && $Ntavolo <= 30) {
        $nome = "Sergio";
        $cognome = "Manenti";
        $password_form = "sergio1970";
    }else {
        echo "Il tavolo $Ntavolo riguarda il cameriere $nome $cognome<br>";
        echo "<a href='/paninoteca/tavolo/logout/logout_form'>torna indietro</a>";
    }*/

    if ($nome=$nome_db && $cognome=$cognome_db && $password_form=$password_db) {
        $conn->query("delete from tavolo where n_tavolo = $Ntavolo;");
        header("location: /paninoteca/tavolo/tavolo.html");
    }
}
?>