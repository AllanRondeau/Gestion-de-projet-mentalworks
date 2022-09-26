<?php
    require __DIR__."./class/Host.php";
    require __DIR__."./class/Projet.php";
    require __DIR__."./class/Customer.php";

    $host1 = new Host();
    $host1->setCodeHost("test");
    $host1->setNameHost("salut");
    $host1->setCodeHost("upload");
    $host1->setId(1);

    $customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");
    $customer1->setId(1);

    $projet1 = new Projet("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
    var_dump($projet1->getCustomer()->getId());
    var_dump($projet1->getHost()->getId());
    