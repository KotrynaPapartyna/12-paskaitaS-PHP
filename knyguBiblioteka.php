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
            color: plum;
            text-align: center;
        }
        
        body {
            background-color: #fff;
            padding: 20px;
        }

        button {
            background-color:lightseagreen;
            margin-top: 30px;         
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
    
    <form action="knyguBiblioteka.php" method="get">
        <div class="knygosKategorija">
            <h2>Knygų kategorijos:</h2>
        </div>
            <button type="submit" name="romanai">Romanai</button>
            <button type="submit" name="istorines">Istorines</button>
            <button type="submit" name="fantastines">Fantastines</button>
            <button type="submit" name="vaikiskos">Vaikiskos</button>
            <button type="submit" name="detektyvai">Detektyvai</button>
            <button type="submit" name="visos">Rodyti visas knygas</button>
        </form>
     
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Autorius</th>
            <th scope="col">Puslapiu skaicius</th>
            <th scope="col">Kaina</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row1"></th>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <th scope="row2"></th>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        </tbody>
    </table>

<?php

// 1. Sukurti ir sustilizuotį tokią lentelę pagal pavyzdį:
// https://codepen.io/motiejus1/pen/rNyWPey
// 2. Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, 
// bei knygos priklausančios kategorijai.+
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, 
// kurios turi nuo 5 iki 15 knygų.+
// Pavyzdinė informacija apie knygą: pavadinimas, autorius, puslapių skaičius, kategorija+
// 3. Virš sukurtos lentelės atvaizduoti tiek mygtukų, kiek yra kategorijų masyve, 
// mygtuko pavadinimas - kategorijos pavadinimas. +
// Mygtukai turi būti atvaizduoti su PHP pagal masyvą. 
// Taip pat sukurti mygtuką "Rodyti visas knygas".+
// 4. Masyvo informaciją atvaizduoti lentelėje.
// 5. Sukurti mygtukai turi išfiltruoti knygas. 
// T.y. paspaudus kategorijos mygtuką, lentelėje turi būti rodomos tik tos knygos, 
// kurios priklauso tai kategorijai. 
// Paspaudus mygtuką "Rodyti visas knygas", atvaizduojamos visos knygos.  

// pavyzdys 10 paskaitoje


$biblioteka = array(
    // 1. romanai 
        array("kategorija"=>"romanai", 
            "pavadinimas" => "knyga1","autorius" => "autorius1",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "knyga2","autorius" => "autorius2",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "knyga2","autorius" => "autorius3",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "knyga4","autorius" => "autorius4",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"romanai",
            "pavadinimas" => "knyga5","autorius" => "autorius5",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
   
    // 2. istorines
        array("kategorija"=>"istorines",
            "pavadinimas" => "knyga1","autorius" => "autorius1",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "knyga2","autorius" => "autorius2",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "knyga2","autorius" => "autorius3",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "knyga4","autorius" => "autorius4",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"istorines",
            "pavadinimas" => "knyga5","autorius" => "autorius5",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
   
    // 3. fantastines
        array("kategorija"=>"fantastines",
            "pavadinimas" => "knyga1","autorius" => "autorius1",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "knyga2","autorius" => "autorius2",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "knyga2","autorius" => "autorius3",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "knyga4","autorius" => "autorius4",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"fantastines",
            "pavadinimas" => "knyga5","autorius" => "autorius5",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
    
    
    // 4. vaikiskos
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga1","autorius" => "autorius1",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga2","autorius" => "autorius2",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga2","autorius" => "autorius3",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga4","autorius" => "autorius4",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga5","autorius" => "autorius5",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),  
    
    // 5. detektyvai 
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "knyga1","autorius" => "autorius1",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "knyga2","autorius" => "autorius2",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "knyga2","autorius" => "autorius3",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"vaikiskos",
            "pavadinimas" => "knyga4","autorius" => "autorius4",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        array("kategorija"=>"detektyvai",
            "pavadinimas" => "knyga5","autorius" => "autorius5",
            "puslapiaiSK"=>rand(200,400)." puslapiai",
            "kaina"=>rand(2,10).".".rand(0,99)."eur"),
        ); 

var_dump($biblioteka); 
    
?>
 

</body>
</html>


