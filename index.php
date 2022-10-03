<?php
    require __DIR__."./class/Host.php";
    require __DIR__."./class/Projet.php";
    require __DIR__."./class/Environnement.php";
    require __DIR__."./class/Customer.php";
    require __DIR__."./class/Contact.php";

    $host1 = new Host("test", "salut", "upload");
    var_dump($host1->getId());

    $customer1 = new Customer("sbhdf", "sdbkf", "skjdbf");
    var_dump($customer1->getId());

    $projet1 = new Projet("premier projet", "patate", "racine", "sbhdof", 1, "attention", $host1, $customer1);
    var_dump($projet1->getId());
    var_dump($projet1->getCustomer()->getId());

    $environnement = new Environnement("sdf", "http://", "000.000.000",22, "ssh", "localhost", 555, $projet1);
    var_dump($environnement->getId());
    var_dump($environnement->getProjet()->getCustomer());

    $contact1 = new Contact("email@gmail.com", "06 36 98 65 74", "admin", $host1, $customer1);
    var_dump($contact1->getHost()->getId());
    var_dump($contact1->getCustomer()->getId());
    