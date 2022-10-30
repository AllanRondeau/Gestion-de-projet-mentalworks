<?php
use App\HydrateCustomer;

function getAllCustomer(array $allCustomer)
{
    $listCustomer = array();
    foreach ($allCustomer as $createCustomer) 
    {
        HydrateCustomer::createCustomer(array("code" => $createCustomer["code"], "name" => $createCustomer["name"], "note" => $createCustomer["note"]));
        array_push($listCustomer, HydrateCustomer::getCustomer());
    }

    echo json_encode($listCustomer);
}
