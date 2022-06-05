<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Menù Paninoteca</title>
</head>
<body>
    <div class="container-fluid row">
        <div class="col-12 my-4">
            <?php
                $conn = new mysqli("localhost", "root", "", "paninoteca") or die("error");
                $result = $conn->query("select n_tavolo, n_persone from tavolo;");

                while ($riga_db=$result->fetch_assoc()) {
                    $Ntavolo=$riga_db["n_tavolo"];
                    $Npersone=$riga_db["n_persone"];

                    echo "<form action='/paninoteca/tavolo/logout/logout_form.php?n_tavolo=$Ntavolo&n_persone=$Npersone' method='post'>";
                }
            ?>
            
                <input type="submit" title="ritorno alla pagina di inserimento" value="ESCI">
            </form>
            
        </div>
        <div class="col-3 my-4">
            <?php include("pulsanti.html");?>
        </div>
        <div class="col-9 my-4">
            <?php include("pagine.php");?>
        </div>
        <div class="my-4">
            
            <div class="col-11 my-4" id="contenitore_ordine">

            </div>
            
            <div class="col-1 my-4" class="contenit_stringa">
                <?php
                /*$dom = new DOMDocument();

                $dom->loadHTML("index_menu.php");
                
                $xpath = new DOMXPath($dom)
                $divContent = $xpath->query('//div[@id="contenitore_ordine"]');*/

                
                echo "
                <button type='button' onclick='prendi_stringa($Ntavolo, $Npersone)'>invia ordine</button>";
                ?>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/paninoteca/_js/funzioni_menu.js"></script>
<script src="../../_js/ordine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</html>