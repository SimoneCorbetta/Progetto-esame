<div id="pagina_benvenuto">
    <p>
        <h1>Benvenuti nel nostro menu:</h1>
        <br>ordinate attraverso l'app e quando avete ordinato confermate l'ordine
        per mandarlo alla cucina
    </p>
</div>
<div id="panini" style="display: none;">
    <h3><u> Panini </u></h3>
    <?php
        $conn1 = new mysqli("localhost", "root", "", "paninoteca") or die("error");

        $result = $conn1->query("select nome, descrizione, prezzo from prodotto where tipo='panino';");
        while ($riga_db = $result->fetch_assoc()) {
            $nomep = $riga_db["nome"];
            $descrizione = $riga_db["descrizione"];
            $prezzo = $riga_db["prezzo"];
            //$dimensione = $riga_db["dimensione"];
            
            echo "<p><button type='button' value='$nomep' onclick='ordine(this)'>$nomep</button> ..................................... 
            $prezzo €<br> $descrizione</p>";
        }
    ?>
</div>
<div id="bevande" style="display: none;">
    <h3><u> Bevande </u></h3>
    <?php
        $conn2 = new mysqli("localhost", "root", "", "paninoteca") or die("error");

        $result1 = $conn2->query("select nome, descrizione from prodotto where tipo='bevanda' group by nome;");
        while ($riga_db = $result1->fetch_assoc()) {
            $nomep = $riga_db["nome"];
            $descrizione = $riga_db["descrizione"];
            //$prezzo = $riga_db["prezzo"];
            //$dimensione = $riga_db["dimensione"];

            echo "<div class='accordion'>";
            echo "<div class='accordion-item'>";
            echo "<p><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' 
            aria-expanded='true'>$nomep</button> 
            $descrizione</p>";
            echo "<div class='accordion-collapse collapse show' 
            data-bs-parent='#accordionExample'>";
            $result1_1 = $conn2->query("select distinct dimensione, prezzo from prodotto where tipo='bevanda' and dimensione='small';");
            while ($riga1_1 = $result1_1->fetch_assoc()) {
                $dimensiones= $riga1_1["dimensione"];
                $prezzos= $riga1_1["prezzo"];
            }
            echo "<div class='accordion-body'>";
            echo "<button type='button' value='$dimensiones' name='$nomep' onclick='ordine(this)'>
            <label>$dimensiones<br>$prezzos €</label></button>";

            $result1_2 = $conn2->query("select distinct dimensione, prezzo from prodotto where tipo='bevanda' and dimensione='regular';");
            while ($riga1_2 = $result1_2->fetch_assoc()) {
                $dimensioner= $riga1_2["dimensione"];
                $prezzor= $riga1_2["prezzo"];
            }
            echo "<button type='button' value='$dimensioner' name='$nomep' onclick='ordine(this)'>
            <label>$dimensioner<br>$prezzor €</label></button>";

            $result1_3 = $conn2->query("select distinct dimensione, prezzo from prodotto where tipo='bevanda' and dimensione='large';");
            while ($riga1_3 = $result1_3->fetch_assoc()) {
                $dimensionel= $riga1_3["dimensione"];
                $prezzol= $riga1_3["prezzo"];
            }
            echo "<button type='button' value='$dimensionel' name='$nomep' onclick='ordine(this)'>
            <label>$dimensionel<br>$prezzol €</label></button>
          </div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            //https://getbootstrap.com/docs/5.2/components/accordion/
            //vedere il valuetype ?

        }
    ?>
</div>
<div id="piadine" style="display: none;">
    <h3><u> Piadine </u></h3>

    <?php
        $conn3 = new mysqli("localhost", "root", "", "paninoteca") or die("error");

        $result2 = $conn3->query("select nome, descrizione, prezzo from prodotto where tipo='piadina';");
        while ($riga_db = $result2->fetch_assoc()) {
            $nomep = $riga_db["nome"];
            $descrizione = $riga_db["descrizione"];
            $prezzo = $riga_db["prezzo"];
            //$dimensione = $riga_db["dimensione"];
            
            echo "<p><button type='button' value='$nomep' onclick='ordine(this)'>$nomep</button> ..................................... 
            $prezzo €<br> $descrizione</p>";
        }
    ?>
</div>
<div id="dolci" style="display: none;">
    <h3><u> Dolci </u></h3>

    <?php
        $conn4 = new mysqli("localhost", "root", "", "paninoteca") or die("error");

        $result3 = $conn4->query("select nome, descrizione, prezzo from prodotto where tipo='dolce';");
        while ($riga_db = $result3->fetch_assoc()) {
            $nomep = $riga_db["nome"];
            $descrizione = $riga_db["descrizione"];
            $prezzo = $riga_db["prezzo"];
            //$dimensione = $riga_db["dimensione"];
            
            echo "<p><button type='button' value='$nomep' onclick='ordine(this)'>$nomep</button> ..................................... 
            $prezzo €<br> $descrizione</p>";
        }
    ?>
</div>