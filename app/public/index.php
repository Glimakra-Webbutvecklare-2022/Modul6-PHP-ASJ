<?php

// se till att sessioner används på sidan
// session_start();


// en variabel i php inleds med dollartecken
$title = "En webbsida med PHP";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    
    <h1><?php echo "Hello world"; ?></h1>
    <a href="/learn">Lär dig PHP</a>


</body>
</html>