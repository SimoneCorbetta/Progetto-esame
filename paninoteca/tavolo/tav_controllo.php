<?php
//connessione al database paninoteca
$conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

//prendo i valori digitati nella form della pagina tavolo.html
$Ntavolo = $_POST["tavolo"];
$Npersone = $_POST["persone"];

$conn->query("SET NAMES \"utf8\"");
//inserisco il numero del tavolo e il numero delle persone nel database
$sql = "insert into tavolo(n_tavolo, n_persone) values($Ntavolo, $Npersone);";

//se l'insert è riuscito allora vai alla pagina index_menu.php
if ($conn->query($sql)){
    if ($Ntavolo <= 30) {
        header("location: ./menu/index_menu.php?n_tavolo=$Ntavolo&n_persone=$Npersone");
    }else {
        echo "ci sono solo 30 tavoli!<br><br>";
        echo "<a href='/paninoteca/tavolo/tavolo.html'>torna indietro</a>";
        $conn->query("delete from tavolo where n_tavolo = $Ntavolo;");
    }
}else {
    echo "error<br><br>";
    echo "<a href='/paninoteca/tavolo/tavolo.html'>torna indietro</a>";
}

?>