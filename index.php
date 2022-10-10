<?php
require "./src/autoloader.php";
use App\Entity\Host; 
use App\Entity\Customer; 
use App\Entity\Projet; 
use App\Entity\Environnement; 
use App\Entity\Contact; 


$host1 = new Host("test", "salut", "upload");
$customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");
$projet1 = new Projet("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
$environnement = new Environnement("environment1", "http://", "000.000.000", 22, "ssh", "localhost", 232, $projet1);
$contact1 = new Contact("email@gmail.com", "06 36 98 65 74", "admin", $host1, $customer1);
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gestion de projet</title>
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
              integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
              crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="images/logo-mentalworks-blanc.png" alt="logo mentalworks">
        </header>
        <nav>
            <a><i class="fa-solid fa-house"></i>tableau de bord</a>
            <a><i class="fa-regular fa-user"></i>projets</a>
            <a><i class="fa-regular fa-building"></i>clients</a>
            <a><i class="fa-regular fa-square-check"></i>hébergeurs</a>
        </nav>
        <footer></footer>
    </body>
</html>

