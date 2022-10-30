<?php
use App\HydrateCustomer;

function test(array $test)
{
    $listCustomer = array();
    foreach ($test as $createCustomer) 
    {
        HydrateCustomer::createCustomer(array("code" => $createCustomer["code"], "name" => $createCustomer["name"], "note" => $createCustomer["note"]));
        array_push($listCustomer, HydrateCustomer::getCustomer());
    }

    echo json_encode($listCustomer);
}
