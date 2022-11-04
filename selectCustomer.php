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


if (isset($_POST["customerSaveBtn"])) {
    if ($_POST["selectUserObject"] == null) {
        if (HydrateCustomer::createCustomer(array("name" => $_POST["nameNewCustomer"], "code" => "code" . $_POST["nameNewCustomer"], "note" => $_POST["noteNewCustomer"]))) {
            $cust = HydrateCustomer::getCustomer();
            $valid = CustomerRepository::insertCustomer($co, array("name" => $_POST["nameNewCustomer"], "code" => "code" . $_POST["nameNewCustomer"], "note" => $_POST["noteNewCustomer"]));
            echo $valid;
        } else {
            $errorInput = "La saisie n'est pas bonne !";
            echo $errorInput;
        }
    } else {
        if (HydrateCustomer::createCustomer($listCustomer[$_POST["selectUserObject"]], array("name" => $_POST["nameNewCustomer"], "code" => "code" . $_POST["nameNewCustomer"], "note" => $_POST["noteNewCustomer"]))) {
            $cust = HydrateCustomer::getCustomer();
            $valid = CustomerRepository::insertCustomer($co, array("name" => $_POST["nameNewCustomer"], "code" => "code" . $_POST["nameNewCustomer"], "note" => $_POST["noteNewCustomer"]));
            echo $valid;
        } else {
            $errorInput = "La saisie n'est pas bonne !";
            echo $errorInput;
        }
    }
}

foreach ($listCustomer as $key => $customer) {
    echo $key . " " . $customer->getName();
}


