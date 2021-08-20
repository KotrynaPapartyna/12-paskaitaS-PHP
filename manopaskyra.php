<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano paskyra</title>
</head>
<body>
<body>
    <h1>Mano paskyra</h1>
    <a href="login.php"><button>Sign in</button></a>
    <a href="signup.php"><button>Sign up</button></a>
    <button>Atsijungti</button>
</body>
    
</body>
</html>



<?php 

if(isset($_COOKIE["prisijungti"]) && isset($_COOKIE["teises"]))
{    
    // prideti prisijungusio varda ir teises
    echo "Prisijungimas sėkmingas,".'<br>'.($_COOKIE['prisijungti']);
   
    echo 
    '<form action="manopaskyra.php" method="post">'; 
    echo '<button type="submit" name="atsijungti">Atsijungti</button>';
    echo '</form>'; 

    if (isset($_POST["atsijungti"])) {
        // echo "paspaustas atsijungimo mygtukas";

        setcookie("prisijungti",  "", time() - 3600, "/");
        setcookie("teises",  "", time() - 3600, "/");
        header ("Location:manopaskyra.php"); 
    }

//} else {
    
    //header ("Location:manopaskyra.php");
}

?>

