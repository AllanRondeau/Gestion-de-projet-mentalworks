<?php
    require __DIR__."./class/Host.php";
    require __DIR__."./class/Projet.php";
    require __DIR__."./class/Environnement.php";
    require __DIR__."./class/Customer.php";
    require __DIR__."./class/Contact.php";

    $host1 = new Host("test", "salut", "upload");
    $host1->setId(1);

    $customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");
    $customer1->setId(1);

    $projet1 = new Projet("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
    var_dump($projet1->getHost()->getId());
    var_dump($projet1->getCustomer()->getId());

    $environnement = new Environnement("environment1", "http://", "000.000.000",22, "ssh", "localhost", 232, $projet1);
    var_dump($environnement->getProjet()->getHost());
    var_dump($environnement->getProjet()->getCustomer());

    $contact1 = new Contact("email@gmail.com", "06 36 98 65 74", "admin", $host1, $customer1);
    var_dump($contact1->getHost()->getId());
    var_dump($contact1->getCustomer()->getId());
    