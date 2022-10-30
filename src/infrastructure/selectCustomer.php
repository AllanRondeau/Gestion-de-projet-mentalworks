<?php
require "../autoloader.php";
require "../../Connexion/ConnexionBdd.php";
use App\Entity\Customer;
use App\HydrateCustomer;
use App\Repository\CustomerRepository;

$co = ConnexionBdd::Connexion();
$listCustomer = array();

$allCustomer = CustomerRepository::selectCustomer($co);
foreach ($allCustomer as $createCustomer) {
    HydrateCustomer::createCustomer(array("code" => $createCustomer["code"], "name" => $createCustomer["name"], "note" => $createCustomer["note"]));
    array_push($listCustomer, HydrateCustomer::getCustomer());
}

echo json_encode($listCustomer);