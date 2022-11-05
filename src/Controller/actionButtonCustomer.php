<?php

require_once 'vendor/autoload.php';
require_once 'Connexion/ConnexionBdd.php';
use App\HydrateCustomer;
use App\Repository\CustomerRepository;
$co = ConnexionBdd::Connexion();

// insertion d'un customer
if (isset($_POST["customerInsertBtn"])) {
    if (HydrateCustomer::createCustomer(array(
            "name" => $_POST["nameNewCustomer"], 
            "code" => "code_" . $_POST["nameNewCustomer"], 
            "note" => $_POST["noteNewCustomer"]))) 
    {
        $cust = HydrateCustomer::getCustomer();
        $valid = CustomerRepository::insertCustomer($co, array(
            "name" => $cust->getName(), 
            "code" => $cust->getCode(), 
            "note" => $cust->getNotes()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// update d'un customer
if(isset($_POST["customerUpdateBtn"]))
{
    if (HydrateCustomer::createCustomer(array("name" => $_POST["nameNewCustomer"], "code" => $_POST["codeNewCustomer"], "note" => $_POST["noteNewCustomer"]))) {
        $cust = HydrateCustomer::getCustomer();
        $valid = CustomerRepository::updateCustomer($co, array(
            "name" => $cust->getName(), 
            "code" => $cust->getCode(), 
            "note" => $cust->getNotes()));
        echo $valid;
    } else {
        $errorInput = "La saisie n'est pas bonne !";
        echo $errorInput;
    }
}

// suppression d'un customer
if(isset($_POST["customerDeleteBtn"]))
{
    $valid = CustomerRepository::deleteCustomer($co, array("code" => $_POST["codeNewCustomer"]));
    echo $valid;
}
