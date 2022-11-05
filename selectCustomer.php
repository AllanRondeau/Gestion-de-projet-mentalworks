<?php
header('Content-Type: application/json; charset=utf-8');
require "./src/autoloader.php";
require "./Connexion/ConnexionBdd.php";

use App\HydrateCustomer;
use App\Repository\CustomerRepository;


$co = ConnexionBdd::Connexion();
$allCustomer = CustomerRepository::selectCustomer($co);
$listCustomer = array();
echo json_encode(getAllCustomer($allCustomer));
function getAllCustomer(array $allCustomer): array
{
    foreach ($allCustomer as $createCustomer) {
        HydrateCustomer::createCustomer(array("code" => $createCustomer["code"], "name" => $createCustomer["name"], "note" => $createCustomer["note"]));
        $listCustomer[] = (object)[
            "name" => HydrateCustomer::getCustomer()->getName(),
            "code" => HydrateCustomer::getCustomer()->getCode(),
            "notes" => HydrateCustomer::getCustomer()->getNotes(),
        ];
    }
    return $listCustomer;
}

foreach ($listCustomer as $key => $customer) {
    echo $key . " " . $customer->getName();
}


