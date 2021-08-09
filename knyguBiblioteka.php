<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knygu_Biblioteka</title>

    <style>
        body {
            background-color: #fff;
            padding: 20px;
        }

        .top-information,
        .bottom-information {
        padding: 0 20px;
        }

        table tbody tr:hover,
        table tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.05);
        }
</style>

</head>
<body>

<div>
    <form action="knyguBiblioteka.php" method="get">
        <button type="submit" name="romanai">Romanai</button>
        <button type="submit" name="istorines">Istorines</button>
        <button type="submit" name="fantastines">Fantastines</button>
        <button type="submit" name="vaikiskos">Vaikiskos</button>
        <button type="submit" name="detektyvai">Detektyvai</button>
        <button type="submit" name="visos">Visos kategorijos</button>
    </form>
</div>


<?php

// 1. Sukurti ir sustilizuotį tokią lentelę pagal pavyzdį:
// https://codepen.io/motiejus1/pen/rNyWPey
// 2. Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, 
// bei knygos priklausančios kategorijai.+
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, 
// kurios turi nuo 5 iki 15 knygų.+
// Pavyzdinė informacija apie knygą: pavadinimas, autorius, puslapių skaičius, kategorija+
// 3. Virš sukurtos lentelės atvaizduoti tiek mygtukų, kiek yra kategorijų masyve, 
// mygtuko pavadinimas - kategorijos pavadinimas. 
// Mygtukai turi būti atvaizduoti su PHP pagal masyvą. 
// Taip pat sukurti mygtuką "Rodyti visas knygas".
// 4. Masyvo informaciją atvaizduoti lentelėje.
// 5. Sukurti mygtukai turi išfiltruoti knygas. 
// T.y. paspaudus kategorijos mygtuką, lentelėje turi būti rodomos tik tos knygos, 
// kurios priklauso tai kategorijai. 
// Paspaudus mygtuką "Rodyti visas knygas", atvaizduojamos visos knygos.  


$kategorijaRomanai = array(
    array(
        "pavadinimas" => "knyga1","autorius" => "autorius1","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius2","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius3","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga4","autorius" => "autorius4","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga5","autorius" => "autorius5","puslapiai"=>"puslapiai"),
);

$kategorijaIstorines = array(
    array(
        "pavadinimas" => "knyga1","autorius" => "autorius1","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius2","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius3","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga4","autorius" => "autorius4","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga5","autorius" => "autorius5","puslapiai"=>"puslapiai"),
);

$kategorijaFantastines = array(
    array(
        "pavadinimas" => "knyga1","autorius" => "autorius1","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius2","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius3","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga4","autorius" => "autorius4","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga5","autorius" => "autorius5","puslapiai"=>"puslapiai"),
); 
    
$kategorijaVaikiskos = array(
    array(
        "pavadinimas" => "knyga1","autorius" => "autorius1","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius2","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius3","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga4","autorius" => "autorius4","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga5","autorius" => "autorius5","puslapiai"=>"puslapiai"),
    ); 

$kategorijaDetektyvai = array(
    array(
        "pavadinimas" => "knyga1","autorius" => "autorius1","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius2","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga2","autorius" => "autorius3","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga4","autorius" => "autorius4","puslapiai"=>"puslapiai"),
    array(
        "pavadinimas" => "knyga5","autorius" => "autorius5","puslapiai"=>"puslapiai"),
);

// patikrinimui 
// var_dump($kategorijaIstorines); 
// var_dump($kategorijaRomanai); 
// var_dump($kategorijaVaikiskos);
// var_dump($kategorijaFantastines); 
// var_dump($kategorijaDetektyvai);
 
?>
 

</body>
</html>


