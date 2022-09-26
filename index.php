<?php
    require __DIR__."./class/host.php";
    require __DIR__."./class/Projet.php";

    $host1 = new host();
    $host1->setCodeHost("test");
    $host1->setNameHost("salut");
    $host1->setCodeHost("upload");

    $customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");

    $projet1 = new Projet("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
    $projet1->getHost()->getNameHost();
    