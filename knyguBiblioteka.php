<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knygu_Biblioteka</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
        h2 {
            position:relative;
            color: black;
            text-align: center;
        }
        
        body {
            background-color: #fff;
            padding: 20px;
        }

        button {
            background-color:lightsalmon;
            border-radius: 30px;
            margin-top: 30px;
            font-style: italic;   
            font-weight:bold;  
            
        }
        
        .top-information,.bottom-information {
            padding: 0 20px;
            }

        table tbody tr:hover, table tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.05);
            }
        

    </style>

</head>
<body>
        <h2>Knygų biblioteka:</h2>
    
    <?php
        echo '<form action="knyguBiblioteka.php" method="post">';
        echo  '<div class="knygosKategorija">';
            
        echo '</div>';
            echo '<button type="submit" name="romanai">Romanai</button>';
            echo '<button type="submit" name="istorines">Istorines</button>';
            echo '<button type="submit" name="fantastines">Fantastines</button>';
            echo '<button type="submit" name="vaikiskos">Vaikiskos</button>';
            echo '<button type="submit" name="detektyvai">Detektyvai</button>';
            echo '<button type="submit" name="visos">Rodyti visas knygas</button>';
        echo '</form>';
    ?>

<?php

// 1. Sukurti ir sustilizuotį tokią lentelę pagal pavyzdį:
// https://codepen.io/motiejus1/pen/rNyWPey +
// 2. Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, 
// bei knygos priklausančios kategorijai.+
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, +
// kurios turi nuo 5 iki 15 knygų.+
// Pavyzdinė informacija apie knygą: pavadinimas, autorius, puslapių skaičius, kategorija+
// 3. Virš sukurtos lentelės atvaizduoti tiek mygtukų, kiek yra kategorijų masyve, 
// mygtuko pavadinimas - kategorijos pavadinimas. +
// Mygtukai turi būti atvaizduoti su PHP pagal masyvą. +
// Taip pat sukurti mygtuką "Rodyti visas knygas".+
// 4. Masyvo informaciją atvaizduoti lentelėje. +
// 5. Sukurti mygtukai turi išfiltruoti knygas. +
// T.y. paspaudus kategorijos mygtuką, lentelėje turi būti rodomos tik tos knygos, 
// kurios priklauso tai kategorijai. +
// Paspaudus mygtuką "Rodyti visas knygas", atvaizduojamos visos knygos. + 

// pavyzdys 10 paskaitoje


$biblioteka = array(
    // 1. romanai 
        array("kategorija"=>"romanai", 
            "pavadinimas" => "Mečetė sultono dukteriai","autorius" => "Elif Shafak",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "Seserys Chanel","autorius" => "Judithe Little",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "NUSIKALTIMAS IR BAUSMĖ","autorius" => "Fiodoras Dostojevskis",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "RAUPSUOTOJI","autorius" => "Helena Mniszek",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "TOSKANOS VAIKAS.","autorius" => "Rhys Bowen",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
   
    // 2. istorines
        array("kategorija"=>"istorines",
            "pavadinimas" => "PARTIZANŲ GRETOSE","autorius" => "Adolfas Ramanauskas-Vanagas",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "Kauno saulė","autorius" => "Arvydas Juozaitis",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "Kelionė be bilieto: Lietuvos kario keliu, 1915–1945","autorius" => "Ernestas Kuckailis",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "Po Černobylio katastrofos. Išlikimo vadovas","autorius" => "Kate Brown",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "Nindzė. Atskleidžiant mitą","autorius" => "Stephen Turnbull",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
   
    // 3. fantastines
        array("kategorija"=>"fantastines",
            "pavadinimas" => "Žmogus aukštoje pilyje (2021)","autorius" => "Philip K. Dick",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "Kopa (2021)","autorius" => "Frank Herbert",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "PUIKUS NAUJAS PASAULIS","autorius" => "Aldous Huxley",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "Hobitas (2020)","autorius" => "J. R. R. Tolkien",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "MARSIETIS","autorius" => "Andy Weir",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
    
    
    // 4. vaikiskos
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "Ką žmonės dirba visą dieną","autorius" => "Richard Scarry",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "Herojai. Įkvepiantys žmonės ir jų neįtikėtini darbai","autorius" => "Jonny Marx",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "Mijo, mano Mijo","autorius" => "Astrid Lindgren",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "Lesė grįžta (2021)","autorius" => "Eric Knight",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "LAIMĖ YRA LAPĖ","autorius" => "Evelina Daciūtė, Aušra Kiudulaitė",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
    
    // 5. detektyvai 
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "SKERDIKO UPELIS","autorius" => "Rachel Caine",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "PRANYKSTANTI ŽEMĖ","autorius" => "Julia Phillips",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "Psichoterapeutas","autorius" => "B. A. Paris",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "KALTINIMO LIUDYTOJAS","autorius" => "Agatha Christie",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "Antroji AŠ","autorius" => "Helen Phillips",
            "puslapiai"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)." "."eur"),
        ); 

        $knygosKategorija="visos"; 

        if(isset($_POST["visos"])) {
            lenteleKnygos($biblioteka);
       } else if(isset($_POST["romanai"])){
           $knygosKategorija = "romanai";
           braizykLentele($knygosKategorija, $biblioteka);
       } else if(isset($_POST["istorines"])){
           $knygosKategorija = "istorines";
           braizykLentele($knygosKategorija, $biblioteka);
         }  else if(isset($_POST["fantastines"])){
               $knygosKategorija = "fantastines";
               braizykLentele($knygosKategorija, $biblioteka);
           }  else if(isset($_POST["vaikiskos"])){
               $knygosKategorija = "vaikiskos";
               braizykLentele($knygosKategorija, $biblioteka);
           }  else if(isset($_POST["detektyvai"])){
               $knygosKategorija = "detektyvai";
               braizykLentele($knygosKategorija, $biblioteka);
           } else {
               lenteleKnygos($biblioteka);
           }
           
       function braizykLentele($knygosKategorija, $biblioteka) {
           $index=1;
        echo "<table id='hoverable-data-table' class='table hover nowrap' 
            style='width:100%'>";
        echo "<thead>"; 
            
            echo "<tr>";  

                echo "<th>";
                echo "Numeris.";
                echo "</th>";

                echo "<th>";
                echo "Pavadinimas";
                echo "</th>";

                echo "<th>";
                echo "Autorius";
                echo "</th>";

                echo "<th>";
                echo "Puslapiu skaicius";
                echo "</th>";

                echo "<th>";
                echo "Kategorija";
                echo "</th>";

                echo "<th>";
                echo "Kaina, eur.";
                echo "</th>";
        
            echo "</tr>";   
        echo "</thead>"; 

    foreach($biblioteka as $element) {
        if($element["kategorija"]==$knygosKategorija){
        
        echo "<tbody>"; 
            echo "<tr>";
                   echo "<td>";
                   echo $index;
                   echo "</td>";

                   echo "<td>";
                   echo $element["pavadinimas"];
                   echo "</td>";

                   echo "<td>";
                   echo $element["autorius"];
                   echo "</td>";

                   echo "<td>";
                   echo $element["puslapiai"];
                   echo "</td>";

                   echo "<td>";
                   echo $element["kategorija"];
                   echo "</td>";

                   echo "<td>";
                   echo $element["kaina"];
                   echo "</td>";

            echo "</tr>";
        echo "</tbody>"; 
                $index++;
               }    
            }
        echo "</table>";
            }
                function lenteleKnygos($biblioteka) {
                    $index=1;
            
            echo "<table id='hoverable-data-table' class='table hover nowrap' 
                style='width:100%'>";
                
                echo "<thead>"; 
                echo "<tr>";  

                    echo "<th>";
                    echo "Numeris";
                    echo "</th>";
                    
                    echo "<th>";
                    echo "Pavadinimas";
                    echo "</th>";
                    
                    echo "<th>";
                    echo "Autorius";
                    echo "</th>";
                    
                    echo "<th>";
                    echo "Puslapiu skaicius";
                    echo "</th>";
                    
                    echo "<th>";
                    echo "Kategorija";
                    echo "</th>";
                    
                    echo "<th>";
                    echo "Kaina, eur.";
                    echo "</th>";

                echo "</tr>";

            foreach($biblioteka as $element) {
                        echo "<tr>";

                            echo "<td>";
                            echo $index;
                            echo "</td>";

                            echo "<td>";
                            echo $element["pavadinimas"];
                            echo '</td>';

                            echo "<td>";
                            echo $element["autorius"];
                            echo "</td>";

                            echo "<td>";
                            echo $element["puslapiai"];
                            echo "</td>";
                            
                            echo "<td>";
                            echo $element["kategorija"];
                            echo "</td>";
                            
                            echo "<td>";
                            echo $element["kaina"];
                            echo "</td>";
                        echo "</tr>";
                        $index++;
                        }
                                            
                echo "</table>";
                    }
?>
 

</body>
</html>


