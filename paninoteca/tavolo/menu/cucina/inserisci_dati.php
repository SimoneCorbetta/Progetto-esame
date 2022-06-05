<?php
$conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

$stringa = $_GET["cont"];
$Ntavolo = $_GET["n_tavolo"];


print_r(explode("_", $stringa));

// suddividere la stringa in differenti modi cercado di prendere il costo_totale, la quantità e il nome del prodotto
// per inserirei dati interessati

// inserire i dati e andare alla pagina monitor_cucina.php
// dove il preparatore di panini può visualizzare l'ordine
?>