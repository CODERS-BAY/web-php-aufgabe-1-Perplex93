<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Uebung1</title>
</head>
<body>
    <h2>Übung 01</h2>

        <?php
    	    $artikel1 = 22.50;
            $artikel2 = 12.30;
            $artikel3 = 5.20;
            $nettosumme = $artikel1+$artikel2+$artikel3;
            $umsatzsteuer = $nettosumme/100*20;
            $bruttosumme = $nettosumme+$umsatzsteuer;
            echo " Artikel 1: $artikel1 <br> Artikel 2: $artikel2 <br> Artikel 3: $artikel3 <br> Netto: $nettosumme <br> Gesamt: $bruttosumme"
        ?>
    <hr>
    <h2>Übung 02</h2>

        <form action="uebung1.php" method="POST">
            <label for="zahl">Zahl die Berechnet werden soll</label>
            <br>
            <input type="text" name="zahl">
            <p><input type="submit"></p>
        </form>

        <?php
            if (isset($_POST['zahl'])){
            $zahl = $_POST['zahl'];
            $zahl = (int)$zahl;
            $berechnung = $zahl * $zahl;
            echo "Das Ergebnis ist: $berechnung";
            }
        ?>

    <hr>

    <h2>Übung 03 - 06</h2>

        <form action="uebung1.php" method="POST">
            <p>Wählen Sie welchen Benzin Sie brauchen</p>
            <br>
            <label for="normal">Normal</label>
            <input type="radio" name="normal">
            <label for="super">Super</label>
            <input type="radio" name="super">
            <label for="diesel">Diesel</label>
            <input type="radio" name="diesel">
            <p>Wie viel Liter benötigen Sie</p>
            <input type="text" name="tankfuellung">
            <p><input type="submit"></p>
        </form>

        <?php
            if (isset($_POST['normal'])){
                $preis = 1.35;
                $liter = (int)$_POST['tankfuellung'];
                $preisgesamt = $preis * $liter;
                if ($liter >= 100){
                    $rabatt = $preisgesamt/100*2;
                    $preisgesamt = $preisgesamt - $rabatt; 
                }
                echo "Deine Tankfüllung kostet $preisgesamt €";
            }else if(isset($_POST['super'])){
                $preis = 1.40;
                $liter = (int)$_POST['tankfuellung'];
                $preisgesamt = $preis *$liter;
                if ($liter >= 100){
                    $rabatt = $preisgesamt/100*2;
                    $preisgesamt = $preisgesamt - $rabatt; 
                }
                echo "Deine Tankfüllung kostet $preisgesamt €";
            }else if(isset($_POST['diesel'])){
                $preis = 1.10;
                $liter = (int)$_POST['tankfuellung'];
                $preisgesamt = $preis *$liter;
                if ($liter >= 100){
                    $rabatt = $preisgesamt/100*2;
                    $preisgesamt = $preisgesamt - $rabatt; 
                }
                echo "Deine Tankfüllung kostet $preisgesamt €";
            }
        ?>

    <h2>Übung 07</h2>

        <?php
            for($i = 9; $i<=29; $i++){
                switch($i){
                    case 13; case 17; case 21; case 25; case 29:
                    echo "$i, ";
                }
            }
        
            $zweiteZeile = 2;
            $zweiterAbzug = 0.5;
            while($zweiteZeile >= -1){
                echo "$zweiteZeile, ";
                $zweiteZeile -= $zweiterAbzug;
            }

        ?>

    
</body>
</html>
