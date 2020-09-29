<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="uebung1.css">
    <title>PHP-Uebung1</title>
</head>
<body>

<header>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="uebung1.php">PHP</a>
        </li>
    </ul>

    <img src="img/wp4277612.jpg" class="d-block w-100" alt="...">

</header>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Übung 01</h2>
                        <?php
                        $artikel1 = 22.50;
                        $artikel2 = 12.30;
                        $artikel3 = 5.20;
                        $nettosumme = $artikel1+$artikel2+$artikel3;
                        $umsatzsteuer = $nettosumme/100*20;
                        $bruttosumme = $nettosumme+$umsatzsteuer;
                        echo " Artikel 1: $artikel1 <br> Artikel 2: $artikel2 <br> Artikel 3: $artikel3 <br> Netto: $nettosumme <br> Gesamt: $bruttosumme"
                        ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Übung 02</h2>
                        <form action="uebung1.php" method="POST">
                            <label for="zahl">Zahl die Berechnet werden soll</label>
                            <br>
                            <input type="text" name="zahl" data-toggle="tooltip" data-placement="right" title="Die eingegebene Zahl wird mit sich selbst multipliziert">
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
                </div>
            </div>
        </div> 
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Übung 03 - 06</h2>
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
                            <input type="text" name="tankfuellung"  data-toggle="tooltip" data-placement="right" title="Geben Sie ein wie viel Liter Ihr Auto benötigt">
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
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Übung 07</h2>
                        <?php
                            for($i = 13; $i<=29; $i+=4){
                                echo "$i, ";
                            }

                            echo "<br>";

                            $zweiteZeile = 2;
                            while($zweiteZeile >= -1){
                                echo "$zweiteZeile, ";
                                $zweiteZeile -= 0.5;
                            }

                            echo "<br>";

                            for ($i = 2000; $i <= 6000; $i+=1000){
                                echo "$i, ";
                            }

                            echo "<br>";
                            
                            for($i = 5; $i <= 13; $i+=2){
                                echo "Z$i, ";
                            }

                            echo "<br>";

                            for($i = 1; $i <= 3; $i++){
                                echo "a b$i, ";
                            }

                            echo "<br>";

                            for($i = 2; $i <= 23; $i++){
                                if ($i == 4 || $i == 14){
                                    $i += 8;
                                    
                                }
                            echo "c$i, ";
                            }

                            echo "<br>";

                            for($i = 13; $i <= 45; $i+=4){
                                if ($i == 25){
                                    $i +=8;
                                }
                            echo "$i, ";
                            }

                        ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Übung 08</h2>

                        <form action="uebung1.php" method="POST">
                        <input type="submit" value="Würfeln" name="wuerfeln">
                        </form>

                            <?php
                                    
                                    if (isset($_POST['wuerfeln'])){
                                    $wuerfelSpieler = intval(rand(0,25));
                                    $wuerfelComputer = intval(rand(0,25));
                                    $wuerfelGesamt = $wuerfelComputer + $wuerfelSpieler;

                                    if ($wuerfelGesamt >= 25){
                                            if ($wuerfelComputer < $wuerfelSpieler){
                                                echo "Spieler gewinnt $wuerfelSpieler : $wuerfelComputer";
                                            }else{
                                                echo "Computer gewinnt $wuerfelComputer : $wuerfelSpieler";
                                            }
                                        }else{
                                            echo "Ergebnis zu niedrig $wuerfelGesamt";
                                        }
                                    }
                                                
                                

                            ?>
                </div>
            </div>
        </div>
    </div>
<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>
