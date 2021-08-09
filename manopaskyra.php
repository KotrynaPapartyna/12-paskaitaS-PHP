<?php 

if(isset($_COOKIE["prisijungti"]) && isset($_COOKIE["teises"]))
{
    
    // prideti prisijungusio varda ir teises
    echo "Prisijungimas sėkmingas,"."<br>";
   
    echo 
    '<form action="manopaskyra.php" method="post">
    <button type="submit" name="atsijungti">Atsijungti</button>
    </form>'; 

    if (isset($_POST["atsijungti"])) {
        // echo "paspaustas atsijungimo mygtukas";

        setcookie("prisijungti",  "", time() - 3600, "/");
        setcookie("teises",  "", time() - 3600, "/");
        header ("Location:login.php"); 
    }

} else {
    
    header ("Location:login.php");
}

?>

<style>
    body{
        background-color: cadetblue;
    }
</style>