<?php
$conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");

$stringa = $_GET["cont"];
$Ntavolo = $_GET["n_tavolo"];


$divisa = explode("_", $stringa);

$spesa = $divisa[count($divisa)-2];

$conn->query("insert into ordine(spesa_tot, codtavolo) values ($spesa, $Ntavolo);");

header("location: ./monitor_cucina.php?ordine=$stringa");
?>